<?
 require_once("../classes/YASE/Framework.php"); 
 require_once("../classes/Template.php"); 

 Template::admintop();
 
 $iAccountID=$_REQUEST['account_id'];
 if(isset($iAccountID)){
   YASE_Account::changeAccount($iAccountID); 
 } 
?>

<br>
<H1> Account information </H1>
<br><br>
account id:[<?php print $_SESSION["account_domain"];?>]

<?php
 print "[".$_SESSION["account_id"]."]"; 
 Template::bottom();
?>

