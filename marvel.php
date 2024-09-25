//
<?php
//primera forma de exportar funciones 
//pero esto esta mal porque si se importa dos veces el codigo de la funcion se trae dos veces 
// require 'functioss.php'; esta esta mal

require './const.php';
require_once 'functioss.php'; //1 forma 

//ahora con include la diferencia es que uno peta la app y el otro solo manda un
//warnig 

// include 'functioss.php'; esta esta mal  
//include_once 'functioss.php'; 2 forma

const API_URL = 'https://whenisthenextmcufilm.com/api';

// INICIALIZAMOS UNA NUEVA SESION DE CURL PARA HACER PETICIONES HTTP
$ch = curl_init(API_URL);
// INDICAMOS QUE QUEREMOS RECIBIR EL RESULTADO DE LA PETICION Y NO MOSTRARLA 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// EJECUTAMOS LA PETICION HTTP
$response = curl_exec($ch);

// Verifica si hubo un error en cURL
if (curl_errno($ch)) {
    echo 'Error en cURL: ' . curl_error($ch);
} else {
    $data = json_decode($response, true);
}

// CERRAMOS LA SESION DE CURL
curl_close($ch);

//esta es otra forma de hacer tambien una peticion solo sirve para gets 
// $resusult=file_get_contents(API_URL);  
//  ahora decodificamos al array asociativo de php para acceder a los datos 
// pst: un array asociativo es como un diccionario 
// $data = json_decode($response, true);
?>
<pre style="font-size: 8px;">
    <?= var_dump($data); ?>
</pre>

//esta es una forma de mergear arrays para pasar mas de un dato si es que se necesita 
<?php require './sections/style.php' ?>
<?php render_template('', array_merge(
    $data,
    ['until_message' => $until_message]
)); ?>
//esta es la forma de extraer un dato de un array asociativo 
<?php render_template(
    '',
    ["title" => $data["title"]]
); ?>