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
	  <link rel="stylesheet" href="styles.css">
  
    
</head>

<body>
    <?php include_once '../header.php'; ?>
    <main>
        <div>
            <div class="main-details">
                <div class="book-cover ">
                    <?= '<img src="../imgs/' . $book->code . '.webp">' ?>
                </div>
                <div class="info">

                    <head>
                        <h3><?= $book->title ?></h3>
                    </head>
                    <main>
                        <p>Autores: <?= implode(', ', $book->author) ?></p>
                        <p>Editora: <?= $book->publisher ?></p>
                        <p>Edição: <?= $book->edition ?></p>
                        <p>Páginas: <?= $book->pages ?></p>
                        <p>Ano de públicação: <?= $book->year ?></p>
                    </main>
                </div>
            </div>
            <div>


                <div>
                    <h4>Descrição</h4>
                    <p><?= $book->description ?></p>
                </div>
                <div>
                    <h4>Avaliações</h4>
                    <div class="avalia">


                        <img class="stars-e" src="../res/imgs/stars-empty.webp">
                        <img class="stars-f" src="../res/imgs/stars-full.webp" style="clip-path: polygon(0 0, 20% 0, 20% 100%, 0 100%)">
                        <div class="avl">
                            <div>&nbsp;</div>
                        </div>
                        <p class="prc"><?= $book->review[0] ?></p>
                    </div>
                    <div class="avalia">

                        <img class="stars-e" src="../res/imgs/stars-empty.webp">
                        <img class="stars-f" src="../res/imgs/stars-full.webp" style="clip-path:polygon(0 0, 40% 0, 40% 100%, 0 100%)">
                        <div class="avl">
                            <div>&nbsp;</div>
                        </div>
                        <p class="prc"><?= $book->review[1] ?></p>
                    </div>
                    <div class="avalia">

                        <img class="stars-e" src="../res/imgs/stars-empty.webp">
                        <img class="stars-f" src="../res/imgs/stars-full.webp" style="clip-path:polygon(0 0, 60% 0, 60% 100%, 0 100%)">
                        <div class="avl">
                            <div>&nbsp;</div>
                        </div>
                        <p class="prc"><?= $book->review[2] ?></p>
                    </div>
                    <div class="avalia">

                        <img class="stars-e" src="../res/imgs/stars-empty.webp">
                        <img class="stars-f" src="../res/imgs/stars-full.webp" style="clip-path: polygon(0 0, 80% 0, 80% 100%, 0 100%)">
                        <div class="avl">
                            <div>&nbsp;</div>
                        </div>
                        <p class="prc"><?= $book->review[3] ?></p>
                    </div>
                    <div class="avalia">

                        <img class="stars-e" src="../res/imgs/stars-empty.webp">
                        <img class="stars-f" src="../res/imgs/stars-full.webp" style="">
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