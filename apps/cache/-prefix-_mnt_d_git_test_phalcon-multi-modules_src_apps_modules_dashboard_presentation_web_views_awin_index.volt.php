<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>present</title>
  
</head>

      <p>Daftar</p>
	<?php if (isset($message)) { ?>		<?= $message ?>		<?php } ?>
		</p>
	  
	  <?= $form->startForm() ?>
       
		<?= $form->rendering('username') ?>
          <br>
		<?= $form->rendering('email') ?>
  
		<br>	
		<?= $form->rendering('password') ?>
		<br>
		<?= $form->rendering('Register') ?>
  
    <?= $form->endForm() ?>


     
</body>
</html>
