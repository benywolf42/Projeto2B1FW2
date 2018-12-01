<?php
    // error_reporting(E_ALL);
    require('conexaoBanco.php');

    // $especie             = $_POST['especie'];
    // $estado              = $_POST['UF'];
    // $cidade              = $_POST['cidade'];
    // $porte               = $_POST['porte'];

    // $pesquisaPet = "select * from Pet where ";
    
    // if ($especie != "") { $pesquisaPet = $pesquisaPet. "especie = '$especie' ";
    //     if ($estado != "") { $pesquisaPet = $pesquisaPet. "and estado = '$estado' ";
    //         if ($cidade != "") { $pesquisaPet = $pesquisaPet. "and cidade = '$cidade' ";
    //             if ($porte != "") { $pesquisaPet = $pesquisaPet. "and porte = '$porte' ";
    //             }
    //         }
    //     }
    // } elseif ($estado != "") { $pesquisaPet = $pesquisaPet. "estado = '$estado' ";
    //     if ($cidade != "") { $pesquisaPet = $pesquisaPet. "and cidade = '$cidade' ";
    //         if ($porte != "") { $pesquisaPet = $pesquisaPet. "and porte = '$porte' ";
    //         }
    //     }
    // } elseif ($cidade != "") { $pesquisaPet = $pesquisaPet. "cidade = '$cidade' ";
    //     if ($porte != "") { $pesquisaPet = $pesquisaPet. "and porte = '$porte' ";
    //     }
    // } elseif ($porte != "") { $pesquisaPet = $pesquisaPet. "porte = '$porte' ";
    // }

    $pesquisaPet = "SELECT * from pet where especie = 'cao' and estado = 'SP' and cidade = 'Sao Paulo' and porte = 'G'";
    // echo $pesquisaPet;

    $result_pesquisaPet = mysqli_query($conn, $pesquisaPet);
    $array_pesquisaPet = mysqli_fetch_array($result_pesquisaPet);
    
    header ('Location: resultadoPesquisa.php');
    
    // $sqlFotosPet="SELECT * FROM fotosPet";
    // $result_sqlFotosPet=mysqli_query($conn,$sqlFotosPet);
    // $array_sqlFotosPet=mysqli_fetch_array($result_sqlFotosPet);
   
?>