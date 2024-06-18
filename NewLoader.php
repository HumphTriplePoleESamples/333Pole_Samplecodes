<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewLoader</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:300);
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #e77c3c;
            width: 300px;
        }
        .box {
            display: inline-block;
            height: 200px;
            width: 100px;
            position: relative;
            transition: all .2s ease;
        }
        .loader {
            position: relative;
            width: 5px;
            height: 5px;
            top: 49%;
            top: -webkit-calc(50% - 43px);
            top: calc(50% - 2.5px);
            left: 49%;
            left: -webkit-calc(50% - 43px);
            left: calc(50% - 2.5px);
            background-color: #fff;
            border-radius: 50px;
        }
        .loader:before {
            content: "";
            position: absolute;
            top: -38px;
            border-top: 3px solid #fff;
            border-right: 3px solid #fff;
            border-radius: 0 50px 0px 0;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, .1);
            -webkit-transform-origin: 0% 100%;
            transform-origin: 0% 100%;
            -webkit-animation: Loader 1.5s linear infinite;
            animation: Loader 1.5s linear infinite;
        }
        .loader:after {
            content: "";
            position: absolute;
            top: 2px;
            right: 2px;
            border-bottom: 3px solid #fff;
            border-left: 3px solid #fff;
            border-radius: 0 0px 0px 50px;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, .1);
            -webkit-transform-origin: 100% 0%;
            transform-origin: 100% 0%;
            -webkit-animation: Loader 1.5s linear infinite;
            animation: Loader 1.5s linear infinite;
        }
        @-webkit-keyframes loader {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }
        @keyframes loader {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        )    
    </style>
</head>
<body>
    <div class="container">
        <div class="box"></div>
        <div class="loader"></div>
    </div>
</body>
</html>