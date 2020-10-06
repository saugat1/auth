<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("location: auth.php");
} else {
    $tkn = ['success' => true, 'loged' => true];
    if (isset($_GET['time'])) {
        $time = $_GET['time'];
        //check time is expired or not ;;; /
        $now = time();
        $sub = $now - $time;
        $t = $sub;
        if ($t > 3600) {
            unset($_SESSION['logged_in']);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal react bot site</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body id="">
    <div id="snow_fall" style="position: fixed; top: 0; left: 0; height: 100vh; width: 100vw;">

    </div>
    <div class="header">
        <h2 class="head">Reaction Bot By Nir
        </h2>
        <hr>
        <span>Block Fixed No Reaction Blocked... 😁</span>
        <hr>
    </div>
    <div class="profile">
        <a href="https://m.facebook.com/technicalnir" target="_blank" title="Admin of this site">
            <img src="https://graph.facebook.com/100027065658389/picture?type=large&width=120&height=120" alt="admin of bot site" srcset="" class="rounded-circle" style="border: 6px solid orange;"></a>
    </div>
    <div class="panel" style="z-index: 1000;">
        <button class="btn" data-toggle="modal" data-target="#exampleModal" style="padding: 0.5rem 2rem; margin-bottom: 15px;">Get Token</button>
        <div class="login">
            <h4>Login With Facebook</h4>
            <span>Enter a Valid Login Details to Activate Bot. Otherwise it won't work.</span>
            <div class="form-group"><label for="user">User Phone/Email</label>
                <br>
                <input type="text" name="user" id="user" class="user" placeholder="Enter Your Facebook Phone Number/Email">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <br>
                <input type="password" name="pass" id="pass" class="pass" placeholder="Enter Your Facebook Password">
            </div>
        </div>
        <div class="token">
            <br>
            <hr />
            <h4 style="padding: 10px 0;">Enter Your Token Here</h4>
            <div class="form-group">
                <label for="token"></label>
                <input type="text" name="token" id="token" class="token" placeholder="Paste Your token">
            </div>
        </div>
        <div class="submit">
            <label for="reaction">Choose Your Reaction Type</label><br>
            <select name="react" id="reaction">
                <option value="1">LIKE</option>
                <option value="2">LOVE</option>
                <option value="3">WOW</option>
                <option value="4">HAHA</option>
                <option value="7">SAD</option>
                <option value="8">ANGRY</option>
            </select><br><br>
            <button id="activate" title="Activate Bot">Activate Bot</button>
        </div>

    </div>
    <div class="footer" style="margin-top: 20px; z-index: 100;">
        Bot Users : 1 <br>
        👍 Developed by <a href="https://m.facebook.com/technicalnir" target="_blank" title="Developer of this Bot">
            Nir Rana Magar
        </a> &nbsp; 😍
    </div>

    <!--get token video modal Modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">watch video to get token</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="390px" type="text/html" src="https://www.youtube.com/embed/Kl_tpj-Qo-A?autoplay=1"></iframe>
                </div>

            </div>
        </div>
    </div>
    <div class="loading" style="width: 100%; height: 100vh; padding: 50px; position: fixed; top: 0%; left: 0; text-align: center; color: #444; background: rgba(0,0,0,0.6); z-index: 2000;">
        <div class="content" style="margin-top: 200px; background: #fff; padding: 50px;">
            <span class="text">Loading...</span> &nbsp; <img src="./ajax-loader.gif" alt="s" height="30" width="30"><br>
            Please Wait...
        </div>
    </div>
    <script src="./jquery.js"></script>
    <script src="./bootstrap.bundle.min.js"></script>
    <script src="./particles.js"></script>
    <script src="./app (2).js"></script>
    <script src="./app.js"></script>
</body>

</html>
<!-- /nothing  -->
<!-- founded  -->
<!-- developed by nir magar  -->