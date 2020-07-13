<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WEB Fahmi'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me | WEB Fahmi',
            'test' => ['1', '2', '3']
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | WEB Fahmi',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. ABC',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. CDE',
                    'kota' => 'Bekasi'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
