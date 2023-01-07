<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

function getAdminAsset($item)
{
    return asset('dashboard-assets') . '/' . $item;
}

function getUserAsset($item)
{
    return asset($item);
}

/**
 * @return string
 */
function getInitials($string = null)
{
    return array_reduce(
        explode(' ', $string),
        function ($initials, $word) {
            return sprintf('%s%s', $initials, substr($word, 0, 1));
        },
        ''
    );
}


function getExpiryDateString($start_date, $end_date)
{
    $start_date = Carbon::parse($start_date);
    $end_date = Carbon::parse($end_date);

    $diff = $start_date->diffInDays($end_date, false);

    if ($diff <= 0) {
        return array(
            'msg' => "Expired",
            'status' => 0
        );
    } else if ($diff > 30) {
        return array(
            'msg' => $end_date->diffInMonths($start_date)  . "  " .  Str::plural('month', $diff) . "  " . 'remaining',
            'status' => 1
        );
    } else {
        return array(
            'msg' => $diff . "  " . Str::plural('day', $diff) . "  " . 'remaining',
            'status' => 1
        );
    }
}


function isSelected($check, $condition)
{
    return $check == $condition ? 'selected' : '';
}


function isExpired($expiry_date)
{
    if (Carbon::now()->lt(Carbon::parse($expiry_date))) {
        return true;
    }
    return false;
}
