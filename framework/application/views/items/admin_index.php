<h2>Aktualności - administrator</h2>
<table class="index_table">
<tr>
	<th>
	Tytuł
	</th>
	<th>
	Treść
	</th>
	<th>
	Data
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
		<?php echo  $wynik[$ii]['value']['text']; ?>
	</td>
	<td>
		<?php echo  date("d.m.Y", $wynik[$ii]['value']['date'])." r."; ?>
		
	</td>	
	<td>
				<?php echo $html->link("Usuń",array('controller'=>'items','view'=>'admin_delete','param'=>$wynik[$ii]['value']['id']."/".$wynik[$ii]['value']['rev'])); ?> 
				 / 
				<?php echo $html->link("Zmień",array('controller'=>'items','view'=>'admin_edit','param'=>$wynik[$ii]['value']['id']."/".$wynik[$ii]['value']['rev'])); ?> 

	</td>	
</tr>
<?php  }?>
</table>

<h3>
<?php echo $html->link("Dodaj aktualność",array("controller"=>"items","view"=>"admin_add"));?>
</h3>