<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dernek extends CI_Controller {

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
		$data["sayfa"]="Menü Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT * FROM menu");
		$data["veriler"]=$query->result();

		   
	
		$this->load->view('admin/dernek_listele',$data);
		
	}
		public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Dernek Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT * FROM menu WHERE id=$id");
				$data["veri"]=$query->result();
				$this->load->view('admin/dernek_duzenle',$data);
}
	public function guncelle($id)
	{
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Yönetimi  | ";
		$data["menu"]="Admin Paneli ";

   $query=$this->db->query("SELECT * FROM menu WHERE id=$id");
		  $data["veri"]=$query->result();

		 


		

        $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\dernek_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("menu",$data,$id);
            }						
		
			  

              	 $data=array(

                        'menu_adi'=>$this->input->post('menu_adi'),
                        'fiyat'=>$this->input->post('fiyat'),
                               
                       
                 );

               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("menu",$data,$id);


			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/dernek");

	}




	
	 public function ekle(){
	 	$query=$this->db->query("SELECT * FROM menu");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Yönetimi | ";
		$data["menu"]="Admin Paneli ";
	   	 $query=$this->db->query("SELECT * FROM menu");
				$data["veriler"]=$query->result();
				$this->load->view('admin/dernek_ekle',$data);



	   }
	   public function ekle_kaydet()
	{
		 
$query=$this->db->query("SELECT * FROM menu");
		$data["ve"]=$query->result();
		$data["sayfa"]="Menü Yönetimi | ";
		$data["menu"]="Admin Paneli ";
              $query=$this->db->query("SELECT * FROM menu");
				$data["veriler"]=$query->result();


  $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\dernek_ekle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
			    
              
             
			
            						
                      $data=array(

                      
                       'menu_adi'=>$this->input->post('menu_adi'),
                      
                       'fiyat'=>$this->input->post('fiyat'),  

                       'resim'=>$upload_data["file_name"],                    
                 );
                       	$this->db->insert("menu",$data);
			   $this->session->set_flashdata("mesaj","Yeni Bölüm Eklendi !"); 
			   redirect(base_url()."admin/dernek");
			}
		}

	public function sil($id)
	{
		 $this->db->query("DELETE FROM menu WHERE id=$id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/dernek");
	}

}