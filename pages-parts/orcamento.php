<?php
$nome_error_orcamento = $tel_error_orcamento = $email_error_orcamento = $data_error_orcamento = $observacao_error_orcamento = $evento_error_orcamento = '';

$cep_error_orcamento =  $rua_error_orcamento = $rua_error_orcamento = $numero_error_orcamento = $bairro_error_orcamento = $cidade_error_orcamento = $estado_error_orcamento = '';


if($_SERVER["REQUEST_METHOD"]==="POST"){
  if(empty($_POST['nome-orcamento'])){
    $nome_error_orcamento ='O nome é obrigatorio ';
  }else{
    $nome_orcamento = testa_input($_POST['nome-orcamento']);
  }

  if(empty($_POST['tel-orcamento'])){
    $tel_error_orcamento ='O telefone é obrigatorio ';
  }else{
    $tel_orcamento = testa_input($_POST['tel-orcamento']);
    if(!preg_replace('/[^0-9]/', '', $tel_orcamento)){
      $tel_error_orcamento ='Numero de telefone invalido ';
    }
  }

  if(empty($_POST['email-orcamento'])){
    $email_error_orcamento = "O email é obrigatorio";
  }else{
    $email_orcamento = testa_input($_POST['email-orcamento']);
    if(!filter_var($email_orcamento, FILTER_VALIDATE_EMAIL)){
      $email_error_orcamento = "Formato de email invalido";
    }
  }

  if(empty( $_POST['evento-orcamento'])){
    $evento_error_orcamento = 'O camapo é obrigatorio';
  }else{
    $evento_orcamento = testa_input($_POST['evento-orcamento']);
   
  }

  if(empty($_POST['data-orcamento'])){
    $data_error_orcamento ='O camapo é obrigatorio';
  }else{
    $data_orcamento = testa_input($_POST['data-orcamento']);
  }

  if(empty( $_POST['observacao-orcamento'])){
    $observacao_error_orcamento ='O camapo é obrigatorio';
  }else{
    $observacao_orcamento = testa_input($_POST['observacao-orcamento']);
  }  

  // Validar o Endereço

  if(empty($_POST['cep-orcamento'])){
    $cep_error_orcamento ='Ops! campo obrigatorio';
  }else{
    $cep_orcamento = testa_input($_POST['cep-orcamento']);
    if(!preg_replace('/[^0-9]/', '',  $cep_orcamento)){
      $cep_error_orcamento ='Cep invalido';
    } 
  }

  if(empty($_POST['rua-orcamento'])){
    $rua_error_orcamento ='O campo é obrigatorio';
  }else{
    $rua_orcamento = testa_input($_POST['rua-orcamento']);
  }
  
  if(empty($_POST['numero-orcamento'])){
    $numero_error_orcamento ='Ops! só numero';
  }else{
    $numero_orcamento = testa_input($_POST['numero-orcamento']);
    if(!preg_replace('/[^0-9]/', '',  $numero_orcamento)){
      $numero_error_orcamento ='Numero invalido';
    } 
  }
   
  if(empty($_POST['bairro-orcamento'])){
    $bairro_error_orcamento ='O campo é obrigatorio';
  }else{
    $bairro_orcamento = testa_input($_POST['bairro-orcamento']);
  }

  if(empty($_POST['cidade-orcamento'])){
    $cidade_error_orcamento ='O campo é obrigatorio';
  }else{
    $cidade_orcamento = testa_input($_POST['cidade-orcamento']);
  }

  if(empty( $_POST['estado-orcamento'])){
    $estado_error_orcamento ='O campo é obrigatorio';
  }else{
    $estado_orcamento = testa_input($_POST['estado-orcamento']);
  }

  $valideGeralEvento = false;
  if($nome_error_orcamento===''&&$tel_error_orcamento===''&&$email_error_orcamento===''&&$data_error_orcamento===''&&$observacao_error_orcamento===''&&$evento_error_orcamento===''){
    $valideGeralEvento = true;
  }
  $validaLocal = false;
  if($cep_error_orcamento===''&& $rua_error_orcamento===''&&$numero_error_orcamento===''&&$bairro_error_orcamento===''&&$cidade_error_orcamento===''&&$estado_error_orcamento===''){
    $validaLocal = true;
  }

  if($validaLocal && $validaLocal ){
    echo "informação enviada";
  }



}

?>

<section class="intro-page intro-orcamento">
  <h1>
    ORÇAMENTO
  </h1>
  <p>
    É a chegada ao limiar da juventude. Deixar para trás a infância
    tão próxima e preparar-se para novas responsabilidades,
  </p>
