<?php foreach($veri as $dersler){ ?>
 ID <?php echo $dersler->id; ?> </br>
 Dersin Adı: <?php echo $dersler->adi; ?> </br>
 <a href="<?php echo base_url();?>salih/detay/<?php echo $dersler->id; ?>">Detay</a></br>
 <a href="<?php echo base_url(); ?>salih/veriSil/<?php echo $dersler->id;?>">Sil</a></br></br>

<?php } ?>