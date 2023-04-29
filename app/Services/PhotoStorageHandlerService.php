<?php

namespace App\Services;

use Exception;

class PhotoStorageHandlerService
{
    /**
     * Store Photos in local Driver.
     */
    public function storePhotosInStorage(mixed $photo, string $path, string $originalPhotoName): void
    {
        try{
            $photo->storeAs($path, $originalPhotoName);
        }catch (Exception $e){
            throw new Exception("Error while saving photo in storage : " . $e);
        }
    }
}
