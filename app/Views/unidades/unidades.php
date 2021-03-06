 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid">
             <h4 class="mt-4"><?php echo $titulo; ?></h4>
             <!-- <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol> -->
             <!-- <div class="card mb-4">
                    <div class="card-body">
                        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                        .
                    </div>
                </div> -->
             <div class="">
                 <p>
                     <a href="<?php echo base_url(); ?>/unidades/nuevo" class="btn btn-info">Agregar</a>
                     <a href="<?php echo base_url(); ?>/unidades/eliminados" class="btn btn-warning">Eliminados</a>
                 </p>

             </div>
             <div class="card mb-4">                
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Id</th>
                                     <th>Nombre</th>
                                     <th>Nombre corto</th>
                                     <th></th>
                                     <th></th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($datos as $dato) { ?>
                                     <tr>
                                         <td><?php echo $dato['id']; ?></td>
                                         <td><?php echo $dato['nombre']; ?></td>
                                         <td><?php echo $dato['nombre_corto']; ?></td>

                                         <td><a href="<?php echo base_url().'/unidades/editar/'.$dato['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>

                                         <td><a href="<?php echo base_url().'/unidades/eliminar/'.$dato['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                         
                                     </tr>

                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </main>