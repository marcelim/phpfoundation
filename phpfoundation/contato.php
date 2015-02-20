<h1>Contato</h1>
<p>Entre em contato com a nossa empresa, preencha os campos abaixo e deixe aqui a sua mensagem.</p>
<br />

<form style="width: 60%;" id="contato" method="post">

    <?php
    if (isset($_POST["envio"])) {
        if (($_POST["envio"]) == "enviar") {

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $assunto = $_POST["assunto"];
            $mensagem = $_POST["mensagem"];

            echo '<div class="bs-callout bs-callout-info" >';
            echo '<p>Dados enviados com sucesso, abaixo seguem os dados que você enviou: </p>';
            echo '<p><b>Nome:</b> ' . $nome . ' </p>';
            echo '<p><b>E-mail:</b> ' . $email . ' </p>';
            echo '<p><b>Assunto:</b> ' . $assunto . ' </p>';
            echo '<p><b>Mensagem:</b> ' . $mensagem . ' </p>';
            echo '</div>';
        }
    };
    ?>

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
    </div>

    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
    </div>

    <div class="form-group">
        <label for="assunto">Assunto</label>
        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
    </div>

    <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" style="resize: vertical;" required></textarea>
    </div>

    <input type="hidden" name="envio" value="enviar" />
    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">

</form>