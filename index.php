<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" href="index1.css">

</head>
<body>
     <form action="dbConnection.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>UserName</label>
        <input type="text" name="uname" placeholder="UserName"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br> 
        <button type="submit">Login</button>
        <div onclick="window.location.href='./registreren.php'">Nog geen account?<br> REGISTREER!</div>
     </form>
</body>

</html>