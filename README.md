# 🇦🇴 API Províncias de Angola
A API Províncias de Angola é um serviço público que oferece acesso a dados detalhados sobre as províncias angolanas.

![Versão](https://img.shields.io/badge/Versão-v1.1.0-green) ![Versão](https://img.shields.io/badge/License-MIT-red)

Esta API foi projetada para ser simples e eficiente, permitindo consultas rápidas de informações relevantes sobre cada uma das províncias, incluindo dados como:
- Nome da província </br>
- Capital </br>
- Municípios pertencentes </br>
- Línguas faladas </br>
- Etnias </br>
- Distritos </br>
- Comunas </br>
- E outras informações.


### 📄 **Documentação Oficial**  
🔗 [https://angolaprovinciasapi.ggwp.com.br](https://angolaprovinciasapi.ggwp.com.br)

### 🔗 **Endpoint Base**
https://angolaprovinciasapi.ggwp.com.br/api/v1

#### **Exemplo de uso**

```json
// GET https://angolaprovinciasapi.ggwp.com.br/api/v1/provincias

{
    "success": true,
    "code": 200,
    "message": "Sucesso",
    "data": {
        "nome": "Uíge",
        "slug": "uige",
        "extensao": 58698,
        "data_fundacao": "31-05-1887",
        "capital": {
            "nome": "Uíge",
            "slug": "uige"
        },
        "municipios": [
            {
                "nome": "Maquela do Zombo",
                "slug": "maquela-do-zombo",
                "distritos": [],
                "comunas": [
                    {
                        "nome": "Maquela do Zombo",
                        "slug": "maquela-do-zombo"
                    },
                    //...
                ]
            },
            //...
        ],
        "etnias": [
            {
                "nome": "Ambundu",
                "slug": "ambundu"
            },
            //...
        ],
        "linguas": [
            {
                "nome": "Kikongo",
                "slug": "kikongo"
            },
            //...
        ]
    }
}

```

Para mais informações consulte a documentação oficial em:
🔗 [https://angolaprovinciasapi.ggwp.com.br](https://angolaprovinciasapi.ggwp.com.br)

## 🛠️ Configuração do Ambiente

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
