<?php

namespace App\Helpers;

class Helper
{
    public static function getRandTheme()
    {
        $themes = [
            'purple',
            'blue',
            'pink',
            'orange',
            'green',
        ];

        return $themes[array_rand( $themes, 1 )];
    }
}
