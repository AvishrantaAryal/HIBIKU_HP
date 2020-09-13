<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

trait ImageCompressController 
{
    function compressImage($source_image, $compress_image) 
	{
		$image_info = getimagesize($source_image);
		
		if ($image_info['mime'] == 'image/jpeg') 
		{
			$source_image = imagecreatefromjpeg($source_image);
			imagejpeg($source_image, $compress_image, 40);
			
		} 
		elseif ($image_info['mime'] == 'image/gif') 
		{
			$source_image = imagecreatefromgif($source_image);
			imagegif($source_image, $compress_image, 40);
		} 
		elseif ($image_info['mime'] == 'image/png') 
		{
			$source_image = imagecreatefrompng($source_image);
			imagepng($source_image, $compress_image, 9);
		}
		elseif ($image_info['mime'] == 'image/jpg') 
		{
			$source_image = imagecreatefromjpg($source_image);
			imagejpg($source_image, $compress_image, 40);
		}
	return $compress_image;
	}
}
