<?php
function displayAuthor(array $users): string
{
    foreach ($users as $user) {
        if ($user['email']) {
            return $user['full_name'];
        }
    }
    return 'Auteur inconnu';
}
function isValidMovie(array $movie): bool
{
    if (array_key_exists('is_enabled', $movie)) {
        $isEnabled = $movie['is_enabled'];
    } else {
        $isEnabled = false;
    }


    return $isEnabled;
}


function getMovies(array $movies): array
{
    $valid_movies = [];
    foreach ($movies as $movie) {
        if (isValidMovie($movie)) {
            $valid_movies[] = $movie;
        }
    }
    return $valid_movies;
}