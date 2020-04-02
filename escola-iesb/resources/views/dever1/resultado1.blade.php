<h1>Exercicio 1 </h1>
<h3>Aluno : {{$aluno}} </h3>
<h2> A média é {{$media}}</h2>

@if($media >= 7)
<h3> O aluno esta Aprovado </h3>
@else
<h3> O aluno esta Reprovado </h3>
@endif