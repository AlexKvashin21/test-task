<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LeadsController extends BaseController
{
   function index() {

       $pagesCounter = [10, 20, 30, 40, 50];

       $links = ['https://www.google.com', 'https://www.yahoo.com', 'https://www.bing.com'];

      return view('main', compact('pagesCounter', 'links'));
   }
}
