<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meu Pet</h1>

    <table>
        <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Especie</th>
        </tr>

    <?php
          include("banco_dados_conexao.php");
          try {
            $sth = $dbh->prepare('SELECT pet.id, pet.nome, pet.sexo, especie.nome as especie from pet left join especie on pet.id_especie = especie.id');
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($result)) {
              foreach($result as $row) {
                echo "<tr>";
                echo "<td>". $row["id"] ."</td>";
                echo "<td>". $row["nome"] ."</td>";
                echo "<td>". $row["sexo"] ."</td>";
                echo "<td>". $row["especie"] ."</td>";
                echo "<td><a href='excluir.php?id=".$row["id"]."'>Excluir</a></td>";
                echo "</tr>";
              }
            } 
            $dbh = null;
          } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
          }
        ?>

</table>

    <br><br>
<a href="index.php">Voltar</a>
    
</body>
</html>