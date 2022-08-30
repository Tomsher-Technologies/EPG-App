<?php

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
