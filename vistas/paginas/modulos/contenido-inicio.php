<?php






if (!isset($_SESSION["validar"])) {

  echo '<script> window.location = "index.php";</script>';
  return;
} else {
  if ($_SESSION["validar"] != "ok") {
    echo '<script> window.location = "plantilla.php";</script>';
    return;
  }
}

?>

<?php $sliders = ControladorFormulario::ctrMostrarTerminacion('slider', null, null) ?>



<!-- PRINT R  -->


<div class="bodyslider">
  <div class="container-all1">
    <?php foreach ($sliders as $key => $value) { ?>
      <input type="radio" id="<?php echo ($value)["id"] ?>" name="image-slide" hidden>
    <?php } ?>

    <div class="slide">

      <?php foreach ($sliders as $key => $value) { ?>

        <div class="item-slide">
          <img src="<?php echo ($value)["portada_slider"] ?>" alt="">
        </div>
      <?php } ?>

    </div>
    <div class="pagination1">

      <?php foreach ($sliders as $key => $value) { ?>

        <label for="<?php echo ($value)["id"] ?>" class="pagination-item">
          <img src="<?php echo ($value)["portada_slider"] ?>" alt="">
        </label>
      <?php } ?>

    </div>
  </div>
  
</div>

<!-- <ul> -->

<!-- echo '<pre>'; print_r($sliders); echo '</pre>'  -->


<!-- foreach ($sliders as $value) { 

    <li>
      <img src=" echo $value["portada_slider"] ?>" alt="" srcset="">
      <-- <img src="img/Basura.png" alt="" srcset=""> -->
<!-- </li> -->



<!-- </ul> -->



<!-- <section class="jd-slider deslizadorArticulos my-4">
      <div class="slider">

        <ul class="slide-area">

          <li class="px-3">
          <a href="">
            <img src="./img/Basura.png" class="img-fluid" alt="">
            <h6 class="py-2">Basura</h6>
            </a>
            <p class="small"></p>


          </li>



        </ul>

      </div>

    </section> -->


