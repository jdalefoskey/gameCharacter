<!--   
Johnny Foskey
2/26/21
CTI-110
This file is the php file for game intro

 Algorithm for game_intro.php
        Receive CharName,CharType,expTokens,healthTokens,supplyTokens from game-intro.html
        totalCost = totalExperienceTokens / 2 + totalHealthTokens / 10 + totalSupplyTokens / 25
        Display CharName,CharType,totalExperienceTokens,totalHealthTokens,totalSupplyTokens,totalCost
        End
-->


<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Foskey-A4-game-intro.css">  <!--link to style sheet-->
    <title>Character Creation</title>
</head>
<body>
    <img src="Foskey-A4-image.jpg" alt="character creation picture">    <!--image tag-->
    <?php
        $charName = $_POST['charName'];  // creating varianbe charName from post results
        $charType = $_POST['charType'];  // creating varianbe charType from post results
        $healthTokens = $_POST['healthTokens'];  // creating varianbe healthTokens from post results
        $expTokens = $_POST['expTokens'];  // creating varianbe expTokens from post results
        $supplyTokens = $_POST['supplyTokens'];  // creating varianbe supplyTokens from post results
        $totalCost = $healthTokens / 10 + $expTokens / 2 + $supplyTokens / 25;  // creating variable totalCost by calculating gold coins
        
        // print statements below will print to the updated html screen
        print("<h1>You have created $charName the $charType !</h1>");
        print("<p>$charName has $healthTokens health tokens, $expTokens experience tokens, 
              and $supplyTokens supply tokens.</p>");
        print("$charName has spent $totalCost gold pieces.");

    ?>
    <p>
    <a href="Foskey-A4-game-intro.html">Return to form</a>  <!--anchor tag so you can return to previous screen -->
    </p>
</body>
</html>