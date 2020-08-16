<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayar extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');

                if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}



        }
 
	
	public function index()
	{
	 
		//$this->load->view('admin/site_ayar');
		$this->load->helper('url');
		$this->load->model('Database_Model');
		//$this->load->database();
		//$this->load->library('session');
		

		$query=$this->db->query("SELECT * FROM siteayarlari");
				$data["veri"]=$query->result();
				

				  $query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Site Ayarları || ";
		$data["menu"]="site ayarları";
 
	
				
		
				$this->load->view('admin/site_ayar',$data);
		





		
		if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}
		
	}

	public function ayarlar()
	{
					

				$query=$this->db->query("SELECT * FROM siteayarlari ");
				$data["veri"]=$query->result();


				  $query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Site Ayarları || ";
		$data["menu"]="site ayarları";
				
		
				$this->load->view('admin/site_ayar',$data);

	}

	public function ayarlar_guncelle($id)
	{
		

		  $query=$this->db->query("SELECT * FROM siteayarlari");
		$data["ve"]=$query->result();
		$data["sayfa"]="Site Ayarları || ";
		$data["menu"]="site ayarları";


        $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('logo'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\site_ayar',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'logo'=>$upload_data["file_name"],
                
              	);
              	 $this->update_data("siteayarlari",$data,$id);
            }						
		
			  

              	 $data=array(

                        'title'=>$this->input->post('title'),
                        'meta'=>$this->input->post('meta'),
                        'description'=>$this->input->post('description'),
                   
                    
                       
                        
                        'telefon'=>$this->input->post('telefon'),
                        'email'=>$this->input->post('email'),
                        'adres'=>$this->input->post('adres'),
                        'maps'=>$this->input->post('maps'),
                        'face'=>$this->input->post('face'),
                        'twitter'=>$this->input->post('twitter'),
                        'google'=>$this->input->post('google'),
                        
						
						
                       
                       
                 );


			   $this->update_data("siteayarlari",$data,$id);
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/ayar/ayarlar");

       

	}



    public function update_data($table,$data,$id){
		$this->db->where('id',$id);
		$this->db->update($table,$data);
		return true;
		
	}


}
