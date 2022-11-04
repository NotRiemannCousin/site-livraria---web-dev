<?php
    function relativePath($from, $to, $ps = DIRECTORY_SEPARATOR)
    {
    //   $arFrom = explode($ps, rtrim($from, $ps));
    //   $arTo = explode($ps, rtrim($to, $ps));
    //   while(count($arFrom) && count($arTo) && ($arFrom[0] == $arTo[0]))
    //   {
    //     array_shift($arFrom);
    //     array_shift($arTo);
    //   }
    //   return str_pad("", count($arFrom) * 3, '..'.$ps).implode($ps, $arTo);
        $to = mb_split("[^]", $to)


    }
    
?>

<header>
    <div>
        <!-- <?= "<img src=\"". relativePath("/Marcelo/site-livraria---web-dev/", dir($_SERVER['PHP_SELF'])) ."res/imgs/icon-64.png\">" ?> -->
        <h1> Livraria Novo Norte </h1>
    </div>
    <nav id="header-links">
        <a href="#">Sobre Nós</a>
        <a href="#">Contato</a>
        <a href="#">Minha Cesta</a>
    </nav>
</header>