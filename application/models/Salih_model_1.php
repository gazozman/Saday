<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salih_model_1 extends CI_Model
{
  function __construct()
     {
         parent::__construct();
         $this->load->database();//database bağlantısı yapıyoruz.
         $this->load->library('session');
     }

    function hepsini_al()
     {
         $at = $this->db->get('dersler');
         return $at->result();
     }

     function veri_ekleme_fonksiyonu()
    {
        $data = array(
       'adi'=>$this->input->post('dersin_adi'),
       'saati'=>$this->input->post('dersin_saati'),
       'hocasi'=>$this->input->post('dersin_hocasi'),
       'resimlinki'=>$this->input->post('dersin_resmi')
        );
        $this->db->insert('dersler',$data);
    }

    function sadece_birini_al($id)
     {
         $at = $this->db->get_where('dersler', array('id'=>$id));
         return $at->result();
     }

     function veri_silme_fonksiyonu($id)
    {
        $query = "DELETE FROM dersler WHERE id = $id";
        $result = $this->db->query($query);				
    }
}    