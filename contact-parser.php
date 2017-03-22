<?php

function parseContacts($filename)
{
   
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
	foreach ($contentsArray as $item){
		
	}
$contentsArray = explode("\n", $contents);
fclose($handle);

    return $contentsArray;
}

var_dump(parseContacts('contacts.txt'));
