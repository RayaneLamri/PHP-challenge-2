<?php
require '../vendor/autoload.php';
require_once("router.php");
use App\Model\Connect;
use App\Model\WelcomeList;

$connection = new Connect('127.0.0.1', 'base', 'user', 'pass');
$db = $connection->getPdo();


// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index

get('/', "../src/Controller/WelcomeListController.php");
get('/login', "../src/Controller/LoginController.php");
get('/invoice', "../src/Controller/InvoicesListController.php");
get('/new_invoice', "../src/Controller/InsertInvoiceController.php");
get('/new_contact', "../src/Controller/InsertContactController.php");
get('/new_invoice', "../src/Controller/InsertInvoiceController.php");
get('/new_companies', "../src/Controller/InsertCompanyController.php");
get('/invoice_details/id/$id', "../src/Controller/InvoiceDetailsController.php");
get('/contact', "../src/Controller/ContactListController.php");
get('/contact_details/id/$id', "../src/Controller/ContactDetailsController.php");
get('/companies', "../src/Controller/CompaniesListController.php");
get('/supplier', "../src/Controller/TypedCompanyListController.php");
get('/companies_client', "../src/Controller/ClientCompaniesController.php");
get('/companies_suppliers', "../src/Controller/ProviderCompaniesController.php");
get('/companies_detail/id/$id', "../src/Controller/CompanyDetailController.php");
get('/logout', "../src/Controller/LogoutController.php");
get('/home', "../src/Controller/WelcomeListController.php");
get('/member_dashboard', "../src/Controller/UsersListController.php");
get('/update_user/id/$id', "../src/Controller/UpdateUsersController.php");
get('/update_invoice/id/$id', "../src/Controller/UpdateInvoiceController.php");
get('/update_people/id/$id', "../src/Controller/UpdateContactController.php");
get('/update_company/id/$id', "../src/Controller/UpdateCompanyController.php");
get('/delete_user/id/$id', "../src/Controller/DeleteUserController.php");
get('/delete_invoice/id/$id', "../src/Controller/DeleteInvoiceController.php");
get('/delete_people/id/$id', "../src/Controller/DeleteContactController.php");
get('/delete_company/id/$id', "../src/Controller/DeleteCompanyController.php");


post('/delete_company/id/$id', "../src/Controller/DeleteCompanyController.php");
post('/delete_people/id/$id', "../src/Controller/DeleteContactController.php");
post('/delete_invoice/id/$id', "../src/Controller/DeleteInvoiceController.php");
post('/delete_user/id/$id', "../src/Controller/DeleteUserController.php");
post('/update_user/id/$id', "../src/Controller/UpdateUsersController.php");
post('/update_people/id/$id', "../src/Controller/UpdateContactController.php");
post('/update_company/id/$id', "../src/Controller/UpdateCompanyController.php");
post('/update_invoice/id/$id', "../src/Controller/UpdateInvoiceController.php");
post('/', "../src/Controller/LoginController.php");
post('/login', "../src/Controller/LoginController.php");
post('/new_contact', "../src/Controller/InsertContactController.php");
post('/new_invoice', "../src/Controller/InsertInvoiceController.php");
post('/new_companies', "../src/Controller/InsertCompanyController.php");














// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','../src/View/404.php');
