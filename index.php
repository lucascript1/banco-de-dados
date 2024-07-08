<?php
require("conexao.php");

?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    
        <table class="table table-striped">

            <tr>
                <th scope="col">NOME</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">EDITAR</th>
                <th scope="col">APAGAR</th>
            </tr>

            <?php carregarCaracteristicas($conexao); ?>


        </table>
    <form action="cadCaracteristica.php" method="POST">
        <button type='submit' name='btnCadastrar'>Novo</button>
    </form>

</body>

</html>

<?php
function carregarCaracteristicas($conexao)
{


    $sql = "SELECT * FROM caracteristica";
    $res = mysqli_query($conexao, $sql);

    while ($linha = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['descricao'] . "</td>";
        echo "<td> <button class='btn btn-default btn-sm'><span class='glyphicon glyphicon-pencil'> Pencil </button> </td>";
        echo "<td> <button class='btn btn-default btn-sm'><span class='glyphicon glyphicon-remove-circle'></span> Pencil </button> </td>";

        echo "</tr>";
    }
}
?>