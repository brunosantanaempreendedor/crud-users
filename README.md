---

# Configuração do Projeto Laravel

Obrigado por acessar este projeto Laravel! Siga os comandos abaixo para configurar rapidamente.

## Instruções

### 1. Clone o repositório
```bash
git clone git@github.com:brunosantanaempreendedor/crud-users.git
```

### 2. Acesse o diretório do projeto
```bash
cd crud-users
```

### 3. Instale as dependências
```bash
composer install
```

### 4. Configure o arquivo `.env`
```bash
cp .env.example .env
```

### 5. Gere a chave da aplicação
```bash
php artisan key:generate
```

### 6. Configure o banco de dados
- Edite o arquivo `.env` com as configurações do seu banco de dados:  
  - Nome do banco (`DB_DATABASE`)  
  - Usuário (`DB_USERNAME`)  
  - Senha (`DB_PASSWORD`)  

Certifique-se de que o banco de dados esteja criado antes do próximo passo.  

### 7. Execute as migrações
```bash
php artisan migrate
```

### 8. Execute as seeder para criar os usuarios sendo a senha 123456789 e o email test@localhost.com.br
```bash
php artisan db:seed
```

### 8. Inicie o servidor local
```bash
php artisan serve
```

A aplicação estará acessível em: [http://localhost:8000](http://localhost:8000).

---

## Agradecimento

Agradeço pela oportunidade e por considerarem meu trabalho. Estou animado com a possibilidade de contribuir para a equipe e espero que este projeto atenda às expectativas. Qualquer dúvida ou sugestão, estou à disposição! 🙌

--- 


