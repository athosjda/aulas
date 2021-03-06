<?php
    require_once("utilidades/funcoes.php");
?>
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="UTF-8">
      <title>Lista Exercícios</title>
    </head>

    <body>


<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="exercicio1.php">um</a></li>
  <li><a href="exercicio2.php">Dois</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper teal darken-2">
    <a href="layout.php" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Exercícios de 1 a 10<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
        
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <form method="POST">
                        <div class="row">
                            <div class="col s12 center">
                                <h2>Informe o maior valor e mostra o valor do menor dobrado</h2>
                            </div>                                
                        </div> 
                        <div class="row">
                            <div class="col s3 input-field">
                                <input id="valor1" type="text" name="valor1" />
                                <label for="valor1">Valor 1</label> 
                            </div>   
                            <div class="col s3 input-field">
                                <input id="valor2" type="text" name="valor2" >
                                <label for="valor2"> Valor 2</label>
                            </div> 
                            <div class="col s3 input-field">
                                <input id="valor3" type="text" name="valor3" >
                                <label for="valor3">Valor 3</label>
                            </div>
                           
                        </div> 
                         <div class="row">
                              <div class="col s12 center">
                                <button class="btn waves-effect waves-light" type="submit" name="submit">Calcular</button>
                            </div>
                         </div>

                         <?php
                            if(isset($_POST['submit'])){
                               
                                $valor1 = $_POST['valor1'];
                                $valor2 = $_POST['valor2'];
                                $valor3 = $_POST['valor3'];
                                
                                $m = menor($valor1,$valor2,$valor3);

                                echo "O Menor elemento é ".$m."<br>";
                                echo "O Maior elemento é ".maior($valor1,$valor2,$valor3)."<br>";
                                echo "O dobro do menor elemento é ".dobro($m)."<br>";
                               
                            }
                         ?>
                    </form>
                </div>
            </div>
        </div>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <script type="text/javascript">
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown();        
        });
    </script>

    </body>
  </html>
        