<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait ImageTrait{

    public function upLoadImage($file, $name)
    {
        $name_file = time().Str::slug($name).'.'.$file->getClientOriginalExtension();
        $file->move(public_path().'/storage/images/', $name_file);

        return $name_file;
    }

}