<!doctype html>
<html>
    <head>
        <title>Mon site</title>
    <head>
    <body>
        <?php
          if (isset($_POST["name"])) {
                echo "Hello ".$_POST["name"];
          }
          else { ?>
            <form name="form" action="" method="post">
                <input type="text" name="name" value="">
                <input type="Submit" value="submit">
            </form>
        <?php
          }
          ?>
    </body>
</html>