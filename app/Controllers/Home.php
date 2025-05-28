<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('front/head_view') .
               view('front/navbar_view') .
               view('front/principal_ultimo') .
               view('front/footer_view');
    }
 // {
 //     echo view('front/head_view');
 //     echo view('front/navbar_view');
 //     echo view('front/principal_ultimo');
 //     echo view('front/footer_view');
 // }
  // public function registrarse(): string
  // {
  //     return view('front/head_view');
  //     . view('front/navbar_view');
  //     . view('front/principal_ultimo');
  //     . view('front/footer_view');
  // }
  // public function ingresar(): string
  // {
  //     return view('front/head_view');
  //     . view('front/navbar_view');
  //     . view('front/principal_ultimo');
  //     . view('front/footer_view');
  // }
  // public function quienes_somos(): string
  // {
  //     return view('front/head_view');
  //     . view('front/navbar_view');
  //     . view('front/principal_ultimo');
  //     . view('front/footer_view');
  // }
}
