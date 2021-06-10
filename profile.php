<?php
session_start();
if (isset($_SESSION["id"]))
{
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Profile Edit</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;500;700&display=swap" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>

<?php
if (isset($_SESSION["id"]))
{
?>
    <nav class="topnav">
        <a href="index.php" class="logo"><img src="img/logo.png" alt="logo" />   OnlineLibrary</a>
        <a href="includes/logout.inc.php" class="buttonnav">Logout</a>
    </nav>

<?php
}
else
{
?>

    <nav class="topnav">
        <a href="index.php" class="logo"><img src="img/logo.png" alt="logo" />   OnlineLibrary</a>
    </nav>

<?php   
}
?>
    
    <div class="left-block">
        <h1>Profile</h1>
        <a href="#openModal"><img class="avatar" src="/webpage <?php echo $_SESSION["profileimage"]; ?>" alt="avatar" width="150" height="150"></a>
        <h2 style="color: #728091;"><?php echo $_SESSION["username"]; ?></h2>
    </div>

    <div class="right-block">
        <h1>My Library</h1>
        <div class="book">
            <img alt="" src="">
        </div>
        <div class="book">
            <img alt="" src="">
        </div>
        <div class="book">
            <img alt="" src="">
        </div>
        <div class="book">
            <img alt="" src="">
        </div>
        <div class="book">
            <img alt="" src="">
        </div>
    </div>

    <div id="openModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Change avatar</h1>
            <a href="#close" title="Close" class="close">×</a>
          </div>
          <div class="modal-body">
            <div>
                <form action="includes/profile.inc.php" method="POST" enctype="multipart/form-data">
                    <input class="inputfile" type="file" name="profileimage" accept="image/*">
                    <button type="submit" name="edit">Edit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

        <footer>

        </footer>
        
        <script src="js/script.js"></script>
    </body>
    </html>

<?php
}
?>