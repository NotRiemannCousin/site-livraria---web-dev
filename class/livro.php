<?php 
class Livro{
    public $codigo;
    public $titulo;
    public $descricao;
    public $autores;
    public $editora;
    public $edicao; 
    public $paginas;
    public $ano;
    public $lancamento;
    public $preco;
    public $avaliacoes;

    public function preencherDados($dados){
        $this->$codigo = $dados[0];
        $this->$titulo = $dados[1];
        $this->$descricao = $dados[2];
        $this->$autores = $dados[3];
        $this->$editora = $dados[4];
        $this->$edicao; = $dados[5] 
        $this->$paginas = $dados[6];
        $this->$ano = $dados[7];
        $this->$lancamento = $dados[8];
        $this->$preco = $dados[9];
        $this->$avaliacoes = $dados[10];
    }

    public function calcularAvaliacaoTotal(){
        return  $this->avaliacoes[0] + $this->avaliacoes[1] + $this->avaliacoes[2] + $this->avaliacoes[3] + $this->avaliacoes[4] ;
    }
 
     public function calcularPercentualAvaliacao ($index){
      return $this->avaliacoes[$index] / $this->calcularAvaliacaoTotal();
 
     }
 
     function calcularAvaliacaoMedia(){
         return ($this->calcularPercentualAvaliacao(0) * $this->avaliacoes[0]) + ($this->calcularPercentualAvaliacao(1) * $this->avaliacoes[1]) + ($this->calcularPercentualAvaliacao(2) * $this->avaliacoes[2]) + ($this->calcularPercentualAvaliacao(3) * $this->avaliacoes[3]) + ($this->calcularPercentualAvaliacao(4) * $this->avaliacoes[4]);
         }

         // mudar a multiplicação da Avaliação do percentual, colocar para somar 
}
?>