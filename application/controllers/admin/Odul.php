
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Odul extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');
                $this->load->model('Database_Model');
		//$this->load->database();
		//$this->load->library('session');




		
		
		if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}
		
        }
 
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Banner Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT  *from hakkimizda");
		$data["veriler"]=$query->result();

		   
	
		$this->load->view('admin/odul_listele',$data);
		
	}
		public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Banner Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT *from hakkimizda WHERE id=$id");
				$data["veri"]=$query->result();
				$this->load->view('admin/odul_duzenle',$data);
}
	public function guncelle($id)
	{
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Banner Yönetimi | ";
		$data["menu"]="Admin Paneli ";

   $query=$this->db->query("SELECT banner_resmi from hakkimizda WHERE id=$id");
		  $data["veri"]=$query->result();

		

        $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('banner_resmi'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\odul_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'banner_resmi'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("hakkimizda",$data,$id);
            }						
		
			  




			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/odul");

	}


	
}