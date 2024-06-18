<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watermelon</title>
</head>
<style>
    :root {
        --bg: #87d8c2;
        --green: #009900;
        --red: #e70001;
        --seed: #420200;
    }
    body {
        background-color: var(--bg);
    }
    .watermelon {
        position: absolute;
        height: 500px;
        width: 500px;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
    .cut-1 {
        position: absolute;
        height: 100px;
        width: 200px;
        left: 30%;
        top: 40%;
        border-radius: 50%;
        transform: rotate(45deg);
        background-color: var(--red);
    }
    .cut-1::after {
        content: '';
        position: absolute;
        height: 100%;
        width: 100%;
        top: -15%;
        border-bottom: 60px solid var(--green);
        border-bottom-left-radius: 100px;
        border-bottom-right-radius: 100px;
    }
    .seed1, .seed2, .seed3, .seed4, .seed5 {
        height: 10px;
        width: 10px;
        border-bottom-right-radius: 100px;
        border-top-left-radius: 100px;
        background-color: var(--seeds);
    }
    .seed1 {
        position: absolute;
        left: 45%;
        top: 40%;
    }
    .seed2 {
        position: absolute;
        left: 50%;
        top: 40%;
    }
    .seed3 {
        position: absolute;
        left: 45%;
        top: 45%;
    }
    .seed4 {
        position: absolute;
        left: 40%;
        top: 35%;
    }
    .seed5 {
        position: absolute;
        left: 40%;
        top: 45%;
    }
    .cut-2 {
        position: absolute;
        height: 100px;
        width: 200px;
        left: 30%;
        top: 40%;
        border-radius: 50%;
        transform: rotate(-130deg);
        background-color: var(--green);
        animation: slice 5s ease-in-out
        infinite;
    }
    .cut-2::after {
        content: '';
        position: absolute;
        height: 100%;
        width: 100%;
        top: -15%;
        border-bottom: 60px solid var(--green);
        border-top-left-radius: 100px;
        border-top-right-radius: 100px;
    }
    @keyframes slice {
        from {
            left: 30%;
            top: 40%;
        }
        to {
            left: 45%;
            top: 50%;
        }
    }

</style>
<body>
    <?php
	echo "<h2>coding with php</h2>";
	echo "<br>";
	?>	 

    <div class="watermelo">
    <div class="cut-1"></div>
    <div class="seed2"></div>
    <div class="seed3"></div>
    <div class="seed4"></div>
    <div class="seed5"></div>
    <div class="cut-2"></div>
</div>   
</body>
</html>