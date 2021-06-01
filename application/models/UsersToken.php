<?php
Class UsersToken extends CI_Model
{ 
 
    function generate_token($strength = 16) {
        $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }     
        return $random_string;
    }


//--Gunakan function dibawah ini jika ingin membuat token konstan--
    //  function generate_token( $string )
    // {
    //     $output = false;
     
    //     $encrypt_method = "AES-256-CBC";
    //     $secret_key = 'jerrysibarani';
    //     $secret_iv = 'jerrysibarani';
     
    //     // hash
    //     $key = hash('sha256', $secret_key);
         
    //     // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    //     $iv = substr(hash('sha256', $secret_iv), 0, 16);
     
    //     $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    //     $output = base64_encode($output);
     
    //     return $output;
    // }        


}
?>