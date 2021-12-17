<?php
    function enviarMensagem($dados) {
        // Dados do formulario
        $nome_usuario       = $dados['Name'];
        $email_usuario      = $dados['Email'];
        $email_subject      = $dados['Subject'];
        $mensagem_usuario   = $dados['Message'];
        
        // Criar variaveis de envio
        $destino            = "contato@ghgconsultoriaemti.com";
        $remetente          = "ghg@ghgconsultoriaemti.com";
        $assunto            = "Mensagem do site";
        
        // Montar o corpo da mensagem
        $mensagem           = "O usuario " . $nome_usuario . " enviou uma mensagem." . "</BR>";
        $mensagem           .= "email do usuario: " . $email_usuario . "</BR>";
        $mensagem           .= "mensagem:" . "</BR>";
        $mensagem           .= $mensagem_usuario;
        
        return mail($destino, $assunto, $mensagem, $remetente);
    }

?>