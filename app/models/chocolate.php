<?php
class Chocolate extends AppModel
{
    const MIN_STRING_LENGTH = 1;
    const MAX_STRING_LENGTH = 50;
    const ONE_CHARACTER = 1;
    const SINGLE_INSTANCE = 1;

    public $validation = array(
        'raw_string' => array (
            'length' => array (
                'validate_between', self::MIN_STRING_LENGTH, self::MAX_STRING_LENGTH,
            ),
            'format' => array (
                'lower_case_letters_only',
            ),
        ),
    );

    public function validateString(Chocolate $raw_string)
    {
        if (!$raw_string->validate()) {
            throw new ValidationException('invalid string');
        }
    }

    public function getRemainingBars($raw_string)
    {
        $array = $this->convertToArray($raw_string);

        while ($this->hasDuplicates($array)) {
            array_pop($array);
        }

        $remaining_bars = $this->getArrayCount($array);

        return $remaining_bars;
    }

    private function convertToArray($raw_string)
    {
        return str_split($raw_string);
    }

    private function hasDuplicates($array)
    {
        $temp_string = $this->convertToString($array);

        foreach (count_chars($temp_string, self::ONE_CHARACTER) as $v) {
            if ($v > self::SINGLE_INSTANCE) {
                return true;
            }
        }

        return false;
    }

    private function convertToString($array)
    {
        return implode('', $array);
    }

    private function getArrayCount($string_array)
    {
        return count($string_array);
    }
}
