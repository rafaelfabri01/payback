<?php
   //Begin Really Simple SSL Load balancing fix
   if (
       (isset($_ENV["HTTPS"]) && "on" == $_ENV["HTTPS"]) ||
       (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false) ||
       (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false) ||
       (isset($_SERVER["HTTP_CF_VISITOR"]) && strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false) ||
       (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false) ||
       (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false) ||
       (isset($_SERVER["HTTP_X_PROTO"]) && strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false)
   ) {
       $_SERVER["HTTPS"] = "on";
   } ?>
<?php
   session_start();
   if (!isset($_SESSION['ID_Users'])) {
       header("location: index.php");
       exit();
   }
   ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>Título da página</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="estilo.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
         a {
         color:white;
         }
      </style>

   </head>
   <body style="background-image:url('img/bg-5.png');background-size:cover">
      <h2 style="float:left;padding:20px">
         <?php if (isset($_SESSION['Email'])) {
            echo "<a href='logout.php'>Log out</a>";
            } else {
            echo "<a href='index.php'>Sair</a>";
            } ?>
      </h2>
      <div>
         <div class="container" style="text-align:center;margin-top:20%">
<!-- Contratos -->
            <button type="button" class="btn-ap" data-toggle="modal" data-target="#myModal">Contratos</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Contratos</h4>
                     </div>
                     <div class="modal-body">
                        <p>Contrato 
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Moeda FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Moeda"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?>
                        
                        
                        
                        
                        
                        
                        
                        
                  




                  <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT DataInicio FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["DataInicio"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?>
                  

                  
                  
                  </p>
                        <!--Botão Ver Mais-->
                        <button type="button" class="more" data-toggle="modal" data-target="#myModal10">Ver mais</button>
                        <!-- Modal -->





                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>














            <button type="button" class="btn-ap" data-toggle="modal" data-target="#myModal2">Transações</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal2" role="dialog">
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Transações</h4>
                     </div>
                     <div class="modal-body">
                        <p>Transações</p>



                        <table style="width:100%">
  <tr>
    <th>Nome</th>
    <th>Moeda</th> 
    <th>Data Inicial</th>
    <th>Valor</th>
  </tr>
  <tr>
    <td><?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT NomeCompleto FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["NomeCompleto"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></td>
    <td><?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Moeda FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Moeda"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></td>
    <td><?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT DataInicio FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["DataInicio"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></td>
    <td>R$ <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT ValorInicial FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["ValorInicial"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?>,00</td>
  </tr>
  
    
  
  
  
  
  
</table>






                        <!--Botão Ver Mais-->
                        <!--<button type="button" class="more" data-toggle="modal" data-target="#myModal2">Ver mais</button>-->
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                           <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                 </div>
                                 <div class="modal-body">
                                    <p>Some text in the modal.</p>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                        <br> 





                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>

















         </div>
         <!-- Modal 2 -->
         <div class="modal fade" id="myModal10" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Contrato 
                     
                     
                     

                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Moeda FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Moeda"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?>

                     
                     
                     
                     
                  
                  
                  
                  
                  <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT DataInicio FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["DataInicio"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?>
                  
                  
                  
                  </h4>
                  </div>
                  <div class="modal-body">
                     <p>
                        <b>CONTRATO DE COMPRA DE CRIPTOMOEDA</b>
                     <p>Usuário:<span style="text-transform:uppercase;font-weight:bold">
                       
                     
                     
                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT NomeCompleto FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["NomeCompleto"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     com o e-mail:<span style="text-transform:uppercase;font-weight:bold">
                     
                     
                     
                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Email FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Email"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     , portador da cédula de identidade RG:<span style="text-transform:uppercase;font-weight:bold">
                     
                     


                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT RG FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["RG"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        e CPF:<span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT CPF FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["CPF"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                        
                        
                        
                        , residente no endereço: <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Endereco FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Endereco"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        
                        , confirma a compra da criptomoeda:

                        <span style="text-transform:uppercase;font-weight:bold">

                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Moeda FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Moeda"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                        
                        
                        
                        com o valor de: 


                        <span style="text-transform:uppercase;font-weight:bold">R$
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT ValorInicial FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["ValorInicial"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?>,00</span>




                        <br>
                        <br>
                        TELEFONE (1): <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone1 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone1"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        <br>
                        TELEFONE (2):<span style="text-transform:uppercase;font-weight:bold"> 
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone2 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone2"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>



                        <br>
                        <br>
                        SEXO: <span style="text-transform:uppercase;font-weight:bold">
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Sexo FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Sexo"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        <br>
                        <br>
                        NASCIMENTO: <span style="text-transform:uppercase;font-weight:bold">
                        

                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Nascimento FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Nascimento"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>


                        <br>
                        <br>
                        ASSINATURA
                        <br>
                        __________________________________________
                     </p>
                     </p>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal 3 -->
         <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Contrato Ethereum 15/11/2020</h4>
                  </div>
                  <div class="modal-body">
                     <p>
                        <b>CONTRATO DE COMPRA DE CRIPTOMOEDA</b>
                     <p>Usuário:<span style="text-transform:uppercase;font-weight:bold">
                       
                     
                     
                     <?php
                   $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT NomeCompleto FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["NomeCompleto"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     com o e-mail:<span style="text-transform:uppercase;font-weight:bold">
                     
                     
                     
                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Email FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Email"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     , portador da cédula de identidade RG:<span style="text-transform:uppercase;font-weight:bold">
                     
                     


                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT RG FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["RG"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        e CPF:<span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT CPF FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["CPF"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                        
                        
                        
                        , residente no endereço: <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Endereco FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Endereco"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        
                        , confirma a compra da criptomoeda:
                        
                        

                        <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Moeda FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Moeda"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                        
                        
                        
                        com o valor de: 


                        <span style="text-transform:uppercase;font-weight:bold">R$
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT ValorInicial FROM transacao WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["ValorInicial"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?>,00</span>



                        <br>
                        <br>
                        TELEFONE (1): <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone1 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone1"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        <br>
                        TELEFONE (2):<span style="text-transform:uppercase;font-weight:bold"> 
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone2 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone2"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>



                        <br>
                        <br>
                        SEXO: <span style="text-transform:uppercase;font-weight:bold">
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Sexo FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Sexo"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        <br>
                        <br>
                        NASCIMENTO: <span style="text-transform:uppercase;font-weight:bold">
                        

                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Nascimento FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Nascimento"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>


                        <br>
                        <br>
                        ASSINATURA
                        <br>
                        __________________________________________
                     </p>
                     </p>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
          <!-- Modal 4 -->
         <div class="modal fade" id="myModal4" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Contrato XRP 15/11/2020</h4>
                  </div>
                  <div class="modal-body">
                     <p>
                        <b>CONTRATO DE COMPRA DE CRIPTOMOEDA</b>
                     <p>Usuário:<span style="text-transform:uppercase;font-weight:bold">
                       
                     
                     
                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT NomeCompleto FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["NomeCompleto"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     com o e-mail:<span style="text-transform:uppercase;font-weight:bold">
                     
                     
                     
                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Email FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Email"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     , portador da cédula de identidade RG:<span style="text-transform:uppercase;font-weight:bold">
                     
                     


                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT RG FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["RG"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        e CPF:<span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT CPF FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["CPF"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                        
                        
                        
                        , residente no endereço: <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Endereco FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Endereco"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        
                        , confirma a compra da criptomoeda:__________ com o valor de:__________
                        <br>
                        <br>
                        TELEFONE (1): <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone1 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone1"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        <br>
                        TELEFONE (2):<span style="text-transform:uppercase;font-weight:bold"> 
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone2 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone2"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>



                        <br>
                        <br>
                        SEXO: <span style="text-transform:uppercase;font-weight:bold">
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Sexo FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Sexo"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        <br>
                        <br>
                        NASCIMENTO: <span style="text-transform:uppercase;font-weight:bold">
                        

                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Nascimento FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Nascimento"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>


                        <br>
                        <br>
                        ASSINATURA
                        <br>
                        __________________________________________
                     </p>
                     </p>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
          <!-- Modal 5 -->
         <div class="modal fade" id="myModal5" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Contrato Litecoin 15/11/2020</h4>
                  </div>
                  <div class="modal-body">
                     <p>
                        <b>CONTRATO DE COMPRA DE CRIPTOMOEDA</b>
                     <p>Usuário:<span style="text-transform:uppercase;font-weight:bold">
                       
                     
                     
                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT NomeCompleto FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["NomeCompleto"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     com o e-mail:<span style="text-transform:uppercase;font-weight:bold">
                     
                     
                     
                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Email FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Email"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     , portador da cédula de identidade RG:<span style="text-transform:uppercase;font-weight:bold">
                     
                     


                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT RG FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["RG"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        e CPF:<span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT CPF FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["CPF"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                        
                        
                        
                        , residente no endereço: <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Endereco FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Endereco"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        
                        , confirma a compra da criptomoeda:__________ com o valor de:__________
                        <br>
                        <br>
                        TELEFONE (1): <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone1 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone1"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        <br>
                        TELEFONE (2):<span style="text-transform:uppercase;font-weight:bold"> 
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone2 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone2"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>



                        <br>
                        <br>
                        SEXO: <span style="text-transform:uppercase;font-weight:bold">
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Sexo FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Sexo"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        <br>
                        <br>
                        NASCIMENTO: <span style="text-transform:uppercase;font-weight:bold">
                        

                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Nascimento FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Nascimento"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>


                        <br>
                        <br>
                        ASSINATURA
                        <br>
                        __________________________________________
                     </p>
                     </p>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
          <!-- Modal 6 -->
         <div class="modal fade" id="myModal6" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Contrato Binance Coin 15/11/2020</h4>
                  </div>
                  <div class="modal-body">
                     <p>
                        <b>CONTRATO DE COMPRA DE CRIPTOMOEDA</b>
                     <p>Usuário:<span style="text-transform:uppercase;font-weight:bold">
                       
                     
                     
                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT NomeCompleto FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'" ;
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["NomeCompleto"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     com o e-mail:<span style="text-transform:uppercase;font-weight:bold">
                     
                     
                     
                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Email FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Email"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                     
                     
                     
                     
                     
                     , portador da cédula de identidade RG:<span style="text-transform:uppercase;font-weight:bold">
                     
                     


                     <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT RG FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["RG"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        e CPF:<span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT CPF FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["CPF"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>
                        
                        
                        
                        , residente no endereço: <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Endereco FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Endereco"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        
                        , confirma a compra da criptomoeda:__________ com o valor de:__________
                        <br>
                        <br>
                        TELEFONE (1): <span style="text-transform:uppercase;font-weight:bold">
                        
                        
                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone1 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone1"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>

                        
                        <br>
                        TELEFONE (2):<span style="text-transform:uppercase;font-weight:bold"> 
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Telefone2 FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Telefone2"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>



                        <br>
                        <br>
                        SEXO: <span style="text-transform:uppercase;font-weight:bold">
                        


                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Sexo FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Sexo"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>




                        <br>
                        <br>
                        NASCIMENTO: <span style="text-transform:uppercase;font-weight:bold">
                        

                        <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "db-payback";
                  
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  $sql = "SELECT Nascimento FROM users WHERE ID_Users ='". $_SESSION['ID_Users']."'";
                  $result = mysqli_query($conn, $sql);
                  
                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "" . $row["Nascimento"]."";
                      }
                  } else {
                      echo "0 results";
                  }
                  
                  mysqli_close($conn);
                  ?></span>


                        <br>
                        <br>
                        ASSINATURA
                        <br>
                        __________________________________________
                     </p>
                     </p>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>