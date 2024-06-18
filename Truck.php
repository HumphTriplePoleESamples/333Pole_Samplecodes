<!DOCTYPE html>
<html>
<head>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background: url(https://learndesigntutorial.com/
            wp-content/uploads/2021/03truck.png) no-repeat;
            background-size: cover;
            background-position: bottom;
            background-color: rgb(0, 0, 0 , 0.7);
            background-blend-mode: overlay;
            height: 100vh;
            overflow: hidden;
        }
        .wrap{
            position: absolute;
            height: 150px;
            bottom: 70px;
            left: 0;
            width: 100%;
        }
        .image{
            width: 150px;
            position: absolute;
        }
        .truck-img{
            bottom: 0;
            left: -150px;
            z-index: 2;
            animation: truck 10s linear infinite;
        }
        @keyframes truck{
            40%, 70% {
                left: 60%;
            }
            100%{
                left: 100%;
            }
        }
        .box-img{
            width: 35px;
            z-index: 1;
            top: 55%;
            left: 60%;
            opacity: 0;
            animation: box 10s linear infinite;
        }
        .box-img2{
            animation-delay: 1s;
        }
        @keyframes box{
            0% 40%{
                opacity: 0;
                left: 55%;
            }
            50%{
                opacity: 1;
                left: 60%;
            }
            60% 100%{
                opacity: 0;
                left: 60%;
            }
        }
    </style>
</head>
<body>
<?php echo "Truck";?>
<div class="wrap">
    <img class="image truck-img" src="https:learndesigntutorial.com/
    wp-content/uploads/2021/03truck.png" alt="">
</div>  
</body>
</html>