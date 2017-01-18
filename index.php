<?php include "header.php" ?>
<html>
<head>
    <title>EXO2</title>
    <meta charset="">
    <meta name="viewport" content="width=device-width">

    <!--style -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
</head>

<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="http://cdn.akamai.steamstatic.com/steam/clusters/frontpage/20c2376ce51067521d6712aa/page_bg_english.png?t=1446828489" alt="">
        </div>
        <div class="item">
            <img src="http://cdn.akamai.steamstatic.com/steam/clusters/frontpage/20c2376ce51067521d6712aa/page_bg_english.png?t=1446828489" alt="">
        </div>

        <div class="item">
            <img src="http://cdn.akamai.steamstatic.com/steam/clusters/frontpage/20c2376ce51067521d6712aa/page_bg_english.png?t=1446828489" alt="">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script> 
</body>
</html>