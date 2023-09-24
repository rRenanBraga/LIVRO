<div class="container my-3">
    <div class="card">
        <div class="card-body">
            <h1 class="my-3"><?= $dados['titulo'] ?></h1>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container-descricao {
            width: 65%; /* Reduz o tamanho em 35% */
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px; /* Adiciona bordas arredondadas ao contêiner externo */
        }

        .book-info {
            display: flex;
            align-items: center;
        }

        .book-image {
            max-width: 200px;
            margin-right: 20px;
            border-radius: 10px; /* Adiciona bordas arredondadas à imagem */
        }

        .book-details {
            flex-grow: 1;
        
        }

        .livro-detalhes h2 {
            font-size: 24px;
            font-size: 1.5em; /* Ajuste o tamanho do texto conforme necessário */
             margin-bottom: 10px;
        }

        .livro-detalhes p {
            font-size: 16px;
        }

        .book-description-container {
            text-align: justify; /* Alinha a descrição à esquerda */
            padding: 20px;
            background-color: #ff6961; /* Cor de fundo para destacar */
            border-radius: 8px; /* Borda arredondada */
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.2); /* Sombreamento */
            margin-top: 20px;
        }

        .book-description h3 {
            font-weight: bold; /* Texto em negrito */
        }

        .book-description {
            margin: 0; 
        }

        .button-container {
            text-align: center;
            margin-top: 25px;
            margin-bottom: 5px;
        }

        .read-button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .read-button:hover {
            background-color: #77dd77;
        }

    </style>


</head>
<body>
    <div class="container-descricao">
        <div class="book-info">
            <img src="<?=URL?>/public/img/O Pássarro Encantado - Eliane Potiguara.jpeg" alt="Capa do livro O Pássarro Encantado">
            <div class="book-details">
                <h2 style="font-family: fantasy">O Pássarro Encantado</h2>
                <p>Autor(a): Eliane Potiguara</p>
                <p>Editora: Jujuba Editora</p>
                <p>Ano: 2014</p>
                <p>Nº de Páginas: 32</p>
                <p>Tipo: Conto</p>
            </div>
        </div>



        <div class="book-description-container">
            <h3><b>Descrição:</b></h3>
            <p class="book-description">Os avós são figuras muito importantes para os povos indígenas. 
                Trazem os costumes, as memórias e os ensinamentos para a vida. Nesse livro, Eliane Potiguara 
                nos conta sobre essa figura poderosa e mágica, a avó, que traz as histórias vivas dentro de si. 
                Aline Abreu, com suas ilustrações, nos carrega para esse tempo de magia.</p>
        </div>

        
        <div class="button-container">
            <a class="read-button" 
            href="https://www.amazon.com.br/P%C3%A1ssaro-Encantado-Eliane-Potiguara/dp/8561695536">COMPRAR LIVRO</a>
        </div>
    </div>
                </li>

            </ul>
        </div>
    </div>

</div>