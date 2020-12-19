<?php 

function carregarPagina(){
  if(isset($_GET['pag'])){
    $pagina = "pages-parts/".$_GET['pag'].".php";
  }else{
    $pagina = "pages-parts/home.php";
  }
  if(file_exists($pagina)){
      require_once($pagina);
  }else{
    require_once("pages-parts/home.php");
  }
  
}


function gerarTitulo(){
   if(isset($_GET['pag'])){
    $pagina = $_GET['pag'];
  }else{
    $pagina = "home.php";
  }
  $titulo = "";
  switch($pagina){
    case "home":
      $titulo = "Home - CnhangaStd";
      break;
    case "servico":
      $titulo = "Servico - CnhangaStd";
      break;
    case "orcamento":
      $titulo = "Orçamento - CnhangaStd";
      break;
    case "sobre":
      $titulo = "Sobre - CnhangaStd";
      break;
    case "portifolio":
      $titulo = "Portifolio - CnhangaStd";
      break;
    case "blog":
      $titulo = "Blog - CnhangaStd";
      break;
    case "contato":
      $titulo = "Contato - CnhangaStd";
      break;
    default:
      $titulo = "Home - CnhangaStd";
      break;

  }
  return  $titulo;
}



function testa_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data,ENT_QUOTES);
  return $data;
}
?>