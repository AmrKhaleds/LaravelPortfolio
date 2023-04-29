<?php

namespace App\Servicee;

use Exception;
use Intervention\Image\Facades\Image;

class WebpConverterService
{
    /**
     * Convert Photo form original extension to "webp" extension
     */
    public function convertToWebp($photoFile, string  $fullPath, string  $photoName): void
    {
        $image = Image::make($photoFile->getRealPath());
        $saveImage = $image->save($fullPath . '/' . $photoName . '.webp', null, 'webp');
        // Error handling
        if (!$saveImage) {
            throw new Exception("Failed to save Image : " . $saveImage);
        }
    }
}
