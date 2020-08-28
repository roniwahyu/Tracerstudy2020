<?php //getcomponent('wizard5') 
if(!empty($jurusan)){
	print_r($jurusan);
}
foreach ($data as $key => $value) {
	echo "<h1>".$value['jurusan']."</h1>";
};
?>