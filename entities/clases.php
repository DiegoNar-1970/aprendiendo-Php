<?php
declare (strict_types=1);
class SuperHero
{
    //pomoted properties desde la version PHP 8.0
    public function __construct(
        readonly public string $name,
        private array $power,
        public string $planet
    ) {}
    
    public function show_all() {
        return get_object_vars($this);
    }

    public function attack(){
        return "$this->name ataca con sus poderes";
    }

    public function description(){
        //implode une los elementos de un array en una cadena con un separador
        $powers = implode(", ", $this->power);
        return "$this->name es un super heroe de origen 
        $this->planet, su principal poder es: $powers ";
    }

    public static function random(){
        $names = ['Superman', 'Batman', 'Spiderman'];
        $planets = ['Krypton', 'Earth', 'Mars'];
        $powers = ['Super Fuerza', 'Velocidad', 'Inteligencia'];
        //array_rand devuelve un elemento aleatorio de un array
        $name=$names[array_rand($names)];
        $planet=$planets[array_rand($planets)];
        $power=[$powers[array_rand($powers)], $powers[array_rand($powers)]];
        // echo "el superhero creado es: ".$name."<br> 
        // el planeta es: ".$planet."<br />";
        // echo "sus poderes son: ".implode(", ", $power)."<br />";
        //el self se refiere a la clase actual, en este caso SuperHero.
        return new self($name, $power, $planet);
        // o tambien se puede hacer asi 
        // return new SuperHero($name, $power, $planet);
    }
};

$superman = new SuperHero("superman", ["super fuerza"], "Krypton");
echo $superman->attack() . "<br>";
echo $superman->description() . "<br>";
SuperHero::random();

?>