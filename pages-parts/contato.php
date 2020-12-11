<?php 
$nome_error =  $email_error = $assunto_error = $mensagem_error = '';

if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  if(empty($_POST['nome-contato'])){
    $nome_error = "O nome é obrigatorio";
  }else{
    $nome = testa_input($_POST['nome-contato']);
  }

  if(empty($_POST['email-contato'])){
    $email_error = "O email é obrigatorio";
  }else{
    $email = testa_input($_POST['email-contato']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $email_error = "Formato de email invalido";
    }
  }

  if(empty($_POST['assunto-contato'])){
    $assunto_error = "O assunto é obrigatorio";
  }else{
    $assunto = testa_input($_POST['assunto-contato']); 
  }

  if(empty($_POST['mensagem-contato'])){
    $mensagem_error  = "A mensagem é obrigatorio";
  }else{
    $assunto = testa_input($_POST['assunto-contato']); 
  }

  if($nome_error===''&&$email_error===''&&$assunto_error===''&&$mensagem_error===''){
    echo "mensagem enviada ";
  }else{
    echo "mensagem não enviada ";
  }

}

?>



<section class="intro-page intro-contato">
  <h1>
    CONTATO
  </h1>
  <p>
    É a chegada ao limiar da juventude. Deixar para trás a infância
    tão próxima e preparar-se para novas responsabilidades,
  </p>
</section>
<!-- Pagina Orçamento-->
<section class="page-contato">
  <form action="index.php?pag=contato" method="post" id="form-contato">
    <div class="page-blog-conteudo">
      <div class="page-contato-conteudo-item">
        <div class="page-contato-conteudo-item-1" id="page-contato-conteudo-item-1">
          <div class="">
            <label for="">Nome</label>
            <input type="text" name="nome-contato" id="input-nome"
            value="<?php echo isset($_POST['nome-contato']) ? $_POST['nome-contato'] : ''; ?>"   placeholder="Digite o nome completo" >
            <span class="erro"> <?php echo  $nome_error ;?> </span>
          </div>
          <div class="">
            <label for="">E-mail</label>
            <input type="email" name="email-contato" id="input-email"
            value="<?php echo isset($_POST['email-contato']) ? $_POST['email-contato'] : ''; ?>" placeholder="Digite o teu melhor e-mail">
            <span class="erro"><?php echo  $email_error; ?></span>
          </div>
          <div class="">
            <label for="">Assunto</label>
            <input type="text" id="input-assunto"  name="assunto-contato" value="<?php echo isset($_POST['email-contato']) ? $_POST['assunto-contato'] : ''; ?>" placeholder="Digite o assunto" >
            <span class="erro"><?php echo  $assunto_error; ?> </span>
          </div>
          <div class="">
            <label for="">Mensagem</label>
            <textarea name="mensagem-contato"  id="textarea-mensagem" placeholder="Digite aqui a sua mensagem"><?php echo isset($_POST['mensagem-contato']) ? $_POST['mensagem-contato'] : ''; ?></textarea>
            <span class="erro"><?php echo  $mensagem_error; ?></span>
          </div>
          <div>
            <input type="submit" value="ENVIAR A MENSAGEM" id="submit-contato">
          </div>
        </div>
        
        <div class="page-contato-conteudo-item-2">
          <div>
            <p>
              Endereço do evento
            </p>
            <label for="">
              Independencia, 1055, Centro - São Leopoldo - Rs
            </label>
          </div>
          
          <!---->
          <div>
            <p>
              Telefone de contacto
            </p>
            <label for="">
              <a href="tel:51982378569">
                51982378569
              </a>
            </label>
          </div>

          <!---->
          <div>
            <p>
              Redes Socias
            </p>
            <ul>
              <li>
                <a href="">   
                  <i class="fa fa-facebook fa-1x"></i>
                  Pagina do FaceBook
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-instagram fa-1x"></i>
                  Pagina do Instagram
                </a>
              </li>
            </ul>
          </div>

          <!---->
          <div>
            <p>
            Mapa
            </p>
            <img src="assets/images/mapa.png" alt="">
          </div>

        </div>
      
      </div>  
    </div>
  </form>
</section>
<section class="conclu-page">
  <p>
    É a chegada ao limiar da juventude. Deixar para trás a infância
    tão próxima e preparar-se para novas responsabilidades,
  </p>
</section>
