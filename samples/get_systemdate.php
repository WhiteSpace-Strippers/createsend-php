<?php

require_once '../csrest.php';

$wrap = new CS_REST_Wrapper_Base('Your API Key');

$result = $wrap->get_systemdate();

echo "Result of /api/v3/systemdate\n<br />";
if($wrap->was_successful($result)) {
    echo "Got system date\n<br />".$result['response'];
} else {
    echo 'Failed with code '.$result['code']."\n<br /><pre>";
    print_r($result['response']);
    echo '</pre>';
}