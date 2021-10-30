<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image" href="./icons/awit.png">
    <link rel="stylesheet" href="./awit.css">
    <title>Welcome!</title>
</head>
<body>
    <header id="header">
        <div class="welcome">
            <h1>
                <?php 
                    $name = $_POST["clientName"];
                    for ($i = 0; $i < strlen($name); $i++) {
                        if (substr($name, $i, 1) == " "){
                            echo "Hello " . substr($name, 0, $i) . " !";
                            break;
                        }
                    }
                ?>
            </h1>
        </div>
        <div class="container">
            <h2><?php $awit = new awit; echo "<strong>"; $awit->client_Name(); echo "</strong> works at <span id='line'>"; $awit->company_Name(); echo "</span>.";?></h2>
            <h2><?php $awit = new awit; echo "A company based in <span>"; $awit->company_Address(); echo "</span>.";?></h2>
            <h2><?php $awit = new awit; echo "Employed since <span>"; $awit->Employment_Date(); echo "</span>.";?></h2>
            <div class="socials">
                <a href="https://www.facebook.com/ValCabitac" target="_blank"><img src="./icons/facebook-brands.svg" alt=""></a>
                <a href="https://www.instagram.com/val_xiv" target="_blank"><img src="./icons/instagram-brands.svg" alt=""></a>
                <a href="https://www.tiktok.com/@val.xiv" target="_blank"><img src="./icons/tiktok-brands.svg" alt=""></a>
                <a href="./index.html" class="back"><img src="./icons/arrow-alt-circle-left-solid.svg" alt=""></a>
            </div>
        </div>
    </header>
    
    <?php
        class awit{
            function client_Name(){
                echo $_POST["clientName"];
            }
            function company_Name(){
                echo $_POST["companyName"];
            }
            function company_Address(){
                echo $_POST["companyAddress"];
            }
            function Employment_Date(){
                $dmy = $_POST["employmentDate"];
                $d = substr($dmy, 8, 2);
                $m = substr($dmy, 5, 2);
                $y = substr($dmy, 0, 4);
                $month = array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                $mm = $month[((int)$m)];
                echo $mm . " " . $d . ", " . $y;
            }
        }
    ?>
</body>
</html>