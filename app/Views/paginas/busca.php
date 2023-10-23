
<div class="container p-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-5"><?=APP_NOME ?></h1>
           
        </div>
        <div class="col-md-4 text-center">
            
            
<h1>Resultados da Busca</h1>

<table border="1">
 
    <?php foreach($resultados as $livro): ?>
        <tr>
            <td><?php echo $livro['obra_titulo']; ?></td>
            <td><?php echo $livro['auto_nome']; ?></td>
            <td><?php echo $livro['gene_nome']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

            
        </div>
    </div>
</div>



