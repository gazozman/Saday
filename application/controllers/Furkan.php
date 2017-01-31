<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Furkan extends CI_Controller {

	public function index()
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('furkan_model');

        $data['veri'] = $this->furkan_model->hepsini_al();
		$this->load->view('furkan_view', $data);
	}

    function detay($id) {
        $this->load->model('furkan_model');
		$data['veri']=$this->furkan_model->sadece_birini_al($id);
        $this->load->view('furkan_detay_view',$data);
	}
    
	function veriEkle()
    {
        $this->load->model('furkan_model');
        $this->load->helper('form');
        if($this->input->post('buton_ismi'))//formda sumbit tuşuna basıldığında çalışacak fonksiyon
            {  
            $this->furkan_model->veri_ekleme_fonksiyonu();  //yeni elemanı database eklemek için model dosyamızı çağırıyoruz
            }
        $this->load->view('furkan_ekle_view');
    }

	function veriSil($id)
	{
		$this->load->model('furkan_model');
		$this->furkan_model->veri_silme_fonksiyonu($id);
		if ($this->db->affected_rows() > 0) {
			echo "Silindi";
		} else { echo "Aga bi sıkıntı çıktı silinmedi."; }
	}


}