<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

function getAdminAsset($item)
{
    return asset('dashboard-assets') . '/' . $item;
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

    $diff = $end_date->diffInDays($start_date);

    if ($diff == 0) {
        return "Expired";
    } else if ($diff > 30) {
        return $end_date->diffInMonths($start_date)  . "  " .  Str::plural('month', $diff) . "  " . 'remaining';
    } else {
        return $diff . "  " . Str::plural('day', $diff) . "  " . 'remaining';
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
