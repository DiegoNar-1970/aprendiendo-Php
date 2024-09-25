<?php
//esto de debe poner para evitar que php infiera los tipos 
declare(strict_types=1);
$title = 'MCU';
function get_data(string $url): array
{
    //en php no se puede accder a las variables que estan afuera del scope de una funcion, asi que por eso se debe usar la palabra global, o tambien se puede pasar por parametro 
    global $title;
    echo $title;
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    return $data;
}

function get_until_message(int $days): string{
    return match (true) {
        $days < 0   => 'La pelicula ya salio',
        $days == 0  => 'La pelicula esta hoy',
        default     => "Quedan {$days} dias para la siguiente pelicula",
    };
}

function render_template(string $template, array $data = []){
    //con el extract obtenemos las variables que contenga el array asociativo y podremos usarlas en el template
    extract($data);
    require "templates/{$template}.php";
}

$data = get_data(API_URL);
