<?php

function validation(object $data)
{
    $error = [];

    if (empty($data['your_name'])) {
        $error[] = '氏名は必須';
    }

    return $error;
}
