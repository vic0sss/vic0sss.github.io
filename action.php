<?php

if (!$_POST["password"]=="login password")
{
  echo "Wrong password!";
}
?>

<form action="" method="post">
<p><input type="password" name="pwd" autofocus></p>
<p><input type="submit" /></p>
</form>
