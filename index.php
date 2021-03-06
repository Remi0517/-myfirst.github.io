<?php require_once('./lib/todo.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
</head>
<body>
    <header>
        <h1>header</h1>
    </header>
    <nav>
        <div class="dropdown">
            <div class="topnav"><h2><a href="index.php?id=study">STUDY</a></h2></div>
            <div class="dropdown-content">
                <li>nav content1</li>
                <li>nav content2</li>
                <li>nav content3</li>
            </div>
        </div>
        <div class="dropdown">
            <div class="topnav"><h2><a href="index.php?id=study">HOBBY</a></h2></div>
            <div class="dropdown-content">
                <li>nav content1</li>
                <li>nav content2</li>
                <li>nav content3</li>
            </div>
        </div>
        <div class="dropdown">
            <div class="topnav"><h2><a href="index.php?id=study">FOOD</a></h2></div>
            <div class="dropdown-content">
                <li>nav content1</li>
                <li>nav content2</li>
                <li>nav content3</li>
            </div>
        </div>
        <div class="dropdown">
            <div class="topnav"><h2>TODO</h2></div>
            <div class="dropdown-content" id="todo-content">
                <?=$todo_list?>
                <form action="./lib/create_todo.php" method="POST">
                <input type="text" name="content" placeholder="content">
                <input type="submit" value="Create">
                </form>
            </div>
        </div>
        <div class="search">
            <i class="fas fa-search"></i>
            <input type="text">
        </div>
    </nav>
    <aside>
        <div class="side-list">
            <button onclick="side_list(0)">
                <h2>list1</h2>
            </button>
            <div class="side-list-content">
                <li>STYDY : subject</li>
                <li>HOBBY : subject</li>
                <li>FOOD : date and sort</li>
            </div>
        </div>
        <div class="side-list">
            <button onclick="side_list(1)">
                <h2>list1</h2>
            </button>
            <div class="side-list-content">
                <li>li1</li>
                <li>li2</li>
                <li>li3</li>
            </div>
        </div>
        <div class="side-list">
            <button onclick="side_list(2)">
                <h2>list1</h2>
            </button>
            <div class="side-list-content">
                <li>li1</li>
                <li>li2</li>
                <li>li3</li>
            </div>
        </div>
    </aside>
    <section>
        <button class="modal-btn" onclick="article_modal(0)">
            <article>
                <img src="./images/1.jpg">
                <span>????????? ???????????????</span>
                <span>2021.07.20</span>
                <span>
                    ????????? ??? ????????? ?????? ????????? ??????.<br>
                    ???????????? ??????????????? ???????????? ?????? ????????? ???????????? ???????????? ????????????
                </span>
            </article>
        </button>
        <div class="modal">
            <div class="modal-content">
                <img src="./images/1.jpg">
                <span>????????? ???????????????</span>
                <span>2021.07.20</span>
                <span>
                    ????????? ??? ????????? ?????? ????????? ??????.<br>
                    ???????????? ??????????????? ???????????? ?????? ????????? ???????????? ???????????? ????????????
                </span>
            </div>
        </div>
        <button class="modal-btn" onclick="article_modal(1)">
            <article>
                <img src="./images/2.jpg">
                <span>title</span>
                <span>date</span>
                <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Eveniet ut dignissimos aperiam odit commodi vitae, voluptatem soluta vel deserunt, numquam quod minima molestiae necessitatibus in? Quidem qui esse quibusdam perferendis!</span>
            </article>
        </button>
        <div class="modal">
            <div class="modal-content">
                <img src="./images/2.jpg">
                <span>title</span>
                <span>date</span>
                <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ut dignissimos aperiam odit commodi vitae, voluptatem soluta vel deserunt, numquam quod minima molestiae necessitatibus in? Quidem qui esse quibusdam perferendis!</span>
            </div>
        </div>
    </section>
    <script src="scripts/index.js"></script>
</body>
</html>