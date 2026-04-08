<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getCountlyKey()
    {
        $username = '2220656055@nku.edu.tr';
        $password = 'meral12345';

        $response = Http::withBasicAuth($username, $password)
            ->get('https://try.count.ly/api-key');

        return $response->body();
    }

    // Bu fonksiyonu sınıfın içine aldık
    public function getCountlyData()
    {
        // Az önce aldığın uzun anahtarı buraya yaz
        $apiKey = 'bbdec30c3901d079d6ea6a831ac3931bad81e2ef';

        $response = Http::get("https://try.count.ly/o/apps/mine", [
            'api_key' => $apiKey
        ]);

        return $response->json();
    }
}
