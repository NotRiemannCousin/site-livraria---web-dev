<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once '../class/fakedb.class.php';
$book = FakeDB::recoverBook($_GET['id']);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $book->title ?></title>
    <link rel="stylesheet" href="details.css">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <?php include_once '../header.php'; ?>
    <main>
        <div>
            <div class="d1">
                <div class="d2">
                    <?= '<img src="../imgs/' . $book->code . '.webp">' ?>
                </div>
                <div class="d3">

                    <head>
                        <h3>20 mil leguas submarinas</h3>
                    </head>
                    <main>
                        <p>Autores:Qualquer coisa</p><br>
                        <p>Editora:Qualquer coisa</p><br>
                        <p>Edição:Qualquer coisa</p><br>
                        <p>Páginas:Qualquer coisa</p><br>
                        <p>Ano de públicação:Qualquer coisa</p><br>
                    </main>
                </div>
            </div>
            <div>


                <div>
                    <h4>Descrição</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate maiores quis, nostrum saepe dolorem reprehenderit veniam dolor. Amet magni praesentium dignissimos dolor consectetur tempore ipsa, inventore, quibusdam assumenda repellendus commodi.</p>
                </div>
                <div>
                    <h4>Avaliações</h4>
                    <div class="avalia">


                        <img class="star-e" src="../res/imgs/stars-empty.webp">
                        <img class="star-f" src="../res/imgs/stars-full.webp" style="clip-path:rect(0 0,0 10%0 100%,, 0 100%x)">
                        <div class="avl">
                            <div>&nbsp;</div>
                        </div>
                        <p class="prc"><?= $book->review[0] ?></p>
                    </div>
                    <div class="avalia">

                        <img class="star-e" src="../res/imgs/stars-empty.webp">
                        <img class="star-f" src="../res/imgs/stars-full.webp" style="clip-path:rect(0 0,0 10%0 100%,, 0 100%x)">
                        <div class="avl">
                            <div>&nbsp;</div>
                        </div>
                        <p class="prc"><?= $book->review[1] ?></p>
                    </div>
                    <div class="avalia">

                        <img class="star-e" src="../res/imgs/stars-empty.webp">
                        <img class="star-f" src="../res/imgs/stars-full.webp" style="clip-path:rect(0 0,0 10%0 100%,, 0 100%x)">
                        <div class="avl">
                            <div>&nbsp;</div>
                        </div>
                        <p class="prc"><?= $book->review[2] ?></p>
                    </div>
                    <div class="avalia">

                        <img class="star-e" src="../res/imgs/stars-empty.webp">
                        <img class="star-f" src="../res/imgs/stars-full.webp" style="clip-path:rect(0 0,0 10%0 100%,, 0 100%x)">
                        <div class="avl">
                            <div>&nbsp;</div>
                        </div>
                        <p class="prc"><?= $book->review[3] ?></p>
                    </div>
                    <div class="avalia">

                        <img class="star-e" src="../res/imgs/stars-empty.webp">
                        <img class="star-f" src="../res/imgs/stars-full.webp" style="clip-path:rect(0 0,0 10%0 100%,, 0 100%x)">
                        <div class="avl">
                            <div>&nbsp;</div>
                        </div>
                        <p class="prc"><?= $book->review[4] ?></p>
                    </div>
                    <div class="avalia">
                    </div>
                    <a href="../">Voltar</a>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('../footer.php'); ?>
</body>

</html>