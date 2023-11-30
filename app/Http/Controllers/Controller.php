<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function storeData($path, $data) {
        $client = new Client([
            'base_uri' => 'https://api.aibm.my.id/',
        ]);

        $client->request('POST', $path, [
            'json' => $data
        ]);
    }
    
    public function getData($path) {
        $client = new Client([
            'base_uri' => 'https://api.aibm.my.id/',
        ]);

        $response = $client->request('GET', $path)->getBody();

        return json_decode($response)->data;
    }

    public function updateData($path, $data) {
        $client = new Client([
            'base_uri' => 'https://api.aibm.my.id/',
        ]);

        $client->request('PUT', $path, [
            'json' => $data
        ]);
    }

    public function deleteData($path) {
        $client = new Client([
            'base_uri' => 'https://api.aibm.my.id/',
        ]);

        $client->request('DELETE', $path);
    }
}
