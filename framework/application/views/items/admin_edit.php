<h2>Zmień aktualność</h2>
<?php echo $form->start(array('controller'=>'items','view'=>'admin_edit')); ?>

<?php echo $form->hidden("_id",$wynik['value']['id']); ?>
<?php echo $form->hidden("_rev",$wynik['value']['rev']); ?>

<?php echo $form->text("title",$wynik['value']['title'],array('class'=>'text_field'),"Tytuł"); ?>
<br/>
<?php echo $form->textArea("text",$wynik['value']['text'],array('class'=>'text_area'),"Treść"); ?>
<br/><br/>
<?php echo $form->submit("Zmień"); ?>

<?php echo $form->end(); ?>
<h3>
<?php echo $html->link("Lista aktualności",array("controller"=>"items","view"=>"admin_index"));?>
</h3>