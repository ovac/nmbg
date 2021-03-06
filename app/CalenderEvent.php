<?php

namespace App;

use App\CalenderEvent;
use Illuminate\Database\Eloquent\Model;
use MaddHatter\LaravelFullcalendar\Event;

class CalenderEvent extends Model implements Event
{

    protected $fillable = [
        'end',
        'start',
        'title',
        'all_day',
        'description',
    ];

    protected $dates = ['start', 'end'];

    /**
     * Get the event's id number
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return (bool) $this->all_day;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Optional FullCalendar.io settings for this event
     *
     * @return array
     */
    public function getEventOptions()
    {
        return [
            'color' => $this->background_color,

            'url' => $this->getUrl(),
        ];
    }

    public function getUrl()
    {
        if (auth()->user()->can('browse', app(CalenderEvent::class))) {
            return '/admin/calender-events/' . $this->id . '/edit';
        }
    }
}
