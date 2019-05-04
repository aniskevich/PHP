<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .layout {
            display: flex;
            max-width: 1000px;
            flex-wrap: wrap;
            margin: 0 auto;
            padding: 5px;
        }
        .imgLayout {
            position: relative;
        }
        .img {
            margin: 5px;
            width: 320px;
            height: 240px;
        }
        .imgLayout:hover {
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.16);
        }
        .imgLayout:hover .fade {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .imgLayout .fade {
            position: absolute;
            background: rgba(0, 0, 0, 0.5);
            margin: 5px;
            top: 0;
            width: 320px;
            height: 240px;
        }
        a {
            text-decoration: none;
        }
        button {
            padding: 15px;
            border: 1px solid #ffffff;
            background: none;
            color: white;
            font-size: 13px;
            font-weight: 700;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            outline: none;
        }
        #modal {
            position: relative;
            width: 80%;
            left: 10%;
            margin-top: 30px;
        }
        #overlay {
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
        }
        #modal img {
            width: 100%;
        }
        #modal-footer, #modal-header {
            background: #000;
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
            text-align: center;
            padding: 5px;
        }
        #modal-footer button {
            margin: 0 auto;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="layout">
        <?php
            if ($handle = opendir('img/preview')) {
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                        echo "
                        <div class='imgLayout'>
                            <img src='img/preview/$entry' class='img'>
                            <div class='fade hidden'>
                                <button onclick='enlarge()'>Enlarge</button>
                            </div>
                        </div>
                        ";
                    }
                }
                closedir($handle);
            }
        ?>
        </div>
        <div id="overlay" class="hidden">
            <div id ="modal">
                <div id="modal-header">Enlarged Picture</div>
                <div id="modal-body"></div>
                <div id="modal-footer">
                    <button onclick='minimize()'>Close</button>
                </div>
            </div>
        </div>
        <script>
            const $overlay = document.getElementById('overlay');
            const $modalBody = document.getElementById('modal-body');
            function enlarge() {
                let path = event.target.parentElement.previousSibling.previousSibling.getAttribute('src');
                path = path.replace('preview', 'gallery');
                const $image = document.createElement('img');
                $image.setAttribute('src', path);
                $overlay.classList.toggle('hidden');
                $modalBody.appendChild($image);
            }
            function minimize() {
                $overlay.classList.toggle('hidden');
                $modalBody.innerHTML = '';
            }
        </script>
    
</body>
</html>