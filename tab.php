<?php
include 'conf/conn.php';
if($_GET['tab']!=''){
$tab=$_GET['tab'];
$sql=mysql_query("SELECT * FROM ".$tab);
if ($tab=='prtable') {
		$num=7;

	}else if($tab=='contact'){
		$num=4;
	}else{
		$num=5;
	}
$arr=array();
if ($tab=='prtable') {
	echo '<div class="row"><div class="btn-group"><a href="" class="btn btn-info"><i class="fa fa-file-excel-o"></i>		Export Participant Table to Excel</a><a href="" data-toggle="modal" data-target="#show" class="btn btn-info" onclick="mil('."'".$tab."'".');"><i class="fa fa-envelope"></i>		Mail to all Participants</a></div></div>';
	echo '<div class="page-header"><h2 class=" text-info">Participants Table</h2></div>';
	$kabul="kabul";
	$herat="herat";
	echo '<div class="btn-group"><input type="button" class="btn btn-info btn-sm" onclick="loca('."'".$tab."'".','."'".$kabul."'".');" value="Kabul Participants"/><input type="button" class="btn btn-sm btn-info" onclick="loca('."'".$tab."'".','."'".$herat."'".');" value="Herat Participants"/><button type="button" class="btn btn-sm btn-info" onclick="loca('."'".$tab."'".','."'"."'".');" >Without Location	<span class="badge"></span></button></div>';

}else if ($tab=='contact') {
	echo '<div class="row"><div class="btn-group"><a class="btn btn-primary"><i class="fa fa-file-excel-o"></i>		Export Contact Us Table to Excel</a><a href="" data-toggle="modal" data-target="#show" class="btn btn-primary" onclick="mil('."'".$tab."'".');"><i class="fa fa-envelope"></i>		Mail to all Contacts</a></div></div>';
	echo '<div class="page-header"><h2 class=" text-primary">Contact Us Table</h2></div>';
}else{
	echo '<div class="row"><div class="btn-group"><a class="btn btn-success " ><i class="fa fa-file-excel-o"></i>		Export Projects Table to Excel</a></div>';
	echo '<div class="page-header"><h2 class=" text-success">Projects Table</h2></div>';
}
echo "<table class='table table-bordered table-responsive table-hover' >";
echo "<tr class='active' >";
for ($i=0; $i <$num ; $i++) {
	echo "<th>".mysql_field_name($sql, $i)."</th>"; 
	$arr[]=mysql_field_name($sql, $i);
}
echo "<th colspan='3'>Action</th></tr>";
while($row=mysql_fetch_array($sql)) {
	echo "<tr>";
	 foreach ($arr as $val) {
		echo "<td>".$row[$val]."</td>";
	}
	$id=$row['id'];
	if ($tab=='prtable') {
		$name=$row['firstname']." ".$row['lastname'];	
	}else if($tab=='contact'){
		$name=$row['name'];
	}else{
		$name=$row['name'];
	}
	

	echo '<td><a class="btn btn-success btn-sm" onclick="sho('."'".$tab."'".','.$id.');" data-toggle="modal" data-target="#show"><i class="fa fa-newspaper-o"></i>	show</a></td><td><a class="btn btn-primary btn-sm" onclick="upd('."'".$tab."'".','.$id.",'".$name."'".');" data-toggle="modal" data-target="#show"><i class="fa fa-edit"></i>	Edit</a></td><td><a class="btn btn-danger btn-sm" onclick="del('."'".$tab."'".','.$id.",'".$name."'".');" ><i class="fa fa-trash"></i>	Delete</a></td></tr>';
}
echo "</table>";
}else if ($_GET['ta']!='') {
	$tab=$_GET['ta'];
$id=$_GET['id'];
$sql="SELECT * FROM ".$tab." WHERE id=".$id;
$result=mysql_query($sql);
if($tab=='prtable'){

while ($row=mysql_fetch_array($result)) {
	echo '<div class="row">
						<div class="col-md-4">
						First Name:<p class="form-control">	'.$row["firstname"].'</p>
						Last Name:<p class="form-control">	'.$row["lastname"].'</p>
						Phone Number:<p class="form-control">	'.$row["phonnumber"].'</p>
						Email Adress:<p class="form-control">	'.$row["emailaddress"].'</p>
						Job:<p class="form-control">	'.$row["job"].'</p>
						Company:<p class="form-control">	'.$row["company"].'</p>
						Language:<p class="form-control">	'.$row["language"].'</p>
						</div>
						<div class="col-md-8">
						Comment 1:<p class="form-control">	'.$row["comment1"].'</p>
						Comment 2:<p class="form-control">	'.$row["comment2"].'</p>
						Comment 3:<p class="form-control">	'.$row["comment3"].'</p>
						Comment 4:<p class="form-control">	'.$row["comment4"].'</p>
						Location:<p class="form-control">	'.$row["location"].'</p>
						background:<p class="form-control">	'.$row["background"].'</p>
						</div>
						</div>';
}
}else if($tab=='contact'){
	while ($row=mysql_fetch_array($result)) {
	echo '<div class="row">
						<div class="col-md-6 col-md-offset-3" style="border:1px solid black;">
						<label>Full Name:</label><p class="form-control">	'.$row["name"].'</p>
						<label>Email:</label><p class="form-control">	'.$row["email"].'</p>
						<label>Message:</label><p class="form-control">	'.$row["message"].'</p>
						</div>';
}
}else{
	while ($row=mysql_fetch_array($result)) {
	echo '<div class="row">
						<div class="col-md-4 col-md-offset-3" style="border:1px solid black; padding:10px; border-radius:10px;">
						<label>Project ID:</label><p class="form-control">	'.$row["pro_id"].'</p>
						<label>Full Name:</label><p class="form-control">	'.$row["name"].' </p>
						<lable>Comment:</label><p class="form-control">	'.$row["comment"].'</p>
						<label>Date:</label><p class="form-control">	'.$row["date"].'</p>
						<input type="button" data-dismiss="modal" class="btn btn-success " value="Done"/>
						</div>';
}
}
}else if ($_GET['dela']!='') {
	$sql = "DELETE FROM ".$_GET['dela']." WHERE id=".$_GET['id'];
	$result=mysql_query($sql);
	if ($result) {
		echo "<div class='alert alert-info'>The ".$_GET['name']." has been sucessfully deleted!!</div>";		
	}else{
		echo "<div class='alert alert-warning'>deletion has failed</div>";
	}
}
else if ($_GET['upd']!='') {
	$tab=$_GET['upd'];
$id=$_GET['id'];
$sql="SELECT * FROM ".$tab." WHERE id=".$id;
$result=mysql_query($sql);
if($tab=='prtable'){

while ($row=mysql_fetch_array($result)) {
	echo '<div class="row" style="border:1px solid black;padding:10px; border-radius:10px;">
						<div class="col-md-4">
						<label><b>First Name:</b></label><input id="par_1" type="text" class="form-control" value="'.$row["firstname"].'" />
						<label><b>Last Name:</b></label><input id="par_2" type="text" class="form-control"	value="'.$row["lastname"].'" />
						<label><b>Phone Number:</b></label><input id="par_3" type="text" class="form-control" value="'.$row["phonnumber"].'" />
						<label><b>Email Adress:</b></label><input id="par_4" type="text" class="form-control" value="'.$row["emailaddress"].'" />
						<label><b>Job:</b></label><input id="par_5" type="text" class="form-control" value="'.$row["job"].'" />
						<label><b>Company:</b></label><input id="par_6" type="text" class="form-control" value="'.$row["company"].'" />
						<label><b>Language:</b></label><input id="par_7" type="text" class="form-control"value="'.$row["language"].'" />
						</div>
						<div class="col-md-8">
						<label><b>Comment 1:</b></label><textarea id="par_8" class="form-control">'.$row["comment1"].'</textarea>
						<label><b>Comment 2:</b></label><textarea id="par_9" class="form-control">'.$row["comment2"].'</textarea>
						<label><b>Comment 3:</b></label><textarea id="par_10" class="form-control">'.$row["comment3"].'</textarea>
						<label><b>Comment 4:</b></label><textarea id="par_11" class="form-control">'.$row["comment4"].'</textarea>
						<label><b>Location:</b></label><input id="par_12" type="text" class="form-control" value="'.$row["location"].'" />
						<label><b>background:</b></label><input id="par_13" type="text" class="form-control" value="'.$row["background"].'" />
						</div>
						<input type="button" data-dismiss="modal" onclick="edi_3('."'".$tab."'".','.$id.');" class="btn btn-success" value="Update"/>
						</div>';
}
}else if($tab=='contact'){
	while ($row=mysql_fetch_array($result)) {
	echo '<div class="row">
						<div class="col-md-4 col-md-offset-4" style="border:1px solid black;padding:10px; border-radius:10px;">
						<label><b>Full Name:</b></label><input id="con_1" type="text" class="form-control" value="'.$row["name"].'" />
						<label><b>Email:</b></label><input id="con_2" type="text" class="form-control" value="'.$row["email"].'" />
						<label><b>Message:</b></label><textarea id="con_3" class="form-control">'.$row["message"].'</textarea>
						<br>
						<input type="button" data-dismiss="modal" class="btn btn-success" onclick="edi_2('."'".$tab."'".','.$id.');" value="Update"/>
						</div>';
}
}else{
	while ($row=mysql_fetch_array($result)) {
	echo '<div class="row">
						<div class="col-md-4 col-md-offset-4" style="border:1px solid black;padding:10px; border-radius:10px;">
						<label><b>Project ID:</b></label><input id="pro_1" type="text" class="form-control" value="'.$row["pro_id"].'" />
						<label><b>Full Name:</b></label><input id="pro_2" type="text" class="form-control" value="'.$row["name"].'" />
						<label><b>Comment:</b></label><input id="pro_3" type="text" class="form-control" value="'.$row["comment"].'" />
						<label><b>Date:</b></label><input id="pro_4" type="text" class="form-control" value="'.$row["date"].'" />
						<br>
						<input type="button" data-dismiss="modal" class="btn btn-success" onclick="edi_1('."'".$tab."'".','.$id.');" value="Update"/>
						</div>';
}
}
}else if($_GET['pro']!=''){
	if ($_GET['pro']=='pro_name') {
		$sql="UPDATE ".$_GET['pro']." SET id=".$_GET['id'].",pro_id=".$_GET['pro_id'].",name='".$_GET['name']."',comment='".$_GET['comment']."' WHERE id=".$_GET['id'];

	}else if ($_GET['pro']=='contact') {
		$sql="UPDATE ".$_GET['pro']." SET id=".$_GET['id'].",name='".$_GET['name']."',email='".$_GET['email']."',message='".$_GET['message']."' WHERE id=".$_GET['id'];
	}else{
		$sql="UPDATE ".$_GET['pro']." SET id=".$_GET['id'].",firstname='".$_GET['firstname']."',lastname='".$_GET['lastname']."',phonnumber=".$_GET['phonnumber'].",emailaddress='".$_GET['email']."',job='".$_GET['job']."',company='".$_GET['company']."',language='".$_GET['language']."',comment1='".$_GET['comment1']."',comment2='".$_GET['comment2']."',comment3='".$_GET['comment3']."',comment4='".$_GET['comment4']."',location='".$_GET['location']."',background='".$_GET['background']."' WHERE id=".$_GET['id'];
	}
	$result=mysql_query($sql);
	if($result){
		echo "<div class='alert alert-info'>Updated has been successfully done</div>";		
	}else{
		echo "<div class='alert alert-info'>Update Failed</div>";		
	}
}else if($_GET['mil']!=''){
	echo '<div>
		<label>Message</label>
		<textarea class="form-control" id="mi" style="height: 386px;"></textarea>
		<br>
		<input type="button" class="btn btn-success" data-dismiss="modal" onclick="emil('."'".$_GET['mil']."'".');" value="Send" />
		</div>';
}else if($_GET['emil']!=''){
	$em=$_GET['me'];
	if($_GET['emil']=='prtable'){
		$result=mysql_query("SELECT emailaddress FROM ".$_GET['emil']);		
		while ($row=mysql_fetch_array($result)) {
			mail($row['emailaddress'], "iLabs-Innovation",$em , "From:" . "ilabs@technation.af");
		}
		echo "<div class='alert alert-success'><i class='fa fa-done'></i>Mails Sending has completed</div>";		
	}else if($_GET['emil']=='contact'){
		$result=mysql_query("SELECT email FROM ".$_GET['emil']);
		while ($row=mysql_fetch_array($result)) {
			mail($row['email'], "iLabs-Innovation",$em , "From:" . "ilabs@technation.af");
		}
		echo "<div class='alert alert-success'><i class='fa fa-done'></i>Mails Sending has completed</div>";
	}
}else if($_GET['loca']!=''){
	$sql="SELECT * FROM ".$_GET['loca']." WHERE location='".$_GET['location']."'";
	$result=mysql_query($sql);
	$num=7;
		echo '<div class="row"><div class="btn-group"><a href="" class="btn btn-info"><i class="fa fa-file-excel-o"></i>		Export Participant Table to Excel</a><a href="" data-toggle="modal" data-target="#show" class="btn btn-info" onclick="mil('."'".$tab."'".');"><i class="fa fa-envelope"></i>		Mail to all Participants</a></div></div>';
	echo '<div class="page-header"><h2 class=" text-info">Participants Table</h2></div>';
	$kabul="kabul";
	$herat="herat";
	$result1=mysql_query("SELECT * FROM prtable WHERE location='kabul'");
	$result2=mysql_query("SELECT * FROM prtable WHERE location='herat'");
	$result3=mysql_query("SELECT * FROM prtable WHERE location=''");
	$numb1=mysql_num_rows($result1);
	$numb2=mysql_num_rows($result2);
	$numb3=mysql_num_rows($result3);
	echo '<div class="btn-group"><button type="button" class="btn btn-info btn-sm" onclick="loca('."'".$_GET['loca']."'".','."'".$kabul."'".');" >Kabul Participants <span class="badge">'.$numb1.'</span> </button><button type="button" class="btn btn-sm btn-info" onclick="loca('."'".$_GET['loca']."'".','."'".$herat."'".');" >Herat Participants	<span class="badge">'.$numb2.'</span></button><button type="button" class="btn btn-sm btn-info" onclick="loca('."'".$_GET['loca']."'".','."'"."'".');" >Without Location	<span class="badge">'.$numb3.'</span></button></div>';
echo "<table class='table table-bordered table-responsive table-hover' >";
echo "<tr class='active' >";
for ($i=0; $i <$num ; $i++) {
	echo "<th>".mysql_field_name($result, $i)."</th>"; 
	$arr[]=mysql_field_name($result, $i);
}
echo "<th colspan='3'>Action</th></tr>";
while($row=mysql_fetch_array($result)) {
	echo "<tr>";
	 foreach ($arr as $val) {
		echo "<td>".$row[$val]."</td>";
	}
	$id=$row['id'];
	if ($tab=='prtable') {
		$name=$row['firstname']." ".$row['lastname'];	
	}else if($tab=='contact'){
		$name=$row['name'];
	}else{
		$name=$row['name'];
	}
	

	echo '<td><a class="btn btn-success btn-sm" onclick="sho('."'".$_GET['loca']."'".','.$id.');" data-toggle="modal" data-target="#show"><i class="fa fa-edit"></i>	show</a></td><td><a class="btn btn-primary btn-sm" onclick="upd('."'".$_GET['loca']."'".','.$id.",'".$name."'".');" data-toggle="modal" data-target="#show"><i class="fa fa-trash"></i>	Edit</a></td><td><a class="btn btn-danger btn-sm" onclick="del('."'".$_GET['loca']."'".','.$id.",'".$name."'".');" ><i class="fa fa-trash"></i>	Delete</a></td></tr>';
}
echo "</table>";
}
else{
	echo "unable to fetch data";
}
?>