<?php

function dateConvert(string $start, string $end = "aujourd'hui"):array
{
    if (!empty($end)) {
        $end = strftime("%B %G", strtotime($end));
    }
    setlocale(LC_ALL, 'fr_FR.utf-8');
    return [strftime('%B %Y', strtotime($start)), $end];
}

function age(string $birthday):string
{
    $today = new DateTime();
    $birthdayFormat = new DateTime($birthday);
    return $today->diff($birthdayFormat)->y;
}