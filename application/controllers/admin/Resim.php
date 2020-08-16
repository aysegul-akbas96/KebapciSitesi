<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resim extends CI_Controller {

	  function __construct()
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
		$data["sayfa"]="Resim Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		 $query=$this->db->query("SELECT * FROM resim");
		$data["resim"]=$query->result();

		   
	
		$this->load->view('admin/resim',$data);
		
	}




	 public function ekle()
	{     
		$query=$this->db->query("SELECT * FROM resim");
		$data["album_getir"]=$query->result();

		$data["sayfa"]="Resim Yönetimi | ";
		$data["menu"]="Admin Paneli ";

	
		$this->load->view('admin/resim_ekle',$data);
		
	}

public function ekle_kaydet()
	{
		$query=$this->db->query("SELECT * FROM resim");
		$data["album_getir"]=$query->result();

		$data["sayfa"]="Resim Yönetimi | ";
		$data["menu"]="Admin Paneli ";


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
              	$this->load->view('admin\resim_ekle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
			    

			     $data=array(

		 			
                         
                        'id'=>$this->input->post('id'),
                      
                       
						'resim'=>$upload_data["file_name"],
									
                       
                 );

              
             	$this->db->insert("resim",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/resim");

	}
	







	public function duzenle($id)
	{
			$data["sayfa"]="Resim Yönetimi | ";
	    	$data["menu"]="Admin Paneli ";


		
			 $query=$this->db->query("SELECT * FROM resim where id=$id");
		     $data["resim"]=$query->result();

		     $query=$this->db->query("SELECT * FROM resim");
		     $data["album_getir"]=$query->result();


			$this->load->view('admin/resim_duzenle',$data);
	}


	
	public function guncelle($id)
	{

         
		$query=$this->db->query("SELECT * FROM resim where id=$id");
		$data["resim"]=$query->result();
			
        $data["sayfa"]="Resim Yönetimi | ";
		$data["menu"]="Admin Paneli ";


		

        $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\resim_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'resim'=>$upload_data["file_name"],
                        
                        
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("resim",$data,$id);
            }						
		
			  

              	 $data=array(

                      
                        'id'=>$this->input->post('id'),
                               
                       
                 );

               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("resim",$data,$id);


			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/resim");




	}


		public function sil($id)
	{
			    $this->db->query("DELETE FROM resim WHERE id=$id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/resim");
	}




}
