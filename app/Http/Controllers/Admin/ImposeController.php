<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImposeController extends Controller
{
    public function home()
    {
    	$this->data['title'] = 'Impose'; // set the page title

        return view('admin/impose', $this->data);
    }
}
