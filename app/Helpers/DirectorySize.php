<?php

use Illuminate\Support\Facades\Storage;

if (! function_exists('getDirectorySize')) {
    /**
     * Get the size of a directory in MB.
     *
     * @param string $directory
     * @return float
     */
    function getDirectorySize($directory)
    {
        if(file_exists($directory)){
            $size = 0;
            $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
    
            foreach ($iterator as $file) {
                if ($file->isFile()) {
                    $size += filesize($file);
                }
            }
    
            return round($size / 1048576, 2);
        }
    }
}