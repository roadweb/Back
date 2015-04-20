<?php
/**
 * Permet d'ajouter la classe active en fonction de la route
 * @param $path
 * @return bool|string
 */
function active($path)
{
    $request = \Illuminate\Support\Facades\Request::path();
    $match = $request === '/' ? '/' : explode('/', $request)[0];

    if ($match === $path) {
        return 'class=active';
    }

    return false;
}