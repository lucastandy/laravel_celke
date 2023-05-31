## Como rodar o projeto

Requisitos:
- PHP 8;
- Composer;

Acessar o diretório do projeto no prompt de comando ou no terminal do editor.

Instalar as dependências: composer install

Criar a base de dados 'teste_laravel' no banco de dados Postgres

Alterar as credenciais no banco de dados no arquivo ".env":
DB_CONNECTION=postgres
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=teste_laravel
DB_PASSWORD=

Executar as migration: php artisan migrate

Rodar o projeto criado com laravel: php artisan serve

Acessar no navegador:
Listar: http://127.0.0.1:8000/machines
Cadastrar: http://127.0.0.1:8000/machines/create