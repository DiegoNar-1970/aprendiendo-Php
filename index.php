<!-- //Variables las operaciones basicas en PHP son: suma, resta, multiplicación y división.
//y las operaciones comvierte los tipos dependiendo de la operacion que se realice.
los saltos de linea solo funcionana con <br -->

<!-- ejemplos con constantes -->

<?php
define("NOMBRE", "Juan"); //const globales
const EDAD = 30;
?>

<!-- ejemplos variables -->

<?php
$nombre = "Juan";
var_dump($nombre); //muestra el tipo y el valor de la variable (string)
gettype($nombre); //muestra el tipo de la variable (string)
is_string($nombre); //devuelve true si es string, false si no lo es.
$age = (bool) 30; //fuerza el tipo valor a un booleano
$age2 = 10;
$output = var_export($age, true); //muestra el contenido de la variable y su tipo (bool)
$output2 = "hola $nombre";
$output2 .= "<br> komo fuekhe tu edad es de $age2 años"; //concatenar variables y string con el operador "."

$ternaria = ($age > 18) ? "mayor de edad" : "menor de edad";
$array = ["Js", 1, false, "Diego"]; //array de php
$array[] = 5; //Lo pone en la ultima posicion del array

?>
<!--sintaxis normal -->
<?php if ($age > 18) {
    echo "mayor de edad";
} else if ($age < 18) {
    echo "eres adolecente";
} else {
    echo "menor de edad";
}
?>

<!--un poco diferente -->
<?php if ($age > 18): ?>
    <div>mayor de edad</div>
<?php elseif ($age < 18): '' ?> <!-- el elseif no se puede separar -->
    <div>eres adolecente</div>
<?php else: '' ?>
    <div>menor de edad</div>
<?php endif; ?>

<?php
$outputAge = match (true) {
    EDAD >= 18 => "mayor de edad",
    EDAD < 18 => "eres adolecente",
    default => "menor de edad"
};
?>
<!--arrays asociativos -->

<?php
$persona = [
    'nombre' => 'Diego',
    'edad' => 30,
    'pais' => 'Argentina',
    "isdev" => true,
    'hobbies' => ['programar', 'jugar']
];
$persona['hobbies'][] = 'dormir'; //agregar un elemento al array
$persona['name'] = 'alfredito'; //tambien se pueden mutar
?>
<ul>
    <?php foreach ($array as $key => $item): ?>
        <?php if ($item): ?>
            <li><?= $key . ": " . $item ?></li>
        <?php else : '' ?>
            <li><?= $key . ": " . "NO APLICA" ?></li>
        <?php endif; ?>
        <!-- <li><?php print_r($item); ?></li> -->
    <?php endforeach; ?>
</ul>
<h1>

    <?= "eres " . NOMBRE . " y tienes la edad de $outputAge" ?>

</h1>