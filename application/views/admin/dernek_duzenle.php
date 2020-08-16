<head> 
  <title><?=$sayfa?><?=$menu?></title>
</head>
 <?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?> 


  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Menü Yönetimi</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                   
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        
                                      

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                              <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/dernek/guncelle/<?=$veri[0]->id?>" autocomplete="off" role="form">

                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Menü Adı</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="menu_adi" value="<?=$veri[0]->menu_adi?>" placeholder="" class="form-control"></div>
                                    </div>



                                 

                                  <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Fiyat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="fiyat" value="<?=$veri[0]->fiyat?>" placeholder="" class="form-control"></div>
                                    </div>

                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="resim" value="<?=$veri[0]->resim?>" class="form-control" id="email1"  placeholder="Yükleme için gözat">
                                            <img class="rounded-circle" height="200px" width="200px" src="<?=base_url()?>uploads/<?=$veri[0]->resim?>">
                                         
                                      </div>
                                      
                              
                                                </div>
                                

                                     
            
                            
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" style="margin-left: 650px;" class="btn btn-success">Kaydet</button>
                                </div>
                            </div>

                     </form>










                            </div>
                        </div>
                    </div>
                </div>


   





                         













                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
               </div>
              
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
    
</div>
</div>


<?php
$this->load->view('admin/_footer');
?>

