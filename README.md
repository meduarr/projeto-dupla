## Projeto Dupla 

### 🗂️ Configuração do Banco de Dados
Siga os passos abaixo para criar o banco de dados e a tabela necessária para o projeto.

**🛠️ 1. Criar o banco de dados**

```sql
CREATE DATABASE projeto_dupla;
```

**📂 2. Acessar o banco de dados**

```sql
USE projeto_dupla;
```

**🧱 3. Criar a tabela usuarios**

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
```

**🧪 4. (Opcional) Inserir um usuário para teste**

```sql
INSERT INTO usuarios (nome, senha) VALUES ('admin', '123');
```

**🔎 5. Verificar os registros na tabela**

```sql
SELECT * FROM usuarios;
```
