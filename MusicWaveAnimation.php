<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .music {
            width: 300px;
            height: 200px;
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
        }

        .music .bar {
            width: 12px;
            border-radius: 10px;
            background: white;
            animation: movement 1.5s ease-in-out;
        }

        @keyframes movement {
            0%, 100%{
                height: 2px;
            }
            50% {
                height: 80px;
            }
        }

        .music .bar:nth-child(1){
            background: #b65252;
            animation-delay: .2s;
        }

        .music .bar:nth-child(2){
            background: pink;
            animation-delay: .8s;
        }

        .music .bar:nth-child(3){
            background: #b65252;
            animation-delay: .6s;
        }

        .music .bar:nth-child(4){
            background: #b65252;
            animation-delay: .4s;
        }

        .music .bar:nth-child(5){
            background: #b65252;
            animation-delay: .2s;
        }

        .music .bar:nth-child(6){
            background: pink;
            animation-delay: .2s;
        }  

        .music .bar:nth-child(7){
            background: #b65252;
            animation-delay: .4s;
        }

        .music .bar:nth-child(8){
            background: pink;
            animation-delay: .6s;
        }  

        .music .bar:nth-child(9){
            background: #b65252;
            animation-delay: .8s;
        }

        .music .bar:nth-child(10){
            background: pink;
            animation-delay: .2s;
        }  
    </style>
</head>
<body>
    <?php
	echo "<h2>H₂O</h2>";
	echo "<br>";
	?>	 
    <div class="music">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>  

    </div>
</body>
</html>