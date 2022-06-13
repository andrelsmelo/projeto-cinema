
# Projeto Cinema

Projeto de exemplo de uso do laravel para criação de um sistema de Cinema



## Apêndice

O sistema inclui CRUD de Salas, Filmes e Sessões.


## Variáveis de Ambiente

Para rodar esse projeto, você vai precisar criar um schema com o nome que achar melhor e adicionar as seguintes variáveis de ambiente no seu .env

`DB_DATABASE`

`DB_USERNAME`

`DB_PASSWORD`


## Rodando localmente

Clone o repositorio

```bash
  git clone https://link-para-o-projeto
```

A seguir instale as dependencias

```bash
  composer install
```

```bash
  npm install
```
```bash
  npm run dev
```

Crie a chave do artisan

```bash
  php artisan key:generate
```

Rode as migrations

```bash
  php artisan migrate
```

Rode as seeders

```bash
  php artisan db:seed
```

E por fim rode o servidor 

```bash
  php artisan serve
```
Por padrão foi inserido um usuario de admin
- login admin@admin.com
- senha "123123123"