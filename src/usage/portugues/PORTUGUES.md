# L2JFacility

Pacote laravel 8 com ferramentas para usar em seu Projeto de sistema web L2J.



# Como usar:

```
use L2JFacility\L2JFacility;
```
## Ranks
```
L2JFacility::rank('pvpkills', 50); // Primeiro parâmetro Lista os pvps,
segundo parâmetro quantidade de Jogadores por página 
L2JFacility::rank('pvpkills'); // Padrão 10 por página.

Parâmetros suportado pkkills, karma, fame, level, exp, sp, onlinetime
```

## Contadores
```
L2JFacility::count('accounts'); // Primeiro parâmetro nome da tabela
L2JFacility::count('characters'); // Primeiro parâmetro nome da tabela, 
Parâmetros suportado qualquer nome de tabela da sua database

L2JFacility::online(); // Retorna quantos jogadores estão online.


```

## Boss estado
```
L2JFacility::grandboss(); // Retorna os grandboss e seus nomes e características
L2JFacility::boss(); // Retorna os boss e seus nomes e características. 
Aceita um parâmetro opcional de páginação o padrão é 10 por página
L2JFacility::boss(50); // retorna os 50 primeiro raidboss
```