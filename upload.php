<?php



$count=count($_FILES['userfile']['name']);

for($i=0;$i<$count;$i++){

	 $uploaddir = 'uploads/images/'; // Relative path under webroot
	 $uploadfile = $uploaddir . basename($_FILES['userfile']['name'][$i]);

		$fileType = $_FILES['userfile']['type'][$i];	
		$allowedImageTypes = array( "image/pjpeg","image/jpeg","image/jpg","image/png","image/x-png","image/gif");
		if (!in_array($fileType, $allowedImageTypes))  
		{
			echo "������ ��������� ������ ����� ��������!";
			exit;
		} 
	  
	 
	 
	 if (move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $uploadfile)) {
	   echo "";
	 } else {
	   echo "����� �� �����������.\n";
	 }

	} 

header("Location: file_manager.php");

?>