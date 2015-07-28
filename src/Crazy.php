<?php

namespace Acme;

/**
 * Class Crazy
 * @package Acme
 */
class Crazy
{

    /**
     * @param null $string
     * @return null|string
     * @throws \Exception
     */
    public function call($string = null)
    {
        if (is_null($string)) {
            throw new \Exception;
        }
        if (is_numeric($string)) {
            if ($string % 3 == 0 || strstr($string, '3')) {
                return 'aho';
            }
        }

        return (string) $string;
    }
}
