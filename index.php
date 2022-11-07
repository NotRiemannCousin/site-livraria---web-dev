<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <title>Livraria</title>
</head>

<body>
    <?php include_once('header.php'); ?>
    <main>
        <div id="searcher">
            <h1>6 produtos </h1>
            <p>Digite o nome do livro que desejas</p>


            <div id="search-options">
                <input id="text-search" type="text" placeholder="digite o nome do livro">
                <button id="search-details">


                    <div id="search-params">
                        <form action="#">
                            <h4>Categorias</h4>
                            <input type="checkbox"> Livro </input>
                            <input type="checkbox"> Revista </input>
                            <input type="checkbox"> Quadrinho </input>
                            <h4>Preço</h4>
                            <label>Mínimo: </label>
                            <input type="number" min="1" step="any" max="5000,00" placeholder="Sem mínimo" id="search-min-value" pattern="[0-9]" onchange="evaluateText(this.id)"></input>
                            <label>Máximo: </label>
                            <input type="number" min="1" step="any" max="5000,00" placeholder="Sem máximo" id="search-max-value" pattern="[0-9]" onchange="evaluateText(this.id)"></input>
                            <input type="submit" value="Buscar">
                        </form>
                    </div>
                </button>
            </div>

            </details>
        </div>
        <div id="holder-all-items">
            <?php
            require_once 'class/fakedb.class.php';
            function clamp($current, $min, $max)
            {
                return max($min, min($max, $current));
            }

            $book_model = <<< HEREDOC
                <div class="item-holder">
                    <div style="display: flex; justify-content: center;">
                        <img src="imgs/%s.webp" class="item-img">
                    </div>
                    <p class="item-title">&nbsp;%s</p>
                    <p class="item-aval">&nbsp;%s</p>
                    <p class="item-price">&nbsp;%s&nbsp</p>
                    <div class="item-rcm" style="visibility:%s;">
                        <p>Lançamento!!</p>
                    </div>
                    <a class="link-details" href="./details?id=%s" target="_blank">
                    <p>Detalhes...</p>
                </a>
                </div>
HEREDOC;

            foreach (FakeDB::recoverAllBook() as $book) {

                $aval = '';
                for ($i = 0; $i < 5; $i++) {
                    $aval .= '<img class="item-stars" src="res/imgs/estrela-' .
                        floor(clamp($book->calculateAverageRating() - $i, 0, 1) * 4) * 25
                        . '.webp">';
                }


                $rec = ($book->release == true ? 'visible' : 'hidden');
                printf(
                    $book_model,
                    $book->code,
                    $book->title,
                    $aval . '&nbsp;' . number_format((float)$book->calculateAverageRating(), 1, '.', ''),
                    number_format((float)$book->price, 2, '.', '') . 'R$',
                    $rec,
                    $book->code
                );
            }
            ?>
        </div>
    </main>
    <?php include_once('footer.php'); ?>
</body>

</html>