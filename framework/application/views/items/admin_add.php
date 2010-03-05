<h2>Dodaj aktualność</h2>
<?php echo $form->start(array('controller'=>'items','view'=>'admin_add')); ?>
<br/>
Tytuł: <?php echo $form->text("title",""); ?>
<br/>
Treść: <?php echo $form->text("text",""); ?>
<br/><br/>
<?php echo $form->submit("Dodaj"); ?>

<?php echo $form->end(); ?>