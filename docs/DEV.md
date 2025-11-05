# Guia de Desenvolvimento

Este documento fornece instruções detalhadas para configurar o ambiente de desenvolvimento do James.

## Pré-requisitos

Certifique-se de ter as seguintes ferramentas instaladas:

- PHP >= 8.2
- Composer
- Node.js & NPM

## Passo a Passo para Configuração

1. **Clone o repositório**:

   ```bash
   git clone https://github.com/ArthurWillers/James.git
   cd James
   ```

2. **Instale as dependências do PHP**:

   ```bash
   composer install
   ```

3. **Instale as dependências do Node.js**:

   ```bash
   npm install
   ```

4. **Configure o arquivo de ambiente**:

   Copie o arquivo de exemplo `.env.example` para `.env`:

   ```bash
   cp .env.example .env
   ```

   Atualize as variáveis de ambiente conforme necessário:

   - **Configurações gerais da aplicação**:
     ```env
     APP_NAME=James
     APP_ENV=local
     APP_DEBUG=true
     APP_URL=http://localhost:8000
     APP_LOCALE=pt_BR
     APP_TIMEZONE=America/Sao_Paulo
     ```

5. **Gere a chave da aplicação**:

   ```bash
   php artisan key:generate
   ```

6. **Configure o Banco de Dados para Desenvolvimento**:

   No arquivo `.env`, configure para usar SQLite:

   ```env
   DB_CONNECTION=sqlite
   DB_DATABASE=database/database.sqlite
   ```

   > **Nota**: O Laravel criará automaticamente o arquivo `database/database.sqlite` quando executar as migrations.

7. **Execute as Migrations**:

   ```bash
   php artisan migrate --seed
   ```

   > **Nota**: o `--seed` cria um usuário com email `test@example.com` com senha `password`

8. **Configure o Envio de E-mails para Desenvolvimento**:

   Configure um servidor SMTP no arquivo `.env`. Para desenvolvimento, Mailtrap.io é recomendado:

   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=sandbox.smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=seu_usuario_mailtrap
   MAIL_PASSWORD=sua_senha_mailtrap
   MAIL_FROM_ADDRESS="email@exemplo.com"
   MAIL_FROM_NAME="${APP_NAME}"
   ```
   Alternativamente, você pode usar o driver `log` para registrar os e-mails em um arquivo de log, sem enviá-los.

   > **Nota**: Ao usar o driver `log`, os e-mails serão registrados no arquivo de log configurado no Laravel, geralmente localizado em `storage/logs/laravel.log`.

## Executando a Aplicação

Para iniciar o ambiente de desenvolvimento, utilize o script `dev` configurado no `composer.json`, que inicia o servidor do Laravel, o Vite e outras ferramentas simultaneamente:

```bash
composer run dev
```

Ou, se preferir, inicie os processos separadamente em terminais diferentes:

1. **Inicie o servidor de desenvolvimento do Laravel**:

   ```bash
   php artisan serve
   ```

2. **Compile os assets do frontend e observe as mudanças**:

   ```bash
   npm run dev
   ```

A aplicação estará disponível em `http://localhost:8000`.

## Laravel Boost

Este projeto utiliza **Laravel Boost**, uma ferramenta MCP (Model Context Protocol) que oferece recursos poderosos para desenvolvimento em Laravel:

### Funcionalidades Principais

- **Database Schema Access**: Visualize a estrutura completa do banco de dados, incluindo tabelas, colunas, tipos de dados, índices e chaves estrangeiras
- **Artisan Commands**: Execute e liste todos os comandos Artisan disponíveis na aplicação
- **Error Logs & Debugging**: Acesse logs de erro e execute código PHP via Tinker para debugging
- **Semantic Documentation Search**: Busque documentação específica da versão de cada pacote instalado
- **Browser Logs**: Monitore logs do navegador e erros JavaScript/TypeScript

### Usando Laravel Boost

Laravel Boost integra-se com sua IDE e oferece autocompletar inteligente e busca de documentação contextualizada. Use as ferramentas disponíveis no Boost para:

- Explorar o schema do banco de dados
- Listar e entender rotas disponíveis
- Executar consultas de leitura segura
- Debugar problemas com o contexto da aplicação
- Buscar documentação dos pacotes instalados

### Pacotes Principais

A aplicação utiliza os seguintes pacotes com suporte especial do Boost:

- **laravel/framework** (v12): Framework PHP moderno
- **laravel/fortify** (v1): Autenticação headless
- **laravel/prompts** (v0): CLI interativa
- **pestphp/pest** (v4): Framework de testes com suporte a testes de navegador
- **tailwindcss** (v4): Utilitários CSS
- **php** (8.4): Linguagem de programação

Para mais informações sobre cada ferramenta, consulte a documentação oficial ou use a busca de documentação do Boost.