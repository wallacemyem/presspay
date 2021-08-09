<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'front';
$route['404_override'] = 'front/_404';

//front end routes
$route['about'] = "about";
$route['faqs'] = "faqs";
$route['refer_a_friend'] = "refer";
$route['our_offers'] = "offers";
$route['how_it_works'] = "front/how_it_work1s";
$route['contact'] = "contact";
$route['services'] = "front/service";
$route['gallery'] = "front/gallery";
$route['privacy'] = "terms_privacy/privacy";
$route['terms_of_service'] = "terms_privacy/terms";
$route['frequently-asked-questions'] = "front/faq";
$route['donate'] = "front/donate";
$route['pay/(:num)'] = "front/donate/$1";
$route['payment_completed'] = "front/payment_completed";
$route['payment_completed/(:num)'] = "front/payment_completed/$1";
$route['donations/(:num)'] = "front/donations/$1";

$route['(:num)/(:any)'] = "front/product";

//modal
$route['templates/([a-zA-z]+)'] = "front/modal/$1";
$route['views/([a-zA-z]+)'] = "front/views/$1";

//users API
$route['api/checkEmailExist'] = "api/users/check_exist";
$route['api/checkRecoveryEmailExist'] = "api/users/bar_check_exist";
$route['api/checkExistForAnother'] = "api/users/check_exist_another";
$route['api/checkPhoneExist'] = "api/users/check_exist";
$route['api/checkUsernameExist'] = "api/users/check_exist";
$route['api/createAccount'] = "api/users/create_account";
$route['api/token'] = "api/users/login";
//recover account
$route['api/recoverAccount'] = "api/users/recoverAccount";
$route['api/subscribe'] = "api/users/subscribe";
//user functions
$route['api/fetch-profile'] = "api/users/fetch_profile";
$route['api/update-profile'] = "api/users/update_profile";
$route['api/update-profile-pic'] = "api/users/update_profile_pic";
$route['api/verify-phone'] = "api/users/verify_phone";
$route['api/resend-sms-code'] = "api/users/resend_sms_code";
//contacts and sms
$route['api/fetch-contact'] = "api/users/fetch_contact";
$route['api/send-sms'] = "api/major/send_sms";
$route['api/fetch-sms-history/(:num)/(:num)'] = 'api/major/fetch_sms_history/$1/$2';
$route['api/fetch-sms'] = 'api/major/fetch_sms';
$route['api/send-message'] = 'api/major/send_message';
//enquiries
$route['api/contact'] = 'api/Major/contact';
$route['api/resend-sms-code'] = "api/users/resend_sms_code";
//activate account
$route['api/activate'] = "api/users/activate";
$route['api/resend-code'] = "api/users/resend_code";
$route['api/activate-by-code'] = "api/users/activate_by_code";
//products
$route['api/fetch-products/(:num)/(:num)'] = "api/products/fetch_products/$1/$2";
$route['api/create-product'] = "api/products/create_product";
$route['api/add-variant'] = "api/products/add_variant";
$route['api/fetch-product'] = "api/products/fetch_product";
$route['api/update-product'] = "api/products/update_product";
$route['api/search-products'] = "api/products/search_products";
//sales
$route['api/fetch-sales/(:num)/(:num)'] = "api/sales/fetch_sales/$1/$2";
$route['api/create-sale'] = "api/sales/create";
$route['api/fetch-sale'] = "api/sales/fetch_sale";
$route['api/update-sale'] = "api/sales/update";

//customers
$route['api/fetch-customers/(:num)/(:num)'] = "api/customers/fetch_customers/$1/$2";
$route['api/create-customer'] = "api/customers/create";
$route['api/fetch-customer'] = "api/customers/fetch_customer";
$route['api/update-customer'] = "api/customers/update";
$route['api/search-customers'] = "api/customers/search";
//deposits
$route['api/fetch-deposits/(:num)/(:num)'] = "api/customers/fetch_deposits/$1/$2";
$route['api/fetch-deposit'] = "api/customers/fetch_deposit";
$route['api/fetch-addresses/(:num)/(:num)'] = "api/customers/fetch_addresses/$1/$2";
$route['api/fetch-address'] = "api/customers/fetch_address";
$route['api/fetch-customer-users'] = "api/customers/fetch_users";

$route['api/fetch-user'] = "api/Major/fetch_user";

//image upload
$route['api/upload/(:num)'] = 'api/major/upload/$1';
$route['api/upload'] = 'api/major/deleteUpload';
$route['api/update'] = 'api/major/update';
//others
$route['api/delete'] = 'api/major/delete';
$route['api/create'] = 'api/major/create';

//get resource
$route['api/fetch-resource'] = "api/major/resource";

$route['api/search-categories'] = "api/major/search";

$route['generatepdf'] = "welcome/convertpdf";
$route['api/upload-txt'] = "api/Major/upload_txt";