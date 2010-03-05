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

	</td>	
</tr>
<?php  }?>
</table>

<h3>
<?php echo $html->link("Dodaj aktualność",array("controller"=>"items","view"=>"admin_add"));?>
</h3>