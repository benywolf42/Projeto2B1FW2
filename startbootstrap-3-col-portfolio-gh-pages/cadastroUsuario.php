<!DOCTYPE html>
<html lang="en">

  <head>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dedo no Cão e Gataria</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Dedo no Cão e Gataria</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.html">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">


      <!-- Page Heading -->
      <h1 class="my-4">Cadastro de novo usuário
        <!-- <small>Adoção de animais</small> -->
      </h1>

      <div class="row">
        <!-- <div class="col-lg-4 col-sm-6 portfolio-item"> -->
          <div class="card h-100">
            
            <div class="card-body">

             <span>
          <?php  
            if (isset ( $_GET ['sucesso'] )) {
                  echo "<font face=Verdana color=red size=2>";
                  echo "<b>Cadastro de usuário realizado com sucesso!</b>";
                  echo "</font>";
            }
            
            ?>
        </span>
            <script>
            $(document).ready(function(){
              
              $("#Enviar").click(function(){
                
                if ($("#nome").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#nome").focus(); // foco no campo
                  } else if ($("#email").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#email").focus(); // foco no campo
                  } else if ($("#nomeUsuario").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#nomeUsuario").focus(); // foco no campo
                  } else if ($("#senha").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#senha").focus(); // foco no campo
                  } else if ($("#ddd").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#ddd").focus(); // foco no campo
                  } else if ($("#telefone").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#telefone").focus(); // foco no campo
                  } else if ($("#cep").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#cep").focus(); // foco no campo
                  } else if ($("#UF").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#UF").focus(); // foco no campo
                  } else if ($("#cidade").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#cidade").focus(); // foco no campo
                  } else if ($("#bairro").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#bairro").focus(); // foco no campo
                  } else if ($("#logradouro").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#logradouro").focus(); // foco no campo
                  } else if ($("#tipo").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#tipo").focus(); // foco no campo
                  } else if ($("#numero").val()==''){
                  $("#mensagem").html("Campo obrigatório");
                  $("#numero").focus(); // foco no campo
                  } else{
                    $("#cadastroForm").submit();
                }
              
              });
              
            });
            function fMasc(objeto,mascara) {
              obj=objeto
              masc=mascara
              setTimeout("fMascEx()",1)
            }
            function fMascEx() {
              obj.value=masc(obj.value)
            }
            function mTel(tel) {
              tel=tel.replace(/\D/g,"")
              tel=tel.replace(/^(\d)/,"($1")
              tel=tel.replace(/(.{3})(\d)/,"$1)$2")
              if(tel.length == 9) {
                tel=tel.replace(/(.{1})$/,"-$1")
              } else if (tel.length == 10) {
                tel=tel.replace(/(.{2})$/,"-$1")
              } else if (tel.length == 11) {
                tel=tel.replace(/(.{3})$/,"-$1")
              } else if (tel.length == 12) {
                tel=tel.replace(/(.{4})$/,"-$1")
              } else if (tel.length > 12) {
                tel=tel.replace(/(.{4})$/,"-$1")
              }
              return tel;
            }
            function mCNPJ(cnpj){
              cnpj=cnpj.replace(/\D/g,"")
              cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
              cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
              cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
              cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
              return cnpj
            }
            function mCPF(cpf){
              cpf=cpf.replace(/\D/g,"")
              cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
              cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
              cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
              return cpf
            }
            function mCEP(cep){
              cep=cep.replace(/\D/g,"")
              cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
              cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
              return cep
            }
            function mNum(num){
              num=num.replace(/\D/g,"")
              return num
            }
          </script>

        <form name="cadastroForm" id="cadastroForm" method="post" action="envioCadastro.php">
            Nome completo*:<br> <input type="text" id="nome" name="nome"><br>
            E-mail:* <br><input type="text" id="email" name="email"><br>
            Nome de Usuário*: <br><input type="text" id="nomeUsuario" name="nomeUsuario"><br>
            Senha:* <br><input type="password" id="senha" name="senha"><br>
            DDD + Telefone:* <br><input type="text" id="ddd" size="2" name="ddd">
                                <input type="text" id="telefone" size="9" name="telefone"><br>
            CEP*: <br><input type="text" id="cep" name="cep"><br>
            Cidade*: <br><input type="text" id="cidade" name="cidade"><br>
            UF*: <br>
            <select name="UF">
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select><br>
            Bairro*: <br><input type="text" id="bairro" name="bairro"><br>
            Tipo*: <br><select name="tipo">
              <option value="Alameda">Alameda</option>
              <option value="Avenida">Avenida</option>
              <option value="Rua">Rua</option>
              <option value="Viela">Viela</option>
              </select><br>
            Logradouro*: <br><input type="text" id="logradouro" name="logradouro"><br>
            Número*: <br><input type="text" id="numero" name="numero"><br>
            Complemento: <br><input type="text" name="complemento"><br>


          <input type="button" name="Enviar" id="Enviar" value="Enviar">
          <div id="mensagem"></div>
        </form>
            
      
      </div>
          
    </div>
        
  </div>
        
        <br><br><br>
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <!-- <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul> -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; IFSP 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
