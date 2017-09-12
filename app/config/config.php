<?php

/* configuration for Pig Latin Translator */

define('TIMEZONE', 'Europe/Paris');
date_default_timezone_set(TIMEZONE);

// any Vowels to match
$vowels = 'aeiou';

// other rules
$oth = 'qu';

// logging
$logging = TRUE;

// path to log folder
$logging_path = __DIR__ . '/../../logging/Log.txt';