<?php

include_once 'banco/Db.php';

class Logar extends Db {
    // nome da tabela que vai realizar a consulta no banco de dados
    private $tabela = "usuario";
    private $login;
    private $senha;



    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

        
    function valida() {
        
        $sql  = "SELECT * FROM $this->tabela WHERE usu_email = :login AND usu_senha = :senha";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':login',  $this->login);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->execute();
        $confere = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total = count($confere);
 
        if($total > 0){

            session_start();
            $_SESSION['idUsu'] = $confere[0]['id'];
            $_SESSION['login'] = $confere[0]['usu_email'];
            $_SESSION['senha'] = $confere[0]['usu_senha'];
            $_SESSION['nivel'] = $confere[0]['usu_nivel'];
            
            // redirecionamento da pagina caso o login seja efetuado com sucesso.
            header("Location:index.php?pg=Validado"); 
            
            }
        else {
            session_destroy();
            // redirecionamento da pagina caso o login seja efetuado sem sucesso.
            header("Location:index.php?pg=ErroLogin"); 
        }  
        
    }
    
    function buscasenha($email) {
        $sql  = "SELECT * FROM $this->tabela WHERE usu_email = :login";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':login', $email);
        $stmt->execute();
        $confere = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo '<a href=index.php?pg=LinkSenha&id='.$confere[0]['id'].'-'.$confere[0]['usu_senha'].'>Recuperar Senha</a>';
        
        
        /*
        // Aqui vamos configurar o cabeçalho (header) do e-mail, formatos, remetentes, destinatários de cópias
        $headers = "MIME-Version: 1.0\r\n";
        // Aqui definirmos o formato padrão HTML e a codificação do Texto
        $headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
        // Abaixo estabelecemos o Remetente do E-mail com o From:
        $headers.= "From: sadd.apae@gmail.com\r\n";
        // Nesta linha abaixo, configuramos o e-mail do destinatário, caso queira especificar mais de 1 destinatário, basta colocar uma virgula (,) e o outro e-mail, ex: fulano@gmail.com, fulano2@gmail.com
        $destinatario = $confere['fun_email'];
        // Definimos o assuntos do nosso e-mail
        $assunto = "Recuperar Senha";

        // Abaixo, vamos colocar o corpo da mensagem, lembrando que como definimos que será em padrão HTML acima no cabeçalho, você terá de utilizar tags HTML abaixo, veja o exemplo
        $mensagem = "
        <html>
        <head>
           <title>Recuperar Senha</title>
        </head>
        <body>
        <font face=\"Arial\" size=\"2\" color=\"#333333\">
        <br />
        <b>Solicitação de recuperação de senha: clique no link abaixo.</b><br />
        <a href=www.sadd.com.br?pg=LinkSenha&id=".$consulta['id']."-".$consulta['fun_senha'].">Recuperar Senha</a>
        </font>
        </body>
        </html>
        ";

        // Definido todos os parametros, agora podemos proceder com o envio, conforme a linha abaixo, lembre-se sempre de verificar se todos os parâmetros estão corretamente especificados
        mail($destinatario, $assunto, $mensagem, $headers);
         * 
         */
                
    }
    
    function atualizasenha($id,$senha) {
        $sql = "UPDATE $this->tabela SET usu_senha = :novaSenha WHERE id = :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':novaSenha',md5($senha));
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); 
        
    }
    
    function verificalogin($id,$senha) {
        $sql  = "SELECT * FROM $this->tabela WHERE id = :id AND usu_senha = :senha";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':id',  $id);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        $confere = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total = count($confere);
        if($total > 0){
            return;
        }else{
            $error = "Usuario ou Senha Incorretos";
            $url = "index.php?pg=Logar";
            include_once 'view/Aviso.php';
            
        }
        
    }
    function liberaacesso($id,$nivel) {
      
       
        $sql  = "SELECT * FROM $this->tabela WHERE id= :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total = count($usuario);
        if($total > 0){
                $niv = $usuario[0]['usu_nivel'];
                foreach ($nivel as $valor) {
                       if($niv==$valor){
                            
                            return;                     
                        }
                }
                session_destroy();
                $error = "Acesso Negado.";
                $url = "index.php?pg=Logar";
                include_once 'view/Aviso.php';
                exit();
     
        
        }else{
            session_destroy();
            $error = "Usuario ou Senha Incorretos";
            $url = "index.php?pg=Logar";
            include_once 'view/Aviso.php';
            exit();
            
        }
        
    }
    
}
