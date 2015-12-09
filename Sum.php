<?php

namespace vasac\travistest;

use axy\binary\Binary;

class Sum
{
    /**
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function plus($a, $b)
    {
        $a = Binary::getByteFromChar($a);
        $b = Binary::getByteFromChar($b);
        return chr($a + $b);
    }
}
