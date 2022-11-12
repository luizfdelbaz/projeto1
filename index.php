
<?php

include "conexao.php";

if( isset ($_POST) && !empty($_POST)){
    $pergunta = $_POST ["pergunta"];
    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"];
    $d = $_POST["D"];
    $e = $_POST["E"];
    $correta = $_POST["correta"];

    $query = "insert into questoes (pergunta,a,b,c,d,e,correta)";
    $query = $query."values('$pergunta', '$a', '$b', '$c', '$d', '$e', '$correta')";
    $resultado = mysqli_query($conexao, $query);




} 






?>









<form action="./index.php"  method="post">

<label> Pergunta</label>
<input type="text" name="pergunta" />

<br><br>

<label>A</label>
<input type="radio" name="correta"  value="A" />
<input type="text" name="A" />

<br><br>

<label>A</label>
<input type="radio" name="correta"  value="B" />
<input type="text" name="B" />


<br><br>

<label>A</label>
<input type="radio" name="correta"  value="C" />
<input type="text" name="C" />

<br><br>

<label>A</label>
<input type="radio" name="correta"  value="D" />
<input type="text" name="D" />

<br><br>

<label>A</label>
<input type="radio" name="correta"  value="E" />
<input type="text" name="E" />

<br><br>

<button type="submit">Salvar Pergunta</button>



 
</form>

<?php

$query = "select * from questoes order by id desc";
$resultado = mysqli_query($conexao, $query);

while($linha = mysqli_fetch_array($resultado)){
    ?>
       <div style="width:100%; border:1px solid;">
          <h1> <?php echo $linha["pergunta"]; ?> </h1>
          <h1> <?php echo $linha["a"]; ?> </h1>
          <h1> <?php echo $linha["b"]; ?> </h1>
          <h1> <?php echo $linha["c"]; ?> </h1>
          <h1> <?php echo $linha["d"]; ?> </h1>
          <h1> <?php echo $linha["e"]; ?> </h1>
          

    <?php
}
?>