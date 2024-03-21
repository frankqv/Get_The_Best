<?php
ob_start();
     session_start();
    
    if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1){
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
        <link rel="stylesheet" href="../../backend/css/custom.css">
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
               <li  class="">
                    <a href="../administrador/escritorio.php" class="dashboard"><i class="material-icons">dashboard</i><span>Panel administrativo</span></a>
                </li>
          
               
               
                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">group</i><span>Clientes</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="../clientes/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../clientes/nuevo.php">Nuevo</a>
                        </li>
                        
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">dataset</i><span>Planes</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="../plan/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../plan/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>

                <li class="active">
                    <a href="../servicio/mostrar.php"><i class="material-icons">view_timeline</i><span>Servicio</span></a>
                </li>
                    
                     <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">manage_accounts</i>
                    
                         
                         <span>Usuarios</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li>
                            <a href="../usuario/mostrar.php">Mostrar</a>
                        </li>
                       
                    </ul>
                </li>
                      <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">conveyor_belt</i><span>Productos</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                        <li>
                            <a href="../producto/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../producto/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>
                    
                    <li class="dropdown ">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">category</i><span>Categorias</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li class="">
                            <a href="../categoria/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../categoria/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>
               
                  
                  
                  <li class="dropdown">
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">point_of_sale</i><span>Ventas</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                        <li>
                            <a href="../venta/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../venta/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>
                 <li class="dropdown">
                    <a href="#pageSubmenu09" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">shopping_basket</i><span>Compras</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu09">
                        <li>
                            <a href="../compra/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../compra/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#pageSubmenu010" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">savings</i><span>Gastos</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu010">
                        <li>
                            <a href="../gastos/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../gastos/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>
               
                  
                    <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">signal_cellular_alt</i><span>Reportes</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li>
                            <a href="../reporte/productos.php">Productos</a>
                        </li>
                        <li>
                            <a href="../reporte/clientes.php">Clientes</a>
                        </li>
                        <li>
                            <a href="../reporte/ventas.php">Ventas</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="../graficos/mostrar.php"><i class="material-icons">grain</i><span>Graficos</span></a>
                </li>
               <li class="">
                    <a href="../cuenta/configuracion.php"><i class="material-icons">settings</i><span>Configuracion</span></a>
                </li>
                   
            </ul>

        </nav>
          
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
                         
                         <a class="navbar-brand" href="#"> Servicio </a>
                         
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">  
                         <li class="nav-item">
                                <a class="nav-link" href="../cuenta/configuracion.php">
                                        <span class="material-icons">settings</span>
                                        </a>
                            </li> 
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   
                                   <img src="../../backend/img/reere.png" >
                                           
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../cuenta/perfil.php">Mi perfil</a>
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
                                    <h4 class="card-title">Servicios recientes</h4>
                                    <p class="category">Nuevos servicios reciente añadidos el dia de hoy</p>
                                </div>
                                <br>
                                <a href="../servicio/nuevo.php" class="btn btn-danger text-white"
                            >Nuevo servicio</a>
                            <br>
                                <div class="card-content table-responsive">
                                    <?php
                               require '../../backend/bd/ctconex.php'; 
 $sentencia = $connect->prepare("SELECT servicio.idservc, plan.idplan, plan.foto, plan.nompla, servicio.ini, servicio.fin, clientes.idclie, clientes.numid, clientes.nomcli, clientes.apecli, clientes.naci, clientes.celu, clientes.correo, servicio.estod, servicio.fere FROM servicio INNER JOIN plan ON servicio.idplan = plan.idplan INNER JOIN clientes ON servicio.idclie = clientes.idclie order BY idservc DESC;");
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
                                            <th>Plan</th>
                                            <th>Cliente</th>
                                            <th>Periodo</th>
                                            <th>Dias restantes</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr></thead>
                                        <tbody>
                                            <?php foreach($data as $g):?>
                                            <tr>
                                              <td><img src="../../backend/img/subidas/<?php echo $g->foto ?>" hight='90' width='90' height='50'></td>
                                               
                                                <td>
                                                  
                                                  <?php 
if ($g->idplan =='1') {
    // code...
    echo '<span class="badge badge-primary">PLAN BASICO</span>';
}elseif ($g->idplan =='2') {
    echo '<span class="badge badge-warning">PLAN STANDARD</span>';
}elseif ($g->idplan == '3') {
    echo '<span class="badge badge-success">PLAN PLATINO</span>';
}
else{
    // code...
    echo '<span class="badge badge-danger">PLAN PREMIUM</span>';
}


                                                   ?>  

                                                </td>
                                                
                                                <td><?php echo  $g->nomcli; ?>&nbsp;<?php echo  $g->apecli; ?></td>
                                               <?php    if($g->estod =='Activo')  { ?> 

    <td style="color: #3e5569;"><strong><?php echo  $g->ini; ?> - <?php echo  $g->fin; ?></strong></td>
               <?php  }   else {?> 
               
             <td style="color: #3e5569;">
                <span class="text-dark"><strong>Suscripcion inactiva</strong></span>      
             </td>  
           
          
     <?php  } ?>
                                                

                                                <td style="color: #3e5569;">
        <?php
                                          $esta=$g->estod; 
                                          $fechaEnvio = $g->fin; 
                                          $fechaActual = date('Y-m-d'); 
                                          $datetime1 = date_create($fechaEnvio);
                                          $datetime2 = date_create($fechaActual);
                                          $contador = date_diff($datetime1, $datetime2);
                                          $differenceFormat = '%a';


                                        while ($fechaEnvio == '0000-00-00') {
                                               echo '<span class="label label-success">FREE</span>';
                                               $fechaEnvio++;
                                            }
                                            if ($esta == 'Inactivo') {
                                                 echo '<span class="text-dark"><strong>Cancelado</strong></span>';

                                             }elseif ($fechaEnvio > $fechaActual ) {
                                                 echo $contador->format($differenceFormat);
                                             }else {
                                          
                                           echo '<span class="text-danger"><strong>Renovar</strong></span>';


                                        }
                                          
                                        ?>   
      </td>

                                                <td><?php    if($g->estod =='Activo')  { ?> 

    <span class="badge badge-success">Activo</span>
               <?php  }   else {?> 
    <span class="badge badge-danger">Inactivo</span>
     <?php  } ?> </td>
                                                <td>
  <?php    if($g->estod =='Activo')  { ?>
<a class="btn btn-primary text-white" href="../servicio/ver.php?id=<?php echo  $g->idservc; ?>"><i class='material-icons' data-toggle='tooltip' title='crear'>visibility</i></a>

<a class="btn btn-warning text-white" href="../servicio/actualizar.php?id=<?php echo  $g->idservc; ?>"><i class='material-icons' data-toggle='tooltip' title='crear'>edit</i></a>
    <a class="btn btn-danger text-white" href="../servicio/eliminar.php?id=<?php echo  $g->idservc; ?>"><i class='material-icons' data-toggle='tooltip' title='crear'>cancel</i></a>


    <a class="btn btn-secondary text-white" target="_blank" href="https://api.whatsapp.com/send/?phone=57<?php echo  $g->celu; ?>&text=Hola🖐,%20GET-THE-BEST%20te%20recuerda%20que%20tu%20membresia%20finalizo%20espero%20poder%20contar%20contigo%20un%20mes%20mas%20te%20invito%20a%20renovar%20tu%20membresia%20a%0A%0Atravez%20de%20los%20siguientes%20canales:%20Nequi:%20955698018%20Nequi_Daviplanta:%20Cel3222024365%20Efectivo%20Tarjeta%20LOS%20ESPERAMOS%0A%0A"><i class='material-icons' data-toggle='tooltip' title='crear'>smartphone</i></a>


    <a class="btn btn-info text-white" href="../servicio/ticket.php?id=<?php echo  $g->idservc; ?>"><i class='material-icons' data-toggle='tooltip' title='crear'>print</i></a>

    <?php  }   else {?> 
<a class="btn btn-warning text-white" href="../servicio/actualizar.php?id=<?php echo  $g->idservc; ?>"><i class='material-icons' data-toggle='tooltip' title='crear'>edit</i></a>
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