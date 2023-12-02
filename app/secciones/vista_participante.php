<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/participantes.php'); ?>




<div class = "row">
    <div class = "col-md-11">
    <div class = "row">
        <div class = "col-md-12">
            <form action = "" method = "post">
            <div class="card">

                
                <div class="card-header">
                    <h3>Participantes</h3>
                </div>

                <div class="card-body">
                    <div class = "col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text"
                                class="form-control" 
                                name="nombre" 
                                id="nombre" 
                                value = "<?php echo $nombre;?>"
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Caballo</label>
                            <input type="text"
                                class="form-control" 
                                name="caballo" 
                                id="caballo" 
                                value = "<?php echo $caballo;?>"
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Derribos</label>
                            <input type="number"
                                class="form-control" 
                                name="derribos" 
                                id="derribos" 
                                value = "<?php echo $derribos;?>"
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Desobediencias</label>
                            <input type="number"
                                class="form-control" 
                                name="desobediencias" 
                                id="desobediencias" 
                                value = "<?php echo $desobediencias;?>"
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>
                        
                        <div class="mb-3">
                
                            <label for="" class="form-label">Id_Concurso</label>
                            <input type="number"
                                class="form-control" 
                                name="id_concurso" 
                                id="id_concurso" 
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>

                        

                        <div class="btn-group" role="group" aria-label="">
                            <button type="submit" name = "accion" value = "agregar" class="btn btn-success">Guardar</button>
                            <button type="submit" name = "accion" value = "editar"class="btn btn-primary">Editar</button>
                            <button type="submit" name = "accion" value = "borrar"class="btn btn-primary">Borrar</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
  

    
<div class = "col-md-8">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Caballo</th>
                <th scope="col">Derribos</th>
                <th scope="col">desobediencias</th>
                <th scope="col">Puntos</th>
                <th scope="col">id</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($listaParticipantes as $participantes){ ?>
            <tr>
                <td> <?php echo $participantes['nombre']; ?></td>
                <td> <?php echo $participantes['caballo']; ?></td>      
                <td> <?php echo $participantes['derribos']; ?></td>
                <td> <?php echo $participantes['desobediencias']; ?></td>
                <td> <?php echo $participantes['puntos']; ?></td>
                <td> <?php echo $participantes['id']; ?></td>
                <td>
                    <form action = "" method = "post">
                        <input type= "hidden" name="id" id ="id" value=" <?php echo $participantes['id']; ?> " />
                        <input type= "submit" value="Seleccionar" name ="accion" class ="btn btn-info">
                    </form>
                </td>
                

            </tr>
        <?php } ?>
            
        </tbody>


<?php include('../templates/pie.php'); ?>