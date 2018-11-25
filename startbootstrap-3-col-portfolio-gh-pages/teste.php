<?php

    require_once('conexaoBanco.php');

        $sqlPet="SELECT * FROM Pet";
        $result_sqlPet=mysqli_query($conn, $sqlPet);
        $sqlFotosPet="SELECT * FROM fotosPet";
        $result_sqlFotosPet=mysqli_query($conn,$sqlFotosPet);
        $array_sqlFotosPet=mysqli_fetch_array($result_sqlFotosPet);
        

        {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);

          echo  "<div class='row '>";
          echo    "<div class='col-lg-4 col-sm-6 portfolio-item'>";
          echo      "<div class='card h-100'>";
          echo        "<a href='#'><img class='card-img-top' src='".$result_sqlFotosPet[1]."' alt=''></a>";
          echo            "<div class='card-body'>";
          echo              "<h4 class='card-title'>";
          echo                 "<a href='#'>Nome do cão</a>";
          echo              "</h4>";
          echo          "<p class='card-text'>Descrição do Cão</p>";
          echo          "<p class='card-text'>Cidade - SP</p>";
          echo          "<p class='card-text'>Sexo e porte</p>";
          echo        "</div>";
          echo      "</div>";
          echo    "</div>";
          echo   "</div>";

          while ($row = $result_sqlFotosPet->fetch_assoc()) {
            echo  "<div class='row '>";
            echo    "<div class='col-lg-4 col-sm-6 portfolio-item'>";
            echo      "<div class='card h-100'>";
            echo        "<a href='#'><img class='card-img-top' src='".$row["linkFotoPerfil"]."' alt=''></a>";
            echo            "<div class='card-body'>";
            echo              "<h4 class='card-title'>";
            echo                 "<a href='#'>Nome do cão</a>";
            echo              "</h4>";
            echo          "<p class='card-text'>Descrição do Cão</p>";
            echo          "<p class='card-text'>Cidade - SP</p>";
            echo          "<p class='card-text'>Sexo e porte</p>";
            echo        "</div>";
            echo      "</div>";
            echo    "</div>";
            echo   "</div>";
          }

        }


      ?>