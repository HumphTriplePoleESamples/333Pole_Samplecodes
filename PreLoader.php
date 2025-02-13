<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreLoader</title>
    <style>
        body {
            background: #8100cc;
        }
        #loader {
            width: 100px;
            height: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -20px -50px;
        }
        #loader div {
            width: 20px;
            height: 20px;
            background: #FFF;
            border-radius: 50%;
            position: absolute;
        }
        #d1 [
            animation: animate 2s Linear infinite;
        ]
        #d2 [
            animation: animate 2s Linear infinite -.4s;
        ]
        #d3 [
            animation: animate 2s Linear infinite -.8s;
        ]
        #d4 [
            animation: animate 2s Linear infinite -1.2s;
        ]
        #d5 [
            animation: animate 2s Linear infinite -1.6s;
        ]
        @-webkit-keyframes animate {
            0% {
                left: 100px;
                top: 0;
            }
            80% {
                left: 0;
                top: 0;
            }
            85% {
                left: 0;
                top: -20px;
                width: 20px;
                height: 20px;
            }
            90% {
                width: 40px;
                height: 15px;
            }
            95% {
                left:100px;
                top: -20px;
                width: 20px;
                height: 20px;
            }
            100% {
                left: 100px;
                top: 0;
            }
        }
    </style>
</head>
<body>
    <div id="loader">
        <div id="d1"></div>
        <div id="d2"></div>
        <div id="d3"></div>
        <div id="d4"></div>
        <div id="d5"></div>
    </div>
</body>
</html>