<?php

namespace App\Voyager\ContentTypes;

use JD\Cloudder\Facades\Cloudder;
use TCG\Voyager\Http\Controllers\ContentTypes\BaseType;

class Image extends BaseType
{
    public function handle()
    {
        if ($this->request->hasFile($this->row->field)) {
            $file = $this->request->file($this->row->field);

            return Cloudder::upload($file)->getResult()['secure_url'];
        }
    }
}
