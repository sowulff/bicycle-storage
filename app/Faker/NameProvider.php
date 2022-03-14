<?php

namespace App\Faker;

use Faker\Provider\Base;

class NameProvider extends Base
{
    protected static $names = [
        'Scott Speedster 40',
        'Scott Speedster 30',
        'Scott Speedster 20',
        'Cannondale CAAD Optimo 2',
        'Cannondale CAAD Optimo 3',
        'Cannondale Topstone Carbon Lefty 3',
        'Cannondale CAAD13 Disc 105',
        'Cannondale SuperSix EVO Carbon Disc Ultegra',
        'Cannondale Synapse Carbon Ultegra Di2',
        'Basso Diamante Disc Chorus 12 MR-Lite',
        'Basso Astra Rival AXS',
        'Basso Venta Disc 105',
        'BH G8 Disc 7.0',
        'BH Quartz 1.0',
        'BH RS1 3.0 ',
        'BH Aerolight 7.0',
        'Superior X-ROAD Issue',
        'Merida Scultura Disc Force Edition',
        'Trek Émonda SL 5 Disc',
        'E-Racer Trek Domane+ ALR',
        'Sensa Romagna Comp',
        'Rondo HVRT CF 2'
    ];

    public function bikeName(): string
    {
        return static::randomElement(static::$names);
    }
}
