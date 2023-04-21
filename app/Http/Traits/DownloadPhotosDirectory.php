<?php
    namespace App\Http\Traits;

    use ZipArchive;
    use Illuminate\Support\Facades\File;
    use Illuminate\Http\Response;

    trait DownloadPhotosDirectory{
        
        public function photosDirectoryDownload($clientDirName, $projectDirName)
        {
            $zip = new ZipArchive;
            // Get Full Storage Path with .zip Extention
            $zipFile = storage_path('app/public/clients/photos/' . $clientDirName . '/' . $projectDirName . '.zip');
            // Get  Full Storage path for photos
            $filesPath = storage_path('app/public/clients/photos/' . $clientDirName . '/' . $projectDirName );

            if($zip->open($zipFile, ZipArchive::CREATE) === true){
                // Get All Files as array
                $files = File::allFiles($filesPath);
                foreach($files as $file){
                    $zip->addFile($file, $file->getRelativePathname());
                }
                $zip->close();
                return response()->download($zipFile)->deleteFileAfterSend(true);
            }else{
                abort(500);
            }
        }
    }