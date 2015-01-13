<?php
/*http://www.catswhocode.com/blog/how-to-create-a-simple-and-efficient-php-cache */
// Cache the contents to a file

if(preg_match('/﻿/', ob_get_contents()))
{
    $str_data = preg_replace('/﻿/', '', ob_get_contents());
}
file_put_contents('cache.json', $str_data);