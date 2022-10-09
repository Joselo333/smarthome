
<div class="modal fade" id="recuperarContraseña" tabindex="-1" aria-labelledby="recuperarClaveTitulo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content fondo-grupo">
            <div class="modal-header">

                <div class="row">
                    <div class="col col-12"> 
                    
                        <h3 class="text-center modal-title" id="recuperarClaveTitulo">
                        Recuperar contraseña
                        </h3>
                    
                    </div>
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col col-12"> 
                        <form>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" 
                                        id="input-rut" placeholder="12345678-9" required>
                                <label for="input-rut">RUT</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" 
                                    id="input-email" placeholder="correo@mail.com" required>
                                <label for="input-email">Email</label>
                            </div>
                        </form> 
                    </div>
                </div>

            </div>
            <div class="modal-footer">

                <div class="row">
                    <div class="col col-lg-6 col-12">
                        <button type="button" href="home.php" class="btn  btn-warning border border-dark"  data-bs-dismiss="modal">
                            Atrás
                        </button>
                    </div>    

                    <div class="col col-lg-6 col-12"> 
                        <button type="button" href="home.php" class="btn  btn-success border border-dark">
                            Recuperar
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>
    
</div>

