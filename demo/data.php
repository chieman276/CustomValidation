<?php
include_once 'Curl.php';
$objCurl = new cURL();
echo $objCurl->custom_curl(
    'https://james.codegym.vn/course/view.php?id=543&section=8',
    '',
    'cookies-james-codegym-vn.txt'
);
