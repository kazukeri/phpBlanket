<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo FRAMEWORK ; ?>/public/css/styles.css" type="text/css" media="screen" />
<LINK rel="shortcut icon" href="<?php echo FRAMEWORK ; ?>/public/img/favicon.ico"> 
	<title>
		phpBlanket: not so good framework <?php if(!empty($title)){echo '-'.$title;} ?>
		
	</title>
</head>
<body>
<div class="container">
	<div class="header">

	</div>
	
	<div class="menu">
	
		<div>
		<a href="<?php echo FRAMEWORK ; ?>">Strona główna</a>
		 | 
		<a href="<?php echo FRAMEWORK ; ?>items/index">Aktualności</a>
		 | 
		<?php if(!isset($_SESSION["auth_session"])){ ?>
		<div style="float:right"><a href="<?php echo FRAMEWORK ; ?>users/login">[Logowanie]</a>	</div>
		
		<?php } ?>	 
		
		
		<?php if(isset($_SESSION["auth_session"])){ ?>
		<div style="float:right"><a href="<?php echo FRAMEWORK ; ?>users/logout">[Wyloguj]</a></div>	
		
		<?php } ?>
		</div>
		<div style="font-size:11px;">	
		<?php if(isset($_SESSION["auth_session"])){ ?>
		 PANEL ADMINISTRATORA: 	
		<a href="<?php echo FRAMEWORK ; ?>items/admin_index">Aktualności</a>	
		
		<?php } ?>
		</div>		
	</div>	
	
	<div class="content">
	<?php  
	if(empty($this->_action)){$this->_action = 'index';} //przenies do index jesli brak akcji
	include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $this->_action . '.php');
			 
	?>
	</div>
	<div class="footer">
	2010
	</div>
</div>
</body>
</html>