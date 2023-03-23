<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoeken</title>
    <link rel="stylesheet" href="zoeken.css">
</head>
<body>
    <?php 
        require_once("menu.php");
    ?>
    <div id="white-box4"><h1></h1>
    <div id="white-box5"><h1>        
        <div id="white-box5"><h1>        
            <form>
            <input type="text" placeholder="Search for users..." id="search-bar">
            <button type="submit" onclick="searchUsers()">Search</button>
          </form>
    <div id="search-results"></div></h1>
</body>
</html>