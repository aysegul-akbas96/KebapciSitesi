<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct()
        {
                   parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
               $this->load->model('Database_Model');
        }
 
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM slider");
		$data["slider"]=$query->result();
$query=$this->db->query("SELECT * FROM hakkimizda");
		$data["hakkimizda"]=$query->result();
	$query=$this->db->query("SELECT * FROM gunun_menusu");
		$data["g"]=$query->result();

		$query=$this->db->query("SELECT * FROM resim order by resim desc limit 3");
		$data["res"]=$query->result();

	

		
		$data["sayfa"]=$query->result();

		$data["sayfa"]="Anasayfa | ";
		

		$data["menuac"]="anasayfa";

		


		$this->load->view('_header',$data);
		$this->load->view('_content',$data);
		
		$this->load->view('_footer');
		

	}
	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["veri"]=$query->result();
	$query=$this->db->query("SELECT * FROM slider");
		$data["slider"]=$query->result();
		$query=$this->db->query("SELECT * FROM hakkimizda");
		$data["hakkimizda"]=$query->result();
	


		$data["sayfa"]="İletişim| ";


    $data["menuac"]="iletisim";
	
	


		$this->load->view('_header',$data);

		
		$this->load->view('iletisim',$data);

		$this->load->view('_footer');
	}

	public function galeri()
	{
$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["veri"]=$query->result();
	$query=$this->db->query("SELECT * FROM resim");
		$data["resim"]=$query->result();


		$data["sayfa"]="Galeri| ";


    $data["menuac"]="Galeri";
	
	
		$this->load->view('_header',$data);	
		$this->load->view('galeri',$data);

		$this->load->view('_footer');
	}


	public function menu()
	{
$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu");
		$data["menu"]=$query->result();
	


		$data["sayfa"]="Menüler| ";


    $data["menuac"]="Menüler";
	
	$this->load->view('_header',$data);
	
		
		$this->load->view('menu',$data);

		$this->load->view('_footer');
	}
	public function hakkimizda()
	{
$query=$this->db->query("SELECT * FROM siteayarlari");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM hakkimizda");
		$data["hakkimizda"]=$query->result();
	


		$data["sayfa"]="Hakkımızda| ";


    $data["menuac"]="Hakkımızda";
	
	$this->load->view('_header',$data);
	
		
		$this->load->view('hakkimizda',$data);

		$this->load->view('_footer');
	}
	public function mesaj_kaydet()
	{
		 $data=array(
		 			

                        'isim'=>$this->input->post('isim'),
                         
                        'email'=>$this->input->post('email'),
                       'konu'=>$this->input->post('konu'),
                      
						'mesaj'=>$this->input->post('mesaj'),
						
						
                       
                 );

            $this->db->insert('mesajlar',$data);




			   $this->session->set_flashdata("mesaj","Mesajınız Başarıyla Gönderilmiştir. Sizinle en kısa zamanda iletişime geçilecektir."); 
			   redirect(base_url()."home/iletisim");

	}


	
}
