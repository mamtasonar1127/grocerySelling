<?php
session_start();

include("../model/model.php");
$mod=new model;






if(isset($_REQUEST['createacc']))
{
	$firstname=$_REQUEST['firstname'];
	$lastname=$_REQUEST['lastname'];
	$contact=$_REQUEST['contact'];
	$emailid=$_REQUEST['emailid'];
	$passwordacc=$_REQUEST['passwordacc'];
	
	
	
	$data=array("first_name"=>$firstname,"last_name"=>$lastname,"contact"=>$contact,"email_id"=>$emailid,"password"=>$passwordacc);
	
	$ins=$mod->insert($conn,"tbl_login",$data);
	
	if($ins)
	{
		echo"<script>
           alert('Updated Successfully.Login your Account');
           window.location.href='bookreg.php';
           </script>";
	}
	else
	{
		echo"<script>
           alert('Error In Creating Account');
           window.location.href='signup.php';
           </script>";
	}
}


if(isset($_REQUEST['acclog']))
{
	$emaillog=$_REQUEST['emaillog'];
	$passlog=$_REQUEST['passlog'];
	
	
	$sql="select * from `tbl_login` where `email_id`='$emaillog'  and `password`='$passlog'";
	
	$ex=$conn->query($sql);
	$res=$ex->fetch_object();
	
	
	if($ex->num_rows>0)
	{
		$_SESSION['user']=$res;

		echo"<script>
           alert('Login Successfully.');
           window.location.href='admin.php';
           </script>";

		
	}
	 else
	{
		echo"<script>
           alert('Check username and password');
           window.location.href='bookreg.php';
           </script>";
	}	
}




if(isset($_POST['submit']))
{
    $booktitle=$_POST['booktitle'];  
    $bookgenre=$_POST['bookgenre'];
    $bookreview=$_POST['bookreview'];
    $personname=$_POST['personname'];
    $personemail=$_POST['personemail'];
    $linkofstore=$_POST['linkofstore'];
    
    
    $picnew=$_FILES['picname']['name'];
    $picty=$_FILES['picname']['type'];
    $picsz=$_FILES['picname']['size'];
    $picold=$_FILES['picname']['tmp_name'];
    $newpath="bookimages/".$picnew;
    
    move_uploaded_file($picold,$newpath);



    $data=array("book_title"=>$booktitle,"book_genre"=>$bookgenre,"book_review"=>$bookreview,"name"=>$personname,"email"=>$personemail,"store_link"=>$linkofstore,"book_image"=>$newpath);
	
	$ins=$mod->insert($conn,"tbl_bookdetails",$data);
	
	if($ins)
	{
		echo"<script>
           alert('Inserted Successfully');
           window.location.href='viewreg.php';
           </script>";
	}
	else
	{
		echo"<script>
           alert('Error');
           window.location.href='bookdetails.php';
           </script>";
	}
    
 }




















?>