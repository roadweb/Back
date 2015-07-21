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

/*
function exDate($created_at) {
	$dateNewFormat = array(
	[0] => date("d", strtotime($created_at)),
	[1] => date("F", strtotime($created_at)),
	[2] => date("Y", strtotime($created_at))
	);
	return $dateNewFormat();
}
*/