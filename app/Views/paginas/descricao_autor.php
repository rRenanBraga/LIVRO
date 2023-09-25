<div class="container my-3">
    <div class="card">
        <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/descricao.css">
        <div class="card-body">
            <h1 class="my-3"><?= $dados['titulo'] ?></h1>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="container-descricao">
                        <!-- ... Código anterior ... -->

                        <!-- Nova Seção: Foto do Autor -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                            <img src="<?=URL?>/public/img/EEliane.jpg" alt="Imagem 1" class="image" style="width: 100%;">
                            </div>
                            <div class="col-md-6" style="margin-top: 20px;">
                                <h3 class="font-weight-bold mb-4 text-center">Eliane Potiguara</h3>
                                <p>Eliane Lima dos Santos, conhecida por Eliane Potiguara, é uma professora, escritora, ativista e empreendedora indígena brasileira. Fundadora da Rede Grumin de Mulheres Indígenas. Foi uma das 52 brasileiras indicadas para o projeto internacional "Mil Mulheres para o Prêmio Nobel da Paz</p>
                            </div>
                        </div>

                        <!-- Nova Seção: Comunidade Indígena -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h3 class="font-weight-bold mb-3 text-center">Comunidade Potiguara</h3>
                                <p>Os Potiguara constituem um grande exemplo de luta entre os povos 
                                    indígenas no Nordeste brasileiro. Sua história de contato com a 
                                    sociedade não indígena remonta ao início da colonização. Hoje, procuram 
                                    manter o vigor de sua identidade étnica por meio do reaprendizado da língua 
                                    Tupi-Guarani, do complexo ritual do Toré, da circulação de dádivas nas festas 
                                    de São Miguel e de Nossa Senhora dos Prazeres, na produção dos idiomas simbólicos 
                                    do sangue e da terra e na produção cultural dentro da prática do turismo étnico.</p>
                                <p><strong>Localização:</strong> PB, CE, PE, RN</p>
                            </div>
                            <div class="col-md-6">
                            <img src="<?=URL?>/public/img/potiguara.jpg" alt="Comunidade Indígena" class="img-fluid rounded" style="width: 100%;">
                            </div>
                        </div>

                        <!-- ... Código anterior ... -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
