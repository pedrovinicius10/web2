<?php

namespace App\Http\Controllers;

use illuminate\http\Request;

class Dever1Controller extends Controller
{
    public function ex1()
{
    return view ('dever1.ex1');
}
    public function resultado1 (Request $request)
{

    $n1 = $request ->n1;
    $n2 = $request ->n2;
    $n3 = $request ->n3;
    $n4 = $request ->n4;

    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    $aluno = 'Pedro Vinícius';

    return view ('Dever1.resultado1', compact ('media','aluno'));
}


public function ex2()
{
    return view ('dever1.ex2');
}

public function resultado2(Request $request)
{
     $total = $request->total;
     $brancos = $request->total;
     $nulos = $request->total;
     $validos = $request->total;
     
     $percentualBrancos = ($brancos * 100 / $total);
     $percentualNulos = $nulos * 100 / $total;
     $percentualValidos = $validos * 100 / $total;

     return view ('dever1.resultado2',compact ('percentualBrancos','percentualnulos','percentualValidos','total'));
}

public function ex3()
{
    return view ('dever1.ex3');
}   
    public function resultado3(Request $request)
 {
     $rendaTotal = $request -> $rendaTotal;
     $salarioMensal = $request -> $rendaTotal;
     $reajuste = $request -> $reajuste;

     $novoSalario = ($rendaTotal * $reajuste / 100 );
     $novoSalario = $novoSalario + $salarioMensal;

 
    return view ('dever1.resultado3',compact ('novoSalario'));

}
public function ex4()
{
    return view ('dever1.ex4');
}   
    public function resultado4(Request $request)
 {
     $custoFabrica = $request -> $custoFabrica;
     $impostos = 28;
     $percentualDistribuidor = 45;


     

     $impostos = ($custoFabrica * $impostos) / 100 ;
     $percentualDistribuidor = ($percentualDistribuidor * $custoFabrica) /100;

     $custoFinal = $custoFabrica + $impostos + $percentualDistribuidor;
     
 
    return view ('dever1.resultado4',compact ('custoFabrica','impostos','percentualDistribuidor', 'custoFinal'));

}
public function ex6()
{
    return view ('dever1.ex6');
}   
    public function resultado6(Request $request)
 {
     $salarioFixo = $request -> $salarioFixo;
     $totalVendas = $request -> $totalVendas;
     $carrosVendidos = $request -> $carrosVendidos;


     $comissao = ( $carrosVendidos * 5 ) /100;
     $salarioFinal = $salarioFixo + $comissao;

     return view ('dever11.ex6',compact ('salarioFinal',));




}
}