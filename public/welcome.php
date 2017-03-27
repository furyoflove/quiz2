<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quiz 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body>
    <header>
      <h1>Francis Mangornong's Quiz 2 Website</h1>
    </header>
    <main>
      <?php
        if (!isset($_COOKIE['first']) && !isset($_COOKIE['email']) ) { ?>
          <div class="myform">
            <form name="form" id="form" action="register.php" method="post">
              <fieldset>
                <legend>Send Me a Message!</legend>

                <label for="fname">First name:</label>
                <input type="text" name="fname"/><br><br>

                <label for="lname">Last name:</label>
                <input type="text" name="lname"/><br><br>

                <label for="email">Your email:</label>
                <input type="text" name="email"/><br><br>

                <input type="submit" value="submit">

              </fieldset>
            </form>
          </div>
        <?php }

        else {
          echo "<script>
                    document.getElementById('form').style.display = 'none';
                </script>";
          echo "Thank you ".$_COOKIE['first']. " for signing up with email ".$_COOKIE['email'];
        }
      ?>
    </main>
  </body>
</html>
