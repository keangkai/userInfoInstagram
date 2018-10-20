<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User info</title>
</head>
<body>
    <!-- <img class="logo" src="http://www.dallasarboretum.org/assets/img/instagram-word.png"> -->
    <form action="getData.php" method="post">
        <input type="text" name="name" id="input" autofocus>
        <input type="submit" value="search" name="submit">
    </form>

    <script>
        input = document.querySelector("#input");
        window.addEventListener("load", function () {
            input.value = "";
        });
    </script>
</body>
</html>