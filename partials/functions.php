<?php




    // inseriamo la function chw genererà la password random
    function generatePasswordRandom($lenght) {
        
        // variabili che conterra una serie di caratteri: numeri,lettere e simboli   
        $randomCharacters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ";

        $randomNumbers= "0123456789";

        $randomSymbols= "@*?!/";

        // variabile che concatenerà le variabili con i diversi tipi di caratteri
        $randomString= $randomNumbers.$randomCharacters.$randomSymbols;
        // variabile che tramite la proprietà substr permette di inserire la lughezza della password da generare in base al numero inserito nell'input
        $password= substr($randomString,0,$lenght);

        // variabile che conterra la password combinando in maniera randomica la stringa di  caratteri tramite str_shuffle
        $randomPassword = str_shuffle($password);

        // condizioni per mettere dei limiti alla lunghezza inserita nell'input
        if ($lenght>50) {

            $randomPassword = 'Password troppo lunga, deve avere una lunghezza minore di 50 caratteri';
                    
        }elseif ($lenght<8) {

            $randomPassword = 'Password è troppo corta, deve avere una lunghezza superiore agli 8 caratteri';  
        }
        return $randomPassword;
        
    

    }
    
    if (isset($_GET["password_lenght"])) {
        # code...
        $response = generatePasswordRandom($_GET["password_lenght"]);
    }

    

    

?>
