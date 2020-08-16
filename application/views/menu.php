<div class="allcontain">
  <div class="feturedsection">
    <h1 class="text-center"><span class="bdots"></span>Menüler</span></h1>
  </div>
  <div class="feturedimage">
    <div class="row firstrow">

<?php foreach ($menu as $rs) {
  # code...
 ?>
      <div class="col-lg-6 costumcol colborder1">
        <div class="row costumrow">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon" style="width: 250px; height: 250px;">
            <img src="<?=base_url()?>uploads/<?=$rs->resim?>" style="width: 250px; height: 250px;" >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
            <div class="featurecontant">
              <h1><?=$rs->menu_adi?></h1>
              <h2><?=$rs->fiyat?>TL</h2>
              
            </div>
          </div>
        </div>
      </div>
    <?php } ?>



    </div>
  </div>
