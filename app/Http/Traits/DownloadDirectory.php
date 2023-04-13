<?php
    namespace App\Http\Traits;

    use ZipArchive;
    use Illuminate\Support\Facades\File;
    use Illuminate\Http\Response;

    trait DownloadDirectory{
        public function photosDirectoryDownload($client, $project)
        {
            // dd($project);
            $zip = new ZipArchive;
            $zipFile = storage_path('app/public/clients/photos/' . $client . '/' . $project . '.zip');
            if($zip->open($zipFile, ZipArchive::CREATE) === true){
                $files = File::allFiles(storage_path('app/public/clients/photos/' . $client . '/' . $project ));
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