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

function cardRectangleWithRound(array $data):string
{
    setlocale(LC_TIME,'fr_FR');
    $startDate = strftime("%B %G", strtotime($data['start_at']));

    if (empty($data["end_at"])) {
        $endDate = 'aujourd\'hui';
    } else {
        $endDate = strftime("%B %G", strtotime($data['end_at']));
    }

    return '<div class="card-round">
                <div class="date">' . $startDate . ' <span>à</span> ' . $endDate . '</div>
                <div class="card-detail">
                    <div class="title-detail">
                        <h3 >' . $data['society'] . '</h3>
                    </div>
                    <div class="job-detail">
                        <p>' . $data['job'] . '</p>
                    </div>
                    <div class="body-detail">
                        <p>' . $data['detail'] . '</p>
                    </div>
                </div>
            </div>';
}