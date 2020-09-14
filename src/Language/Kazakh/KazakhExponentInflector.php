<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-09-14
 * Time: 21:50
 */

class KazakhExponentGetter implements ExponentGetter
{
    private static $exponent = [
        '',
        'мың',
        'миллион',
        'миллиард',
        'триллион',
        'квадриллион',
        'квинтиллион',
        'секстлион',
        'септиллион',
        'октиллион',
        'Миллионсыз',
        'Декиллион',
        'Декабрь',
        'Duodecillion',
        'Тредиллион',
        'Quattuordecillion',
        'Quindecillion',
        'Sexdecillion',
        'Сентендекиллион',
        'Octodecillion',
        'Novemdecillion',
        'Вигинтиллион',
    ];

    /**
     * @param int $power
     *
     * @return string
     */
    public function getExponent($power)
    {
        return self::$exponent[$power];
    }
}
