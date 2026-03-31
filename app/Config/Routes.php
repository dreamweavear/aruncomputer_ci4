<?php

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

use App\Controllers\Pages;

// open student admission page for students without crud
$routes->get('admissionpage', 'AdmissionPage::index');
$routes->post('admissionpage/store', 'AdmissionPage::store');

// admin admission
$routes->get('admin/admission', 'Admin\Admission::index');
$routes->get('admin/admission/create', 'Admin\Admission::create');
$routes->get('admission/create', 'Admin\Admission::create');

// Public admission form
$routes->get('admission/apply', 'AdmissionPage::index');
$routes->post('admission/apply', 'AdmissionPage::store');

$routes->post('admin/admission/store', 'Admin\Admission::store');
$routes->post('admin/admission/update/(:num)', 'Admin\Admission::update/$1');
$routes->get('admin/admission/edit/(:num)', 'Admin\Admission::edit/$1');
$routes->post('admin/admission/delete/(:num)', 'Admin\Admission::delete/$1'); // ✅ FIXED
$routes->get('admin/admission/testWhatsApp/(:any)', 'Admin\Admission::testWhatsApp/$1');
$routes->get('admin/admission/testWhatsApp', 'Admin\Admission::testWhatsApp');

// admin dashboard
$routes->get('admin/dashboard', 'Admin\AdminDashboard::index');

// auth
$routes->get('login', 'Admin\Auth::login');
$routes->post('check', 'Admin\Auth::check');
$routes->get('logout', 'Admin\Auth::logout');

$routes->group('admin', function($routes) {
    $routes->match(['get','post'], 'auth/change-password', 'Admin\Auth::changePassword');
});

$routes->setTranslateUriDashes(true);

// contact
$routes->get('contact', 'Contact::index');
$routes->post('contact/submit', 'Contact::submit');

// gallery
$routes->get('gallery', 'Gallery::index');

// chapters
$routes->group('admin', function($routes){
    $routes->get('chapters', 'Admin\ChapterController::index');
    $routes->get('chapters/create', 'Admin\ChapterController::create');
    $routes->post('chapters/store', 'Admin\ChapterController::store');
    $routes->get('chapters/edit/(:num)', 'Admin\ChapterController::edit/$1');
    $routes->post('chapters/update/(:num)', 'Admin\ChapterController::update/$1');
    $routes->post('chapters/delete/(:num)', 'Admin\ChapterController::delete/$1'); // ✅ FIXED
});
// admin gallery CRUD
$routes->group('admin', function($routes) {
    $routes->get('gallery', 'Admin\GalleryController::index');
    $routes->get('gallery/create', 'Admin\GalleryController::create');
    $routes->post('gallery/store', 'Admin\GalleryController::store');
    $routes->get('gallery/edit/(:num)', 'Admin\GalleryController::edit/$1');
    $routes->post('gallery/update/(:num)', 'Admin\GalleryController::update/$1');
    $routes->post('gallery/delete/(:num)', 'Admin\GalleryController::delete/$1');
});
// courses
$routes->group('admin', function($routes) {
    $routes->get('courses', 'Academic\CourseController::index');
    $routes->get('courses/create', 'Academic\CourseController::create');
    $routes->post('courses/store', 'Academic\CourseController::store');
    $routes->get('courses/edit/(:num)', 'Academic\CourseController::edit/$1');
    $routes->post('courses/update/(:num)', 'Academic\CourseController::update/$1');
    $routes->post('courses/delete/(:num)', 'Academic\CourseController::delete/$1'); // ✅ FIXED
});

// papers
$routes->group('admin/papers', function($routes) {
    $routes->get('/', 'Academic\PaperController::index');
    $routes->get('create', 'Academic\PaperController::create');
    $routes->post('store', 'Academic\PaperController::store');
    $routes->get('edit/(:num)', 'Academic\PaperController::edit/$1');
    $routes->post('update/(:num)', 'Academic\PaperController::update/$1');
    $routes->post('delete/(:num)', 'Academic\PaperController::delete/$1'); // ✅ FIXED
});

