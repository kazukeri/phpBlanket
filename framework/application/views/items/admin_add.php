<h2>Dodaj aktualność</h2>
<?php echo $form->start(array('controller'=>'items','view'=>'admin_add')); ?>
<?php echo $form->text("title","",array('class'=>'text_field'),"Tytuł"); ?>
<br/>
<?php echo $form->textArea("text","",array('class'=>'text_area'),"Treść"); ?>
<br/><br/>
<?php echo $form->submit("Dodaj"); ?>

<?php echo $form->end(); ?>
<h3>
<?php echo $html->link("Lista aktualności",array("controller"=>"items","view"=>"admin_index"));?>
</h3>