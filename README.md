# Documentação do Laravel - Execução de Comandos Migrate e DB Seed

Esta documentação fornece instruções sobre como executar os comandos `migrate` e `db:seed` no Laravel, que são úteis para criar e popular o banco de dados com dados iniciais.

## Pré-requisitos

Antes de começar, certifique-se de que você tenha o seguinte:

1. Laravel instalado no seu ambiente.
2. Configuração correta do arquivo `.env` com os detalhes do banco de dados.

## Executando o comando `migrate`

O comando `migrate` é usado para criar as tabelas do banco de dados a partir das migrações definidas no Laravel. As migrações são arquivos que descrevem a estrutura das tabelas e permitem que você versione o esquema do banco de dados.

Para executar o comando `migrate`, siga os passos abaixo:

1. Abra o terminal ou prompt de comando no diretório raiz do seu projeto Laravel.

2. Digite o seguinte comando e pressione "Enter":

```bash
php artisan migrate
```

O Laravel agora irá ler as migrações definidas no diretório `database/migrations` e criará as tabelas correspondentes no banco de dados configurado no arquivo `.env`.

## Executando o comando `db:seed`

O comando `db:seed` é usado para popular o banco de dados com dados iniciais. Esses dados podem ser usados para preencher tabelas com registros de teste ou dados padrão necessários para a execução correta do seu aplicativo.

Para executar o comando `db:seed`, siga os passos abaixo:

1. Abra o terminal ou prompt de comando no diretório raiz do seu projeto Laravel.

2. Digite o seguinte comando e pressione "Enter":

```bash
php artisan db:seed
```

O Laravel agora irá executar as classes de sementes (seeder classes) definidas no diretório `database/seeders`. Cada classe de semente pode conter lógica para inserir dados específicos nas tabelas do banco de dados.

## Conclusão

Agora você aprendeu como executar os comandos `migrate` e `db:seed` no Laravel. Isso permitirá que você crie as tabelas do banco de dados e as preencha com dados iniciais, preparando assim o ambiente para o desenvolvimento e teste do seu aplicativo. Lembre-se de verificar se o arquivo `.env` está configurado corretamente antes de executar os comandos.
