# Sistema Medical System em Laravels

## Introdu��o

Esbo�o de um sistema de exames clinicos.


## A��es disponiveis

CRUD de usu�rio com 3 niveis diferentes de acesso(Amin,paciente e profissional da sa�de)

CRUD de consultas, exames e servi�os m�dicos

## Instala��o

Em uma pasta do seu computador, digitar no cmd =  git clone https://github.com/vongrafen/medicalSystem

OBS: "Ir� fazer dowload do projeto"

DENTRO DA PASTA "medicalsystem" digitar = composer install
OBS: "Ir� criar as pastas necess�rias"

Se n�o tiver o banco de dados, Criar no mysql

Abrir o arquivo .env.example e substituir as linhas : DB_DATABASE=SUA_BASE_DE_DADOS /// DB_USERNAME=SEU_NOME_DE_USUARIO /// DB_PASSWORD=SUA_SENHA

Rodar o comando = php -r "copy('.env.example', '.env');"
Rodar o comando = php artisan key:generate
Rodar o comando = php artisan migrate --seed
Rodar o comando = php artisan serve

Para logar-se como ADMIN, acesse a url http://SEU_LOCAL_HOST/home

Login e senha padr�o: 
*login:* admin 
*senha:*admin


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
