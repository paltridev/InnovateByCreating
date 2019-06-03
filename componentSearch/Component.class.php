<?php

class Component
{ 

   public function viewComponent($param){
	       
		
		$sql="SELECT * FROM producttable WHERE componentType LIKE '%".$param."%';" ;
		
	   	
	   	//$dbResult = mysql_query($sql, DBConnect::$conn) or die(mysql_error());
		$dbResult = mysqli_query(DBConnect::$conn, $sql) or die(mysql_error());
	   	$component = array();
	   	$result = array();

	   	 //if(mysql_num_rows($dbResult) > 0){
	   	 if($dbResult->num_rows > 0){

	   		//While ($row = mysql_fetch_assoc($dbResult)) {
			//Object oriented style - $dbResult->fetch_assoc(); 
			while ($row = $dbResult->fetch_assoc()) {
			//while ($row = mysqli_fetch_assoc($dbResult)) {
	   			$component[] = array('Component'=>$row['Component'], 'Price' => $row['Price'],'ComponentType'=> $row['componentType']);
	   		}
	   		mysqli_free_result($dbResult);
	   		$result=array('Component'=>$component);
	   	}  
	   	return $result;
   }   
}
?>