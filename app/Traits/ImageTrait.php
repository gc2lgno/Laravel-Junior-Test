<?php

namespace App\Traits;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait ImageTrait{

    public function upLoadImage($file, $name)
    {
        $name_file = Str::slug($name).'.'.$file->getClientOriginalExtension();
        $file->move(public_path().'/storage/images/', $name_file);

        return $name_file;
    }

    public function deleteFile()
    {
        
    }

}