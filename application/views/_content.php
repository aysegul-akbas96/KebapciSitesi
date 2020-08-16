<style>
  p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}  


</style>
<div class="row">
  
  <?php 
foreach ($slider as $rs) {
  # code...

 ?>
 <center>
  <img class="mySlides w3-animate-top" src="<?=base_url()?>uploads/<?=$rs->resim_adi?>" style="width:80%; height: 350px;">
  </center>
  <?php } ?>
  </div>
  <br>

  

  <div class="container">
  <div class="row">
    <div class="col-md-12">
<center>  
  <h1><?=$hakkimizda[0]->baslik?></h1>
</center>
      <p>
        <?=$hakkimizda[0]->aciklama?>
          
        </p>
<center>  

        <img class="" src="<?=base_url()?>uploads/<?=$hakkimizda[0]->resim?>" style="width:80%; height: 450px;">
         </center>
      </div>

  </div>
</div>

<br>

<div class="row">
  <CENTER><h2>Günün Menüsü</h2></CENTER>
<hr>
  <div class="col-sm-2">

  <img src="<?=base_url()?>uploads/g.PNG"style="width:150px; height: 250px;">
</div>

  
<?php foreach ($g as $b) {
  # code...
 ?>
     <div class="col-sm-3" style="background-color:lavender;">
<img class="" src="<?=base_url()?>uploads/<?=$b->resim?>" style="width:250px; height: 250px;">

    </div>
  <?php } ?>

     </div>
  
  

  </div>
  <br>
<hr>
<div class="row">
  <center><h2>En Son Eklenenler</h2></center>
  <?php foreach ($res as $aa) {
    # code...
   ?>
  <div class="col-sm-4">

  <img src="<?=base_url()?>uploads/<?=$aa->resim?>" style="width:100%; height: 350px;">
</div>
  <?php } ?>

</div>




<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>

