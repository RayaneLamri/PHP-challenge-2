<?php
require '../vendor/autoload.php';
require_once("router.php");
use App\Model\Connect;
use App\Model\WelcomeList;

$connection = new Connect('127.0.0.1', 'cogip', 'root', 'root');
$db = $connection->getPdo();


// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index

get('/', "../src/Controller/LoginController.php");
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
get('/create', "../src/View/create.php");
get('/home', "../src/Controller/WelcomeListController.php");
get('/member_dashboard', "../src/Controller/UsersListController.php");



post('/', "../src/Controller/LoginController.php");
post('/login', "../src/Controller/LoginController.php");
post('/create', "../src/View/create.php");
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
