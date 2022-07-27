<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Produtos API - Seons</h1>
    <br>
</p>


## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/oarthurdev/produtos-api
```

Entre no diretório do projeto

```bash
  cd produtos-api
```

Instale as dependências

```bash
  composer install
```

Configure o arquivo config/db.php

```bash
  return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=teste_seon',
    'username' => 'postgres',
    'password' => '78124770',
    'charset' => 'utf8',
    ]
```
Rode as migrations

```bash
  php yii migrate
```

Inicialize o servidor

```bash
  php yii serve
```


## Documentação da API

#### Retorna todos os produtos

```http
  GET /produto
```
#### Retorna um produto

```http
  GET /produto/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do produto que você quer |
