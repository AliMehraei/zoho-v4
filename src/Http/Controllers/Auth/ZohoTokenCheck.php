<?php

namespace AliMehraei\ZohoAllInOne\Http\Controllers\Auth;


use Carbon\Carbon;
use Illuminate\Http\Request;
use AliMehraei\ZohoAllInOne\Models\ZohoToken;

class ZohoTokenCheck
{

    public static function getToken($organizationId = null)
    {
        $org = $organizationId ?: config('zoho-v4.current_internal_organization_id');

        $zoho_token = ZohoToken::query()->where('organization_id', '=', $org ?? 0)->latest()->first();
        if ($zoho_token) {
            $expiry_time = Carbon::parse($zoho_token->expiry_time);
            if ($expiry_time->lt(Carbon::now())) {
                $zoho = new ZohoCustomTokenStore();
                $zoho_token = $zoho->refreshToken($zoho_token->id, $organizationId);
            }
            return $zoho_token;
        }
        return null;

    }

    public function applicationRegister()
    {
        $organizationId = request()->get('organization_id');
        return redirect(ZohoConfig::getAuthUrl($organizationId));
    }

    public static function saveTokens(Request $request, $organizationId = null)
    {
        $data = $request->all();

        $z_api_url = config('zoho-v4.api_base_url');
        $z_current_user_email = config('zoho-v4.current_user_email');
        $z_return_url = config('zoho-v4.redirect_uri');
        $z_url = config('zoho-v4.accounts_url');

        if ($organizationId == null) {
            $client_id = config('zoho-v4.client_id');
            $secret_key = config('zoho-v4.client_secret');
            $z_oauth_scope = config('zoho-v4.oauth_scope');
        } else {
            $client_id = config('zoho-v4.client_id_' . $organizationId);
            $secret_key = config('zoho-v4.client_secret_' . $organizationId);
            $z_return_url = "$z_return_url/$organizationId";
            $z_oauth_scope = config('zoho-v4.oauth_scope_' . $organizationId);
        }

        $postInput = [
            'grant_type' => 'authorization_code',
            'client_id' => $client_id,
            'client_secret' => $secret_key,
            'redirect_uri' => $z_return_url,
            'code' => $data['code'],
        ];
        $zoho = new ZohoCustomTokenStore();
        if ($request->has('refresh_token')) {
            $zoho->saveToken($postInput, $request->all(), $client_id, $secret_key, $z_return_url, $organizationId);
        } else {
            $resp = $zoho->getToken($data['accounts-server'], $data['location'], $postInput);
            $zoho->saveToken($postInput, $resp, $client_id, $secret_key, $z_return_url, $organizationId);
        }
        $message = 'Token is created now!';

        return '<h1>' . $message . '</h1>';
    }

}
