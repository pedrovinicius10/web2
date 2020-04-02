<!DOCTYPE html>
<html lang ="en">
<head>

    <title>Dever 1 </title>
    </head>
    <body>
    <h1> Exercicio 3</h1>
      <form action="/ex3" method="post">

      @csrf

      Salario Mensal:<input type ="text" name="rendaTotal"><br>
      Reajuste : <input type ="text" name="reajuste"><br>

      <br>
      <input type ="submit" value ="Enviar">
      </form>
</body>
</html>      