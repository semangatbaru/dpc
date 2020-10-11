<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html


	 */

	function __construct(){
		parent::__construct();		
		$this->load->model('M_awal');
        $this->load->helper('url');
	}
	
	public function index(){
		$data["terbaru"] = $this->M_awal->baru()->result_array();
		$data["politik1"] = $this->M_awal->politik1()->result_array();
		$data["politik3"] = $this->M_awal->politik3()->result_array();
		$data["ekonomi1"] = $this->M_awal->ekonomi1()->result_array();
		$data["ekonomi"] = $this->M_awal->ekonomi()->result_array();
		$data["sosial1"] = $this->M_awal->sosial1()->result_array();
		$data["sosial3"] = $this->M_awal->sosial3()->result_array();
		$data["opini1"] = $this->M_awal->opini1()->result_array();
		$data["opini3"] = $this->M_awal->opini3()->result_array();
		$data["analisa1"] = $this->M_awal->analisa1()->result_array();
		$data["analisa3"] = $this->M_awal->analisa3()->result_array();
		$data["biografi1"] = $this->M_awal->biografi1()->result_array();
		$data["biografi3"] = $this->M_awal->biografi3()->result_array();
		$data["keislaman1"] = $this->M_awal->keislaman1()->result_array();
		$data["keislaman3"] = $this->M_awal->keislaman3()->result_array();
		$data["berita1"] = $this->M_awal->berita1()->result_array();
		$data["berita3"] = $this->M_awal->berita3()->result_array();
		
		$this->load->view('welcome_message', $data);
	}
	public function terbaruall(){
		$data["terbaruall"] = $this->M_awal->terbaruall()->result_array();
		
		
		$this->load->view('terbaru', $data);
	}
	public function politikall(){
		$data["politikall"] = $this->M_awal->politikall()->result_array();
		
		
		$this->load->view('politik', $data);
	}
	public function ekonomiall(){
		$data["ekonomiall"] = $this->M_awal->ekonomiall()->result_array();
		
		
		$this->load->view('ekonomi', $data);
	}
	public function sosialall(){
		$data["sosialall"] = $this->M_awal->sosialall()->result_array();
		
		
		$this->load->view('sosial', $data);
	}
	public function analisaall(){
		$data["analisaall"] = $this->M_awal->analisaall()->result_array();
		
		
		$this->load->view('analisa', $data);
	}
	public function opiniall(){
		$data["opiniall"] = $this->M_awal->opiniall()->result_array();
		
		
		$this->load->view('opini', $data);
	}
	public function biografiall(){
		$data["biografiall"] = $this->M_awal->biografiall()->result_array();
		
		
		$this->load->view('biografi', $data);
	}
	public function keislamanall(){
		$data["keislamanall"] = $this->M_awal->keislamanall()->result_array();
		
		
		$this->load->view('keislaman', $data);
	}
	public function beritaall(){
		$data["beritaall"] = $this->M_awal->beritaall()->result_array();
		
		
		$this->load->view('berita', $data);
	}

	
	public function detail($id_berita=''){
		//write this way so that you can call the url like
		//localhost/norwin/list_group/get_product_by_group
	    if($id_berita)//no need to check uri->segment
	    {
	            $this->load->database();                    
	            $data['berita'] = $this->M_awal->detail($id_berita);
	            $this->load->view('detail', $data);

	    }
	    else
	    {
	            redirect('');
	    }
	


	}



	

}
