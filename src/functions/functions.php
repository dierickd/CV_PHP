<?php

function dateConvert(string $start, ?string $end): array
{
   if (!empty($end)) {
      $end = strftime("%B %G", strtotime($end));
   } else {
      $end = "aujourd'hui";
   }
   setlocale(LC_ALL, 'fr_FR.utf-8');
   return [strftime('%B %Y', strtotime($start)), $end];
}

function age(string $birthday): string
{
   $today = new DateTime();
   $birthdayFormat = new DateTime($birthday);
   return $today->diff($birthdayFormat)->y;
}