<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <title><?php echo gerarTitulo(); ?></title>
</head>
<body>
  <!-- header -->
  <header>

    <div class="header-top">
      <div class="header-top-container">
          <a href="tel:51982378569">WhatsApp: 51982378569</a>
          <a href="?pag=orcamento">Peça Orçamento</a>
      </div>
    </div>

    <div class="menu">
      <div class="menu-container">
        <div class="menu-container-left-side">
          <a href="?pag=home" class="logo">
            Cnhanga<span>Std</span>
          </a> 
          <input type="checkbox" id="check">
          <label for="check" class="check-btn">
            <i class="fa fa-bars">
            </i>
          </label>
        </div>
        
        <nav class="class-nav">
          <ul>
            <li>
              <a href="?pag=home">HOME</a>
            </li>
            <li>
              <a href="?pag=servico">SERVIÇO
                <i class="fa fa-caret-down">
                </i>
              </a>
              
              <ul>
                <li>
                  <a href="#">ENSAIO INFANTIL</a>
                </li>
                <li>
                  <a href="#">ENSAIO FAMILIA</a>
                </li>
                <li>
                  <a href="#">ENSAIO PET</a>
                </li>
                <li>
                  <a href="#">EDITORIAL DE MODA</a>
                </li>
                <li>
                  <a href="#">CHÁ DE FRALDA</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="?pag=orcamento">ORÇAMENTO</a>
            </li>
            <li>
              <a href="?pag=sobre">SOBRE</a>
            </li>
            <li>
              <a href="?pag=portifolio">PORTIFOLIO
                <i class="fa fa-caret-down">
                </i>
              </a>
              <ul>
                <li>
                  <a href="#">PROJETOS RECENTE</a>
                </li>
                <li>
                  <a href="#">CASAMENTOS</a>
                </li>
                <li>
                  <a href="#">GESTANTE</a>
                </li>
                <li>
                  <a href="#">ENSAIO DE CASADOS</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="?pag=blog">BLOG</a>
            </li>
            <li>
              <a href="?pag=contato">CONTATO</a>
            </li>   
          </ul>
        </nav>
      </div>
    </div>
  </header>