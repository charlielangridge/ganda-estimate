<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;


class ImposeController extends Controller
{
    public function home()
    {
    	$this->data['title'] = 'Impose'; // set the page title

    	$this->data['sizes'] = Size::orderBy('dimensionX','desc')->get();

    	// $img = \Image::canvas(800, 600, '#ccc');

    	// $this->data['layoutImg'] = $img->encode('data-url');

        return view('admin/impose', $this->data);
    }

    public function updateSheetView(Request $request)
    {
		// Define page size

    	// is it a standard size?
    	if($request->finishXY[0] != 0)
    	{
    		$size = Size::find($request->finishXY[0]);
    	}
    	else
    	{
    		$size = new Size;
    		$size->dimensionX = $request->finishXY[1];
    		$size->dimensionY = $request->finishXY[2];
    	}

    	

    	$img =  $this->drawSheetView($size)->encode('data-url');
    	return \Response::json($img);
    }

    public function drawSheetView(Size $size)
    {
    	$img = \Image::canvas($size->dimensionX, $size->dimensionY, '#ccc');
    	return ($img);
    }
}
	