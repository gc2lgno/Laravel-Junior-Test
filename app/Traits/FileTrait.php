<?php

namespace App\Traits;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait FileTrait{

    public function upLoadFile($fileType, $file)
    {
        $file_name = $file->store('public/'.$fileType);
        return $file_name;
    }

    public function deleteFile($file)
    {
        Storage::delete($file);
    }

}
