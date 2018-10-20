<?php
    if (!empty($_POST["name"]) && isset($_POST["submit"])) {
        $name = $_POST["name"];
        // $sessionid = $_COOKIE["sessionid"];
  
        // ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0)');
        // $contents = file_get_contents("https://www.instagram.com/$name/?__a=1");
        $curl = curl_init("https://www.instagram.com/$name/?__a=1");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Cookie: ds_user_id=5798741592"));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        $result = curl_exec($curl);
        var_dump($result);
        // echo $contents;
    }
    else {
        echo "<script type='text/javascript'>
            alert('Please input name');
            window.location.replace(\"http://localhost/authIG/index.php\");
        </script>";
        exit();
    }