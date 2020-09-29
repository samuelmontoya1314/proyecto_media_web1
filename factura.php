<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>amiguis</title>
  <link rel="stylesheet" href="style_index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light pl">
        <a class="navbar-brand" href="index.html"><img class="icono" src="multimedia/logo.jpeg" alt="icono"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PROMOCIONES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">tapabocas</a>
                <a class="dropdown-item" href="#">ron</a>
                <div class="dropdown-divider"></div>
              </di>
            </li>
          </ul>
          
        </div>
        <div>
          <a class="btn btn-outline-primary" href="factura.php" role="button">compra manual</a>
        </div>
      </nav>
</header>
  <main>
  <div class="container">
        
        <div class="row justify-content-center mt-5">
            <div class="col-6">

                <form action="factura.php" method="POST">
                    <h3 class="text-center mb-4">Factura de Compra</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto1" name="producto1">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto2" name="producto2">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio2">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto3" name="producto3">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio3" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto4" name="producto4">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio4" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto5" name="producto5">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio5">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="botonCalcular">Calcular a pagar </button>
                </form>

              
                
                <?php if(isset($_POST["botonCalcular"])): ?>

                
                
                    <h6 class="mt-5"> 
                        <?php
                            
                            $precio1=$_POST["precio1"];
                            $producto1=$_POST["producto1"];

                            $precio2=$_POST["precio2"];
                            $producto2=$_POST["producto2"];

                            $precio3=$_POST["precio3"];
                            $producto3=$_POST["producto3"];

                           $precio4=$_POST["precio4"];
                            $producto4=$_POST["producto4"];

                            $precio5=$_POST["precio5"];
                            $producto5=$_POST["producto5"];
                            $total=$precio1+$precio2+$precio3+$precio4+$precio5;
                            

                            echo("El producto 1 es: ".$producto1." -----($) ".$precio1);
                            echo("<br>");
                            echo("El producto 2 es: ".$producto2." -----($) ".$precio2);
                            echo("<br>");
                            echo("El producto 3 es: ".$producto3." -----($) ".$precio3);
                            echo("<br>");
                            echo("El producto 4 es: ".$producto4." -----($) ".$precio4);
                            echo("<br>");
                            echo("El producto 5 es: ".$producto5." -----($) ".$precio5);
                            echo("<br>");
                            echo("<br>");
                            echo("******************************");
                            echo("<br>");
                            echo("El total a pagar es de: ".$total."<br>");
                            echo("ahora ve al local de amiguis para reclamar tu compra");
                            
                            


                        ?>
                    </h6>
               
                
               
                

                <?php endif ?>

                

            </div>
        </div>

  </main>


<footer>
<p class="p_justificado">dueña del local: sandra milena garzon zapata</p>
<p class="p_justificado">creador de la pagina: samuel montoya garzon</p>
<p class="p_justificado"> &#169; 2020 amiguis</p>
</footer>
<script src="controlador.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>