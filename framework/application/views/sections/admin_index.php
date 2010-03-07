<h2>Działy - administrator</h2>
<table class="index_table">
<tr>
	<th>
	Tytuł
	</th>	
	<th>
	Akcje
	</th>		
</tr>
<?php for($ii = 0; $ii< count($wynik); $ii++){  ?>
<tr>
	<td>
		<?php echo $wynik[$ii]['value']['title']; ?> 
	</td>
	
	<td>
				<?php echo $html->link("Usuń",array('controller'=>'sections','view'=>'admin_delete','param'=>$wynik[$ii]['value']['id']."/".$wynik[$ii]['value']['rev'])); ?> 
				 / 
				<?php echo $html->link("Zmień",array('controller'=>'sections','view'=>'admin_edit','param'=>$wynik[$ii]['value']['id']."/".$wynik[$ii]['value']['rev'])); ?> 

	</td>	
</tr>
<?php  }?>
</table>

<h3>
<?php echo $html->link("Dodaj dział",array("controller"=>"sections","view"=>"admin_add"));?>
</h3>