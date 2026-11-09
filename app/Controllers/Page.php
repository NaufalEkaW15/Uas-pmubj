<?php

namespace App\Controllers;

class Page extends BaseController
{
  public function index(): string
  {
    return view('welcome_message');
  }
  public function about(): string
  {
    return view('about');
  }
  public function faqs(): string
  {
    return view('faqs');
  }
  public function pengaduan(): string
  {
    return view('Pengaduan/index');
  }
}
