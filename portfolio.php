<?php
?>

<html lang='en'>
<head>

    <title>Andrew Swan</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One|Carter+One|Libre+Barcode+39+Extended+Text|Titan+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='normalize.css' />
    <link rel='stylesheet' type='text/css' href='styles.css' />
    <link rel='stylesheet' type='text/css' href='portfolio.css' />
<!--    <link rel='stylesheet' type='text/css' href='typewritter.css' />-->
    <script defer src='menu.js'></script>

</head>

<body>
<nav id='menuBtn' class='burger-menu' onclick='openNav()'>
    <div class='menu-top'></div>
    <div class='menu-middle'></div>
    <div class='menu-bottom'></div>
</nav>
<<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="index.php">About</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="contact.php">Contact</a>
    </div>
</div>
</div>
<!--<div id='wrapper'></div> //delete once site is complete for alignment only-->

<div class='page-control'>
    <button class='arrow-left'>
        <svg xmlns='http://www.w3.org/2000/svg' width='60' height='80' viewBox='0 0 50 80' xml:space='preserve'>
    <polyline fill='none' stroke='#a4a29e' stroke-width='1' stroke-linecap='round' stroke-linejoin='round' points='
	45.63,75.8 0.375,38.087 45.63,0.375'/>
  </svg>
    </button>
    <button class='arrow-right'>
        <svg xmlns='http://www.w3.org/2000/svg' width='60' height='80' viewBox='0 0 50 80' xml:space='preserve'>
    <polyline fill='none' stroke='#a4a29e' stroke-width='1' stroke-linecap='round' stroke-linejoin='round' points='
	0.375,0.375 45.63,38.087 0.375,75.8'/>
  </svg>
    </button>
</div>

<div class='container'>
    <div id='box1' class='box'>
        <div class='tagContainer'>
            <ul class='tags'>
                <li class='tagItem'>ES6</li>
                <li class='tagItem'>JAVASCRIPT</li>
                <li class='tagItem'>JQUERY</li>
                <li class='tagItem'>CSS</li>
                <li class='tagItem'>HTML</li>
            </ul>
        </div>
    </div>
    <div id='box2' class='box two' >
        <div class='tagContainer'>
            <ul class='tags'>
                <li class='tagItem'>ES6</li>
                <li class='tagItem'>JAVASCRIPT</li>
                <li class='tagItem'>BOOTSTRAP</li>
                <li class='tagItem'>SASS</li>
                <li class='tagItem'>GULP</li>
            </ul>
        </div>
    </div>
    <div id='box3' class='box three'>
        <div class='tagContainer'>
            <ul class='tags'>
                <li class='tagItem'>PHP</li>
                <li class='tagItem'>API</li>
                <li class='tagItem'>OOP</li>
                <li class='tagItem'>MYSQL</li>
                <li class='tagItem'>CURL</li>
            </ul>
        </div>
    </div>
    <div id='box4' class='box four'>
        <div class='tagContainer'>
            <ul class='tags'>
                <li class='tagItem'>PHP</li>
                <li class='tagItem'>MYSQL</li>
                <li class='tagItem'>MOBILE</li>
                <li class='tagItem'>UPLOADS</li>
            </ul>
        </div>
    </div>
</div>

</body>

</html>