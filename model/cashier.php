<?php
	$logRequired = true;
    
	require_once("model-general.php");
	
	/** Checks if user is really a cashier **/
	if(getCurrentDetails("position") != CASHIER) {
		logOut();
	}

	function showAvailableProducts() {
		$query = mysql_query("SELECT * FROM products_group");
		
		while($fetch = mysql_fetch_array($query)) {			
			$batches = explode($fetch['batchID'], ',');
			foreach($batches as $id) {
				echo $id;
				$subQuery = mysql_query("SELECT * FROM products_batch WHERE id = ".$id."");
				$subFetch = mysql_fetch_array($subQuery);
			}
		}	
	}
?>