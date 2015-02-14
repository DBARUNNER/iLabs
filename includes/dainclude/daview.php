<?php
include '../conf/conn.php';
$id=$_GET['id'];
$name=$_GET['name'];
$comment=$_GET['comment'];
if ($name!='') {
	$sql="INSERT INTO pro_name values(null,".$id.",'".$name."','".$comment."','".Date("y-m-d h:i:s")."')";
	mysql_query($sql);
}


$result=mysql_query("Select * from pro_name WHERE pro_id=".$id."");
while ($row=mysql_fetch_array($result)) {
	echo '<div  style="clear:both; margin:o;padding:0;">
              <blockquote><h6 class="media-heading text-uppercase reviews" id="here" >'.$row["name"].'</h6>
              <p class="media-comment"><small>
               '.$row["comment"].'
              </small></p>
              <h6><small class="text-mute">'.$row["date"].'</small></h6></blockquote>       
            </div><hr> ';
}
$lang="dari";
$direction="rtl";
$txtclass="text-right";
?>
