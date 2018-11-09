#!/usr/bin/env php
<?php
$link = getenv('POPCLIP_TEXT');

if (substr($link, 0, 10) === "thunder://") {
    $link = ltrim($link, 'thunder://');
    $link = base64_decode($link);
    $link = iconv('GBK', 'UTF-8//IGNORE', $link);
    $link = ltrim(rtrim($link, 'ZZ'), 'AA');
    exit($link);
}
if (substr($link, 0, 11) === "flashget://") {
    $link = ltrim($link, 'flashget://');
    $link = base64_decode($link);
    $link = iconv('GBK', 'UTF-8//IGNORE', $link);
    $link = trim($link, '[FLASHGET]');
    exit($link);
}
if (substr($link, 0, 7) === "qqdl://") {
    $link = ltrim($link, 'qqdl://');
    $link = base64_decode($link);
    $link = iconv('GBK', 'UTF-8//IGNORE', $link);
    exit($link);
}
