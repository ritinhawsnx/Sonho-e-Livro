Entrelinhas Livraria
Sistema web desenvolvido em PHP, utilizando o padrão de arquitetura MVC (Model-View-Controller), para gerenciamento interno de uma livraria vitual. 

Funcionalidades 
• Cadastro de livros 

• Edição de livros

• Exclusão de livros 

• Gerenciamento de livros por categoria/gênero 

• Login de usuários 

• Controle de estoque de livros 

• Acesso por perfil 

Tecnologias 

• PHP 

• MVC 

• PDO 

• MySQL 

• HTML 

• CSS 

## 📂 Estrutura do projeto
entrelinhas/ ├────── CONFIG 

├── DB.PHP

├────── CONTROLLERS 

├── AuthController.PHP 

├── CategoriaController.PHP 

├── DashboardController.PHP 

├── LivrosController 

├── ProdutoController 

├── SobreController 

├── UsuarioController 

├────── MODELS 

├── Categoria.php 

├── Produto.php 

├── Usuario.php 

├────── PUBLIC 

├── assets 

├── uploads 

├────── VIEW 

├── cadastro.php 

├── categorias.php 

├── dashboard.php

├── livros.php

├── livrosFiltro.php 

├── login.php 

├── produtos.php

├── sobre.php

├─index.php

├─entrelinhas.sql 


## 🚀 Como executar
1. Clone este repositório: bash git clone https://github.com/IongaLKS/entrelinhas-livraria.git
2. Coloque a pasta do projeto em htdocs (XAMPP).
3.  Inicie o Apache e o MySQL.
4. Configure o banco de dados.
5. Acesse no navegador: http://localhost/entrelinhas
   
---
## 👥 Equipe

| Integrante | Função |
|------------|--------|
| Isabella Cristina Prieto Araujo | Desenvolvedora Front-end |
| Ian Gonçalves | Desenvolvedor Back-end (PHP) |
| Rita De Cássia | Designer Chefe de Banco de Dados |
| Ana Laura Flor | Segunda Chefe de Banco de Dados |
| Mariana Crelier | Responsável pela Identidade Visual |
| Djenyffer Alves | Responsável pela Identidade Visual |


---
## 📄 Licença

Projeto desenvolvido para fins acadêmicos.
