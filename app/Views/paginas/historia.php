<div class="container my-3">
    <div class="card">
        <div class="card-body">
            <h1 class="my-3"><?= $dados['titulo'] ?></h1>

            <!-- <p><b>Um pouco sobre literatura indigena.</b></p> -->

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
                margin-bottom: 10px;
            }
            .livro-titulo {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 15px;
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
          
            }
    
        </style>
    
        <h1>LIVROS EM DESTAQUES</h1>
    
        <div class="livro-container">

            <!-- CHAMANDO AS INFORMAÇÕES DO BANCO DE DADOS (LIVRO DO GÊNERO HISTORIA) -->
            <div class="container-botao">
             <div class="livro-ler text-center">LER</div>

            <?php 
            foreach  ($livros as $livro) : ?>
            <div class="livro">
            <div class=" mb-4">
            <?= $livro->obra_imagem?>
            <div class="livro-titulo"><?= $livro->obra_titulo ?></div>
            <div class="livro-autor"><?= $livro->autor_nome ?></div>
                        </div>
            </div>
            <?php endforeach; ?>
         
            </div>
    
            <div class="container-botao">
            <div class="livro-ler text-center">LER</div>
            <div class="livro">
            <div class=" mb-4">
                <img src="<?=URL?>/public/img/conto.jpg" alt="CONTOS INDÍGENAS BRASILEIROS">
                <div class="livro-titulo">CONTOS INDÍGENAS BRASILEIROS</div>
                <div class="livro-autor">DANIEL MUNDURUKU</div>
            </div>
            </div>

           
            </div>

            <div class="container-botao">
            <div class="livro-ler text-center">LER</div>
            <div class="livro">
            <div class=" mb-5">
                <img src="<?=URL?>/public/img/queda.jpg" alt="A Queda do Céu">
                <div class="livro-titulo">A Queda do Céu</div>
                <div class="livro-autor">DAVI KOPENAWA YANOMAMI </div>
            </div>
            </div>

            </div>
    
            <div class="container-botao">
            <div class="livro-ler text-center">LER</div>
            <div class="livro">
            <div class=" mb-4">
                <img src="<?=URL?>/public/img/taynoh.jpg" alt="TAYNÔH: O MENINO QUE TINHA CEM ANOS">
                <div class="livro-titulo">TAYNÔH: O MENINO QUE TINHA CEM ANOS</div>
                <div class="livro-autor">ALINE ROCHEDO PACHAMAMA</div>
            </div>
            </div>

            </div>
    
        </div>
    

                </li>

            </ul>
        </div>
    </div>

</div>