<h2>Aktualności</h2> <br/>
<?php for($ii = 0; $ii< count($wynik); $ii++){  ?>

	<div style="margin-bottom:20px;margin-right:50px;">
		<div style="border-bottom:1px solid #ccc;"> 
			<strong> 
				<?php echo $html->link($wynik[$ii]['value']['title'],array('controller'=>'items','view'=>'view','param'=>$wynik[$ii]['value']['id'])); ?> 
			</strong>
		<div style="float:right;"> 
			<?php echo  date("d.m.Y", $wynik[$ii]['value']['date'])." r."; ?>
		</div>				
		</div>
	
		<div> 
			<?php echo  $wynik[$ii]['value']['text']; ?>
		</div>
	</div>
  
<?php  }?>

<?php 
/*
 echo "<strong>key:</strong> ".$wynik['rows'][$ii]['key'].'<br/>
  echo "<strong>id:</strong> ".$wynik['rows'][$ii]['value']['id'].'<br/>'; 
*/
   
   
/*
<form action="../items/add" method="post">
<input type="text" value="I have to..." onclick="this.value=''" name="todo"> <input type="submit" value="add">
</form>
<br/><br/>
<?php $number = 0?>

<?php foreach ($todo as $todoitem):?>
	<a class="big" href="../items/view/<?php echo $todoitem['Item']['id']?>/<?php echo strtolower(str_replace(" ","-",$todoitem['Item']['item_name']))?>">
	<span class="item">
	<?php echo ++$number?>
	<?php echo $todoitem['Item']['item_name']?>
	</span>
	</a><br/>
<?php endforeach?>
*/
?>