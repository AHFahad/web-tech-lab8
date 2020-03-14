<?php 
session_start();




if(isset($_SESSION["name"])){
	include "h.php";
	include "home2.php";
}

else{
	include "hea.php";
	echo "welcome to the company";
}

 ?>

<div>
	<h6 class="footer">copy right to sr company</h6>
</div>