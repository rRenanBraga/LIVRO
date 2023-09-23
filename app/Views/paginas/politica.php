<div class="container-md">
    <div class="card">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/style.css">
    
        <div class="card-body">

            <h1 class="my-3 text-center"><?= $dados['titulo'] ?></h1>

            <!-- <p><b>Um pouco sobre literatura indigena.</b></p> -->

            <ul class="list-group list-group-flush">


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
                width: 200px;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                margin-top: 20px;
            }
            .livro img {
                max-width: 100%;
                width: 200px;
                height: 279px;
                margin-bottom: 10px;
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
			width: 200px;
			margin-top: 0px;
		}

    
        </style>

                <div class="obra">
                <img src="<?=URL?>/public/img/obra4.jpg" alt="conto">
                </div>

                <h1>LIVROS EM DESTAQUES</h1>

        <div class="livro-container">

        <div class="container-botao">
        <div class="livro-ler text-center">LER</div>
		<div class="livro">
		<div class=" mb-4">

            <img src="<?=URL?>\public\img\ailton.png" alt="A VIDA NÃO É ÚTIL" >
			<div class="livro-titulo">A VIDA NÃO É ÚTIL</div>
			<div class="livro-autor">AILTON KRENAK</div>
        </div>
		</div>

		</div>

        <div class="container-botao">
        <div class="livro-ler text-center">LER</div>
		<div class="livro">
        <div class=" mb-4">
            <img src="https://m.media-amazon.com/images/I/41ZEQ8pVvZL._SX323_BO1,204,203,200_.jpg">
			<div class="livro-titulo">INDÍOS NO BRASIL</div>
			<div class="livro-autor">ELIANE PORTIGUARA</div>
        </div>	
		</div>

		</div>

        <div class="container-botao">
        <div class="livro-ler text-center">LER</div>
		<div class="livro">
        <div class=" mb-4">
            <img src="https://m.media-amazon.com/images/I/414CXJKuceL._SX337_BO1,204,203,200_.jpg" alt="Foto 3">
			<div class="livro-titulo">MOVIMENTO INDÍGENA </div>
			<div class="livro-autor">DANIEL MUNDURUKU</div>
        </div>	
		</div>

		</div>

        <div class="container-botao">
        <div class="livro-ler text-center">LER</div>
		<div class="livro">
       
            <img src="https://m.media-amazon.com/images/I/51mIK9iQetL._SX332_BO1,204,203,200_.jpg">
			<div class="livro-titulo">A TEMÁTICA INDÍGENA NA ESCOLA</div>
			<div class="livro-autor">YAGUERÊ YAMÃ</div>
		
        </div>

		</div>
	</div>

      

        </div>
    </div>

</div>
