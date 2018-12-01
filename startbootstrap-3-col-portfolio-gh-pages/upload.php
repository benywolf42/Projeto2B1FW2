<?php   

if (isset($_POST['submit'])){
    $file = $_FILES['file'];
    print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.' , $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg' , 'jpeg' , 'png');

    if(in_array($fileActualExt , $allowed)){
        if($fileError === 0)  {
            if($fileSize < 30000000000000000000){
            $fileNameNew = uniqid('' , true).".".$fileActualExt;
            $fileDestination = 'Imagens/'.$fileNameNew; 
            move_uploaded_file($fileTmpName , $fileDestination); 
            header ("Location: cadastrarPet.php?uploadsuccess");
            } else {
                echo "Seu arquivo é muito grande. Escolha um arquivo com até 300mb";
            }
        } else {
            echo "Houve um erro carregando seu arquivo."; 
        }

    }else {
        echo "Este tipo de arquivo não é permitido! Escolha um arquivo com as extensões jpg, jpeg, ou png"; 
    }
}
?> 
