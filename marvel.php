<?php
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
?>
<pre style="font-size: 8px;">
    <?= var_dump($data); ?>
</pre>

<style>
    :root{
        color-scheme: dark;
    }
</style>
