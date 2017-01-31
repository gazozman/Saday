<?php
class Furkan_model extends CI_Model
{
  function __construct()
     {
         parent::__construct();
         $this->load->database();//database bağlantısı yapıyoruz.
     }
    function hepsini_al()
     {
         $at = $this->db->get('kisiler');
         return $at->result();
     }

    function sadece_birini_al($id)
     {
         $at = $this->db->get_where('kisiler', array('id'=>$id));
         return $at->result();
     }

    function veri_ekleme_fonksiyonu()
    {
        $data = array(
       'isim'=>$this->input->post('isim_input'),
       'soyisim'=>$this->input->post('soyisim_input')
        );
        $this->db->insert('kisiler',$data);
    }

    function veri_silme_fonksiyonu($id)
    {
        $query = "DELETE FROM kisiler WHERE id = $id";
        $result = $this->db->query($query);				
    }
}
?>