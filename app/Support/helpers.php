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
        return "class='active'";
    }

    return false;
}

/**
 * Permet d'ajouter la classe active en fonction de la route
 * @param $post
 * @param string $class
 * @return bool|string
 */
function sticky($post, $class = 'default')
{
    if($post) return $class;

    return 'default';
}

function dateConvert($month) {
	switch ($month) {
    case 'January':
        return 'Janvier';
        break;
    case 'February':
        return 'Février';
        break;
    case 'March':
        return 'Mars';
        break;
    case 'April':
        return 'Avril';
        break;
    case 'May':
        return 'Mai';
        break;
    case 'June':
        return 'Juin';
        break;
    case 'July':
        return 'Juillet';
        break;
    case 'August':
        return 'Août';
        break;
    case 'September':
        return 'Septembre';
        break;
    case 'October':
        return 'Octobre';
        break;
    case 'November':
        return 'Novembre';
        break;
    case 'December':
        return 'Décembre';
        break;
	}
}


?>