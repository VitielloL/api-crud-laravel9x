# 👥 API CRUD de Pessoas - Laravel 9

Uma API RESTful moderna e robusta desenvolvida com **Laravel 9** para gerenciamento completo de cadastro de pessoas com validação inteligente de CPF e CEP brasileiro.

## 🚀 Funcionalidades Principais

- ✅ **CRUD Completo** - Criar, ler, atualizar e deletar pessoas
- 🔐 **Autenticação Segura** - Integrada com Laravel Sanctum
- ✔️ **Validação de CPF** - Validação de formato e dígito verificador
- 📍 **Validação de CEP** - Integração com API ViaCEP (https://viacep.com.br)
- 🏗️ **Arquitetura Limpa** - Implementação de Repository Pattern e Service Layer
- 📝 **Testes Automatizados** - Cobertura com PHPUnit
- 🔄 **API Versionada** - Endpoints organizados por versão (v1)
- 📖 **Documentação Clara** - Exemplos de requisição e resposta

## 📋 Pré-requisitos

- **PHP** >= 8.0.2
- **Composer** (Gerenciador de dependências PHP)
- **Node.js** >= 16.x (para assets front-end)
- **Banco de Dados** - MySQL 8+ ou PostgreSQL 12+

## 🛠️ Como Instalar

### 1️⃣ Clone o repositório

```bash
git clone https://github.com/seu-usuario/api-crud-laravel9x.git
cd api-crud-laravel9x
```

### 2️⃣ Instale as dependências

```bash
composer install
npm install
```

### 3️⃣ Configure o ambiente

```bash
cp .env.example .env
php artisan key:generate
```

Edite o `.env` com suas credenciais de banco de dados:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_crud_pessoas
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Execute as migrações

```bash
php artisan migrate
```

### 5️⃣ (Opcional) Popule com dados de teste

```bash
php artisan db:seed
```

### 6️⃣ Inicie o servidor

```bash
php artisan serve
```

A API estará disponível em: `http://localhost:8000`

## 📚 Documentação dos Endpoints

Todos os endpoints seguem o padrão REST e usam o prefixo `/api/v1`

### 📌 Listar Todas as Pessoas

```http
GET /api/v1/people
```

**Resposta (200):**
```json
[
  {
    "id": 1,
    "name": "João Silva",
    "email": "joao@example.com",
    "cpf": "123.456.789-00",
    "phone": "(11) 98765-4321",
    "cep": "01310-100",
    "address": "Avenida Paulista",
    "number": "1000",
    "complement": "Apt 101",
    "city": "São Paulo",
    "state": "SP",
    "created_at": "2024-01-15T10:30:00Z",
    "updated_at": "2024-01-15T10:30:00Z"
  }
]
```

### 📌 Obter Pessoa por ID

```http
GET /api/v1/people/{id}
```

**Resposta (200):**
```json
{
  "id": 1,
  "name": "João Silva",
  "email": "joao@example.com",
  "cpf": "123.456.789-00",
  "phone": "(11) 98765-4321",
  "cep": "01310-100",
  "address": "Avenida Paulista",
  "number": "1000",
  "complement": "Apt 101",
  "city": "São Paulo",
  "state": "SP",
  "created_at": "2024-01-15T10:30:00Z",
  "updated_at": "2024-01-15T10:30:00Z"
}
```

### 📌 Criar Nova Pessoa

```http
POST /api/v1/people
Content-Type: application/json
```

**Body:**
```json
{
  "name": "Maria Santos",
  "email": "maria@example.com",
  "cpf": "987.654.321-00",
  "phone": "(11) 99876-5432",
  "cep": "01310-100",
  "address": "Rua Augusta",
  "number": "500",
  "complement": "Sala 200",
  "city": "São Paulo",
  "state": "SP"
}
```

**Resposta (201):**
```json
{
  "id": 2,
  "name": "Maria Santos",
  "email": "maria@example.com",
  "cpf": "987.654.321-00",
  "phone": "(11) 99876-5432",
  "cep": "01310-100",
  "address": "Rua Augusta",
  "number": "500",
  "complement": "Sala 200",
  "city": "São Paulo",
  "state": "SP",
  "created_at": "2024-01-15T11:00:00Z",
  "updated_at": "2024-01-15T11:00:00Z"
}
```

### 📌 Atualizar Pessoa

```http
PUT /api/v1/people/{id}
Content-Type: application/json
```

**Body:**
```json
{
  "name": "Maria Santos Silva",
  "email": "maria.silva@example.com",
  "phone": "(11) 99999-9999"
}
```

**Resposta (200):** Retorna os dados atualizados

### 📌 Deletar Pessoa

```http
DELETE /api/v1/people/{id}
```

**Resposta (204):** Sem conteúdo

## ✅ Regras de Validação

### CPF
- ✓ Formato válido (XXX.XXX.XXX-XX)
- ✓ Dígito verificador válido
- ✓ CPF único no banco de dados

### CEP
- ✓ Formato válido (XXXXX-XXX)
- ✓ Validação com ViaCEP
- ✓ Carregamento automático de cidade e estado

### Email
- ✓ Formato válido de email
- ✓ Email único no banco de dados

## 🏗️ Estrutura do Projeto

```
app/
├── Base/                      # Componentes base da aplicação
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Kernel.php
│   │   └── Middleware/
│   ├── Models/
│   ├── Providers/
│   ├── Repositories/
│   └── Services/
│       ├── ValidateCepService.php
│       └── ValidateCpfService.php
└── People/                    # Módulo de Pessoas
    ├── Http/
    │   ├── Controllers/
    │   │   └── PeopleAPIController.php
    │   └── Requests/
    ├── Models/
    ├── Repositories/
    └── Providers/
```

## 🧪 Executar Testes

```bash
php artisan test
```

Com cobertura de código:

```bash
php artisan test --coverage
```

## 🛠️ Tecnologias Utilizadas

| Tecnologia | Versão | Descrição |
|-----------|--------|-----------|
| **PHP** | 8.0.2+ | Linguagem de programação |
| **Laravel** | 9.x | Framework web |
| **Laravel Sanctum** | 3.0+ | Autenticação de API |
| **MySQL/PostgreSQL** | 8+/12+ | Banco de dados |
| **PHPUnit** | 9.5+ | Framework de testes |
| **Node.js** | 16+ | Runtime JavaScript |

## 📊 Códigos de Status HTTP

| Código | Descrição |
|--------|-----------|
| `200` | OK - Requisição bem-sucedida |
| `201` | Created - Recurso criado com sucesso |
| `204` | No Content - Deletado com sucesso |
| `400` | Bad Request - Requisição inválida |
| `404` | Not Found - Recurso não encontrado |
| `422` | Unprocessable Entity - Validação falhou |
| `500` | Internal Server Error - Erro no servidor |

## 📝 Variáveis de Ambiente Importantes

```env
APP_NAME=API CRUD Pessoas
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_crud_pessoas
DB_USERNAME=root
DB_PASSWORD=

SANCTUM_STATEFUL_DOMAINS=localhost
```

## 🔐 Segurança

- ✅ Validação de entrada em todos os endpoints
- ✅ CSRF protection habilitado
- ✅ Middleware de autenticação com Sanctum
- ✅ Validação de CPF para evitar duplicatas
- ✅ Proteção contra SQL Injection

## 📄 Licença

MIT License - veja [LICENSE](LICENSE) para detalhes

## 🤝 Contribuição

Contribuições são bem-vindas! Para contribuir:

1. Faça um Fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📞 Suporte

Encontrou um bug ou tem uma sugestão? Abra uma [Issue](https://github.com/seu-usuario/api-crud-laravel9x/issues)

---

**Desenvolvido com ❤️ usando Laravel 9**
