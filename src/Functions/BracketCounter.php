<?php

namespace MathExampleLib\Functions;

use MathExampleLib\Exceptions\InvalidExampleException;

class BracketCounter
{
    /**
     * @param string $example
     *
     * @return bool
     *
     * @throws InvalidExampleException
     */
    public static function isCorrectExample(string $example): bool
    {
        if (!self::validateExample($example)){
            throw new InvalidExampleException();
        }

        return self::countLeftBrackets($example) === self::countRightBrackets($example);
    }

    private static function countLeftBrackets(string $example): int
    {
        return substr_count($example, '(');
    }

    private static function countRightBrackets(string $example): int
    {
        return substr_count($example, ')');
    }

    private static function validateExample($example): bool
    {
        return preg_match("/^[\(\)\s)]+$/", $example);
    }

}