<?php
    namespace App\Services;

    use Exception;
    use Illuminate\Support\Facades\File;

    class DirectoryService
    {
        /**
         * Create Directory If Not Exists with Permission 777 => rwx
         */
        public function createDirectoryIfNotExists(string $path)
        {
            if (!File::exists($path))
            {
                try{
                    File::makeDirectory($path, 0777, true, true);
                }catch(Exception $e){
                    throw new Exception("Failed to create Directory : " . $e);
                }
            }
        }
    }