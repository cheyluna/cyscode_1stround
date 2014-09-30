<?php
class Chocolate extends AppModel
{
    const MIN_STRING_LENGTH = 1;
    const MAX_STRING_LENGTH = 50;

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
}
