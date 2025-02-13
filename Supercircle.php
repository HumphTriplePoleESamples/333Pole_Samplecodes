<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperCircle</title>
    <style>
         body {
       background: #444; 
    }
    #container {
        display: flex;
        font-family: Helvetica, Arial, Verdana, sans-serif;
        justify-content: center;
        margin-top: 100px;
    }
    .circle {
        background: #fff;
        border-radius: 100%;
        cursor: pointer;
        margin: 0 auto;
        width: 15em;
        height: 15em;
        overflow: hidden;
        transform: translateZ(0);
    }
    .circle h1 {
        color: #bdb9c700;
        font-weight: 900;
        font-size: 1.6em;
        line-height: 8.2em;
        text-align: center;
        text-transform: uppercase;
        font-smooth: initialiased;
        user-select: none;
        transition: color 0.8s ease-in-out;
    }
    .circle:before, .circle:after {
        border-radius: 100%;
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: inherit;
        height: inherit;
        box-shadow: inset 10.6em 0 0 #a8b84833, 
        inset 10.6em 0 0 #a8b84833,
        inset -10.6em 0 0 #a8b84833, 
        inset -10.6em 0 0 #a8b84833;
        transition: box-shadow 0.75s;
    }
    .circle:after {
        transform: rotate(45deg);
    }
    .circle:hover:before, .circle:hover:after {
        box-shadow: inset 0.86em 0 0 #ff000080, 
        inset 0.86em 0 0 #fc960080, 
        inset 0.86em 0 0 #00ff0080, 
        inset 0.86em 0 0 #0096ff80;
    }
    .circle:hover > h1 {
        color: #444444;
    }
        
    </style>
   
</head>
<body>
    <div id="container">
        <div class="circle">
            <h1>Super Circle</h1>
        </div>
    </div>
</body>
</html>