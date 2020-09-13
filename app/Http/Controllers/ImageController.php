<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\ImageCompressController;

trait ImageController 
{
	use ImageCompressController;

    function Image( $name)
    {
   
	   if(Input::hasfile('image'))
	   {
	   		$file = Input::file('image');
	   		$fileName = time().$file->getClientOriginalName();
	   		$destinationPath = "uploads";
	   		$file->move($destinationPath,$fileName);
	   		copy($destinationPath.'/'.$fileName,$destinationPath. '/medium-'.$fileName);
	   		$source_image = $destinationPath;
	   		$compress_image = $this->compressImage($source_image.'/'.$fileName,$source_image.'/medium-'.$fileName);	
	   }
	   return $fileName;
    }
}
