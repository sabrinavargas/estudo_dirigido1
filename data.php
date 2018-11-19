<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 12/11/2018
 * Time: 15:54
 */
class Data{

    public $dia;
    public $mes;
    public $ano;

    public function mostra(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}