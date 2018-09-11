<?php

namespace App\Voyager;

use App\Voyager\ContentTypes\Image as ContentImage;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as BaseVoyagerBaseController;

class VoyagerBaseController extends BaseVoyagerBaseController
{
    public function getContentBasedOnType(Request $request, $slug, $row, $options = null)
    {
        switch ($row->type) {
            /********** IMAGE TYPE **********/
            case 'image':
                return (new ContentImage($request, $slug, $row, $options))->handle();
            /********** ALL OTHER TEXT TYPE **********/
            default:
                return parent::getContentBasedOnType($request, $slug, $row, $options);
        }
    }
}
