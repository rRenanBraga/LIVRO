<?php
class Paginas extends Controller{
     public function index(){
          $dados = ['titulo'=>'Página Inicial',
                    'descricao'=>'Aula de PHP'
                   ];
          $this->view('paginas/home', $dados);
          }//fim do método index

     public function sobre(){
          $dados = ['titulo'=>'SOBRE NÓS',
          'descricao'=>'Aqui você encontra o melhor conteúdo...'
         ];
          $this->view('paginas/sobre', $dados);
      }

      public function politica(){
          $dados = ['titulo'=>'POLÍTICA INDIGENA',
          'descricao'=>'Aqui você encontra o melhor conteúdo...'
         ];
          $this->view('paginas/politica', $dados);
      }

      public function conto(){
          $dados = ['titulo'=>'CONTO INDIGENA',
          'descricao'=>'Aqui você encontra o melhor conteúdo...'
         ];
          $this->view('paginas/conto', $dados);
      }

      public function historia(){
          $dados = ['titulo'=>'HISTORIA INDIGENA',
          'descricao'=>'Aqui você encontra o melhor conteúdo...'
         ];
          $this->view('paginas/historia', $dados);
      }

}//fim da classe


