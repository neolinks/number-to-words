<?php

namespace NumberToWords\NumberTransformer;

use NumberToWords\Language\English\KazakhDictionary;
use NumberToWords\Language\English\KazakhExponentGetter;
use NumberToWords\Language\English\KazakhTripletTransformer;
use NumberToWords\Service\NumberToTripletsConverter;

class KazakhNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new KazakhDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new KazakhTripletTransformer($dictionary);
        $exponentInflector = new KazakhExponentGetter();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->useRegularExponents($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
