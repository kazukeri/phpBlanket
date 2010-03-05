Logowanie:
<?php echo $form->start(array('controller'=>'users','view'=>'login')); ?>
<br/>
Login: <?php echo $form->text("login",""); ?>
<br/>
Hasło: <?php echo $form->password("password",""); ?>
<br/><br/>
<?php echo $form->submit("Zaloguj"); ?>

<?php echo $form->end(); ?>
