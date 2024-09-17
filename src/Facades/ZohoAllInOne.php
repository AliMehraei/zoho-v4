<?php

namespace AliMehraei\ZohoAllInOne\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AliMehraei\ZohoAllInOne\ZohoAllInOne
 *
 * @method static mixed callApiFunction(string $url)
 * @method static int getModuleCount(string $moduleName, string|null $type = null, string|null $value = null)
 * @method static int getModuleCountCOQL(string $moduleName, string|null $condition = null)
 * @method static int getZBCount(string $moduleName, int $organization_id, string|null $condition = null)
 * @method static mixed compositeAPI(array $requests)
 * @method static array getUsers(string|null $page_token = null)
 * @method static array getContacts(string|null $page_token = null)
 * @method static mixed getContact(int $zoho_contact_id)
 * @method static mixed getContactSecond(int $zoho_contact_id)
 * @method static mixed getContactByEmailAddress(string $zoho_email)
 * @method static mixed createContact(array $data = [])
 * @method static mixed updateContact(array $data = [])
 * @method static mixed getContactAvatar(int $zoho_contact_id)
 * @method static mixed updateContactAvatar(int $zoho_contact_id, string $filePath, string $fileMime, string $fileUploadedName)
 * @method static mixed deleteContactAvatar(int $zoho_contact_id)
 * @method static array contactsSearch(string $phrase, int $page = 1, int $perPage = 200)
 * @method static mixed getContactImage(int $zoho_contact_id)
 * @method static mixed createCustomer(array $data = [])
 * @method static array getAccounts(string|null $page_token = null)
 * @method static mixed getAccountContacts(int $zoho_crm_account_id)
 * @method static mixed createAccount(array $data)
 * @method static mixed updateAccount(int $zoho_crm_account_id, array $data)
 * @method static mixed getZohoCrmAccount(int $zoho_crm_account_id)
 * @method static mixed getZohoBooksAccountByCrmAccountId(int $zoho_crm_account_id, int|null $organization_id = null)
 * @method static array getVendors(string|null $page_token = null, string|null $fields = null)
 * @method static mixed getVendor(int $zoho_vendor_id, string|null $fields = null)
 * @method static mixed getZohoBooksVendorById(int $zoho_books_vendor_id, int|null $organization_id = null)
 * @method static mixed createVendor(array $data)
 * @method static mixed getVendorImage(int $zoho_id)
 * @method static mixed updateVendorAvatar(int $zoho_vendor_id, string $filePath, string $fileMime, string $fileUploadedName)
 * @method static mixed updateVendor(int $zoho_crm_id, array $data)
 * @method static mixed getRelatedManufactureLineCardV6(int $zoho_id)
 * @method static mixed getRelatedManufactureStrongLineV6(int $zoho_id)
 * @method static mixed deleteVendorAvatar(int $zoho_vendor_id)
 * @method static array getVendorsZB(int $organization_id, int $page = 1, string $condition = '')
 * @method static mixed getZohoCrmVendor(int $zoho_crm_vendor_id)
 * @method static array vendorsSearch(string $phrase)
 * @method static mixed getZohoBooksVendorByCrmVendorId(int $zoho_crm_vendor_id, int|null $organization_id = null)
 * @method static array getManufactures(string|null $page_token = null)
 * @method static mixed getManufacture(int $zoho_manufacture_id, string|null $fields = null)
 * @method static array manufactureSearch(string $phrase)
 * @method static array getManufacturesCOQL(int|null $zoho_crm_manufacture_id = null, int $offset = 0, string|null $conditions = null, string|null $fields = null)
 * @method static mixed createManufacture(array $data)
 * @method static mixed updateManufacture(int $zoho_crm_manufacture_id, array $data)
 * @method static mixed updateManufactureV6(int $zoho_id, array $data)
 * @method static mixed deleteManufactureV6(int $zoho_id)
 * @method static mixed getRelatedVendorLineCardV6(int $zoho_id)
 * @method static mixed deleteRelatedVendorLineCardV6(int $zoho_id, array $ids)
 * @method static mixed getRelatedVendorStrongLineV6(int $zoho_id)
 * @method static mixed deleteRelatedVendorStrongLineV6(int $zoho_id, array $ids)
 * @method static array getProducts(string|null $page_token = null)
 * @method static mixed getProduct(int $zoho_product_id, string|null $fields = null)
 * @method static mixed getItem(int $zoho_books_item_id, int|null $organization_id = null)
 * @method static mixed searchItemByName(string $product_name, int|null $organization_id = null)
 * @method static mixed updateProduct(array $data = [])
 * @method static mixed createProduct(array $data)
 * @method static mixed createItem(array $data = [])
 * @method static mixed updateItem(array $data = [])
 * @method static array getProductsCOQL(int|null $zoho_crm_product_id = null, int $offset = 0, string|null $conditions = null, string|null $fields = null)
 * @method static array productsSearch(string $phrase)
 * @method static mixed getProductImage(int $zoho_product_id)
 * @method static mixed getZohoBooksItem(int $zoho_books_item_id, int|null $organization_id = null)
 * @method static mixed getAllZohoBooksItems(int|null $organization_id = null, int $page, string $conditions)
 * @method static array getInvoices(int $organization_id, int $page = 1, string $condition = '')
 * @method static mixed getInvoice(int $zoho_invoice_id, int|null $organization_id = null)
 * @method static mixed getCRMInvoice(int $zoho_invoice_id)
 * @method static mixed updateCRMInvoice(array $data = [])
 * @method static mixed getVendorInvoices(int $zoho_vendor_id)
 * @method static mixed getInvoiceByCustomerId(int $zoho_customer_id, int|null $organization_id = null)
 * @method static mixed searchInvoiceByCustomerId(int $zoho_customer_id, string|null $searchParameter = null, int|null $organization_id = null)
 * @method static mixed getInvoicePDF(int $invoice_id, int $organization_id)
 * @method static mixed getInvoiceHTML(int $invoice_id, int $organization_id)
 * @method static array getPackages(int $organization_id, int $page = 1, string $condition = '')
 * @method static mixed searchPackageByCustomerId(int $zoho_customer_id, string|null $searchParameter = null, int|null $organization_id = null)
 * @method static mixed getCRMDealV6(int $deal_id)
 * @method static mixed createDeal(array $data)
 * @method static mixed updateDealV6(array $data = [])
 * @method static mixed createLead(array $data)
 * @method static mixed getLead(int $id)
 * @method static mixed updateLead(array $data)
 * @method static mixed getLeadByEmailAddress(string $zoho_email)
 * @method static mixed convertLead(array $data, int $id)
 * @method static mixed conversionOptionsLead(array $data)
 * @method static mixed createSaleOrder(array $data = [])
 * @method static array getSaleOrders(int $organization_id, int $page = 1, string $condition = '')
 * @method static mixed getSaleOrder(int $sale_order_id, int|null $organization_id = null)
 * @method static mixed getCRMSaleOrder(int $sale_order_id)
 * @method static mixed getSaleOrderByCustomerId(int $zoho_customer_id, int|null $organization_id = null)
 * @method static mixed searchSaleOrderByCustomerId(int $zoho_customer_id, string|null $searchParameter = null, int|null $organization_id = null)
 * @method static mixed getSaleOrderPDF(int $sale_order_id, int $organization_id)
 * @method static mixed updateSalesOrderV6(array $data = [])
 * @method static mixed updateSalesOrderV2_1(array $data = [])
 * @method static mixed createSalesOrderV6(array $data = [])
 * @method static array getPurchaseOrders(int $organization_id, int $page = 1, string $condition = '')
 * @method static mixed getPurchaseOrder(int $purchase_order_id, int|null $organization_id = null)
 * @method static mixed getPurchaseOrderV6(int $purchase_order_id)
 * @method static mixed getCRMPurchaseOrder(int $purchase_order_id)
 * @method static mixed getPurchaseOrderByCustomerId(int $zoho_vendor_id, int|null $organization_id = null)
 * @method static mixed getPurchaseOrderByItemName(string $item_name, int|null $organization_id = null)
 * @method static mixed searchPurchaseOrderByCustomerId(int $zoho_vendor_id, string|null $searchParameter = null, int|null $organization_id = null)
 * @method static mixed getPurchaseOrderPDF(int $sale_order_id, int $organization_id)
 * @method static mixed updatePurchaseOrderV2_2(array $data = [])
 * @method static mixed createPurchaseOrderV6(array $data)
 * @method static array getOrganizations()
 * @method static mixed getRFQ(int $rfq_id)
 * @method static mixed setRFQAlternative(int $rfq_id, int $product_id)
 * @method static mixed deleteRFQAlternativeProduct(int $alternative_product_x_rfq_id)
 * @method static mixed getRFQList(int $rfq_id, string $list)
 * @method static array getRFQs()
 * @method static mixed updateRFQ(array $data = [])
 * @method static array getAccountRFQs(int $zoho_crm_account_id, string|null $page_token = null, string|null $fields = null, int $next_page = 1, int $per_page = 200, string|null $conditions = null)
 * @method static array getAccountRFQsCOQL(int $zoho_crm_account_id, int $offset = 0, string|null $conditions = null, string|null $fields = null)
 * @method static array getRFQsCOQL(int $offset = 0, string|null $conditions = null, string|null $fields = null)
 * @method static array rfqsSearch(string $phrase, string|null $criteria = null)
 * @method static mixed createRFQ(array $data)
 * @method static mixed getVendorRFQ(int $vendor_rfq_id)
 * @method static array getVendorRFQs(int $vendor_rfq_id)
 * @method static mixed updateVendorRFQ(array $data = [])
 * @method static mixed createVendorRFQV6(array $data)
 * @method static mixed getAvailability(int $availability_id)
 * @method static array getProductAvailabilities(int $product_id, string|null $fields = null, string|null $condition = null)
 * @method static array getAvailabilities()
 * @method static array availabilitySearch(string $phrase, string|null $criteria = null)
 * @method static mixed createAvailability(array $data)
 * @method static mixed updateAvailability(array $data = [])
 * @method static array getAvailabilitiesCOQL(int $offset = 0, string|null $conditions = null, string|null $fields = null)
 * @method static array getAllHistory(string|null $fields = null, string|null $page_token = null, string|null $conditions = null)
 * @method static mixed getQuote(int $quote_id)
 * @method static array getQuotes()
 * @method static array getAccountQuotes(int $zoho_crm_account_id, string|null $page_token = null, string|null $fields = null, int $next_page = 1, int $per_page = 200, string|null $conditions = null)
 * @method static array getAccountQuotesCOQL(int $zoho_crm_account_id, int $offset = 0, string|null $conditions = null, string|null $fields = null)
 * @method static array quotesSearch(string $phrase, string|null $criteria = null)
 * @method static mixed updateQuote(array $data = [])
 * @method static mixed updateQuoteSkipMandatoryV6(array $data = [])
 * @method static mixed createQuoteV6(array $data)
 * @method static array getTasks(string|null $page_token = null, string|null $fields = null)
 * @method static array getTasksCOQL(string|null $conditions = null, int $offset = 0, string|null $fields = null)
 * @method static mixed getTaskById(int $id)
 * @method static mixed createTask(array $data)
 * @method static array getCalls(string|null $page_token = null, string|null $fields = null)
 * @method static array getCallsCOQL(string|null $conditions = null, int $offset = 0, string|null $fields = null)
 * @method static mixed getCallById(int $id)
 * @method static mixed createCall(array $data)
 * @method static mixed updateCallV6(array $data = [])
 * @method static mixed uploadBulkFile(int $organization_id, string $filePath)
 * @method static mixed createBulkReadJob(array $data)
 * @method static mixed downloadBulkReadResult(string $download_url)
 * @method static mixed saveDuplicatedList(string $file_name, array $data)
 * @method static array getRoles()
 * @method static array getOrganization()
 * @method static mixed uploadAttachment(string $zoho_module_name, int $zoho_record_id, string $file_path, string $file_mime, string $file_uploaded_name)
 * @method static array getAttachments(string $zoho_module_name, int $zoho_record_id)
 * @method static mixed deleteAttachment(string $zoho_module_name, int $zoho_record_id, int $zoho_attachment_id)
 * @method static mixed sendEmail(string $zoho_module_name, int $zoho_record_id, array $data)
 * @method static mixed createExcess(array $data)
 * @method static mixed updateExcessV2_2(array $data = [])
 * @method static mixed getExcess(int $excess_id)
 * @method static array getProductExcesses(int $product_id, string|null $fields = null, string|null $condition = null)
 * @method static array getRecentExcesses(int $offset = 0, string|null $condition = null, string|null $fields = null)
 * @method static mixed getImageV6(int $zoho_id, string $module)
 * @method static mixed updateImageV6(int $zoho_id, string $module, string $filePath, string $fileMime, string $fileUploadedName)
 * @method static mixed deleteImageV6(int $zoho_id, string $module)
 * @method static mixed uploadFileV6(string $file_path, string $file_mime, string $file_uploaded_name)
 * @method static mixed getFileV6(int $id)
 * @method static mixed deleteFileV6(int $id)
 * @method static array getModuleRecentRecords(string $module, string $action = 'create', int $offset = 0, int $perPage = 200, string|null $fields = null, string|null $startDay = null, string|null $endDay = null, string|null $startTime = null, string|null $endTime = null)
 */
class ZohoAllInOne extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AliMehraei\ZohoAllInOne\ZohoAllInOne::class;
    }
}
