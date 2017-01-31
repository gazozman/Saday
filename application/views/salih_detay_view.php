<?php foreach($veri as $dersler){ ?>
 ID <?php echo $dersler->id; ?> </br>
 Dersin Adı: <?php echo $dersler->adi; ?> </br>
 Dersin Saati: <?php echo $dersler->saati; ?> </br>
 Dersin Hocası: <?php echo $dersler->hocasi; ?> </br></br>
<?php } ?>