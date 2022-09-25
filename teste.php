<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

</head>
<body>
    
    <?php 
        include 'conexao.php';
        // Variavel $consulta receve $cn que por sua vez recebe a query
        $consulta = $cn->query('select * from vw_livro');

        // Variavel $exibe recebe o resultado em forma de matriz(TABELA) 
        while ($exibe = $consulta ->fetch(PDO::FETCH_ASSOC)) {

        echo $exibe['nm_livro'].'<br>';
        echo $exibe['vl_preco'].'<br>';
        echo $exibe['ds_categoria'].'<br>';
        echo '<hr>';

    }
    ?>


</body>
</html>