<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendulums</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(lightgreen, burlywood);
        }
        .pendulums {
            width: 40em;
            height: 30em;
            font-size: 10px;
            border-top: 0.3em solid cadetblue;
            position: relative;
        }
        .pendulums span {
            position: absolute;
            width: o.2em;
            height: calc((var(--n) - 1) * 1em + 15em);
            background-color: cadetblue;
            left: 50%;
            transform-origin: 50% top;
            transform: rotate(25deg);
            animation: swing ease-in-out infinite;
            animation-duration: calc((var(--n) - 1) * 0.02s + 1.5s);
        }
        @keyframes swing {
            50% {
                transform: rotate(-25deg);
            }
        }
        .pendulums span::before {
            content: '';
            position: absolute;
            width: 1.5em;
            height: 1.5em;
            background: radial-gradient(
                circle at 70% 35%,
                white,
                darkturquoise 30%,
                steelblue 50%
            );
            border-radius: 50%;
            top: 100%;
            left: -0.75em;
            box-shadow: -1em 4em 1em rgba(0, 0, 0, 0.1);
        }
        .pendulums span:nth-child(1) {
            --n: 1 }
        .pendulums span:nth-child(2) {
            --n: 2 }   
        .pendulums span:nth-child(3) {
            --n: 3 }
        .pendulums span:nth-child(4) {
            --n: 4 }
        .pendulums span:nth-child(5) {
            --n: 5 }
        .pendulums span:nth-child(6) {
            --n: 6 }   
        .pendulums span:nth-child(7) {
            --n: 7 }
        .pendulums span:nth-child(8) {
            --n: 8 }
        .pendulums span:nth-child(9) {
            --n: 9 }
        .pendulums span:nth-child(10) {
            --n: 10 }   
        .pendulums span:nth-child(11) {
            --n: 11 }
        .pendulums span:nth-child(12) {
            --n: 12 }
        .pendulums span:nth-child(13) {
            --n: 13 }
        .pendulums span:nth-child(14) {
            --n: 14 }   
        .pendulums span:nth-child(15) {
            --n: 15 }      

    </style>
</head>
<body>
    <div class="pendulums">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</body>
</html>