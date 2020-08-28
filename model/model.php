<?php
$conn=new MySQLi("localhost","root","","bookdata");

class model
{
	function insert($conn,$table,$data)
	{
	$key=array_keys($data);
	$vals=array_values($data);
	
	$fields=implode("`,`",$key);
	$values=implode("','",$vals);
	
    $sql="insert into `$table`(`$fields`) values ('$values') "; 
	return $ex=$conn->query($sql);
	}
	
	function login($conn,$table,$where)
	{
		$condition="";
		foreach($where as $key=>$val)
		{
			$condition=$condition."`$key`='$val' and";
		}
		$condition=rtrim($condition,"and");
		$sql="select * from `$table` where $condition"; 
		return $ex=$conn->query($sql);
	}


	 function select_all($conn,$table)
	{
		$sql="select * from `$table`";
		
		return $ex=$conn->query($sql);
			
		/*$r='';
		while($res=$ex->fetch_object())
		{
			$r[]=$res;
		}
		return $r;*/
	}


	function select_where($conn,$table,$where)
	{
		$condition="";
		
		foreach($where as $keys=>$values)
		{
			$condition=$condition."`$keys`='$values'";
		}
		
		 $sql="select * from `$table` where $condition";
		
	    $ex=$conn->query($sql);
		
		$r='';
		while($res=$ex->fetch_object())
		{
			$r[]=$res;
		}
		return $r;
		
	}

	
}




?>