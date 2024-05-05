<?php



    // Only process POST reqeusts.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get the form fields and remove MORALspace.

        // NAME

        if(isset($_POST["name"])){
            $name = trim($_POST["name"]);
        }else{
            $name = "hola";
        }

        // EMAIL
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

        // IF LAST NAME SET
        if(isset($_POST["l_name"])){
            $name_2 = trim($_POST["l_name"]);
        }else{
            $name_2 = "hola";
        }

        // IF SUBJECT SET
        if(isset($_POST["subject"])){
            $subject = trim($_POST["subject"]);
        }else{
            $subject = "hola";
        }

        // IF PHONE SET
        if(isset($_POST["phone"])){
            $phone = trim($_POST["phone"]);
        }else{
            $phone = "hola";
        }

        // IF SUBJECT SET
        if(isset($_POST["subject"])){
            $subject = trim($_POST["subject"]);
        }else{
            $subject = "hola";
        }

        // IF MESSAGE SET
        if(isset($_POST["message"])){
            $message = trim($_POST["message"]);
        }else{
            $message = "hola";
        }


        // Check that data was sent to the mailer.

        if ( empty($name) OR empty($name_2) OR empty($subject) OR empty($message) OR empty($phone) OR empty($subject) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Set a 400 (bad request) response code and exit.

            http_response_code(400);

            echo "Por favor completa el formulario e inténtalo nuevamente";

            exit;

        }



        // Set the recipient email address.

        // FIXME: Update this to your desired email address.

        $recipient = "contacto@5tacocina.cl";



        // Set the email subject.

        $sender = "Contacto desde la web, de $name";



        //Email Header

        $head = " Web 5ta Cocina ";



        // Build the email content.

        $email_content = "$head\n\n\n";

        if(isset($_POST["name"])){
            $email_content .= "Nombre: $name\n";
        }

        if(isset($_POST["name"]) AND isset($_POST["l_name"])){
            $email_content .= "Nombre: {$name} {$name_2}\n";
        }

        
        $email_content .= "Email: $email\n\n";

        // IF SET SUBJECT
        if(isset($_POST["subject"])){
            $email_content .= "Asunto: $subject\n\n";
        }


        // IF SET PHONE
        if(isset($_POST["phone"])){
            $email_content .= "Teléfono: $phone\n\n";
        }

        // IF SET PHONE
        if(isset($_POST["message"])){
            $email_content .= "Mensaje:\n$message\n";
        }


        // Build the email headers.

        if(isset($_POST["name"])){
            $email_headers = "De: $name <$email>";
        }


        if(isset($_POST["name"]) AND isset($_POST["l_name"])){
            $email_headers = "De: $name $name_2 <$email>";
        }
        



        // Send the email.

        if (mail($recipient, $sender, $email_content, $email_headers)) {

            // Set a 200 (okay) response code.

            http_response_code(200);

            echo "Gracias, tu mensaje ha sido enviado. Nos pondremos en contacto lo más pronto posible";

        } else {

            // Set a 500 (internal server error) response code.

            http_response_code(500);

            echo "Oops! Algo salió mal y no pudimos enviar tu mensaje. Puedes enviarnos un correo directo a contacto@5tacocina.cl";

        }



    } else {

        // Not a POST request, set a 403 (forbidden) response code.

        http_response_code(403);

        echo "Hubo un problema con el envío, por favor intenta nuevamente";

    }



?>

