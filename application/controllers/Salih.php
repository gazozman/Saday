<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salih extends CI_Controller 
{
	public function index()
    {
        $this->load->helper('url');
        $this->load->model('salih_model_1');
        $data['veri'] = $this->salih_model_1->hepsini_al();
		$this->load->view('salih_view', $data);
    }

    function veriEkle()
    {
        $this->load->model('salih_model_1');
        $this->load->helper('form');
        if($this->input->post('buton_ismi'))//formda sumbit tuşuna basıldığında çalışacak fonksiyon
            {  
            $this->salih_model_1->veri_ekleme_fonksiyonu();  //yeni elemanı database eklemek için model dosyamızı çağırıyoruz
            }
        $this->load->view('salih_ekle_view');
    }

     function detay($id) { 
        $this->load->model('salih_model_1');
		$data['veri']=$this->salih_model_1->sadece_birini_al($id);
        $this->load->view('salih_detay_view',$data);
	}

    function veriSil($id)
	{
		$this->load->model('salih_model_1');
		$this->salih_model_1->veri_silme_fonksiyonu($id);
		if ($this->db->affected_rows() > 0) {
			echo "Silindi";
		} else { echo "Aga bi sıkıntı çıktı silinmedi."; }
	}

}