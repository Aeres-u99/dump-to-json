<?php

$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$alien_description = $_POST['aliendescription'];  #even if alieninscription doesnt exists in html, php poses no problemo. its alright by it hahahahahaha
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$to = 'shiroiakuma97@yandex.com';
$sub = "Kek";
echo 'Thanks for submitting the form ' . '<br />';
echo 'You were abducted on ' . $when_it_happened . '<br />';
echo 'and were gone for ' . $how_long . '<br />';
echo 'You described the aliens as: ' . $alien_description . '<br />';
echo 'was fang there? ' . $fang_spotted . '<br />';
echo 'Thank you, your email is: ' . $email;

mail($to,$sub,$email);

$response=array();
$response['json_data'] = array('when_it_happened'=>$when_it_happened,'how_long'=>$how_long,'alien_description'=>$alien_description,'fang_spotted'=>$fang_spotted);
echo $response;
print_r($response);
$fp = fopen('/home/akuma/results.json','w');
echo "opening pointer";
fwrite($fp,json_encode($response));
echo "closing poinettr";
fclose($fp);

?>
