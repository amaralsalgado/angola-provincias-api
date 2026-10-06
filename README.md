# 🇦🇴 API Províncias de Angola
A API Províncias de Angola é um serviço público que oferece acesso a dados detalhados sobre as províncias angolanas.

![Versão](https://img.shields.io/badge/Versão-v2.0.0-green) ![Versão](https://img.shields.io/badge/License-MIT-red)

Esta API foi projetada para ser simples e eficiente, permitindo consultas rápidas de informações relevantes sobre cada uma das províncias, incluindo dados como:
- Nome da província </br>
- Capital </br>
- Municípios pertencentes </br>
- Línguas faladas </br>
- Etnias </br>
- Distritos </br>
- Comunas </br>
- E outras informações.

Os dados também podem ser consultados por assistentes de IA através de um [servidor MCP](#-servidor-mcp).


### 📄 **Documentação Oficial**  
🔗 [https://angolaprovinciasapi.ao](https://angolaprovinciasapi.ao)

### 🔗 **Endpoint Base**
https://angolaprovinciasapi.ao/api/v2

> [!WARNING]
> Estes exemplos usam a **v2**, a versão recomendada, com caminhos e campos em inglês. A **v1**, com caminhos e campos em português, continua disponível em `/api/v1`. Consulte o [guia de migração](https://angolaprovinciasapi.ao/docs/2.x/guia-de-migracao) para ver o que muda entre as duas.

#### **Exemplo de uso**

```json
// GET https://angolaprovinciasapi.ao/api/v2/provinces/uige

{
    "success": true,
    "code": 200,
    "message": "Sucesso",
    "data": {
        "name": "Uíge",
        "slug": "uige",
        "area": 58698,
        "founded_at": "1887-05-31",
        "capital": {
            "name": "Uíge",
            "slug": "uige"
        },
        "municipalities": [
            {
                "name": "Maquela do Zombo",
                "slug": "maquela-do-zombo",
                "districts": [],
                "communes": [
                    {
                        "name": "Maquela do Zombo",
                        "slug": "maquela-do-zombo"
                    },
                    //...
                ]
            },
            //...
        ],
        "ethnic_groups": [
            {
                "name": "Ambundu",
                "slug": "ambundu"
            },
            //...
        ],
        "languages": [
            {
                "name": "Kikongo",
                "slug": "kikongo"
            },
            //...
        ]
    }
}

```

Nomes e slugs continuam em português (Uíge, uige).

**Idioma das mensagens:** a v2 responde em português por padrão e em inglês quando a requisição envia o cabeçalho `Accept-Language: en`.


## 🤖 Servidor MCP

Assistentes de IA, como o Claude, podem consultar os mesmos dados através de um servidor [MCP](https://modelcontextprotocol.io) somente leitura, sem autenticação:

```
https://angolaprovinciasapi.ao/mcp/angola-provinces
```

No Claude Code, adicione o servidor com:

```bash
claude mcp add --transport http angola-provinces https://angolaprovinciasapi.ao/mcp/angola-provinces
```

Para mais informações consulte a documentação oficial em:
🔗 [https://angolaprovinciasapi.ao](https://angolaprovinciasapi.ao)

## 🛠️ Configuração do Ambiente

### 🐳 **Com Docker**

O ambiente em `docker/` sobe a aplicação (PHP-FPM e Node, para o Vite), o MariaDB, o phpMyAdmin e o Nginx.

1. **Faça um Fork** do projeto no GitHub e **clone o repositório**:

    ```bash
    git clone https://github.com/seu-usuario/nome-do-repo.git
    cd angola-provincias-api
    ```

2. **Crie o arquivo de ambiente** e ajuste estas variáveis para o Docker:

    ```bash
    cp .env.example .env
    ```

    ```env
    APP_URL=http://localhost:8000
    API_BASE_URL=http://localhost:8000/api/v1
    API_BASE_URL_V2=http://localhost:8000/api/v2
    DB_HOST=db
    ```

3. **Suba os containers**:

    ```bash
    cd docker
    docker compose up -d --build
    ```

4. **Instale as dependências, gere a chave e rode as migrations com os seeders** (os comandos abaixo também são executados na pasta `docker`):

    ```bash
    docker compose exec app composer install
    docker compose exec app npm install
    docker compose exec app php artisan key:generate
    docker compose exec app php artisan migrate --seed
    ```

5. **Inicie o Vite**, em outro terminal, para compilar o CSS e o JS da documentação:

    ```bash
    docker compose exec app npm run dev
    ```

6. **Acesse**:

    | Serviço | Endereço |
    |---|---|
    | Documentação | http://localhost:8000 |
    | API v2 | http://localhost:8000/api/v2 |
    | API v1 | http://localhost:8000/api/v1 |
    | Servidor MCP | http://localhost:8000/mcp/angola-provinces |
    | phpMyAdmin | http://localhost:8080 |
    | Banco de dados (a partir da sua máquina) | `localhost:3006` |

Para executar os testes dentro do container:

```bash
docker compose exec app php artisan test
```

> [!NOTE]
> O container roda com o UID e o GID `1000`, para que os arquivos que ele cria (como `vendor/` e `node_modules/`) pertençam ao seu usuário. Se o seu usuário tiver outro UID (confira com `id -u`), ajuste `user` no `docker/docker-compose.yml` e o `usermod`/`groupmod` no `docker/Dockerfile`.

### 💻 **Sem Docker**

1. **Faça um Fork** do projeto no GitHub.
2. **Clone o repositório** para sua máquina local:

    ```bash
    git clone https://github.com/seu-usuario/nome-do-repo.git
    cd angola-provincias-api
    ```

3. **Instale as dependências**

    ```bash
    npm install
    # ou
    yarn install
    ```

4. **Configure as variáveis de ambiente**

    ```bash
    composer update
    cp .env.example .env
    php artisan key:generate
    ```

5. **Execute as migrations juntamente com os seeders**

    ```bash
    php artisan migrate --seed
    ```

6. **Inicie os servidores de desenvolvimento**
  ```bash
   php artisan serve
   # e em seguida:
   npm run dev
  ```

## 🧪 Testes

Para executar os testes do projeto, utilize os seguintes comandos:

```bash
php artisan test
# ou
php artisan test --filter=NomeDoTeste
```

## 🤝 Como Contribuir

1. **Entre na branch `develop` e atualize**:
   ```bash
   git checkout develop  
   git pull origin develop  
   ```
2. **Crie uma nova branch** a partir de `develop`:
   ```bash
   git checkout -b feature/nome-da-feature
   ```
3. **Faça as alterações necessárias** no código.
4. **Commit suas mudanças** com uma mensagem descritiva:
   ```bash
   git commit -m "Adiciona nova funcionalidade X"
   ```
5. **Envie para o repositório remoto**:
   ```bash
   git push origin feature/nome-da-feature
   ```
6. **Crie um Pull Request (PR) para `develop` no GitHub**.
7. Aguarde a revisão e faça ajustes, se necessário.

⚠️ **Importante:** Sempre baseie suas alterações na branch `develop`, e não em `main`. 🚀

Agradecemos sua contribuição! 🚀  

## :memo: License MIT.

💡 Vamos tornar os dados sobre o nosso país acessíveis! Dê uma ⭐ no repositório e contribua! 🚀
