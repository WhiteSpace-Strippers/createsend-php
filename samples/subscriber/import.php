<?php

require_once '../../csrest_subscribers.php';

$wrap = new CS_REST_Subscribers('Your list ID', 'Your API Key');

$result = $wrap->import(array(
array(
	    'EmailAddress' => 'Subscriber email',
	    'Name' => 'Subscriber name',
	    'CustomFields' => array(
array(
	            'Key' => 'Field name',
	            'Value' => 'Field Value'
	            )
	            )
	            ),
	            array(
	    'EmailAddress' => '2nd Subscriber email',
	    'Name' => '2nd Subscriber name',
	    'CustomFields' => array(
	            array(
	            'Key' => 'Field name',
	            'Value' => 'Field Value'
	            )
	            )
	            )
	            ), true);

	            echo "Result of POST /api/v3/subscribers/{list id}/import.{format}\n<br />";
	            if($wrap->was_successful($result)) {
	                echo "Subscribed with results <pre>";
	                print_r($result['response']);
	            } else {
	                echo 'Failed with code '.$result['code']."\n<br /><pre>";
	                print_r($result['response']);
	            }
	            echo '</pre>';