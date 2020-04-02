<!DOCTYPE html>
<html lang ="en">
<head>

    <title>Dever 1 </title>
    </head>
    <body>
    <h1> Exercicio 1</h1>
      <form action="/ex1" method="post">

      @csrf

      Nota 1 :<input type ="text" name="n1"><br>
      Nota 2 :<input type ="text" name="n2"><br>
      Nota 3 :<input type ="text" name="n3"><br>
      Nota 4 :<input type ="text" name="n4"><br>

      <br>
      <input type ="submit" value ="Enviar">
      </form>
</body>
</html>      