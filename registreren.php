<!DOCTYPE html>
<html>
<head>
<title>REGISTER</title>
<link rel="stylesheet" href="index1.css">

</head>
<body>
     <form action="connect.php" method="post">
        <h2>REGISTER</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>UserName</label>
        <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            placeholder="UserName"
          />
        </div><br>
        <label>Password</label>
        <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            placeholder="Password"
          />
        </div><br>
        <button type="submit">register</button>
        <button1 onclick="window.location.href='./index.php'">login</button1>
     </form>
</body>

</html>