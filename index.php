<?php
    if (isset($_GET["code"])) {
        $client_id = 'cb2c9e991cc543e59770961e556b202f';
        $client_secret = '99552e21beb944adbd5cf1fa149a190d';
        $grant_type = 'authorization_code';
        $redirect_uri = 'http://localhost/IG/index.php';
        $code = $_GET["code"];

        $curl = curl_init('https://api.instagram.com/oauth/access_token');
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, "client_id=$client_id&client_secret=$client_secret&grant_type=$grant_type&redirect_uri=$redirect_uri&code=$code");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        echo $result;
        // $r = json_decode($result, true);
        // echo $_COOKIE["sessionid"];

        // echo "<a href=\"https://www.instagram.com/nasa/?__a=1\">Link</a>";
        // header("location: https://www.instagram.com/nasa/?__a=1");
        // $cookie_name = "phurinat";
        // $cookie_value = "John Doe";
        // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        // $name = $_COOKIE["sessionid"];
        // echo $name;
        // echo "<script type='text/javascript'>
        // alert($name);</script>";
        // header("location: index.php?s=$name");
        // header("location: inputData.php");


        // header("location: inputData.php");
        // 5798741592%3AAs5GbGE8o4wpXL%3A28
        // 5798741592%3AAs5GbGE8o4wpXL%3A28

    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="insta-default">
        <a id="login" href="https://api.instagram.com/oauth/authorize/?client_id=cb2c9e991cc543e59770961e556b202f&redirect_uri=http://localhost/IG/index.php&response_type=code">
            Login with Instagram
        </a>
    </div>
    <script>
        document.cookie = "username=John Doe";
    </script>
</body>
</html>
