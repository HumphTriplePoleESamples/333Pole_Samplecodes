<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>easyLearnAxis</title>
    <style>
        body {
          padding: 20px;
          display: flex;
          height: 100vh;
          align-items: center;
          justify-content: center;
          background-color: #333333;
          margin: 0;
          padding: 0;
        }
        label input[type=checkbox]
        .toggle {
          appearance: none;
          cursor: pointer;
          width: 6em;
          height: 2.5em;
          background: #ddd;
          vertical-align: middle;
          border-radius: 1.6em;
          position: relative;
          outline: 0;
          cursor: pointer;
          transition: background 0.1s ease-in-out;
        }
        label input[type=checkbox]
        .toggle::after {
          content: '';
          width: 2.5em;
          height: 2.5em;
          background: white;
          position: absolute;
          border-radius: 2.2em;
          transform: scale(0.7);
          left: 0;
          box-shadow: 0.1px #00000080;
          transition: left 0.1s ease-in-out;
        }
        label input[type=checkbox]
        .toggle:checked {
          background: deepskyblue;
        }
        label input[type=checkbox]
        .toggle:checked::after {
          left: 3.4em;
        }
    </style>

</head>
<body>
    <label>
        <input type="checkbox" class="toggle" checked />
    </label>
</body>
</html>