<?php





    function generatePasswordRandom($lenght) {

            
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
