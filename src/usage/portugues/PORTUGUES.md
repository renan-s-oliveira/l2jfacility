# l2jfacility 

Pacote laravel 8 com ferramentas para usar em seu Projeto de sistema web L2J.



Como usar:

```
use L2JFacility\L2JFacility;

L2JFacility::rank('pvpkills', 50); // Primeiro parâmetro Lista os pvps, segundo parâmetro quantidade de Jogadores por página 
L2JFacility::rank('pvpkills'); // Padrão 10 por página.

Parâmetros suportado pkkills, karma, fame, level, exp, sp, onlinetime


```
