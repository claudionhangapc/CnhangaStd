

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
  <form action="">
    <div class="page-orcamento-conteudo">
      <div class="page-orcamento-conteudo-item">
        <div class="page-orcamento-conteudo-item-esquerdo">
          <div>
            <label for="">Nome</label>
            <input type="text" placeholder="Digite o nome completo" id="orcamento-nome">
            <span class="erro">Ops! campo obrigatorio </span>
          </div>
          <div>
            <label for="">Telefone</label>
            <input type="tel" placeholder="Digite o numero do teu telefone" pattern="[0-9]{2}-[0-9]{2}" id="orcamento-tel" required>
            <span class="erro">Ops! campo obrigatorio </span>
          </div>
          <div>
            <label for="">E-mail</label>
            <input type="text" placeholder="Digite o teu melhor email"   id="orcamento-email">
            <span class="erro">Ops! campo obrigatorio </span>
          </div>
          <div>
            <label for="">Tipo de evento</label>
            <select name="" placeholder="Seleciona o tipo de evento" id="orcamento-evento">
              <option value="" ></option>
              <option value="Ensaio Gestante">Ensaio Gestante</option>
              <option value="Ensaio 15 anos">Ensaio 15 anos </option>
              <option value="Ensaio Familia">Ensaio Familia </option>
              <option value="Ensaio Infantil">Ensaio Infantil </option>
              <option value="Ensaio Pet">Ensaio Pet </option>
              <option value="Ensaio / Book">Ensaio / Book </option>
              <option value="Chá de Fraldas">Chá de Fraldas</option>
              <option value="Editorial de Moda">Editorial de Moda</option>
            </select>    
            <span class="erro">Ops! campo obrigatorio </span>
          </div>
          <div>
            <label for="">Data</label>
            <input type="text" placeholder="Seleciona a data do evento" id="orcamento-data">
            <span class="erro">Ops! campo obrigatorio </span>
          </div>
          <div>
            <label for="">Observações</label>
            <textarea name="" placeholder="Digite aqui a sua observação"
            id="orcamento-observacao"></textarea>
            <span class="erro">Ops! campo obrigatorio </span>
          </div>
        </div>
        <div class="page-orcamento-conteudo-item-direito">
          <div class="label-titulo">
            <label for="">Endereço do evento</label>
          </div>
          <div>
            <label for="">Cep</label>
            <input type="text" placeholder="Digite o cep" id="orcamento-cep">
            <span class="erro" id="cep-sapn">Ops! campo obrigatorio </span>
          </div>
          <div class="class-rua-numero">
            <div class="class-rua-numero-1">
              <label for="">Rua</label>
              <input type="text" placeholder="Digite o nome da rua" id="orcamento-rua">
              <span class="erro">Ops! campo obrigatorio </span>
            </div>
            <div class="class-rua-numero-2">
              <label for="">Numero</label>
              <input type="text" placeholder="Digite o numero"
              id="orcamento-numero">
              <span class="erro">Ops! só numero</span>
            </div>
          </div>
          <div class="class-bairro-cidade">
            <div class="class-bairro-cidade-1">
              <label for="">Bairro</label>
              <input type="text" placeholder="Digite o bairro"
              id="orcamento-bairro">
              <span class="erro">Ops! campo obrigatorio </span>
            </div>
            <div class="class-bairro-cidade-2">
              <label for="">Cidade</label>
              <input type="text" placeholder="Digite a cidade" id="orcamento-cidade">
              <span class="erro">Ops! campo obrigatorio </span>
            </div>
            
          </div>
          <div>
            <label for="">Estado</label>
            <input type="text" placeholder="Dite o nome do estado"
            id="orcamento-estado">
            <span class="erro">Ops! campo obrigatorio </span>
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
