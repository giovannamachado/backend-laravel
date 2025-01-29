# Projeto back-end

Este projeto foi desenvolvido utilizando o Laravel para criação de uma API com banco de dados relacional. 

# Banco de Dados SQLite

Este projeto usa SQLite como banco de dados. Para configurar o banco de dados, siga os passos abaixo:

# Instruções para Importação do Banco de Dados

## 1. Requisitos
- **SQLite3**: Certifique-se de ter o SQLite instalado no seu sistema.
- **Laravel**: Tenha o ambiente Laravel configurado conforme as instruções de instalação do projeto.

## 2. Configurando o Banco de Dados SQLite

1. Baixe o arquivo do banco de dados:
   - Você pode baixar o arquivo `database.sqlite` diretamente do repositório ou obter o arquivo de dump SQL `database_dump.sql` caso você precise importar.

2. Coloque o arquivo `database.sqlite` no diretório `database/` do seu projeto Laravel.

3. No arquivo `.env` do seu projeto, configure a conexão com o banco de dados SQLite:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```
## Caso você tenha o arquivo de dump SQL `database_dump.sql`, basta seguir os seguintes passos para restaurá-lo:

1. Crie o arquivo de banco de dados:
    - Execute o seguinte comando no terminal para criar o arquivo de banco de dados SQLite vazio no diretório database/ do projeto:
      ```
      touch database/database.sqlite
      ```
2. Restaure o banco de dados a partir do dump SQL:

    - Use o comando sqlite3 para importar o conteúdo do arquivo de dump SQL (database_dump.sql) para o banco de dados:
       ```
      sqlite3 database/database.sqlite < database_dump.sql
      ```
### Agora, rode o migration na pasta principal do projeto:
 ```
php artisan migrate
```

   

