<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    public function imageUrl()
    {
        return '/storage/'.$this->image;
    }

    public function fileUrl()
    {
        $file = json_decode($this->file);

        if (! $file || (! isset($file[0])) ) {
            return '#';
        }

        return '/storage/'.$file[0]->download_link;   
    }
}
