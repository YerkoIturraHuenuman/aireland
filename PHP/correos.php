<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';



if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: ../paginas/contacto.php" );
}
if (isset ($_POST['enviar']))
{

    $op = $_GET['op'];
    


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'airelandpruebas@gmail.com';                     //SMTP username
        $mail->Password   = 'qtfqdsmunhcnpznz';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                            //Send using SMTP
 
        if ($op == "1")
        {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $consulta = $_POST['consulta'];
            $archivos = $_FILES['archivos'];
            $nombre_archivos = $archivos['name'];
            $ruta_archivos = $archivos['tmp_name'];
        
            //Recipients
            $mail->setFrom($correo,'COTIZACION');
            $mail->addAddress('airelandpruebas@gmail.com');               //Name is optional

            //Attachments
            
            $i = 0;
            foreach ($ruta_archivos as $rutas_archivos) {
            $mail->AddAttachment($rutas_archivos,$nombre_archivos[$i]);
            $i++;
            }
            
        
           
            

            //Content
            $mail->isHTML(true);
            $mail->Subject = "COTIZACION: $nombre, Telefono: $telefono";
            $mail->Body    = $consulta;
    
            $mail->send();
            echo 'Message has been sent';
            header("Location: ../paginas/cotizar.php");
        }

        else if ($op == "2")
        {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $consulta = $_POST['consulta'];
            //Recipients
            $mail->setFrom($correo,'CONTACTO');
            $mail->addAddress('airelandpruebas@gmail.com');               //Name is optional
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "CONTACTO: $nombre, Telefono: $telefono";
            $mail->Body    = $consulta;
    
            $mail->send();
            echo 'Message has been sent';
            header("Location: ../paginas/contacto.php");

        }
        else if ($op == "3")
        {
            echo "entra";
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $nombre_producto = $_GET['nombre_producto'];
            $id_producto = $_GET['id_producto'];
            //Recipients
            $mail->setFrom($correo,'LLAMAR!');
            $mail->addAddress('airelandpruebas@gmail.com');               //Name is optional
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "LLAMAR!: $nombre, Telefono: $telefono";
            $mail->Body    = $nombre_producto;

            
            $mail->send();
            //echo 'Message has been sent';
            include("../PHP/conexion.php");
            $query = "SELECT * FROM productos WHERE id_producto = '$id_producto'";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();
            $sku=$row['sku'];
            $color=$row['color'];
            header("Location: ../paginas/producto.php?sku=$sku&&color=$color");

        }

        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
   
  
    
    
}

?>