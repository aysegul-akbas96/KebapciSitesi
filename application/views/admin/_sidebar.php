 <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?=base_url()?>admin/home"><i class="menu-icon fa fa-laptop"></i>Anasayfa </a>
                    </li>
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Ayarlar</a>
                        <ul class="sub-menu children dropdown-menu"> 

                                                   <li><i class="menu-icon fa fa-cogs"></i><a href="<?=base_url()?>admin/ayar">Site Ayarları</a></li>

                          

                            <li><i class="ti-user"></i><a href="<?=base_url()?>admin/kullanici">Yönetici Listesi</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Hakkımızda Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/menu">Hakkımızda Listele</a></li>
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Günün Menüsü Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/gmenu">Günün Menüsü Listele</a></li>
                           
                        </ul>
                    </li>
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-image"></i>Resim Ayarları</a>
                        <ul class="sub-menu children dropdown-menu">
                           

                            <li><i class="menu-icon ti-layout-list-large-image"></i><a href="<?=base_url()?>admin/resim">Resim Ayarları</a></li>

                             

                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-image"></i>Slider Ayarları</a>
                        <ul class="sub-menu children dropdown-menu">
                           

                            <li><i class="menu-icon ti-layout-list-large-image"></i><a href="<?=base_url()?>admin/slider">Slider Ayarları</a></li>

                             

                        </ul>
                    </li>

                    <li class="menu-title"></li><!-- /.menu-title -->

                
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-layout-cta-left"></i>Banner Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/odul">Banner Listele</a></li>
                           
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-receipt"></i>Menü Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-list"></i><a href="<?=base_url()?>admin/dernek">Menü Listele</a></li>
                            <li><i class="menu-icon ti-check-box"></i><a href="<?=base_url()?>admin/dernek/ekle">Menü Ekle</a></li>
                        </ul>
                    </li>
                    
                     

                    <li class="menu-title"></li><!-- /.menu-title -->
                   

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-email"></i>Mesaj Yönetimi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="ti-email"></i><a href="<?=base_url()?>admin/mesajlar">Mesajlar</a></li>
                            
                            
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->