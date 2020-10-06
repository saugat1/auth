# fb-autoreaction

Facebook Auto Reaction BOT 2020

# usage

You just need to edit an authentication data below.

<pre>
require('lib/fb.php'); // including bot class

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'youremail@example.com/945798765465465465'; // facebook username / email
$pass 		= 'toketkenyel'; // facebook passwod
$r_male		= '3'; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= '2'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$max_status	= '20'; // maximum reacted status
$token 		= 'EAAalksdjfas897f98sad7f89sad7f89sa7d89f7sad89f789sadf';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
</pre>

# cli usage

<pre>
root@tomi:~# php autoreaction.php

Status ID 23452345324532453 => female => reacted
Status ID 25234523452345324 => male => reacted

</pre>
