<?php

namespace App\Helper\Client;

use App\Models\TheRides;

class SearchTheRides
{
    protected $location;

    public function __construct(TheRides $location)
    {
        $this->location = $location;
    }

    public static function searchStartLocation()
    {
        $location = TheRides::select('start_location')->distinct()->get();
        $html = '';
        foreach ($location as $item) {
            $html .= "<option value='{$item->start_location}'>{$item->start_location}</option>";
        }
        return $html;
    }

    public static function searchEndLocation()
    {
        $location = TheRides::select('end_location')->distinct()->get();
        $html = '';
        foreach ($location as $item) {
            $html .= "<option value='{$item->end_location}'>{$item->end_location}</option>";
        }
        return $html;
    }
}
