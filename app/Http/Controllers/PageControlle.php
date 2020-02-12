<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControlle extends Controller
{
  public function about()
  {
    return view('admin.pages.news.about');
  }

  public function contato()
  {
    return view('admin.pages.news.contato');
  }
}
