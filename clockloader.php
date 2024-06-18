<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container{
            text-align: center;
            width: 200px;
            background-color: #e74c3c;
        }
        .box{
            display: inline-block;
            height: 200px;
            position: relative;
            transition: all .2s ease;
        }
        .clock{
            border-radius: 60px;
            border: 3px solid #fff;
            height: 80px;
            width: 80px;
            position: relative;
            top: 28%;
            top: -webkit-calc(50% - 43px);
            top: calc(50% - 43px);
            left: 35%;
            left: -webkit-calc(50% - 43px);
            left: calc(50% - 43px);
        }
        .clock:after{
            content: "";
            position: absolute;
            background-color: #fff;
            top: 2px;
            left: 48%;
            height: 38%;
            width: 4px;
            border-radius: 5px;
            -webkit-transform-origin: 50% 97%;
            transform-origin: 50% 97%; 
            -webkit-animation: grdAiguille 2s linear infinite;
            animation: grdAiguille 2s linear infinite;

        }
        @-webkit-keyframes grdAiguille{
            0%{-webkit-transform:rotate(0deg);}
            100%{-webkit-transform:rotate(360deg);}
        }
        .clock:before{
            content: "";
            position: absolute;
            background-color: #fff;
            top: 6px;
            left: 48%;
            height: 35px;
            width: 4px;
            border-radius: 5px;
            -webkit-transform-origin: 50% 94%;
            transform-origin: 50% 97%;
            -webkit-animation: ptdAiguille 12s linear infinite;
            animation: ptAiguille 12s linear infinite;
        }
        @-webkit-keyframes ptdAiguille{
            0%{-webkit-transform:rotate(0deg);}
            100%{-webkit-transform:rotate(360deg);}
        }
    </style>
</head>
<body>
    <?php
	echo "<h5></h5>";
	echo "<br>";
    echo "<br>";
    echo "<br>";
	?>	
   <div class="container">
     <div class="box">
       <div class="clock"></div> 
     </div> 
   </div> 
   <?php
	echo "<h5></h5>";
	echo "<br>";
    echo "<br>";
    echo "<br>";
	?>	
</body>
</html>