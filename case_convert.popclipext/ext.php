#!/usr/bin/env php
<?php
$word = getenv('POPCLIP_TEXT');
if (strpos($word, '_')) {
    exit(toCamelCase($word));
}
echo toSnakeCase($word);

function toCamelCase($uncamelized_words, $separator = '_')
{
    $uncamelized_words = str_replace($separator, " ", strtolower($uncamelized_words));
    return str_replace(" ", "", ucwords($uncamelized_words));
}

function toSnakeCase($camelCaps, $separator = '_')
{
    return strtolower(preg_replace('/[A-Z]([a-z]+|[A-Z]{1,2}?)(?=[A-Z]|$)/', $separator . "$0", lcfirst($camelCaps)));
}
