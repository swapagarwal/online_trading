<?php
$item_id=$_REQUEST["id"];
include_once 'class.MySQL.php';
				if(!isset($_SESSION))
                  session_start();
                  $object=new MySQL();
                  echo "SELECT * from auction_bidder where item_id='$item_id' ORDER BY `bid` DESC";
                 $r=$object->ExecuteSQL("SELECT * from auction_bidder where item_id='$item_id' ORDER BY `bid` DESC");
$row=$object->ExecuteSQL("DELETE  from auction_bidder where user_nm='".$r[0]['user_nm']."'and item_id='$item_id'");
echo "DELETE  from auction_bidder where user_nm='".$r[0]['user_nm']."'and item_id='$item_id'"
?>