<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "SMPN 1 Suwawa"
        ];

        echo view('layouts/mainHeader', $data);
        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('pages/index');
        echo view('layouts/footer');
    }

    public function sambutan()
    {
        $data = [
            "title" => "Sambutan Kepala Sekolah"
        ];

        echo view('layouts/mainHeader', $data);
        echo view('layouts/secHeader');
        echo view('layouts/secNavbar');
        echo view('pages/sambutan');
        echo view('layouts/footer');
    }

    public function visiMisi()
    {
        $data = [
            "title" => "Visi Misi - SMPN 1 SUWAWA"
        ];

        echo view('layouts/mainHeader', $data);
        echo view('layouts/secHeader');
        echo view('layouts/secNavbar');
        echo view('pages/visiMisi');
        echo view('layouts/footer');
    }

    public function organisasi()
    {
        $data = [
            "title" => "Struktur Organisasi - SMPN 1 SUWAWA"
        ];

        echo view('layouts/mainHeader', $data);
        echo view('layouts/secHeader');
        echo view('layouts/secNavbar');
        echo view('pages/organisasi');
        echo view('layouts/footer');
    }

    public function akademik()
    {
        $data = [
            "title" => "Civitas Akademik - SMPN 1 SUWAWA"
        ];

        echo view('layouts/mainHeader', $data);
        echo view('layouts/secHeader');
        echo view('layouts/secNavbar');
        echo view('pages/civitasAkademik');
        echo view('layouts/footer');
    }

    public function galery()
    {
        $data = [
            "title" => "Gallery - SMPN 1 SUWAWA"
        ];

        echo view('layouts/mainHeader', $data);
        echo view('layouts/secHeader');
        echo view('layouts/secNavbar');
        echo view('pages/galery');
        echo view('layouts/footer');
    }
}
