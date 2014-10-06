<?php

include_once 'db/Db.php';

class Logar extends Db {
    // nome da tabela que vai realizar a consulta no banco de dados
    private $tabela = "funcionario";
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
        
        $sql  = "SELECT * FROM $this->tabela WHERE fun_email = :login AND fun_senha = :senha";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':login',  $this->login);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->execute();
        $confere = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total = count($confere);
 
        if($total > 0){
            $sql  = "SELECT * FROM cargo WHERE id = :idCar";
            $stm = Db::prepare($sql);
            $stm->bindParam(':idCar',$confere[0]['fun_car_id']);
            $stm->execute();
            $con = $stm->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['idFun'] = $confere[0]['id'];
            $_SESSION['login'] = $confere[0]['fun_email'];
            $_SESSION['senha'] = $confere[0]['fun_senha'];
            $_SESSION['cargo'] = $con[0]['car_nome'];
            
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
        $sql  = "SELECT * FROM $this->tabela WHERE fun_email = :login";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':login', $email);
        $stmt->execute();
        $confere = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo '<a href=index.php?pg=LinkSenha&id='.$confere[0]['id'].'-'.$confere[0]['fun_senha'].'>Recuperar Senha</a>';
        
        
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
        $sql = "UPDATE $this->tabela SET fun_senha = :novaSenha WHERE id = :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':novaSenha',md5($senha));
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); 
        
    }
    
    function verificalogin($id,$senha) {
        $sql  = "SELECT * FROM $this->tabela WHERE id = :id AND fun_senha = :senha";
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
    function liberaacesso($id,$nivel,$cargo) {
      
       
        $sql  = "SELECT * FROM $this->tabela WHERE id= :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total = count($usuario);
        if($total > 0){
                $car = $usuario[0]['fun_car_id'];
                $sql  = "SELECT * FROM cargo WHERE id= :cargo";
                $stm = Db::prepare($sql);
                $stm->bindParam(':cargo', $car, PDO::PARAM_INT);
                $stm->execute();
                $c = $stm->fetchAll(PDO::FETCH_ASSOC);
                $ca = $c[0]['car_nome'];
                $niv= $c[0]['car_nivel'];
                foreach ($nivel as $valor) {
                       if(($niv==$valor) AND (strcmp($ca,$cargo)==0)){
                            
                            return;                     
                        }else{
                            session_destroy();
                            $error = "Acesso Negado.";
                            $url = "index.php?pg=Logar";
                            include_once 'view/Aviso.php';
                            exit();
                        }
                }
     
        
        }else{
            session_destroy();
            $error = "Usuario ou Senha Incorretos";
            $url = "index.php?pg=Logar";
            include_once 'view/Aviso.php';
            exit();
            
        }
        
    }
    
}
