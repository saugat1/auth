<?php
session_start();
$yourKey = "madebynir";
if (isset($_POST['submit'])) {
    //get the current key value 
    $key = $_POST['password'];
    //check for the password correctionsl. 
    if ($key === $yourKey) {
        $_SESSION['logged_in'] = true;
        $time = time();
        header("location: index.php?time={$time}");
    } else {
        echo "<script>alert('your key is incorrect. ');</script>";
        echo "<script>setTimeout(function(){
            window.location.href = 'auth.php';
        }, 1000);</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal bot by nirmagar.</title>
    <style>
        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Courier New', Courier, monospace;
        }

        .container {
            height: 100vh;
            width: 100vw;
            background: #ddd;
        }

        .row {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 50px 20px 10px 20px;
        }

        @media(max-width: 762px) {
            .row {
                width: 100%;
            }
        }

        .head h3 {
            font-style: normal;
            text-transform: uppercase;
        }

        .input input[type='password'] {
            padding: 12px 15px;
            border: none;
            outline: none;
            margin-top: 12px;
            font-size: 1.1rem;
        }

        .buttons input[type='submit'] {
            width: 100%;
            margin-top: 18px;
            padding: 0.7rem 2rem;
            color: #fff;
            background: #342adf;
            border: 2px solid #342adf;
            outline: none;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="head">
                <h3>Enter Your Key to Contionue.</h3>
            </div>
            <div class="controls">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="input">
                        <input type="password" name="password" id="password" placeholder="Enter Your key to Contionue to Proceed.">
                    </div>
                    <div class="buttons">
                        <input type="submit" value="LOG IN" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>