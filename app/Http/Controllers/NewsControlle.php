<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
      $news = ['noticia1','noticia2','noticia3'];
      return $news;
    }

    public function show($id){
      return "noticia $id por completo";
    }

    public function create(){
      return "create";
    }

    public function edit($id){
      return "editing $id";
    }

    public function store(){
      return "cadastro de uma nova noticia";
    }

    public function update($id){
      return "updating $id";
    }

    public function destroy($id){
      return "destroing $id";
    }
}
