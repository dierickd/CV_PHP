<?php


function dateConvert(string $start, string $end):array
{
    (empty($end)) ? $end_at = 'aujourd\'hui' : $end_at = strftime("%B %G", strtotime($end));
    setlocale(LC_ALL, 'fr_FR.utf-8');
    return [strftime('%B %Y', strtotime($start)), $end_at];
}

function contact(array $data):string
{
    $today = new DateTime();
    $birthday = new DateTime($data['birthday']);
    $age = $today->diff($birthday)->y;
    $data['vehicle'] === true ? $vehicle ='Véhiculé' : $vehicle ='Non véhiculé';

    return '<ul class="contact-group">
                <li class="item-contact"><i class="fas fa-map-marker-alt"></i>' . $data['city'] . ', ' . $data['country'] . '</li>
                <li class="item-contact"><i class="fas fa-check"></i>' . $age . ' ans - ' . $vehicle .'</li>
                <li class="item-contact"><i class="fas fa-mobile-alt"></i>' . $data['phone'] . '</li>
                <li class="item-contact"><i class="far fa-envelope"></i>' . $data['email'] . '</li>
            </ul>';
}