<script type="text/javascript">

 function buscar(){
   $(function(){
        $(".input-search").keyup(function(){
            //pega o css da tabela 
            var tabela = $(this).attr('alt');
            if( $(this).val() != ""){
                $("."+tabela+" tbody>tr").hide();
                $("."+tabela+" td:contains-ci('" + $(this).val() + "')").parent("tr").show();
            } else{
                $("."+tabela+" tbody>tr").show();
            }
        }); 
    });
    $.extend($.expr[":"], {
        "contains-ci": function(elem, i, match, array) {
            return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
        }
    });
 }
    
</script>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Página Inicial</title>
      <!-- Bootstrap core CSS -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">

      <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="jquery/jquery.quick.search.js"></script>
      <script type="text/javascript" src="jquery/jquery.js"></script>
         
   </head>
   <body>
      <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <ul class="sidebar-nav">
            <li class="sidebar-brand">
               <a href="index.php">
               Página Inicial
               </a>
            </li>
            <li>
               <a href="form_cadastraAutores.php">Cadastro de Autores</a>
            </li>
            <li>
               <a href="form_cadastraLivros.php">Cadastro de Livros</a>
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
         <h1 class="tituloBoasVindas">Bem-Vindo !</h1>
         <div>
            <a href="#menu-toggle" class="btn btn-secondary btn-menu" id="menu-toggle">Menu</a>
         </div>
         <h2> Tabela </h2>

         <input type="text" class="input-search" alt="lista-clientes" placeholder="Buscar..." onclick="buscar()" />
         <div class="tabela">
            <table class="table table-striped table-bordered lista-clientes">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">First</th>
                     <th scope="col">Last</th>
                     <th scope="col">Handle</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                  </tr>
                  <tr>
                     <th scope="row">2</th>
                     <td>Jacob</td>
                     <td>Thornton</td>
                     <td>@fat</td>
                  </tr>
                  <tr>
                     <th scope="row">3</th>
                     <td>Larry</td>
                     <td>the Bird</td>
                     <td>@twitter</td>
                  </tr>
                  <tr>
                     <th scope="row">4</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                  </tr>
                  <tr>
                     <th scope="row">5</th>
                     <td>Jacob</td>
                     <td>Thornton</td>
                     <td>@fat</td>
                  </tr>
                  <tr>
                     <th scope="row">6</th>
                     <td>Larry</td>
                     <td>the Bird</td>
                     <td>@twitter</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <!-- /#wrapper -->
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