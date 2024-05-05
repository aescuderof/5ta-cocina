<?php



    // Only process POST reqeusts.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get the form fields and remove MORALspace.

        // NAME

        if(isset($_POST["name"])){
            $name = trim($_POST["name"]);
        }else{
            $name = "hi";
        }

        // EMAIL
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

       

        




        // Check that data was sent to the mailer.

        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Set a 400 (bad request) response code and exit.

            http_response_code(400);

            echo "Creo que hay un error en tu correo, por favor intenta nuevamente";

            exit;

        }



        // Set the recipient email address.

        // FIXME: Update this to your desired email address.

        $recipient = "contacto@5tacocina.cl";



        // Set the email subject.

        $sender = "Nuevo Suscriptor: $name";



        //Email Header

        $head = " Web 5ta Cocina";



        // Build the email content.

        $email_content = "$head\n\n\n";

        if(isset($_POST["name"])){
            $email_content .= "Nombre: $name\n";
        }

        if(isset($_POST["name"]) AND isset($_POST["l_name"])){
            $email_content .= "Nombre: {$name} {$name_2}\n";
        }

        
        $email_content .= "Email: $email\n\n";

        
        // Build the email headers.

        if(isset($_POST["name"])){
            $email_headers = "De: $name <$email>";
        }


        if(isset($_POST["name"]) AND isset($_POST["l_name"])){
            $email_headers = "De: $name <$email>";
        }
        



        // Send the email.

        if (mail($recipient, $sender, $email_content, $email_headers)) {

            // Set a 200 (okay) response code.

            http_response_code(200);

            echo "Gracias, tu mensaje ha sido enviado. Nos pondremos en contacto lo más pronto posible";


        } else {

            // Set a 500 (internal server error) response code.

            http_response_code(500);

            echo "Oops! Algo salío mail y no se pudo enviar. Puedes enviarnos un correo directo a contacto@5tacocina.cl";

        }



    } else {

        // Not a POST request, set a 403 (forbidden) response code.

        http_response_code(403);

        echo "There was a problem with your submission, please try again.";

    }



?>

