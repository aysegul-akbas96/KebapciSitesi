  <div class="w3-container">

  <div class="w3-display-container w3-text-white">
    <img src="<?=base_url()?>uploads/<?=$hakkimizda[0]->banner_resmi?>" alt="" style="width:100%; height: 350px;">
  </div>

</div>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">İletişim Bilgileri</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Adres:</span> <?=$veri[0]->adres?></p>
          </div>
          <div class="col-md-3">
            <p><span>Telefon:</span> <?=$veri[0]->telefon?></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span><?=$veri[0]->email?></p>
          </div>
         
        </div>

<br>
<br>

        <div class="row block-5">
          <div class="col-lg-4 order-md-last d-flex">
            <form action="<?=base_url()?>home/mesaj_kaydet" method="post" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" name="isim" class="form-control" placeholder="AdSoyad" required="required">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required="required">
              </div>
              <div class="form-group">
                <input type="text" name="konu" class="form-control" placeholder="Konu" required="required">
              </div>
              <div class="form-group">
                <textarea name="mesaj" id="" cols="30" rows="7" class="form-control" placeholder="Mesajınızı yazınız."></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Gönder" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
           <div class="col-lg-1 d-flex">
           </div>

          <div class="col-lg-6 d-flex">
            <div id="" class="bg-white">
              <iframe src="<?=$veri[0]->maps?>" width="450" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>