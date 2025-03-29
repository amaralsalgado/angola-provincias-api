# 🌍 API Províncias de Angola
A API Províncias de Angola é um serviço público que oferece acesso a dados detalhados sobre as províncias angolanas.

![Versão](https://img.shields.io/badge/Versão-v1.0.0-green) ![Versão](https://img.shields.io/badge/License-MIT-red)

Esta API foi projetada para ser simples e eficiente, permitindo consultas rápidas de informações relevantes sobre cada uma das províncias, incluindo dados como:
- Nome da província </br>
- Capital </br>
- Municípios pertencentes </br>
- Línguas faladas </br>
- Etnias </br>
- Distritos </br>
- Comunas </br>


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
  "data": [
    {
      "nome": "Luanda",
      "slug": "luanda",
      "extensao": "18.826 km²",
      "data_fundacao": "25-01-1576",
      "capital": {
        "nome": "Luanda",
        "slug": "luanda"
      },
      "municipios": [
        {
          "nome": "Talatona",
          "slug": "talatona",
          "distritos": [
            {
              "nome": "Benfica",
              "slug": "benfica"
            }
            // ...
          ],
          "comunas": [
            {
              "nome": "Mussulo",
              "slug": "mussulo"
            }
            // ...
          ]
        }
      ],
      "etnias": [
        {
          "nome": "Ambundu",
          "slug": "ambundu"
        }
        // ...
      ],
      "linguas": [
        {
          "nome": "Kimbundu",
          "slug": "kimbundu"
        }
        // ...
      ]
    }
    // ...
  ]
}

```

Para mais informações consulte a documentação oficial em:
🔗 [https://angolaprovinciasapi.ggwp.com.br](https://angolaprovinciasapi.ggwp.com.br)

## 🤝 Como Contribuir

1. **Faça um Fork** do projeto no GitHub.
2. **Clone o repositório** para sua máquina local:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repo.git
   ```
3. **Entre na branch `develop` e atualize**:
   ```bash
   git checkout develop  
   git pull origin develop  
   ```
4. **Crie uma nova branch** a partir de `develop`:
   ```bash
   git checkout -b feature/nome-da-feature
   ```
5. **Faça as alterações necessárias** no código.
6. **Commit suas mudanças** com uma mensagem descritiva:
   ```bash
   git commit -m "Adiciona nova funcionalidade X"
   ```
7. **Envie para o repositório remoto**:
   ```bash
   git push origin feature/nome-da-feature
   ```
8. **Crie um Pull Request (PR) para `develop` no GitHub**.
9. Aguarde a revisão e faça ajustes, se necessário.

⚠️ **Importante:** Sempre baseie suas alterações na branch `develop`, e não em `main`. 🚀

Agradecemos sua contribuição! 🚀  

## :memo: License MIT.

💡 Vamos tornar os dados sobre o nosso país acessíveis! Dê uma ⭐ no repositório e contribua! 🚀
