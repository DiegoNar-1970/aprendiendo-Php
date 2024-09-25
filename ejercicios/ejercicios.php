<?php
 echo "por favor ingresa una palabra";
 
 $arrVocales=["a","e","i","o","u"];
 
 $words = trim(fgets(STDIN));
 
 $arrCantVocales=[];
 
 echo "Hola, $words!\n"; 
 
$caracteres = str_split($words);


foreach ($caracteres as $caracter) {
    if (in_array($caracter, $arrVocales)) {
        //isset es para ver si la variable esta seteada o no, en este caso para que no nos de error al intentar incrementar una variable que no existe.
        if (isset($arrCantVocales[$caracter])) {
            $arrCantVocales[$caracter]++;
        } else {
            $arrCantVocales[$caracter] = 1;
        }
    }
}


foreach ($arrCantVocales as $vocal => $cantidad) {
    echo "La vocal '$vocal' aparece $cantidad veces.\n";
}
    
?>
<?php
 echo "por favor digita el tamaño de tu contraseña";
 
$caracteresEspeciales = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', ';', ':', ',', '.', '<', '>', '/', '?'];


$vocales = ['a', 'e', 'i', 'o', 'u'];

$letras = array_merge(range('a', 'z'), range('A', 'Z'));

$arrComplete = array_merge($caracteresEspeciales,$vocales,$letras);

$password = "";



 $input = trim(fgets(STDIN));
 
 if (is_numeric($input)) {
    $numero = (int) $input; 
    echo "Has ingresado el número: $numero\n";
} else {
      echo " debes ingresar un numero \n";
      return;
}
 for ($i = 0; $i < $numero; $i++) {
    $password.=$arrComplete[array_rand($arrComplete)];
}
echo("tu password ess el triple del numero escogido para mas seguridad $password");
?>
