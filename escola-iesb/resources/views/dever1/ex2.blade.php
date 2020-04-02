<!DOCTYPE html>
<html lang ="en">
<head>

    <title>Dever 1 </title>
    </head>
    <body>
    <h1> Exercicio 2</h1>
      <form action="/ex2" method="post">

      @csrf

      Numero total de eleitores :<input type ="text" name="total"><br>
      Votos Brancos :<input type ="text" name="brancos"><br>
      Votos Nulos :<input type ="text" name="nulos"><br>
      Votos Validos :<input type ="text" name="validos"><br>

      <br>
      <input type ="submit" value ="Enviar">
      </form>
</body>
</html>      