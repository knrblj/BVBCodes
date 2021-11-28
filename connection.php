<?php
    session_start();
	$conn=mysqli_connect('ec2-23-23-219-25.compute-1.amazonaws.com','fwphcrgoudrxmm','d6d15bf3877fdbcc7f7cda3609f1ca9bbbc08bf00f914bde559cccef3b81a80e','knrbljxy_project');
	if(!$conn)
	{
		echo "Unable to connect";
	}
    
    function validate($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}	
?>
