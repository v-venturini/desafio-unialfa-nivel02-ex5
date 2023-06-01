<?php

    if ($_POST) {
        $nome = $_POST['nome'] ?? NULL;
        $email = $_POST['email'] ?? NULL;
        $idade = $_POST['idade'] ?? NULL;
        $hobbie = $_POST['hobbie'] ?? NULL;
    }

    if ($idade < 18) {
        echo "<script>alert('Idade não permitida')</script>";
        echo "<script>location.href='formulario.php';</script>";
    }

    if (strlen($nome) < 5) {
        echo "<script>alert('O nome deve conter mais de 5 caracteres')</script>";
        echo "<script>location.href='formulario.php';</script>";
    }
?>
    <table>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Idade</th>
            <th>Hobbie</th>
        </tr>

        <?php 
        
        foreach ($_POST as $_POST => $post) {
            ?>
            <td><?=$post?></td>
            <?php 
        }

        ?>

    </table> 
    
    