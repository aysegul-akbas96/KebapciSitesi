<style>
p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}  


</style>

<div class="w3-container">

  <div class="w3-display-container w3-text-white">
    <img src="<?=base_url()?>uploads/<?=$hakkimizda[0]->banner_resmi?>" alt="" style="width:100%; height: 350px;">
  </div>

</div>

 
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

        <img class="mySlides w3-animate-top" src="<?=base_url()?>uploads/<?=$hakkimizda[0]->resim?>" style="width:80%; height: 450px;">
         </center>
      </div>

  </div>
</div>







