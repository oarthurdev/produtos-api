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

## Métodos
Requisições para a API devem seguir os padrões:
| Método | Descrição |
|---|---|
| `GET` | Retorna informações de um ou mais registros. |
| `POST` | Utilizado para criar um novo registro. |
| `PUT` | Atualiza dados de um registro ou altera sua situação. |
| `DELETE` | Remove um registro do sistema. |


## Respostas

| Código | Descrição |
|---|---|
| `200` | Requisição executada com sucesso (success).|
| `400` | Erros de validação ou os campos informados não existem no sistema.|
| `401` | Dados de acesso inválidos.|
| `404` | Registro pesquisado não encontrado (Not found).|
| `405` | Método não implementado.|
| `410` | Registro pesquisado foi apagado do sistema e não esta mais disponível.|
| `422` | Dados informados estão fora do escopo definido para o campo.|
| `429` | Número máximo de requisições atingido. (*aguarde alguns segundos e tente novamente*)|

#### Retorna todos os produtos

```http
  GET /produto
```
#### Retorna um produto

```http
  GET /produto/${id}
```

#### Cria uma categoria

```http
  POST /category
```

+ Body

      {
        "name": "Categoria Teste",
      }

#### Retorna todas as categorias

```http
  GET /category
```
