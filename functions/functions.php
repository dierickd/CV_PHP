<?php

function cardSkills(string $links, string $nameSkill):string
{
    return '<figure class="card">
                <img class="card-img" src="' . $links . '" alt="' . $nameSkill . '">
                <figcaption class="card-title">' . $nameSkill . '</figcaption>
            </figure>';
}

function portfolio(string $link, string $name, string $file, string $techno):string
{
    return '<div class="card-project">
                    <img class="card-project-img" src="../img/' . $file . '" alt="' . $name . '">
                    <div class="card-project-footer">
                        <span class="name-site">' . $name . '</span>
                        <span>' . $techno . '</span>
                        <a href="' . $link . '" target="_blank">Voir le site</a>
                    </div>
                <a href="' . $link . '" target="_blank" class="hover">
                    ' . $name . '
                    <span>' . $techno . '</span>
                </a>
            </div>';
}