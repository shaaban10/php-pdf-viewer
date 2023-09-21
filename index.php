<?php

// if(isset($_POST['submit'])){ 
//     header('Location:read.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Pdf File</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
<div class="container">
        <div class="wrapper">
            <h1 class="hero" > Read PDF using php script</h1>
            </div>
            <br>
            <br>
         <div class="wrapper">
                <img class="image" src="./R.png" alt="" width="200px" height="200px">    
        </div>
        <br>
            <br> 
        
            <div class="wrapper">
                <form method="POST">
                    <button type="submit" name="submit" value="submit" > 
                        <?php
                        if(isset($_POST['submit'])){ 
                            header('Location:read.php',"_blank");
                        }
                        ?>
                    Read Pdf</button>

                </form>
            </div>
            <div class="wrappper">
                <h3>made with <span>🦸🦸</span>by shaaban alahmed</h3>
            </div>
    </div>
</body>
</html>