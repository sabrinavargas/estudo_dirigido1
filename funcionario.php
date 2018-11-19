<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 12/11/2018
 * Time: 15:54
 */

class funcionario{
    public $departamento;
    public $salario;
    public $dataEntrada;
    public $CPF;

    public function recebeAumento(){

        $aumento_salario = $this->salario + ($this->salario * 0,10);

        return $aumento_salario;

    }

    public function calculaGanhoAnual(){
        $soma_salarios = $this->salario * 12;
        return $soma_salarios;
    }

    public function mostrar(){
        return "O funcionário do departamento {$this->departamento}, funcionário desde {$this->dataEntrada->mostra()} possui salário de {$this->salario}";
    }

    public function __toString() {
        return $this->mostra();

    }

}