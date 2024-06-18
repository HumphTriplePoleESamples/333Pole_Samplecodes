<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #777e57;
            background-image:https://img1.cgtrader.com/items/2842339/a541fccecb…l
            -3d-model-low-poly-obj-fbx-stl-blend-dae-abc.jpg;
            width: 70px;
            height: 70px;
            box-shadow: inset 16px 0 40px 3px rgba(0,0,0,0.9),inset -3px 0 5px 2px rgba(255, 255, 255, 0.16);
            background-size: 190px;
            margin: 80px auto;
            border-radius: 50%;
            position: relative;
            animation-name: move,scale,rotate;
            animation-duration: 4s,4s,4s;
            animation-iteration-count: infinite, infinite, infinite;
            animation-timing-function: ease-in-out,linear,linear;
        }
        @keyframes move {
            0% { left: 22px; }
            70% { left: -200px; }
            100% { left: 200px; }
        }
        @keyframes scale {
            0% { tranform: scale(1); }
            32% { tranform: scale(0.4);
            animation-timing-function: ease-in; }
            70% { tranform: scale(1);
            animation-timing-function: ease-in; }
            75% { tranform: scale(2.2);
            animation-timing-function: ease-in-out; }
            86% { tranform: scale(2); }
            98% { tranform: scale(1.2); }
            100% { tranform: scale(1); }
        }
        @keyframes rotate {
            0% { background-position: 0px; }
            100% { background-position: 190px; }
        }
    </style>
</head>
<body>
    <div id="earth"></div>
<?php
	echo "<h5></h5>";
	echo "<br>";
    echo "<br>";
    echo "<br>";
	?>	 
</body>
</html>