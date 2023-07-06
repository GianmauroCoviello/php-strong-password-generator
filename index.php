<?php





        function generatePasswordRandom($lenght) {

            
                // $input= $_GET["password_lenght"];
                // $randomCharacters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789@*?!/";
                // $password= substr($randomCharacters,0,$input);
                // $randomPassword = str_shuffle($password);
                // if ($input>50) {
                //     $randomPassword = 'Password troppo lunga, deve avere una lunghezza minore di 50 caratteri';
                    
                // }elseif ($input<8) {
                //     $randomPassword = 'Password è troppo corta, deve avere una lunghezza superiore agli 8 caratteri';
                    
                // }
                // echo $randomPassword;
            
            $randomCharacters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789@*?!/";
            $password= substr($randomCharacters,0,$lenght);
            $randomPassword = str_shuffle($password);

            if ($lenght>50) {

                $randomPassword = 'Password troppo lunga, deve avere una lunghezza minore di 50 caratteri';
                    
            }elseif ($lenght<8) {

                $randomPassword = 'Password è troppo corta, deve avere una lunghezza superiore agli 8 caratteri';  
            }      

            return $randomPassword;
        
        };

        if (isset($_GET["password_lenght"])) {
            # code...
            $response = generatePasswordRandom($_GET["password_lenght"]);
        }

        
    

    

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
                            // echo generatePasswordRandom($_GET["password_lenght"])
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
                        <div class="col d-flex justify-content-between  ">
                            <p>Consenti ripetizioni di 1 o più caratteri</p>
                            <div class="col-5">
                                <input type="radio" name="Si" id="">
                                <label class="form-check-label" >
                                    Si
                                </label><br>

                                <input type="radio" name="No" id="">
                                <label class="form-check-label" >
                                    No
                                </label><br>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end  ">
                           
                            <div class="col-5">
                                <input type="checkbox" name="numeri" id="">
                                <label class="form-check-label">
                                    Numeri
                                </label><br>
                                <input type="checkbox" name="simboli" id="">
                                <label class="form-check-label">
                                    Simboli
                                </label><br>
                                <input type="checkbox" name="lettere" id="">
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