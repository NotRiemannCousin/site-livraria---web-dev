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
<?php include_once('header.html'); ?>
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

            function clamp($current, $min, $max)
            {
                return max($min, min($max, $current));
            }


            $fakedb = [
                [
                    'cod' => '1006417183',
                    'tit' => 'Re: Zero - Começando uma Vida em Outro Mundo - Livro 7',
                    'aval' => 5.0,
                    'parc' => '',
                    'preco' => 'R$ 35,99',
                    'rcm' => true,
                ],
                [
                    'cod' => '1009034210',
                    'tit' => 'Os Segredos De Colin Bridgerton - Vol.4',
                    'aval' => 3.4,
                    'parc' => '3x de R$ 13,99',
                    'preco' => 'R$ 50,99',
                    'rcm' => true,
                ],
                [
                    'cod' => '1011224490',
                    'tit' => 'Sun Tzu - Os 13 Capítulos Originais',
                    'aval' => 4.9,
                    'parc' => '4x de R$ 23,99',
                    'preco' => 'R$ 80,99',
                    'rcm' => false,
                ],
                [
                    'cod' => '1000019985',
                    'tit' => '20 Mil Léguas Submarinas',
                    'aval' => 4.2,
                    'parc' => '',
                    'preco' => 'R$ 18,60',
                    'rcm' => false,
                ],
                [
                    'cod' => '1007886229',
                    'tit' => 'Cartas De Um Diabo A Seu Aprendiz',
                    'aval' => 5,
                    'parc' => '',
                    'preco' => 'R$ 34,90',
                    'rcm' => true,
                ],
                [
                    'cod' => '1010462594',
                    'tit' => 'Cosmos',
                    'aval' => 5,
                    'parc' => '3x de R$ 33,90',
                    'preco' => 'R$ 90,00',
                    'rcm' => true,
                ],
                [
                    'cod' => '1006417184',
                    'tit' => 'O Quinze',
                    'aval' => 4.5,
                    'parc' => '2x de R$ 20,99',
                    'preco' => 'R$ 39,99',
                    'rcm' => true
                ]
            ];

            $item_model = <<< HEREDOC
                <div class="item-holder">
                    <div style="display: flex; justify-content: center;">
                        <img src="imgs/%s.webp" class="item-img">
                    </div>
                    <p class="item-title">&nbsp;%s</p>
                    <p class="item-aval">&nbsp;%s</p>
                    <p class="item-parc">&nbsp;%s</p>
                    <p class="item-price">&nbsp;%s&nbsp</p>
                    <div class="item-rcm" style="visibility:%s;">
                        <p>Recomendado</p>
                    </div>
                    <a class="link-details" href="./details?id=%s" target="_blank">
                    <p>Detalhes...</p>
                </a>
                </div>
HEREDOC;

            foreach ($fakedb as $item) {

                $aval = '';
                for ($i = 0; $i < 5; $i++) {
                    $aval .= "<img class=\"item-stars\" src=\"res/imgs/estrela-" .
                        floor(clamp($item['aval'] - $i, 0, 1) * 4) * 25
                        . ".webp\">";
                }


                $rec = ($item['rcm'] == true ? 'visible' : 'hidden');
                printf(
                    $item_model,
                    $item['cod'],
                    $item['tit'],
                    $aval . "&nbsp;" . $item['aval'],
                    $item['parc'],
                    $item['preco'],
                    $rec,
                    $item['cod']
                );
            }
            ?>
        </div>
    </main>
    <?php include_once('footer.html'); ?>
</body>

</html>