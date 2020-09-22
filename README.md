# job-control

Criação da tabela:

```sql
CREATE TABLE `usuario` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `login` varchar(245),
  `senha` varchar(245),
  `num_trabalhos` int DEFAULT 0,
  `active` bool DEFAULT true,
  `is_adm` bool DEFAULT false
);
```

Criação do adm:

```sql
INSERT INTO usuario(login, senha, is_adm)VALUES("l2sants", "1234", true);
```