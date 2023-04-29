<?php

namespace App\Actions\Admin\ClientProjectActions;

use App\Models\ClientProjectPhotos;
use App\Servicee\WebpConverterService;
use App\Services\DirectoryService;
use App\Services\PhotoStorageHandlerService;
use Exception;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;

class UploadClientProjectPhotosAction
{
    protected $clientName;
    protected $clientProject;
    protected $directoryService;
    protected $webpConverterService;
    protected $photoStorageHandlerService;

    public function __construct(DirectoryService $directoryService, WebpConverterService $webpConverterService, PhotoStorageHandlerService $photoStorageHandlerService)
    {
        $this->directoryService = $directoryService;
        $this->webpConverterService = $webpConverterService;
        $this->photoStorageHandlerService = $photoStorageHandlerService;
    }

    /**
     * execute uploading project photos
     */
    public function execute(object $clientProjectAction, $photos): void
    {
        foreach ($photos as $photo) {
            $photoName = time() . '_' . Str::random(20);
            $photoNameWithOriginalExtension = $photoName . '.' . $photo->getClientOriginalExtension();
            $storagePath = 'public/clients/photos/' . $clientProjectAction->getclientName()->username . '/' . $clientProjectAction->getClientProject()->project_name;
            $fullPath = public_path('storage/clients/photos/' . $clientProjectAction->getclientName()->username . '/' . $clientProjectAction->getClientProject()->project_name . '/thumbnail');

            // Checkk if Directory is Exist
            $this->directoryService->createDirectoryIfNotExists($fullPath);
            // Convert Photo form original extension to "webp" extension
            $this->webpConverterService->convertToWebp($photo, $fullPath, $photoName);
            //Store Photos in local Driver.
            $this->photoStorageHandlerService->storePhotosInStorage($photo, $storagePath, $photoNameWithOriginalExtension);
            // Store Photos in database.
            $this->storePhotosInDatabase([
                'project_id' => $clientProjectAction->getClientProject()->id, 
                'photo_name' => $photoNameWithOriginalExtension, 
                'thumbnail' => $photoName . '.webp'
            ]);
        }
    }


    /**
     * Store Photos in database.
     */
    public function storePhotosInDatabase(array $projectData): void
    {
        $createClientProjectPhotos = ClientProjectPhotos::create([
            'project_id' => $projectData['project_id'],
            'photo_name' => $projectData['photo_name'],
            'thumbnail' => $projectData['thumbnail']
        ]);
        if(!$createClientProjectPhotos){
            throw new Exception("Failed to Store Projetc Photos in database : " . $createClientProjectPhotos);
        }
    }
}
