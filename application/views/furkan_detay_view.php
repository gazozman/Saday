<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php foreach($veri as $row){ ?>
ID: <?php echo $row->id;?> </br>
İsim: <?php echo $row->isim;?> </br>
Soy İsim: <?php echo $row->soyisim;?></br></br>
<?php } ?>