<?php





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
   
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>Strong Password Generator</h1>
                <h2>Genera una password sicura</h2>
            </div>
            
        </div>
    </div>
    <div class="container ">
        <div class="row justify-content-center">
            
                <div class="col-6 py-3 bg-light ">
                    <!-- form -->
                    <form action="index.php" method="GET">
                        <div class="col d-flex justify-content-between  ">
                            <p>Lunghezza password</p>
                            <div class="col-5">
                                <input type="text" name="password-lenght" id="">
                            </div>
                            
                        </div>
                        <div class="col d-flex justify-content-between  ">
                            <p>Consenti ripetizioni di 1 o più caratteri</p>
                            <div class="col-5">
                                <input type="radio" name="" id="">
                                <label class="form-check-label" >
                                    Si
                                </label><br>

                                <input type="radio" name="" id="">
                                <label class="form-check-label" >
                                    No
                                </label><br>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end  ">
                           
                            <div class="col-5">
                                <input type="checkbox" name="" id="">
                                <label class="form-check-label">
                                    Numeri
                                </label><br>
                                <input type="checkbox" name="" id="">
                                <label class="form-check-label">
                                    Simboli
                                </label><br>
                                <input type="checkbox" name="" id="">
                                <label class="form-check-label">
                                    Lettere
                                </label>
                            </div>
                        </div>
                        <div class="col d-flex py-2 ">
                           
                            <div class="col-5">
                                <button class="btn btn-primary" type="submit">INVIA</button>
                                <button class="btn btn-secondary" type="submit">ANNULLA</button>
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