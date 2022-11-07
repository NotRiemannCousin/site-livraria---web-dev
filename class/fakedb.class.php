<?php

    require_once('./class/book.class.php');
    class fakeDB
    {
        public function recoverAllBook()
        {

            // region Object Author
            $author1 = new Author();
            $author1->name = 'Thiago Nigro';

            $author2 = new Author();
            $author2->name = 'Stephen Hawking';

            $author3 = new Author();
            $author3->name = 'Eckhart Tolle';

            $author4 = new Author();
            $author4->name = 'Jordan B. Peterson';

            $author5 = new Author();
            $author5->name = 'Melissa Tobias';
            // endregion

            // region Object Publisher
            $publisher1 = new Publisher();
            $publisher1->name = 'HarperCollins';

            $publisher2 = new Publisher();
            $publisher2->name = 'Intrínseca';

            $publisher3 = new Publisher();
            $publisher3->name = 'Sextante';

            $publisher4 = new Publisher();
            $publisher4->name = 'Alta Books';

            $publisher5 = new Publisher();
            $publisher5->name = 'Novo Século';
            // endregion


            // region Object Book

            $bookA = new Book();
            $bookA->fillData([
                1,
                'Breve respostas para grandes questões',
                'Desde Einstein, o mundo não via um cientista tão reverenciado quanto Stephen Hawking. Com seu trabalho revolucionário em física e cosmologia, ele encantou milhões de leitores com a origem do universo e a natureza dos buracos negros, além de inspirar todos pela coragem e determinação que mostrou em sua luta contra a doença do neurônio motor. Agora, nesta reunião póstuma de seus trabalhos, podemos conhecer seus pensamentos a respeito das grandes questões que povoam nossas mentes desde os primórdios e daquelas mais prementes na atualidade.',
                [$author2],
                $publisher2,
                1,
                256,
                2018,
                false,
                35.00,
                [1, 1, 2, 8, 89]

            ]);
            
            $bookB = new Book();
            $bookB->fillData([
                2,
                'O poder do agora: Um guia para a iluminação espiritual',
                'Nós passamos a maior parte de nossas vidas pensando no passado e fazendo planos para o futuro. Ignoramos ou negamos o presente e adiamos nossas conquistas para algum dia distante, quando conseguiremos tudo o que desejamos e seremos, finalmente, felizes.Mas, se queremos realmente mudar nossas vidas, precisamos começar neste momento. Essa é a mensagem simples, mas transformadora de Eckhart Tolle: viver no Agora é o melhor caminho para a felicidade e a iluminação.',
                [$author3, $author1],
                $publisher3,
                2,
                190,
                1990,
                true,
                33.25,
                [1,13,41,23,56]
            ]);
    
            $bookC = new Book();
            $bookC->fillData([
                3,
                '12 regras para a vida: um antídoto para o caos',
                'Aclamado psicólogo clínico, Jordan Peterson tem influenciado a compreensão moderna sobre a personalidade e, agora, se transformou em um dos pensadores públicos mais populares do mundo, com suas palestras sobre tópicos que variam da bíblia, às relações amorosas e à mitologia, atraindo dezenas de milhões de espectadores. Em uma era de mudanças sem precedentes e polarização da política, sua mensagem franca e revigorante sobre o valor da responsabilidade individual e da sabedoria ancestral tem ecoado em todos os cantos do mundo. ',
                [$author4, $author5],
                $publisher5,
                3,
                400,
                1998,
                false,
                25.43,
                [01, 39, 41, 20, 1]

            ]);
            
            
            $bookD = new Book();
            $bookD->fillData([
                4,
                'A Realidade de Madhu',
                'Neste surpreendente romance de ficção científica, Madhu é abduzida por uma nave intergaláctica. A bordo da colossal nave alienígena, fará amizade com uma bizarra híbrida, conhecerá um androide que vai abalar seu coração e aprenderá lições que mudarão sua vida para sempre. Madhu é uma Semente Estelar e terá que semear a Terra para gerar uma Nova Realidade que substituirá a ilusória realidade criada por Lúcifer.',
                [$author4, $author2],
                $publisher3,
                8,
                672,
                2012,
                true,
                50.0,
                [1, 22, 78, 12, 1]
            ]);

            $bookE = new Book();
            $bookE->fillData([
                5,
                'Do Mil ao Milhão. Sem Cortar o Cafezinho.',
                'Em seu primeiro livro, Thiago Nigro, criador da plataforma O Primo Rico, ensina aos leitores os três pilares para atingir a independência financeira: gastar bem, investir melhor e ganhar mais. Por meio de dados e de sua própria experiência como investidor e assessor, Nigro mostra que a riqueza é possível para todos ',
                [$author1],
                $publisher1,
                1,
                980,
                2015,
                false,
                20.0,
                [0, 0, 0, 300, 400]
            ]);

            $bookF = new Book();
            $bookF->fillData([
                6,
                'Depois daquele verão',
                'Best-seller do New York Times ELEITO PELO BUZZFEED UM DOS MELHORES LIVROS DE 2022 Dizem que você nunca mais pode voltar para casa, e para Persephone Fraser, desde que cometeu o maior erro de sua vida, isso é uma grande verdade. Bem-sucedida e independente, Percy já não passa os verões à beira do lago, agora ela fica em um apartamento elegante, saindo com seus amigos e mantendo todos a uma distância segura de seu coração.',
                [$author3, $author2],
                $publisher4,
                10,
                978, 
                2006,
                false,
                40.0,
                [1, 22, 61, 24, 50]
            ]);
            
            $bookG = new Book();
            $bookG->fillData([
                7,
                'Repensando a vantagem competitiva: Novas regras para a era digital',
                'Como as empresas criam uma vantagem competitiva na era digital? Neste guia dinâmico e acessível, Ram Charan ― autor best-seller com mais de 1 milhão de exemplares vendidos e consultor de alguns dos principais CEOs do mundo ― revela que as gigantes da tecnologia reescreveram radicalmente as regras do negócio. Se quiser vencer, é necessário aprender a jogar um novo jogo.',
                [$author1, $author5],
                $publisher3,
                12,
                302,
                2006,
                true,
                49.30,
                [0, 0, 40, 50, 20]
            ]);


            $bookH = new Book();
            $bookH->fillData([
                8,
                'Amanhã, amanhã e ainda outro amanhã',
                'Neste romance emocionante da autora best-seller de A vida do livreiro A. J. Fikry e Em outrolugar, dois amigos – que sempre se amaram, mas nunca foram amantes – se unem em uma parceria criativa na indústria dos videogames, um mundo que lhes traz fama, felicidade, tragédia, dúvidas e, de certa forma, imortalidade.',
                [$author5, $author2],
                $publisher3,
                1,
                298,
                2005,
                false,
                65.90,
                [01,28,32,32,43]
            ]);
            
            $bookI = new Book();
            $bookI->fillData([
                9,
                'É assim que começa (Vol. 2 É assim que acaba)',
                'Preparem os corações. Lily e Atlas estão de volta na aguardada sequência de É assim que acaba. É assim que começa chega para consagrar novamente Colleen Hoover como a autora mais vendida do Brasil.',
                [$author1],
                $publisher2,
                1,
                120,
                2022,
                true,
                49.00,
                [12, 12, 32, 23, 50]
            ]);

            $bookJ = new Book();
            $bookJ->fillData([
                10,
                'Minha vida por inteiro: Trabalho, família e nosso futuro',
                'Uma das CEOs mais admiradas do mundo por mais de doze anos, Indra Nooyi redefiniu o que significa ser uma líder excepcional. A primeira mulher, pessoa não branca e imigrante a comandar uma empresa da Fortune 50 ― e uma das maiores pensadoras estrategistas de nossa época ―, Nooyi transformou a PepsiCo com uma visão única, uma busca tenaz por excelência e um senso profundo de propósito.',
                [$author5],
                $publisher3,
                2,
                90,
                2021,
                false,
                79.20,
                [80, 20, 10, 0 , 0]
            ]);

            $bookK = new Book();
            $bookK->fillData([
                11,
                'Meu Policial',
                'Uma trágica história sobre como a fúria do desejo humano leva a uma realidade frustrada, inspirada nos acontecimentos da vida de E. M. Forster.',
                [$author4],
                $publisher3,
                3,
                70,
                2019,
                false,
                36.48,
                [60, 40, 20, 0, 0]
            ]);

            $bookL = new Book();
            $bookL->fillData([
                12,
                'Homo Deus',
                'Neste Homo Deus: uma breve história do amanhã, Yuval Noah Harari, autor do estrondoso best-seller Sapiens: uma breve história da humanidade, volta a combinar ciência, história e filosofia, desta vez para entender quem somos e descobrir para onde vamos. Sempre com um olhar no passado e nas nossas origens, Harari investiga o futuro da humanidade em busca de uma resposta tão difícil quanto essencial: depois de séculos de guerras, fome e pobreza, qual será nosso destino na Terra?',
                [$author3],
                $publisher3,
                2,
                92,
                2017,
                false,
                46.99,
                [01,23,34, 56, 12]
            ]);
            // endregion

            return [
                $bookA->code => $bookA,
                $bookB->code => $bookB,
                $bookC->code => $bookC,
                $bookD->code => $bookD,
                $bookE->code => $bookE,
                $bookF->code => $bookF,
                $bookG->code => $bookG,
                $bookH->code => $bookH,
                $bookI->code => $bookI,
                $bookJ->code => $bookJ,
                $bookK->code => $bookK,
                $bookL->code => $bookL,
            ];
        }
        public function recoverBook($code)
        {
            $inBook = $this->recoverAllBook();
            return $inBook[$code];
        }
    }
?>