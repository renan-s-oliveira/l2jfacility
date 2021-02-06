# l2jfacility 

Pacote laravel 8 com ferramentas para usar em seu Projeto de sistema web L2J.



Como usar:

```
use L2JFacility\L2JFacility;

## Ranks
L2JFacility::rank('pvpkills', 50); // Primeiro parâmetro Lista os pvps,
segundo parâmetro quantidade de Jogadores por página 
L2JFacility::rank('pvpkills'); // Padrão 10 por página.

Parâmetros suportado pkkills, karma, fame, level, exp, sp, onlinetime

## Contadores
L2JFacility::count('accounts', 'login_server'); // Primeiro parâmetro 
nome da tabela, conexão da tabela no caso de accounts fica na conexão de
login_server em  config/database.php no Laravel
L2JFacility::rank('characters'); // Primeiro parâmetro nome da tabela, 
por padrão é a conexão do game_server pode ser colocado ou não.

Parâmetros suportado qualquer nome de tabela da sua database


```
