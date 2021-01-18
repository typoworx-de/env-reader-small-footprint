<?php

if(is_file($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . '../.env'))
{
    foreach(explode(PHP_EOL, file_get_contents($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . '../.env')) as $env)
    {
        if(empty($env) && strpos($env, '=') === false) { continue; }
        putenv($env);
    }
}
