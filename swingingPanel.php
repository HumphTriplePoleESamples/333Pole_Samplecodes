<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swinging Panel</title>
    <style>
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #menu{
            position: relative;
            float: left;
            padding: 0 20px;
            border-radius: 3px;
            background: #ccc;
        }
        #menu, #menu ul{
            list-style: none;
        }
        #menu > li{
            float: left;
            position: relative;
            perspective: 1000px;
        }
        #menu a {
            display: block;
            padding: 13px 20px 13px 20px;
            text-decoration: none;
            color: #4b4b4b;
            font-size: 18px;
            background: transparent;
            transition: all .25s ease-in-out;
        }
        #menu > li:hover > a{
            background: #333;
            color: #00dffc;
        }
        #menu li ul{
            position: absolute;
            width: 200px;
            visibility: hidden;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            background: transparent;
            overflow: hidden;
            transform-origin: 50% 0%;
        }
        #menu li:hover ul{
            padding: 15px 0;
            background: #333;
            opacity: 1s;
            visibility: visible;
            box-shadow: 1px 1px 7px #00000080;
            animation-name: swingdown;
            animation-duration: 2s;
            animation-timing-function: ease;
        }
        @keyframes swingdown{
           0%{
            opacity: .99999;
            transform: rotateX(90deg);
           }
           30%{
            transform: rotateX(-20deg);
            rotateY(5deg);
            animation-timing-function: ease-in-out;
           }
           65%{
            transform: rotateX(20deg);
            rotateY(-3deg);
            animation-timing-function: ease-in-out;
           }
           100%{
            transform: rotateX(0);
            animation-timing-function: ease-in-out;
           }
        }
        #menu li li a{
           padding-left: 15px;
           font-weight: 400;
           color: #ddd;
           text-shadow: none;
           border-top: dotted 1px transparent;
           border-bottom: dotted 1px transparent;
           transition: all .15s linear; 
        }
        #menu li li a:hover{
            color: #00dffc;
            border-top: dotted 1px #ffffff26;
            border-bottom: dotted 1px #ffffff26;
            background: #00dffc05;
        }
    </style>
</head>
<body>
    <?php echo "";?>
   <div id="container">
    <ul id="menu">
        <li><a href="#">Menu</a>
            <ul>
                <li><a href="#">item 1</a></li>
                <li><a href="#">item 2</a></li>
                <li><a href="#">item 3</a></li>
            </ul>
        </li>
    </ul>
   </div> 
</body>
</html>