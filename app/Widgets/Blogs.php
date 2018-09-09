<?php

namespace App\Widgets;

use App\Blog;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class Blogs extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Blog::count();
        $string = 'Blog';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-news',
            'title' => "{$count} {$string}",
            'text' => __('voyager::dimmer.user_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'view all blog posts',
                'link' => route('voyager.blogs.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Voyager::can('edit_blogs');
    }
}
