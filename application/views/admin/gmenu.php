<head> 
  <title><?=$sayfa?><?=$menu?></title>
</head>
 <?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?> 
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Günün Menüsü Yönetimi</strong>
                            </div>
                              </div>
            </div>
          </div>
                            <div class="card-body">

<?php if($this->session->flashdata("mesaj"))
    { ?>
  <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>İşlem:</strong> <?=$this->session->flashdata("mesaj")?>
  </div>
    
  <?php }?>


                               
                            </div>


                   
                    <div class="row">
                       
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <div class="panel panel-default">




                              <?php if($this->session->flashdata("mesaj"))
    { ?>
  <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>İşlem:</strong> <?=$this->session->flashdata("mesaj")?>
  </div>
    
  <?php }?>






                               
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">







                                         <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                            
                                                     <th>Resim</th>
                                                     
                                                    <th>İşlemler</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                 <?php
  $sno=0;
          foreach($resim as $rs)
      { $sno++;   
    ?>
                                                <tr>
                                                   <td><?=$sno?></td>
                                 
                                
                                 
                                    <td>
                                   
                                      <a><img class="rounded-circle" height="100px" width="150px" src="<?=base_url()?>uploads/<?=$rs->resim?>"></a>
                                               
                                  </td>

                                    
    <td>

<a href="<?=base_url()?>admin/gmenu/duzenle/<?=$rs->id?>" class="btn btn-info menu-icon  ti-new-window"></a> 

 
  </td>
                                </tr>

 <?php
      }
      ?>






                                         


                                             
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
            
                  
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->













    


<?php
$this->load->view('admin/_footer');
?>

