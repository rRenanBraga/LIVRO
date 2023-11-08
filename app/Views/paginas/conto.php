<div class="container my-3">
    <div class="card">
        <div class="card-body">
            <h1 class="my-3 text-center"><?= $dados['titulo'] ?></h1>

            <ul class="list-group list-group-flush">

                <li class="list-group-item">

        <style>
            
		h1{text-align: center;
			margin: 20px;
			font-family:OCR A Std, monospace;
		}
		.livro-container {
			display:flex;
			flex-wrap: wrap;
			justify-content:center;
			gap: 10px;
		}
		.livro {
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 230px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			 margin-top: 20px;
	
		}
		.livro img {
			max-width: 100%;
			width: 187px;
			height: 269px;
			margin-bottom: 20px;
		}
		.livro-titulo {
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
			text-align: center;
		}
		.livro-autor {
			font-size: 14px;
			margin-bottom: 10px;
			text-align: center;
		}

       /* Estilos para o novo container */
	   .container-externo {
            display: flex;
            background-color: #ff6961;
            padding: 20px;
            border-radius: 60px;
            margin-top: 20px;
        }

        .container-interno {
            display: flex;
            align-items: center;
            text-align: flex;
        }

        .container-interno img {
			display: flex;
            max-width: 100%;
			border-radius:10px;
			width: 300px;
            height: 350px;
            margin: 10px;
        }

        /* Estilos para o texto dentro do container interno */
        .container-interno p {
			display: flex;
            font-size: 30px;
            color: white;
            text-align: justify;
            margin-left: 20px;
			margin-right: 20px;
        }

		.livro-ler{
			margin-top: 40px;
			padding: 10px 25px;
			background-color: green ;
			color: #fff;
			border-radius: 15px;
			cursor: pointer;
			width: 100%;
			
		}

		.container-botao{
			flex-direction: column; 
			width: 230px;
			margin-top: 0px;
		}

	</style>


	<h1>LIVROS EM DESTAQUES</h1>

	<div class="livro-container">
		<div class="container-botao">
		<div class="livro-ler text-center">LER</div>
		<div class="livro">
		<div class=" mb-4">
            <img src="<?=URL?>/public/img/Contos da Floresta - Yaguarê Yamã.jpeg" alt="Capa do livro Contos da Floresta - Yaguarê Yamã">
			<div class="livro-titulo">Contos da Floresta</div>
			<div class="livro-autor">Yaguarê Yamã</div>
		</div>
		</div>
		
		</div>

		<div class="container-botao">
		<div class="livro-ler text-center">LER</div>
		<div class="livro">
		<div class=" mb-4">

		<a href="<?=URL?>/paginas/descricao" data-tooltip="tooltip">
   			 <img src="<?=URL?>/public/img/O Pássarro Encantado - Eliane Potiguara.jpeg" alt="Capa do livro O Pássarro Encantado">
		</a>
			<div class="livro-titulo">O Pássarro Encantado</div>
			<div class="livro-autor">Eliane Potiguara</div>
		</div>
		</div>
		
		</div>

		<div class="container-botao">
		<div class="livro-ler text-center">LER</div>
		<div class="livro">
		<div class=" mb-4">
            <img src="<?=URL?>/public/img/Sapatos Trocados - Cristiano Wapichana.jpeg" alt="Capa do livro Sapatos Trocados">
			<div class="livro-titulo">Sapatos Trocados</div>
			<div class="livro-autor">Cristiano Wapichana</div>
		</div>
		</div>
		
		</div>

		<div class="container-botao">
		<div class="livro-ler text-center">LER</div>
		<div class="livro">
            <img src="<?=URL?>/public/img/Kurumi Guaré no Coração da Amazônia - Yaguarê Yamã.jpeg" alt="Capa do livro Kurumi Guaré no Coração da Amazônia - Yaguarê Yamã">
			<div class="livro-titulo">Kurumi Guaré no Coração da Amazônia</div>
			<div class="livro-autor">Yaguarê Yamã</div>
		</div>
		
		</div>

		
		</div>

	</div>

	<div class="container-externo">
		<div class="container-interno">
            <img src="<?=URL?>/public/img/CulturaBR.jpg" alt="CulturaBR.jpg">
			<p>Explore nossa seção de contos indígenas e mergulhe em narrativas ancestrais que celebram a riqueza cultural e 
				espiritual das comunidades indígenas. Descubra histórias repletas de sabedoria, mitologia e conexão com a 
				natureza, transmitidas oralmente por gerações. Esses livros oferecem uma oportunidade de aprendizado, respeito 
				pela diversidade e honra às tradições indígenas. Aprecie essas narrativas únicas e significativas, que o guiarão 
				em uma jornada enriquecedora.</p>
		</div>
	</div>

                </li>

            </ul>
        </div>
    </div>

</div>