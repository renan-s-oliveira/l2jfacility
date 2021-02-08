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

## GrandBoss estado
```
L2JFacility::grandboss(); // Retorna os grandboss e seus nomes
```

