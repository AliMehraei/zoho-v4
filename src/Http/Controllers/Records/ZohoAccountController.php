<?php

namespace Masmaleki\ZohoAllInOne\Http\Controllers\Records;

use GuzzleHttp\Client;
use Masmaleki\ZohoAllInOne\Http\Controllers\Auth\ZohoTokenCheck;

class ZohoAccountController
{

    public static function getAll($page_token = null)
    {
        $token = ZohoTokenCheck::getToken();
        if (!$token) {
            return null;
        }
        $apiURL = $token->api_domain . '/crm/v3/Accounts?fields=Email,Fax,Account_Type,LinkedIn,Website,Mobile,Phone,Account_Name,Billing_Country,Shipping_Country';
        if ($page_token) {
            $apiURL .= '&page_token=' . $page_token;
        }
        $client = new Client();

        $headers = [
            'Authorization' => 'Zoho-oauthtoken ' . $token->access_token,
        ];

        $response = $client->request('GET', $apiURL, ['headers' => $headers]);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return $responseBody;
    }

    public static function getContacts($zoho_crm_account_id)
    {
        $token = ZohoTokenCheck::getToken();
        if (!$token) {
            return null;
        }
        $result = [];
        $page = 1;
        $morePage = true;

        do {
            $apiURL = $token->api_domain . '/crm/v3/Accounts/' . $zoho_crm_account_id . '/Contacts?page=' . $page . '&fields=Created_Time,Title,Full_Name,Contact_Type,Department,Rating,Phone,Fax,Date_of_Birth,Other_Phone,Secondary_Email,Skype_ID,LinkedIn,Mailing_Street,Mailing_City,Mailing_Zip,Mailing_State,Mailing_Country,Description,Last_Activity_Date,Private_Email,Email,First_Name,Last_Name,Mobile,Vendor_Name,Account_Name,Owner,Created_By,Modified_By';

            $client = new Client();

            $headers = [
                'Authorization' => 'Zoho-oauthtoken ' . $token->access_token,
            ];

            $response = $client->request('GET', $apiURL, ['headers' => $headers]);
            $statusCode = $response->getStatusCode();
            $responseBody = json_decode($response->getBody(), true);
            $result = array_merge($result, $responseBody['data']);
            if (($responseBody['info']['more_records'] ?? false) == true) {
                $page++;
            } else {
                $morePage = false;
            }

        } while ($morePage);


        return $result;
    }

    public static function create($data)
    {
        if (!$data) {
            return null;
        }
        $token = ZohoTokenCheck::getToken();
        if (!$token) {
            return null;
        }
        $apiURL = $token->api_domain . '/crm/v3/Accounts';
        $client = new Client();

        $headers = [
            'Authorization' => 'Zoho-oauthtoken ' . $token->access_token,
        ];

        $body = [
            'data' => [
                0 => $data
            ]
        ];
        $response = $client->request('POST', $apiURL, ['headers' => $headers, 'body' => json_encode($body)]);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return $responseBody;
    }

    public static function update($zoho_crm_account_id, $data)
    {
        if (!$data) {
            return null;
        }
        $token = ZohoTokenCheck::getToken();
        if (!$token) {
            return null;
        }
        $apiURL = $token->api_domain . '/crm/v3/Accounts/' . $zoho_crm_account_id;
        $client = new Client();

        $headers = [
            'Authorization' => 'Zoho-oauthtoken ' . $token->access_token,
        ];

        $body = [
            'data' => [
                0 => $data
            ]
        ];
        $response = $client->request('PUT', $apiURL, ['headers' => $headers, 'body' => json_encode($body)]);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return $responseBody;
    }

    public static function getZohoCrmAccount($zoho_crm_account_id)
    {
        $token = ZohoTokenCheck::getToken();
        if (!$token) {
            return null;
        }
        $apiURL = $token->api_domain . '/crm/v3/Accounts/' . $zoho_crm_account_id . '';
        $client = new Client();

        $headers = [
            'Authorization' => 'Zoho-oauthtoken ' . $token->access_token,
        ];

        $response = $client->request('GET', $apiURL, ['headers' => $headers]);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return $responseBody;
    }

    public static function getZohoBooksAccountByCrmAccountId($zoho_crm_account_id, $organization_id)
    {
        $token = ZohoTokenCheck::getToken();
        if (!$token) {
            return null;
        }
        $apiURL = config('zoho-v3.books_api_base_url') . '/api/v3/contacts?organization_id=' . $organization_id . '&zcrm_account_id=' . $zoho_crm_account_id . '';

        $client = new Client();

        $headers = [
            'Authorization' => 'Zoho-oauthtoken ' . $token->access_token,
        ];

        $response = $client->request('GET', $apiURL, ['headers' => $headers]);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return $responseBody;
    }

}
