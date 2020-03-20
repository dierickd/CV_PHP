<?php

function cardSkills(string $links, string $nameSkill):string
{
    return '<figure class="card">
                <img class="card-img" src="' . $links . '" alt="' . $nameSkill . '">
                <figcaption class="card-title">' . $nameSkill . '</figcaption>
            </figure>';
}