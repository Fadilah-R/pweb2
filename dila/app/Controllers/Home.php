<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('navbar');
    }
    public function nama(): string
    {
        return view('dila');
    }
    public function umur(): string
    {
        return view('dila_umur');
    }
    public function apa(): string
    {
        echo "Minggu ini kuliah PBF :";
    }
    public function helper()
    {
        return view('helpers');
    }
    public function navbar()
    {
        return view('navbar');
    }
}
