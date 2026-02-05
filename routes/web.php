<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/corporate-fraud', [HomeController::class, 'corporate_fraud'])->name('corporate-fraud');
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/terms', [HomeController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/process', [HomeController::class, 'process'])->name('process');
Route::get('/matrimonial', [HomeController::class, 'matrimonial'])->name('matrimonial');
Route::get('/site-map', [HomeController::class, 'siteMap'])->name('site-map');
Route::get('/surveillance', [HomeController::class, 'surveillance'])->name('surveillance');

// Form Submission Routes
Route::post('/submit-contact-form', [HomeController::class, 'submitContactForm'])->name('submit.contact-form');
Route::get('/sitemap.xml', function() {
    $routes = [
        ['url' => route('home'), 'priority' => '1.0', 'frequency' => 'daily'],
        ['url' => route('about'), 'priority' => '0.9', 'frequency' => 'weekly'],
        ['url' => route('services'), 'priority' => '0.9', 'frequency' => 'weekly'],
        ['url' => route('process'), 'priority' => '0.8', 'frequency' => 'weekly'],
        ['url' => route('blog'), 'priority' => '0.8', 'frequency' => 'weekly'],
        ['url' => route('matrimonial'), 'priority' => '0.9', 'frequency' => 'weekly'],
        ['url' => route('corporate-fraud'), 'priority' => '0.9', 'frequency' => 'weekly'],
        ['url' => route('surveillance'), 'priority' => '0.8', 'frequency' => 'weekly'],
        ['url' => route('contact'), 'priority' => '0.8', 'frequency' => 'weekly'],
        ['url' => route('privacy-policy'), 'priority' => '0.5', 'frequency' => 'yearly'],
        ['url' => route('terms-and-conditions'), 'priority' => '0.5', 'frequency' => 'yearly'],
    ];
    
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
            xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
            xmlns:mobile="http://www.google.com/schemas/sitemap-mobile/1.0">';
    
    foreach($routes as $route) {
        $xml .= '
        <url>
            <loc>' . htmlspecialchars($route['url']) . '</loc>
            <lastmod>' . date('Y-m-d') . '</lastmod>
            <changefreq>' . $route['frequency'] . '</changefreq>
            <priority>' . $route['priority'] . '</priority>
        </url>';
    }
    
    $xml .= '
    </urlset>';
    
    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

