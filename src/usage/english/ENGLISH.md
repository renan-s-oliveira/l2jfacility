# L2JFacility

Package laravel 8 with tools to use in your system design web L2J.


# How to use:

```
use L2JFacility\L2JFacility;
```
## Ranks
```
L2JFacility::rank('pvpkills', 50); // First parameter lists the pvps,
second parameter number of players per page
L2JFacility::rank('pvpkills'); // Default 10 per page.

Parâmetros suportado pkkills, karma, fame, level, exp, sp, onlinetime
```

## Contadores
```
L2JFacility::count('accounts'); // First table name parameter
L2JFacility::count('characters'); // First table name parameter
Parameters supported any table name in your database.

L2JFacility::online(); // Returns how many players are online.
```

## Boss estado
```
L2JFacility::grandboss(); // Returns grandboss and their names and characteristics
L2JFacility::boss(); // Returns boss and their names and characteristics
Accepts an optional page parameter the default is 10 per page
L2JFacility::boss(50); // Returns the 50 first raidboss
```

## Castle
```
L2JFacility::castle('Y/m/d - H:i:s'); // Expected parameter date format
it will return all information regarding the castles.
[More format](https://www.php.net/manual/en/function.date.php)
L2JFacility::showCastle('Aden', 'd M Y'); Expected parameter castle name
Aden, Dion, Giran, Gludio, Goddard, Innadril, Oren, Rune, Schuttgart 
and the second parameter is the date format.
Using the name of the castle will return information only from that castle.

L2JFacility::fort('d/m/Y - H:i:s'); // Expected parameter date format 
it will return all information regarding the fort.
[Mais formatos](https://www.php.net/manual/pt_BR/function.date.php)
L2JFacility::showFort('Aaru', 'd M Y'); // Expected parameter fort name
Aaru, Antharas, Archaic, Bayou, Borderland, Cloud Mountain, Demon, Dragonspine,
Floran,Hive, Hunters, Ivory, Monastic, Narsell, Shanty (...) 
and the second parameter is the date format.
Using the name of the castle will return information only from that fort. 
```

