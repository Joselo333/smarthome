<?php require('../layout/head.php') ?>
<div class="row home">
  <!--inicio panel slider-->
  <div class="col-1 d-md-none"></div>
  <div class="col-10 col-md-6 home-panel">
    <?php require('../layout/slider.php') ?>
  </div>
  <div class="col-1 d-md-none"></div>
  <!--fin panel slider-->

  <!------------------------------------------------->

  <!--inicio panel login-->
  <div class="col-1 d-md-none"></div>
  <div class="col-10 col-md-6  home-panel">
    <?php require('inicio_sesion.php') ?>
  </div>
  <div class="col-1 d-md-none d-lg-none"></div>
  <!--fin panel login-->
</div>
<?php require('../layout/footer.php') ?>
