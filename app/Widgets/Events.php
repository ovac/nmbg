<?php

namespace App\Widgets;

use App\CalenderEvent;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class Events extends BaseDimmer
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
        $count = CalenderEvent::count();
        $string = 'Calender Event';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-window-list',
            'title' => "{$count} {$string}",
            'text' => __('voyager::dimmer.user_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'view all events',
                'link' => route('voyager.calender-events.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Voyager::can('edit_calender_events');
    }
}
