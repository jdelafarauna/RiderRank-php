<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/crear_concurso.php'); ?>


<div class = "row">
    <div class = "col-md-12">
    <div class = "row">
        <div class = "col-md-7">
            <form action = "" method = "post">
            <div class="card">

                
                <div class="card-header">
                    <h3>Concurso</h3>
                </div>

                <div class="card-body">
                    <div class = "col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Club</label>
                            <input type="text"
                                class="form-control" 
                                name="club" 
                                id="club" 
                                value = "<?php echo $club;?>"
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Prueba</label>
                            <input type="text"
                                class="form-control" 
                                name="prueba" 
                                id="prueba" 
                                value = "<?php echo $prueba;?>"
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Ambito</label>
                            <input type="text"
                                class="form-control" 
                                name="ambito" 
                                id="ambito" 
                                value = "<?php echo $ambito;?>"
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Altura</label>
                            <input type="number"
                                class="form-control" 
                                name="altura" 
                                id="altura" 
                                value = "<?php echo $altura;?>"
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>
                        
                        <div class="mb-3">
                            
                            <label for="" class="form-label">Nº Obstaculos</label>
                            <input type="number"
                                class="form-control" 
                                name="nobstaculos" 
                                id="nobstaculos" 
                                aria-describedby="helpId" 
                                placeholder="">
                            
                        </div>

                        <div class="mb-3">
                            
                        <label for="" class="form-label">Fecha</label>
                        <input type="date"
                            class="form-control" 
                            name="Fecha" 
                            id="Fecha" 
                            aria-describedby="helpId" 
                            placeholder=""
                            value="<?php echo date('Y-m-d'); ?>"
                        >
                        </div>

                        

                        <div class="btn-group" role="group" aria-label="">
                            <button type="submit" name = "accion" value = "guardar" class="btn btn-success">Guardar</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>