<?php

function Biodata()
{
	$name='iip shoifuddin';
	$age=25;
	$address='Kp. Wates Kec. Cigeulis Pandeglang - Banten';
	$hobbies = array("Fotografi","Robotik");
	$is_married = false;
	$list_school = array('SD'   => 'SDN 2 Waringinjaya',
						 'SMP'   => 'SMPN 1 Cigeulis',
						 'SLTA'   => 'SMKN 1 Pandeglang');
	$major = 'Universitas AMIKOM Yogyakarta';
	$skills = array('01' => 
					    [
							'name' => 'php',
							 'level' => 'beginer'
						],
					'02' => 
						[
							'name' => 'game',
							 'level' => 'advenced'
						]);
	$interest_in_coding = true;



	$data [] = array(
    'name'     => $name,
    'age'   => $age,
    'address' => $address,
    'hobbies' => $hobbies,
    'list_school' =>
    				[
    				'school'  => 
    							[
    								'SD'     => $list_school['SD'],
    								'SLTP'   => $list_school['SMP'],
    								'SLTA'   => $list_school['SLTA']
    							],
    				'major' => $major			
    				],
    'skills' => 
    			[
    				'01' => [
    							'skill_name' => $skills['01']['name'],
    							'level' => $skills['01']['level']
    						],
    				'02' => [
    							'skill_name' => $skills['02']['name'],
    							'level' => $skills['02']['level']
    						]

    			],
    'interest_in_coding' => $interest_in_coding
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

return $jsonfile;

}

//echo Biodata(); --> untuk mengecek function Biodata();


//file_put_contents('datajson.json', Biodata()); --> membuat file JSON


?>
