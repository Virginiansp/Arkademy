<?php 

// syarat validasi username 
// diawali huruf kecil , min5 max9

 function validasiusername($username) {
    return preg_match('/^[A-Z]{1}[a-zA-Z0-9\_]{4,11}$/i',$username) ;
     }
     // Cara menggunakan fungsi validasi username
     if (validasiusername("cat women")) {
         echo "Username Is Valid= TRUE" ;
     } else {
         echo "Username Is Invalid = FALSE" ;
     }
 function validasipassword($password){
 	return preg_match('/^[A-Z0-9#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]{1}[A-Z0-9]{5}[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]{1}$/i',$password);     
 }
// syarat validasi password
 // min 8 karakter 
echo "\n <br>";
     //  cara menggunakan fungsi validasi password
      if (validasipassword("C4pungM#3r4h!’)")) {
         echo "password Is Valid = TRUE" ;
     } else {
         echo "password Is Invalid = FALSE" ;
     }
