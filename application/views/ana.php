<style>
.mySlides {display:none;}
</style>
<body>


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