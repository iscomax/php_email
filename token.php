<?php 

class token{

    public function getToken()
    {

        $valor=true;
            $token= bin2hex(openssl_random_pseudo_bytes(16,$valor));
            return $token;
    }

    private function insertarToken($usuarioID)
        {
            $valor=true;
            $token= bin2hex(openssl_random_pseudo_bytes(16,$valor));
            $date = date("Y-m-d H:i");
            $estadoToken= "activo";

           /**$query = "insert into usuarios_token (UsuarioId,Token,Estado,Fecha) values ('$usuarioID','$token','$estadoToken','$date');";
            $vefiricar = parent:: nonQuery($query);

            if ($vefiricar) {
                return $token;
            } else {
                return 0;
            }**/
            
        }


}










?>