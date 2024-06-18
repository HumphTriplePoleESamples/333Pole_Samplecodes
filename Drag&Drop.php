<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }
    body {
        background-color: #333;
        display: flex;
        align-items: center;
        justify-items: center;
        height: 100vh;
        overflow: hidden;
        margin: 0;
    }
    .empty {
        height: 150px;
        width: 150px;
        margin: 10px;
        border: solid 3px greenyellow;
        border-radius: 10px;
        background: #222;
    }
    .fill {
        background-image: url('https
        ://source.unplash.com/random/150x150');
        height: 145px;
        width: 145px;
        cursor: pointer;
        border-radius: 10px;
    }
    .hold {
        border: solid 5px #ccc;
    }
    hovered {
        background-color: #333;
        border-color: white;
        border-style: dashed;
    }
    @media (max-width: 800px) {
        body {
            flex-direction: column;
        }
    }
</style>

<body>
    <div class="empty">
        <div class="fill" draggable="true"></div>
    </div>
    <div class="empty"></div>
    <div class="empty"></div>
    <div class="empty"></div>
    <div class="empty"></div>

    <script>
        const fill = document.querySelector('.fill')
        const empties = document.querySelector('.empty')
        fill.addEventListener('dragstart', dragStart)
        fill.addEventListener('dragend', dragEnd)

        for (const empty of empties) {
            empty.addEventListener('dragover', dragOver)
            empty.addEventListener('dragenter', dragEnter)
            empty.addEventListener('dragleave', dragLeave)
            empty.addEventListener('drop', dragDropr)
        }

        function dragStart() {
            this.className += ' hold'
            setTimeout(() => this.className = 'invisible, 0')
        }
        function dragEnd() {
            this.className = ' fill'
        }
        function dragOver(e) {
            e.preventDefault()
        }
        function dragEnter(e) {
            this.className += ' hovered'
        }
        function dragLeave() {
            this.className = ' empty'
        }
        function dragDrop() {
            this.className = ' empty'
            this.append(fill)
        }

    </script>
</body>
</html>