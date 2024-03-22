# Guia de Execução da Aplicação

Este guia fornecerá instruções detalhadas sobre como utilizar a api de lugares.

## Pré-requisitos

Antes de iniciar, verifique se você possui os seguintes pré-requisitos instalados em sua máquina:

- Docker e Docker-Compose
- Composer
- Laravel Framework
- PostgreSQL

## Passos para Execução

Siga os passos abaixo para executar a aplicação:

### 1. Clonar o repositório

Clone o repositório da aplicação em sua máquina local:

```bash
git clone https://github.com/HenriqueMVSS/places-api.git
```

### 2. Instalar Dependências

Navegue até o diretório da aplicação e execute o seguinte comando para instalar as dependências do Composer:

```bash
composer install
```

### 3. Configuração do Ambiente

Faça uma cópia do arquivo `.env.example` e renomeie-a para `.env`. Em seguida, configure as variáveis de ambiente, como conexão com o banco de dados, URL da aplicação, etc.

### 4. Gerar a Chave de Aplicação

Execute o seguinte comando para gerar a chave de aplicação:

```bash
php artisan key:generate
```

### 5. Executar as Migrações do Banco de Dados

Execute as migrações para criar as tabelas necessárias no banco de dados:

```bash
php artisan migrate
```

### 6. Executar o Servidor

Inicie o servidor local executando o seguinte comando:

```bash
docker-compose up -d
```

Agora, a aplicação estará em execução. Você pode acessá-la em `http://localhost:8001`.

## Utilizando a Aplicação

Após a execução da aplicação, você poderá utilizar os endpoints fornecidos pelo `PlacesController` para realizar operações CRUD (Create, Read, Update, Delete).

É possível listar lugares, cadastrar, editar e excluir, porém não é permitido o cadastro de lugares com o mesmo nome, existe uma validação para evitar que isso ocorra, as rotas abaixo podem ser utilizadas através do postman, isomnia ou outro programa de sua preferencia:

Para listar todos os lugares cadastrados no banco de dados:
```
http://localhost:8001/

Lembrando que deve ser utilizado o método get.
```

Para filtrar um local especifico pelo nome:
```
http://localhost:8001/place/name

Lembrando que deve ser utilizado o método get e o nome tem que está igual como foi cadastrado.
```

Para cadastrar um novo lugar
```
http://localhost:8001/

Lembrando que deve ser utilizado o método post e seguir o padrão de json abaixo:

{
    "name": "Humaita",
    "slug": "Melhor por do sol",
    "city": "Salvador",
    "state": "Bahia"
}

```

```
http://localhost:8001/place/id

Lembrando que deve ser utilizado o método put e seguir o padrão de json abaixo:

{
    "name": "Humaita",
    "slug": "Melhor por do sol",
    "city": "Salvador",
    "state": "Bahia"
}

```

```
http://localhost:8001/place/4

Lembrando que deve ser utilizado o método delete.
```


Certifique-se de revisar a seção "Operações Disponíveis" no README para entender como usar corretamente os endpoints.

---

Este é um guia básico para executar a aplicação. Caso encontre algum problema durante a execução, verifique se os pré-requisitos foram atendidos e se as configurações estão corretas. Se necessário, consulte a documentação oficial do Laravel para obter mais informações.

Aproveite a aplicação!

--- 
