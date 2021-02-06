# l2jfacility 

Pacote laravel 8 com ferramentas para usar em seu Projeto de sistema web L2J.



Como usar:

```
use L2JFacility\Rank;


Rank::pvp(50); // Lista os pvps, parâmetro esperado quantidade de Jogadores por página 
Rank::pvp(); // Deafult 10

Rank::pk(50); // Lista os pks, parâmetro esperado quantidade de Jogadores por página
Rank::pk(); // Deafult 10

Rank::karma(50); // Lista os karma, parâmetro esperado quantidade de Jogadores por página
Rank::karma(); // Deafult 10

```
