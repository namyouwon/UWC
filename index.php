<!DOCTYPE html>
<html>

<head>
    <script>
        const draggables = document.querySelectorAll('.drag');
        const dropContainer = document.getElementById('drop-container');

        draggables.forEach(draggable => {
            draggable.addEventListener('dragstart', () => {
                draggable.classList.add('dragging');
            });

            draggable.addEventListener('dragend', () => {
                draggable.classList.remove('dragging');
            });
        });

        dropContainer.addEventListener('dragover', e => {
            e.preventDefault();
            const draggable = document.querySelector('.dragging');
            dropContainer.classList.add('drag-over');
        });

        dropContainer.addEventListener('dragleave', e => {
            dropContainer.classList.remove('drag-over');
        });

        dropContainer.addEventListener('drop', e => {
            e.preventDefault();
            const draggable = document.querySelector('.dragging');
            dropContainer.appendChild(draggable);
            dropContainer.classList.remove('drag-over');
        });
    </script>
</head>

<body>
    <div id="drag-container">
        <div class="drag" draggable="true">Div 1</div>
        <div class="drag" draggable="true">Div 2</div>
        <div class="drag" draggable="true">Div 3</div>
    </div>

    <div id="drop-container" style="background-color: yellow; height:100px;width:100px"></div>

</body>

</html>