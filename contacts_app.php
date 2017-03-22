<?php

function parseContacts()
{	clearstatcache();
	echo "-------------------\n";
	echo "NAME:   |   NUMBER: \n";
	echo "-------------------\n";
	$filename = "contacts.txt";
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
    echo $contents;
    options();
// echo(parseContacts('contacts.txt'));
}
function addContact(){

	$filename = 'contacts.txt';

	$handle = fopen($filename, 'a');
	fwrite(STDOUT,"\nAdd First Name: ");
	$fname = trim(fgets(STDIN) );
	fwrite(STDOUT,"\nAdd Last Name: ");
	$lname = trim(fgets(STDIN) );
	fwrite(STDOUT, "Add Phone Number: ");
	$number =trim(fgets(STDIN));
	

	fwrite(STDOUT, "Is this correct? Y or N: ");
	$correct = trim(fgets(STDIN));

	if($correct == "y"){
		fwrite($handle, PHP_EOL . $fname . " " . $lname . " | " . $number);
 		
 		echo "\n---------------\nNew Contact Added!\n";
    	echo(parseContacts('contacts.txt'));
    	
    	options();
    }else{
    	fwrite(STDOUT,"\nContact was not added");
    	options();
    }	
	

  
}

function deleteCon(){ 
	$filename = "contacts.txt";
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
	$contentsarray = explode("\n", $contents);
	fclose($handle);
	

	print_r($contentsarray);

	
	fwrite(STDOUT,"Which contact would you like to delete?\n");
	$searchDelete = strtolower(trim(fgets(STDIN)));
	$result = False;
	foreach ($contentsarray as $key => $contact){
		if(strpos(strtolower($contact), $searchDelete) !== False){
			$result = $key;
			$resultName = $contact;
			break;
		}
	}

	if ($result !== False){
		fwrite(STDOUT,"Are you sure you want to delete $resultName? y or n: ");
		$sure = trim(fgets(STDIN));
			if($sure == "y"){
				$handle = fopen($filename, 'w');
				unset($contentsarray[$result]);
				$contents = implode("\n", $contentsarray);
				fwrite($handle, $contents);
		    	fwrite(STDOUT,"\n--------------\nThe following contact was deleted: $resultName\n---------------\n");
		    	echo(parseContacts('contacts.txt'));
		    	

		    	options();
		    }else{
		    	fwrite(STDOUT,"\n-------------\n$resultName was not deleted");
		    	options();
		    }	
	}else{
		fwrite(STDOUT,"Contact not found\n");
		options();

	}


}

function searchCon(){
	$filename = "contacts.txt";
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
	$contentsarray = explode("\n", $contents);
	fclose($handle);

	fwrite(STDOUT,"---------\nSearch Names: ");
	$searchDelete = strtolower(trim(fgets(STDIN)));
	fwrite(STDOUT,"-----------\nResults:\n-----------\n");
	$results = [];
	

	foreach ($contentsarray as $contact){
		if(strpos(strtolower($contact), $searchDelete) !== False){
			$results[] = $contact;
			
		}
	}

	foreach($results as $result){
		echo "$result\n";
	} 
	options();
}

function options(){
	fwrite(STDOUT,"\n\n---------------\n CONTACTS MENU \n---------------\n1: View Contacts\n2: Add New Contact\n3: Delete a Contact\n4: Search Contacts\n5: Exit\n");
	$prompt = fwrite(STDOUT,"Select Option: ");
	$select = (fgets(STDIN));
if ($select == 1){
	parseContacts();
}elseif($select == 2){
	addContact();
}elseif($select == 3){
	echo deleteCon();
}elseif($select == 4){
	echo searchCon();
}elseif($select == 5){
	exit();
}else{
	fwrite(STDOUT,"You must select an option 1-5.");
	restart();
}
}
options();
function restart(){
	options();

}


