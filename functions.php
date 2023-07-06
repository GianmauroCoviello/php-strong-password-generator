<?php


    // if ($_GET["password_lenght"] !== '') {
        function generatePasswordRandom() {

        
            $input= $_GET["password_lenght"];
            $randomCharacters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789@*?!/";
            $password= substr($randomCharacters,0,$input);
            $randomPassword = str_shuffle($password);
            if ($input>50) {
                $randomPassword = 'Password troppo lunga, deve avere una lunghezza minore di 50 caratteri';
                
            }elseif ($input<8) {
                $randomPassword = 'Password è troppo corta, deve avere una lunghezza superiore agli 8 caratteri';
                
            }
        
        
            echo $randomPassword;
        
        }
    
    

    

?>