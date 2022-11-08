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
            <div class="mark main-core">
                <div class="mark book-cover">
                    <?= '<img src="../imgs/' . $book->code . '.webp">' ?>
                </div>
                <div class="mark info">
                    <head>
                        <h3>20 mil leguas submarinas</h3>
                    </head>
                    <p>Autores:Qualquer coisa</p><br>
                    <p>Editora:Qualquer coisa</p><br>
                    <p>Edição:Qualquer coisa</p><br>
                    <p>Páginas:Qualquer coisa</p><br>
                    <p>Ano de públicação:Qualquer coisa</p><br>
                </div>
            </div>
            <div class="mark">


                <div class="mark">
                    <h4>Descrição</h4>
                    <p><?= $book->description ?></p>
                </div>
                <div class="mark">
                    <h4>avaliações</h4>
                    <?php
                    $aval_format = <<< HEREDOC
                    <div class="stars-holder">
                        <img class="stars-empty" src="../res/imgs/stars-empty.webp">
                        <img class="stars-full" src="../res/imgs/stars-full.webp" style="clip-path:polygon(0 0,0 100%%, %d%% 100%%, %d%% 0)">
                        
                            
                        <div class="perc-avl">
                            <div style="width: %d%%"></div>
                        </div>
                        <p class="prc">%d</p>
                    </div>
HEREDOC;
                    for ($i = 0; $i < 5; $i++) {
                        printf(
                            $aval_format,
                            ($i + 1) * 20,
                            ($i + 1) * 20,
                            $book->calculatePercentReview($i) * 100,
                            $book->calculatePercentReview($i) * 100
                        );
                    }
                    ?>

                </div>
                <div class="stars-holder">
                </div>
                <a class="back-btn" href="../">voltar</a>
            </div>
        </div>
        </div>
    </main>
    <?php include_once('../footer.php'); ?>
</body>

</html>