<?php
ob_start();
     session_start();
    
    if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 2){
    header('location: ../erro404.php');
  }
?>
<?php if(isset($_SESSION['id'])) { ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>GET THE BEST</title>
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../backend/css/bootstrap.min.css">
         <!----css3---->
        <link rel="stylesheet" href="../../backend/css/custom2.css">
        <link rel="stylesheet" href="../../backend/css/loader.css">

             <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="../../backend/css/datatable.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/buttonsdataTables.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/font.css">
          <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
     
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
     <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
      <link rel="icon" type="image/png" href="../../backend/img/favicon.png"/>
  </head>
  <body>
  
<div class="wrapper">
   
<div class="body-overlay"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../../backend/img/favicon.png" class="img-fluid"/><span>GET THE BEST</span></h3>
            </div>
            <ul class="list-unstyled components">
               <li  class="active">
                    <a href="../cliente/escritorio.php" class="dashboard"><i class="material-icons">dashboard</i><span>Panel Cliente</span></a>
                </li>
          
                
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">dataset</i><span>Planes</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="../cliente/plan.php">Mostrar</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="../cliente/servicio.php"><i class="material-icons">view_timeline</i><span>Servicio</span></a>
                </li>
        </nav>
<!-- Sidebar  -->




        <!-- Page Content  -->
        <div id="content">
          <div class='pre-loader'>
    <img class='loading-gif' alt='loading' src="https://i.imgflip.com/8jlwf5.gif"/>
</div>
          <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
                         
                         <a class="navbar-brand" href="#"> Planes </a>
                         
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">  
                         <li class="nav-item">
                                <a class="nav-link" href="../cuenta/perfil2.php">
                                        <span class="material-icons">settings</span>
                                        </a>
                            </li> 
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   
                                   <img src="../../backend/img/reere.png" >
                                           
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../cuenta/perfil2.php">Mi perfil</a>
                                    </li>
                                    <li>
                                        <a href="../cuenta/salir.php">Salir</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
         </div>
               
               
               <div class="main-content">
               
                         <div class="row ">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Planes recientes</h4>
                                    <p class="category">Nuevos planes reciente añadidos el dia de hoy</p>
                                </div>
                                <br>
                                
                            ></a>
                            <br>
                                <div class="card-content table-responsive">
                                    <?php
                               require '../../backend/bd/ctconex.php'; 
 $sentencia = $connect->prepare("SELECT * FROM plan order BY idplan DESC;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?> 
                                    <table class="table table-hover" id="example">
                                        <thead class="text-primary">
                                            <tr>
                                            <th>Foto</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr></thead>
                                        <tbody>
                                            <?php foreach($data as $g):?>
                                            <tr>

                                                <td><img src="../../backend/img/subidas/<?php echo $g->foto ?>" width='90'></td>
                                                <td><?php echo  $g->nompla; ?></td>
                                                <td><?php echo  $g->prec; ?></td>
                                                <td><?php    if($g->estp =='Activo')  { ?> 

    <span class="badge badge-success">Activo</span>
               <?php  }   else {?> 
    <span class="badge badge-danger">Inactivo</span>
     <?php  } ?> </td>
                                                <td>
        <?php    if($g->estp =='Activo')  { ?>




                <?php  }   else {?> 
            <?php  } ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                     <?php else:?>
        <!-- Warning Alert -->
<div class="alert alert-warning" role="alert">
  No se encontró ningún dato!
</div>

    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                      
                    </div>

                         </div>

        </div>
    </div>

  



















    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../../backend/js/jquery-3.3.1.slim.min.js"></script>
   <script src="../../backend/js/popper.min.js"></script>
   <script src="../../backend/js/bootstrap.min.js"></script>
   <script src="../../backend/js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
            });
               
                $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
               
        });

</script>
<script src="../../backend/js/loader.js"></script>
<!-- Data Tables -->
    <script type="text/javascript" src="../../backend/js/datatable.js"></script>
    <script type="text/javascript" src="../../backend/js/datatablebuttons.js"></script>
    <script type="text/javascript" src="../../backend/js/jszip.js"></script>
    <script type="text/javascript" src="../../backend/js/pdfmake.js"></script>
    <script type="text/javascript" src="../../backend/js/vfs_fonts.js"></script>
    <script type="text/javascript" src="../../backend/js/buttonshtml5.js"></script>
    <script type="text/javascript" src="../../backend/js/buttonsprint.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>
        
  </body>
  </html>





<?php }else{ 
    header('Location: ../erro404.php');
 } ?>
 <?php ob_end_flush(); ?>     