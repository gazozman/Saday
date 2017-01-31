<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php foreach($veri as $row){ ?>
ID: <?php echo $row->id;?> </br>
İsim: <?php echo $row->isim;?> </br>
Soy İsim: <?php echo $row->soyisim;?>
<a href="<?php echo base_url(); ?>Furkan/Detay/<?php echo $row->id;?>">Detaylar</a>
<a href="<?php echo base_url(); ?>Furkan/veriSil/<?php echo $row->id;?>">Sil</a>
</br></br>
<?php } ?>