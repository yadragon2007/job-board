<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexContoller extends Controller
{
  function index()
  {
    return view("index", ["title" => "Dashboard"]);
  }
  function about()
  {
    return view("about", ["title" => "About"]);
  }
  function contact()
  {
    return view("contact", ["title" => "Contact"]);
  }
}
