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
    <link rel='stylesheet' type='text/css' href='typewritter.css' />
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
<div id='typewritter' class='css-typing'>
    <p>Hello I'm Andrew Swan a full-stack developer, specialising </p>
    <p>in front-end languages like <span>JavaScript</span>, <span>HTML</span> and <span>CSS</span> and </p>
    <p>back-end languages like <span>PHP</span> and <span>MySQL</span> checkout my portfolio. </p>
</div>
<div class='social-media'>
    <div class='linkedin'></div>
    <div class='github'></div>
    <div class='instagram'></div>
</div>
<div class='page-control'>
    <button class='arrow-left'>
        <a href="portfolio.php">
        <svg xmlns='http://www.w3.org/2000/svg' width='60' height='80' viewBox='0 0 50 80' xml:space='preserve'>
    <polyline fill='none' stroke='#a4a29e' stroke-width='1' stroke-linecap='round' stroke-linejoin='round' points='
	45.63,75.8 0.375,38.087 45.63,0.375'/>
        </svg>
        </a>
    </button>
    <button class='arrow-right'>
        <a href='portfolio.php'>
        <svg xmlns='http://www.w3.org/2000/svg' width='60' height='80' viewBox='0 0 50 80' xml:space='preserve'>
    <polyline fill='none' stroke='#a4a29e' stroke-width='1' stroke-linecap='round' stroke-linejoin='round' points='
	0.375,0.375 45.63,38.087 0.375,75.8'/>
  </svg>
        </a>
    </button>

</div>
</body>

</html>
