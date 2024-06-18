<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Field</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Orbitron:700);
        #space, .stars {
            overflow: hidden;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
        .star{
            background-image: 
            radial-gradient(2px 2px at 20px 30px, #eee, rgba(0,0,0,0)), 
            radial-gradient(2px 2px at 40px 70px, #fff, rgba(0,0,0,0)),
            radial-gradient(2px 2px at 50px 160px, #ddd, rgba(0,0,0,0)),
            radial-gradient(2px 2px at 90px 40px, #fff, rgba(0,0,0,0)),
            radial-gradient(2px 2px at 130px 80px, #fff, rgba(0,0,0,0)),
            radial-gradient(2px 2px at 160px 120px, #ddd, rgba(0,0,0,0)),;
            background-repeat: repeat;
            background-size: 200px 200px;
            animation: zoom 5s infinite;
            opacity: 0;
        }
        .star:nth-child(1){
            background-position: 50% 50%;
            animation-delay: 0s;
        }
        .star:nth-child(2){
            background-position: 20% 60%;
            animation-delay: 1s;
        }
        .star:nth-child(3){
            background-position: -20% - 30%;
            animation-delay: 2s;
        }
        .star:nth-child(4){
            background-position: 40% 80%;
            animation-delay: 3s;
        }
        .star:nth-child(1){
            background-position: -20% 30%;
            animation-delay: 4s;
        }
        @keyframes zoom {
            0% {
                opacity: 0;
                transform: scale(0.5);
                animation-timing-function: ease-in;
            }
            85% {
                opacity: 1;
                transform: scale(2.8);
                animation-timing-function: linear;
            }
            100% {
                opacity: 0;
                transform: scale(3.5);
            }
        }
        body{
            background: #000;
            font-family: 'orbitron', sans-serif;
        }
        h1{
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 50%;
            margin: -1.5em -2.5em;
            width: 5em;
            color: #011;
            font-size: 5em;
            text-align: center;
            text-shadow: 0 0 3px #6cf;
        }
        h1:first-line{
            font-size: 200%;
        }
    </style>
</head>
<body>
    <?php 
    echo "<h5></h5>";
	echo "<br>";
	?>	 
    <h1>CSS starfield</h1>
  <div id="space">    
    <div class="stars">
    <div class="stars">
    <div class="stars">
    <div class="stars">
    <div class="stars">
  </div>
</body>
</html>