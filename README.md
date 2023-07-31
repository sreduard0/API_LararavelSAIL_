# Documentação do Laravel Sail - Executando Comandos Migrate e DB Seed

Esta documentação fornece instruções sobre como usar o Laravel Sail para executar os comandos `migrate` e `db:seed` no Laravel, que são úteis para criar e popular o banco de dados com dados iniciais.

## Pré-requisitos

Antes de começar, certifique-se de que você tenha o seguinte:

1. Docker instalado no seu sistema. O Laravel Sail utiliza o Docker para gerenciar os containers de aplicativo e banco de dados.

2. Conhecimento básico sobre o Laravel e a estrutura de comandos do Artisan.

## Passo 1: Configuração do Laravel Sail

O Laravel Sail é uma alternativa leve ao Homestead para rodar o Laravel localmente usando containers Docker. Para começar, certifique-se de ter o Laravel Sail configurado no seu projeto. Se você ainda não configurou o Laravel Sail, siga estes passos:

1. No diretório raiz do seu projeto Laravel, abra um terminal ou prompt de comando.

2. Execute o seguinte comando para instalar o Laravel Sail:

```bash
composer require laravel/sail --dev
```

3. Em seguida, execute o seguinte comando para publicar o arquivo `docker-compose.yml` e o arquivo `sail` no diretório raiz do seu projeto:

```bash
php artisan sail:install
```

## Passo 2: Executando Comando `migrate`

O comando `migrate` é usado para criar as tabelas do banco de dados a partir das migrações definidas no Laravel. As migrações são arquivos que descrevem a estrutura das tabelas e permitem que você versione o esquema do banco de dados.

Para executar o comando `migrate` usando o Laravel Sail, siga os passos abaixo:

1. Abra um terminal ou prompt de comando no diretório raiz do seu projeto Laravel.

2. Digite o seguinte comando para iniciar os containers do Laravel Sail:

```bash
./vendor/bin/sail up -d
```

3. Em seguida, execute o comando `migrate` usando o Artisan:

```bash
./vendor/bin/sail artisan migrate
```

O Laravel Sail agora irá ler as migrações definidas no diretório `database/migrations` e criará as tabelas correspondentes no banco de dados configurado.

## Passo 3: Executando Comando `db:seed`

O comando `db:seed` é usado para popular o banco de dados com dados iniciais. Esses dados podem ser usados para preencher tabelas com registros de teste ou dados padrão necessários para a execução correta do seu aplicativo.

Para executar o comando `db:seed` usando o Laravel Sail, siga os passos abaixo:

1. Abra um terminal ou prompt de comando no diretório raiz do seu projeto Laravel.

2. Execute o seguinte comando para iniciar os containers do Laravel Sail:

```bash
./vendor/bin/sail up -d
```

3. Em seguida, execute o comando `db:seed` usando o Artisan:

```bash
./vendor/bin/sail artisan db:seed
```

O Laravel Sail agora irá executar as classes de sementes (seeder classes) definidas no diretório `database/seeders`. Cada classe de semente pode conter lógica para inserir dados específicos nas tabelas do banco de dados.

## Conclusão

Agora você aprendeu como executar os comandos `migrate` e `db:seed` usando o Laravel Sail. Esses comandos permitem que você crie as tabelas do banco de dados e as preencha com dados iniciais, preparando assim o ambiente para o desenvolvimento e teste do seu aplicativo. Certifique-se de iniciar os containers do Laravel Sail antes de executar os comandos.
