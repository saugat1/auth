<?php
////////////script by nir magar /////////////////2020 copyright by nirmalhx.......///
require_once('lib/fb.php');
///////////////////save all data to json for first time if there is no any or array is emptyl... wowo amaxing to see you boys how its this.. 
/////////////////////
$file = "auth_data.json";
//open the existing json file ////////////////////////
$open = file_get_contents($file);
//read and decode this json formated file. ////////////////////////////
$data = json_decode($open, true);
//after json  converted to associativ array check values //////////////////

if(isset($_POST['user'], $_POST['pass'], $_POST['reaction'], $_POST['token'])){
    $newData = array(
        "user" => $_POST['user'],
        "pass" => convert_uuencode($_POST['pass']),
        "token" => convert_uuencode($_POST['token']),
        "type" => $_POST['reaction'],
        "time" => time()
    );
    $data[0] = $newData;

    //after the data is added to array encode it to json ///////////////////
    $packUp = json_encode($data, JSON_PRETTY_PRINT);
    //put data to json file /////////////////////////
    $packUpd = file_put_contents("auth_data.json", $packUp);
    if ($packUpd) {
        // echo "data success"; //////////////////////////////
    } else {
        echo "failed";
    }

}
// exit();
//////////////////////////////////////////////[authenication form json data.. ]///////////////////////////////////////////

//fetch form json data //////////////////////
$read = file_get_contents($file);
$json = json_decode($read, true);
$user		= $json[0]['user']; // facebook username / email //////////////////////////////
$pass 		= convert_uudecode($json[0]['pass']); // facebook passwod  /////////////////////////
$r_male		= $json[0]['type']; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8 ////////////////////////////
$r_female	= $json[0]['type']; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8 /////////////////////
$max_status	= '02'; // maximum reacted status //////////////////////////
$token 		= convert_uudecode($json[0]['token']);
// echo $token, $user, $pass, $r_female;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// exit();
$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}
//for automatic navigator use this 
// $f = "auth_data.json";
// $o = file_get_contents($f);
// $j = json_decode($o, TRUE);

// echo $userAgent; exit;
//making instance of class reaction /////////////////////////
$reaction = new Reaction();
//calling the method of class reaction to send_reaction method /////////////////////////////
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);