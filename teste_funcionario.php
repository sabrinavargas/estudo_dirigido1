<?php

require __DIR__."/funcionario.php";
require __DIR__."/data.php";


//valores para os atributos de cada instância
    $usuario1 = new funcionario();
    $usuario1->departamento = "gerencia";
    $usuario1->salario = "2500";
    $usuario1->CPF = "100515819-30";

    $dataEntrada = new Data();
    $dataEntrada->dia = 08;
    $dataEntrada->mes = 08;
    $dataEntrada->ano = 2018;
    
    $usuario1->dataEntrada = $dataEntrada;

//metodos a fim de testá-los
    $aumento_salario = $usuario1-> recebeAumento();
    print_r($aumento_salario);

    $usuario1 = new data();

//valores para os atributos de cada instãncia
    $usuario2 = new funcionario();
    $usuario2->departamento = "marketing";
    $usuario2->salario = "1200";
    $usuario2->CPF = "435.936.987-98";

    $dataEntrada = new Data();
    $dataEntrada->dia = 10;
    $dataEntrada->mes = 08;
    $dataEntrada->ano = 2018;

    $aumento_salario = $usuario2->recebeAumento();
    $salario_anual= $usuario2->calculaGanhoAnual();
    print_r($aumento_salario);