</section>
<!-- Pagina Orçamento-->
<section class="page-orcamento ">
  <form  action="index.php?pag=orcamento" method="post">
    <div class="page-orcamento-conteudo">
      <div class="page-orcamento-conteudo-item">
        <div class="page-orcamento-conteudo-item-esquerdo" id="page-orcamento-conteudo-item-esquerdo">
          <div>
            <label for="">Nome</label>
            <input type="text" name="nome-orcamento" value="<?php echo isset($_POST['nome-orcamento']) ? $_POST['nome-orcamento'] : ''; ?>" placeholder="Digite o nome completo" id="orcamento-nome">
            <span class="erro"><?php echo  $nome_error_orcamento ;?> </span>
          </div>
          <div>
            <label for="">Telefone</label>
            <input type="tel" name="tel-orcamento" <input type="text" value="<?php echo isset($_POST['tel-orcamento']) ? $_POST['tel-orcamento'] : ''; ?>" placeholder="Digite o numero do teu telefone"  id="orcamento-tel">
            <span class="erro"><?php echo  $tel_error_orcamento ;?></span>
          </div>
          <div>
            <label for="">E-mail</label>
            <input type="text" name="email-orcamento" placeholder="Digite o teu melhor email"   value="<?php echo isset($_POST['email-orcamento']) ? $_POST['email-orcamento'] : ''; ?>" id="orcamento-email">
            <span class="erro"><?php echo $email_error_orcamento ;?></span>
          </div>
          <div>
            <label for="">Tipo de evento</label>
            <select name="evento-orcamento" placeholder="Seleciona o tipo de evento"  id="orcamento-evento" >
              <?php  
                $selectTipoEvento = '';
                if(isset($_POST['evento-orcamento'])){
                  $selectTipoEvento = $_POST['evento-orcamento'];
                }
              ?>
              <option value="" ></option>
              <option value="Ensaio Gestante" <?php if( $selectTipoEvento == "Ensaio Gestante"){
                  echo 'selected="selected"';
                } ?> >Ensaio Gestante</option>
              <option value="Ensaio 15 anos" <?php if( $selectTipoEvento == "Ensaio 15 anos"){
                  echo 'selected="selected"';
                } ?> >Ensaio 15 anos</option>
              <option value="Ensaio Familia" <?php if( $selectTipoEvento == "Ensaio Familia"){
                  echo 'selected="selected"';
                } ?> >Ensaio Familia </option>
              <option value="Ensaio Infantil" <?php if( $selectTipoEvento == "Ensaio Infantil"){
                  echo 'selected="selected"';
                } ?> >Ensaio Infantil </option>
              <option value="Ensaio Pet" <?php if( $selectTipoEvento == "Ensaio Pet"){
                  echo 'selected="selected"';
                } ?> >Ensaio Pet </option>
              <option value="Ensaio / Book" <?php if( $selectTipoEvento == "Ensaio / Book"){
                  echo 'selected="selected"';
                } ?> >Ensaio / Book </option>
              <option value="Chá de Fraldas" <?php if( $selectTipoEvento == "Chá de Fraldas"){
                  echo 'selected="selected"';
                } ?> >Chá de Fraldas</option>
              <option value="Editorial de Moda" <?php if( $selectTipoEvento == "Editorial de Moda"){
                  echo 'selected="selected"';
                } ?>>Editorial de Moda</option>
            </select>    
            <span class="erro"><?php echo $evento_error_orcamento ;?></span>
          </div>
          <div>
            <label for="">Data</label>
            <input type="date" name="data-orcamento" value="<?php echo isset($_POST['data-orcamento']) ? $_POST['data-orcamento'] : ''; ?>"  id="orcamento-data">
            <span class="erro"><?php echo $data_error_orcamento ;?></span>
            
          </div>
          <div>
            <label for="">Observações</label>
            <textarea name="observacao-orcamento" placeholder="Digite aqui a sua observação"
            id="orcamento-observacao"><?php echo isset($_POST['observacao-orcamento']) ? $_POST['observacao-orcamento'] : ''; ?></textarea>
            <span class="erro"><?php echo $observacao_error_orcamento ;?></span>
          </div>
        </div>
        <div class="page-orcamento-conteudo-item-direito" id="page-orcamento-conteudo-item-direito">
          <div class="label-titulo">
            <label for="">Endereço do evento</label>
            <span class="erro" id=""></span>
          </div>
          <div>
            <label for="">Cep</label>
            <input type="text" value="<?php echo isset($_POST['cep-orcamento']) ? $_POST['cep-orcamento'] : ''; ?>" name="cep-orcamento" placeholder="Digite o cep" id="orcamento-cep">
            <span class="erro" id="cep-sapn"><?php echo $cep_error_orcamento; ?></span>
          </div>
          <div class="class-rua-numero">
            <div class="class-rua-numero-1">
              <label for="">Rua</label>
              <input type="text" name="rua-orcamento" value="<?php echo isset($_POST['rua-orcamento']) ? $_POST['rua-orcamento'] : ''; ?>"    placeholder="Digite o nome da rua" id="orcamento-rua">
              <span class="erro"><?php echo $rua_error_orcamento; ?></span>
            </div>
            <div class="class-rua-numero-2">
              <label for="">Numero</label>
              <input type="text" name="numero-orcamento" value="<?php echo isset($_POST['numero-orcamento']) ? $_POST['numero-orcamento'] : ''; ?>" placeholder="Digite o numero"
              id="orcamento-numero">
              <span class="erro"><?php echo $numero_error_orcamento; ?></span>
            </div>
          </div>
          <div class="class-bairro-cidade">
            <div class="class-bairro-cidade-1">
              <label for="">Bairro</label>
              <input type="text" name="bairro-orcamento" value="<?php echo isset($_POST['bairro-orcamento']) ? $_POST['bairro-orcamento'] : ''; ?>" placeholder="Digite o bairro"
              id="orcamento-bairro">
              <span class="erro"><?php echo $bairro_error_orcamento; ?></span>
            </div>
            <div class="class-bairro-cidade-2">
              <label for="">Cidade</label>
              <input type="text" name="cidade-orcamento" value="<?php echo isset($_POST['cidade-orcamento']) ? $_POST['cidade-orcamento'] : ''; ?>" placeholder="Digite a cidade" id="orcamento-cidade">
              <span class="erro"><?php echo $cidade_error_orcamento; ?></span>
            </div>
            
          </div>
          <div>
            <label for="">Estado</label>
            <input type="text" name="estado-orcamento" value="<?php echo isset($_POST['estado-orcamento']) ? $_POST['estado-orcamento'] : ''; ?>" placeholder="Dite o nome do estado"
            id="orcamento-estado">
            <span class="erro"><?php echo $estado_error_orcamento; ?></span>
          </div>
        </div>
      </div>
      <div>
        <input type="submit" value="SOLICITAR ORÇAMENTO" id="submit-orcamento">
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
