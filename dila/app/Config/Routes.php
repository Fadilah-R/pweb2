<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Blog;
use CodeIgniter\I18n\Time;

/**
 * @var RouteCollection $routes
 */
//route
$routes->get('/', 'Home::index');
$routes->get('/biodata', 'Home::nama');
$routes->get('/umur', 'Home::umur');
$routes->get('/helper', 'Home::helper');
$routes->get('/Home', 'Home::navbar');
$routes->get('/journals', 'Blogs::users');
$routes->get('blog', [Blog::class, 'index']);
//ini untuk yang env 
$routes->get('/apa', 'Home::apa');
//helper text
$routes->get('/teks', function () {
    // Kode untuk menghasilkan output yang ingin Anda tampilkan
    helper('text'); // Muat Text Helper (contoh)
   
    $myString = "Selamat datang di CodeIgniter 4!";
    $upperCaseString = ucwords($myString); // Ubah string menjadi huruf kapital (contoh)
    return view('text', compact('upperCaseString')); // (Opsional) Tampilkan dalam view

});
// $routes->get('/number', );
//library date time
$routes->get('/time', function(){
    $myTime = Time::parse('March 5, 2024 12:00:00', 'America/Chicago');
    echo $myTime->toLocalizedString('MMM d, yyyy h:mm A'); // Output: "Mar 5, 2024 12:00 PM"
    echo "<hr>";
    $myTime = Time::parse('March 5, 2024 12:00:00', 'America/Chicago');
    echo $myTime->toLocalizedString('yyyy-MM-dd HH:mm:ss'); // Output: "2024-03-05 12:00:00"
})
//date helper
?>