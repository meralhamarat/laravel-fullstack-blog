<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

// 1. ANA SAYFA TAKİBİ
Route::get('/', function () {
    // Ana sayfaya her girildiğinde "Ana Sayfa Görüntülendi" haberi gitsin
    Http::get('https://meral-8181cd0da3cde.flex.countly.com/i', [
        'app_key' => 'bbdec30c3901d079d6ea6a831ac3931bad81e2ef',
        'device_id' => 'meral_tarayici',
        'events' => json_encode([[
            'key' => 'ana_sayfa_ziyareti',
            'count' => 1
        ]])
    ]);

    return view('welcome');
});

// 2. API TEST TAKİBİ
Route::get('/api-test', function () {
    // Buraya her girildiğinde "API Test Edildi" haberi gitsin
    Http::get('https://meral-8181cd0da3cde.flex.countly.com/i', [
        'app_key' => 'bbdec30c3901d079d6ea6a831ac3931bad81e2ef',
        'device_id' => 'meral_tarayici',
        'events' => json_encode([[
            'key' => 'api_test_tiklamasi',
            'count' => 1
        ]])
    ]);

    return "Sinyal başarıyla gönderildi! Paneldeki Olaylar (Events) kısmını kontrol et.";
});
Route::get('/projects/create', function () {
    return "Burada proje ekleme formu olacak.";
})->name('projects.create');
