Выберите файлы для загрузки (только изображения), затем кликните по кнопке "Загрузить":<hr> 
<form name="upload" action="upload.php" method="POST" ENCTYPE="multipart/form-data">
 <input type="file" name="userfile[]" multiple  required>
 <input type="submit" name="upload[]" value="Загрузить">
</form>
<hr>
<font color='red'>
<b>(!) Внимание!</b><br> </font>

Файлы группируются по алфавиту, с учётом регистра. <br>
Рекомендется использовать префиксы, например <b>cod777_</b>kartinka.jpg, для того чтобы логически отделить и сгруппировать определённые файлы.<br>
Если имя файла совпадает с уже загруженным файлом, произойдёт замена файлов. 

<hr>




<?php


$dir = "uploads/images/";
$files = scandir($dir);


$count=count($files);

for($i=2; $i<$count;$i++){
	?>
	
	<div style='padding:10px; display:inline-block;'>
	<b><small><?=  $files[$i]?></small></b>
	<br>
	 <img src='/uploads/images/<?= $files[$i]?>' height=150em> <br>
	<textarea cols=26>/uploads/images/<?= $files[$i]?></textarea>
	
	</div>
	<?php
}



?>
