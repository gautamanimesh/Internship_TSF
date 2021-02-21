 <?php
$con = mysqli_connect('localhost' ,'root','iwilldoit' );

   $con = pg_connect( "$host  $dbname $credentials"  );
   mysqli_select_db($con, 'storing');

$sql = "UPDATE customers SET current_balance = current_balance+ '$_POST[amount]' WHERE email = '$_POST[emailto]'";

   		$ret = pg_query( $sql);
$sql2 = "UPDATE customers SET current_balance = current_balance -'$_POST[amount]' WHERE email = '$_POST[emailfrom]'";

   		$ret2 = pg_query( $sql2);

   		if(!$ret) {
   		   echo "Updation failed";
   		} 
		 else {		 
   		   	header("location:customer.php ");
   			}




?> 