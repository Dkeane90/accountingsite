<?php

// Helper function that returns the basePath

function basePath($path)
{
    return __DIR__ . DIRECTORY_SEPARATOR . $path;
}


// Loadview function

function loadView($view)
{
    require basePath("views/{$view}.view.php");
}

function loadPartial($partial)
{
    require basePath("views/partials/{$partial}.php");
}

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}
