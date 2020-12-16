<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>            
            <div class="">
                <p>

                    <a href="<?php echo base_url(); ?>/categorias" class="btn btn-warning">Categrias</a>
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
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datos as $dato) { ?>
                                    <tr>
                                        <td><?php echo $dato['id']; ?></td>
                                        <td><?php echo $dato['nombre']; ?></td>
                                        <td><a href="<?php echo base_url() . '/categorias/reingresar/' . $dato['id']; ?>"><i class="fas fa-arrow-alt-circle-up"></i><a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>