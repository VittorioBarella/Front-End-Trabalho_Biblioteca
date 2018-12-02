<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Cadastro de Autores</title>
      <!-- Bootstrap core CSS -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <ul class="sidebar-nav">
            <li class="sidebar-brand">
               <a href="index.html">
               Página Inicial
               </a>
            </li>
            <li>
               <a href="form_cadastraAutores.php">Cadastro de Autores</a>
            </li>
            <li>
               <a href="form_cadastraClientes.php">Cadastro de Clientes</a>
            </li>
         </ul>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
      <div class="container-fluid">
      <body>
         <!-- Page Content -->
         <div class="container">
         <!-- Page Heading -->
         <h1 class="tituloBoasVindas"> Formulário para Cadastro de Autores </h1>
         <div>
            <a href="#menu-toggle" class="btn btn-secondary btn-menu" id="menu-toggle">Menu</a>
         </div>
         <form>
            <div class="form-group">
               <label for="formGroupExampleInput">Id Autor:</label>
               <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Id Autor">
            </div>
            <div class="form-group">
               <label for="formGroupExampleInput2">Nome do Autor:</label>
               <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nome do Autor">
            </div>
         </form>
         <form>
            <div class="form-group">
               <label for="formGroupExampleInput">País de Origem:</label>
               <input type="text" class="form-control" id="formGroupExampleInput" placeholder="País de Origem">
            </div>
            <button class="btn btn-primary" type="submit">Cadastrar Autor</button>
            <a href="index.html"><button type="button" class="btn btn-success">Visualizar</button></a>
         </form>
         <!-- Bootstrap core JavaScript -->
         <script src="jquery/jquery.min.js"></script>
         <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
         <!-- Menu Toggle Script -->
         <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
         </script>
   </body>
</html>