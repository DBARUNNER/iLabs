<?php
require 'class-excel-xml.inc.php';
include 'conf/conn.php';

$sql="SELECT * FROM prtable";
$result=mysql_query($sql);
	$cou=1;
	while ($row=mysql_fetch_array($result)) {
		  $arrayone=array($row['firstname'] , $row['lastname'], $row['phonnumber'], $row['emailaddress'], $row['job'], $row['company'], $row['language'], $row['comment1'], $row['comment2'], $row['comment3'], $row['comment4'], $row['location'], $row['background']),
	}
	$myarray =  array (
			1=> $arrayone,
		 array("hi","sdf")
    		);

			$xls = new Excel_XML;
			$xls->addArray ( $myarray );
			$xls->generateXML ( "testfile" );



?>