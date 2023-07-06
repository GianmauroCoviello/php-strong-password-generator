<?php

// incluso il file functions che contiene la funzione
include __DIR__.'/partials/functions.php'

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-primary">
   
    <div class="container mb-3">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1 class="text-light">Strong Password Generator</h1>
                <h2 class="text-light">Genera una password sicura</h2>
            </div>
            
        </div>
    </div>
        <div class="container my-2">
            <div class="row justify-content-center">
                
                <div class="col-8 bg-success py-2">
                    <h3 class="text-light">Password generata:</h3>
                    <h5>
                        <?php
                           
                            if (isset($_GET["password_lenght"])) {
                            
                                echo $response;
                            }
                        ?>
                    </h5>
                </div>
            </div>        
        </div>               
    <div class="container ">
        <div class="row justify-content-center">
            
                <div class="col-8 py-3 bg-light ">
                    <!-- form -->
                    <form action="index.php" method="GET">
                        <div class="col d-flex justify-content-between  ">
                            <p>Lunghezza password:</p>
                            <div class="col-5">
                                <input type="number" name="password_lenght" id="lenght">

                            </div>
     
                        </div>
                       
                           
                        
                    </form>
                    <!-- fine della form -->
                    
                </div>    
            </div>
            
            
        </div>
    </div>
    
</body>
</html>