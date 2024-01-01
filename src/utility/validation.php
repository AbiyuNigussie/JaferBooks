<?php


function isEmpty($var, $text, $location, $ms, $data)
{

    if (empty($var)) {
        $em = "* The " . $text . " is required";
        header("Location: $location?$ms=$em&$data");
        exit;
    }
    return 0;
}


function isBookId($var, $text, $location, $ms, $data)
{
    $pattern = '/^BK\d{3}$/';

    if (!preg_match($pattern, $var)) {
        $em = "Error: Please enter a valid" . $text . " in the format BK123.";
        header("Location: $location?$ms=$em&$data");
        exit;
    }
    return 0;
}

function isEventId($var, $text, $location, $ms, $data)
{
    $pattern = '/^EV\d{3}$/';
    if (!preg_match($pattern, $var)) {
        $em = "Error: Please enter a valid" . $text . " in the format EV123.";
        header("Location: $location?$ms=$em&$data");
        exit;
    }
}
