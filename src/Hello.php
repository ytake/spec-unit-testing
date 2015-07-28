<?php

namespace Acme;

/**
 * Class Hello
 * @package Acme
 */
class Hello
{

    /**
     * @param $string
     * @return string
     * @throws \Exception
     */
    public function call($string)
    {
        if (is_null($string)) {
            throw new \Exception;
        }
        if (is_numeric($string)) {
            if ($string % 3 == 0 || strstr($string, '3')) {
                return 'aho';
            }
        }

        return $string;
    }
}
