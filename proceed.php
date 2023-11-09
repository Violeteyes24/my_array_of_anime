<html>
<body>
<!-- showing off details, $POST - associative array of variables passed to current script via HTTP POST method -->
Welcome 
<?php echo $_POST["username"]; ?>
<br>
Your email address is:
<?php echo $_POST["password"]; ?>
<br>
</body>
</html>