// units
$routes->group('admin/units', function($routes) {
    $routes->get('/', 'Academic\UnitController::index');
    $routes->get('create', 'Academic\UnitController::create');
    $routes->post('store', 'Academic\UnitController::store');
    $routes->get('edit/(:num)', 'Academic\UnitController::edit/$1');
    $routes->post('update/(:num)', 'Academic\UnitController::update/$1');
    $routes->post('delete/(:num)', 'Academic\UnitController::delete/$1'); // ✅ FIXED
});

// student content
$routes->get('student-content', 'Academic\StudentContentController::index');
$routes->get('student-content/(:segment)', 'Academic\StudentContentController::viewChapter/$1');

$routes->get('admin/chapters/getUnitsByPaper', 'Admin\ChapterController::getUnitsByPaper');

// ID card print
$routes->get('admin/idcard/print/(:num)', 'Admin\IdCard::print/$1');
$routes->post('admin/idcard/bulk', 'Admin\IdCard::bulk');

// fees
$routes->get('admin/fees', 'Admin\Fees::index');
$routes->get('admin/fees/create', 'Admin\Fees::create');
$routes->post('admin/fees/store', 'Admin\Fees::store');
$routes->get('admin/fees/add/(:num)', 'Admin\Fees::add/$1');
$routes->get('admin/fees/edit/(:num)', 'Admin\Fees::edit/$1');
$routes->post('admin/fees/update/(:num)', 'Admin\Fees::update/$1');
$routes->post('admin/fees/delete/(:num)', 'Admin\Fees::delete/$1'); // ✅ FIXED
$routes->get('admin/fees/view/(:num)', 'Admin\Fees::view/$1');
$routes->get('admin/fees/receipt/(:num)', 'Admin\Fees::receipt/$1');
$routes->get('admin/fees_total_report', 'Admin\Fees::feesTotalReport');


//pdf_cach

// site map ke liye route

$routes->get('sitemap.xml', 'SitemapController::index');




// reports
$routes->get('admin/reports/fee-pending', 'Admin\Reports::feePending');

// exam results
$routes->get('admin/exam', 'Admin\ExamResult::index');
$routes->get('admin/exam/create/(:num)', 'Admin\ExamResult::create/$1');
$routes->post('admin/exam/store', 'Admin\ExamResult::store');
$routes->get('admin/exam/edit/(:num)', 'Admin\ExamResult::edit/$1');
$routes->post('admin/exam/update/(:num)', 'Admin\ExamResult::update/$1');
$routes->get('admin/exam/certificate/(:num)', 'Admin\ExamResult::generateCertificate/$1');

// certificates
$routes->get('admin/certificate/print/(:num)', 'Admin\Certificate::print/$1');
$routes->get('admin/certificate/reprint/(:num)', 'Admin\Certificate::reprint/$1');

// student certificate download
$routes->get('student/certificate/(:num)', 'Student\Certificate::view/$1');

// enquiries
$routes->get('admin/enquiries', 'Admin\Enquiry::index');
$routes->get('admin/enquiries/view/(:num)', 'Admin\Enquiry::view/$1');
$routes->get('admin/enquiries/delete/(:num)', 'Admin\Enquiry::delete/$1');

// notices
$routes->get('admin/notice', 'Admin\Notice::index');
$routes->get('admin/notice/create', 'Admin\Notice::create');
$routes->post('admin/notice/store', 'Admin\Notice::store');
$routes->post('admin/notice/delete/(:num)', 'Admin\Notice::delete/$1'); // ✅ FIXED
$routes->get('admin/notice/edit/(:num)', 'Admin\Notice::edit/$1');
$routes->post('admin/notice/update/(:num)', 'Admin\Notice::update/$1');

// student auth
$routes->get('student/login', 'Student\Auth::login');
$routes->post('student/attempt', 'Student\Auth::attempt');
$routes->get('student/logout', 'Student\Auth::logout');
$routes->get('student/dashboard', 'Student\Dashboard::index');

// upload image
$routes->post('admin/chapters/uploadImage', 'Admin\ChapterController::uploadImage', ['filter' => 'no-csrf']);

// PDF
$routes->get('student/chapter/exportPdf/(:segment)', 'Student\Chapter::exportpdf/$1');

// static pages (keep last)
$routes->get('pages', [Pages::class, 'index']);
$routes->get('privacy-policy', 'Pages::view/privacy_policy');
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->setAutoRoute(true);

