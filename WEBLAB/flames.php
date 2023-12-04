<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="flames.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <title>FLAMES: Compatibility calculator</title>
</head>

<body>
    <div class="container">
        <div class="row text-center title">
            <h2>Compatibility result</h1>
            <h1>
                <?php
                    require 'solution.php';

                    $solution = new solution();
                    $compatibility = $solution->computeFlames($_POST['name1'], $_POST['name2']);
                    echo $compatibility;
                ?>
            </h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="container bg square-container rounded pad1">
                <h3 class="text-center t1">Your profile</h1>
                <h4 class="t2">Name: <span style="color: black;"> <?php echo $_POST['name1']; ?> <span> </h2> 
                <h4 class="t2">Birthday: <span style="color: black;"> <?php echo date('F j, Y', strtotime($_POST['dob1'])); ?> </span> </h2>
                <h4 class="t2">Zodiac sign: 
                    <?php 
                       require 'zodiac.php';

                       $zodiacSign = new zodiac();
                       $sign = $zodiacSign->getZodiacSign($_POST['dob1']);
                       echo $sign;
                    ?>
                       </h2>
                    <div class="text-center">
                       <?php
                            $icon = $zodiacSign->getIcon($sign);
                            echo "<img src='$icon' alt='$sign' class='img-fluid heart zodiac'>";
                       ?>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center cp">
                <img src="icons/heart.png" alt="heart" class="img-fluid heart">
                 <div class="overlay-text">
                    <span>
                        <?php
                            $percentage = $solution->computePercentage($compatibility);
                            echo $percentage;
                        ?>
                        </span>
                 </div>
            </div>
            <div class="col">
                <div class="container bg square-container rounded pad1">
                <h3 class="text-center t1">Crush's profile</h1>
                <h4 class="t2">Name: <span style="color: black;"> <?php echo $_POST['name2']; ?> <span></h2>
                <h4 class="t2">Birthday: <span style="color: black;"> <?php echo date('F j, Y', strtotime($_POST['dob2'])); ?> </span> </h2>
                <h4 class="t2">Zodiac sign:
                    <?php 
                       $sign2 = $zodiacSign->getZodiacSign($_POST['dob2']);
                       echo $sign2;
                    ?>
                     </h2>
                <div class="text-center">
                    <?php
                         $icon = $zodiacSign->getIcon($sign2);
                        echo "<img src='$icon' alt='$sign2' class='img-fluid heart zodiac'>";
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col text-end cpad">
                    <button type="button" class="btn" id="btn" onclick="window.location.replace('index.html')">Try again</button>
                </div>
            </div>
        
    </div>



    

</html>
