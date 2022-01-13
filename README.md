# CodeIgniter

### MariaDB comandos utilizados

#### Criação de Tabelas
```sql
create table usuarios (id integer auto_increment primary key, nome varchar(255), email varchar(255), senha varchar(255));

create table produtos (id integer auto_increment primary key, nome varchar(255), descricao text, preco decimal(10, 2), usuario_id integer);
```

#### Inserir Valores
```sql
insert into produtos values (1, 'Monitor', 'Monitor Full LED', 1050, 1);
insert into produtos values (2, 'Mouse', 'Mouse Logitech G', 240, 1);
insert into produtos values (3, 'Headset', 'Headset Logitec G', 300, 1);
insert into produtos values (4, 'Teclado', 'Teclado Logitech G', 100, 1);
insert into produtos values (5, 'SSD', 'SSD Logitech G', 320, 1);
insert into produtos values (6, 'Celular', 'Celular Logitech G', 500, 1);
insert into produtos values (7, 'Fone', 'Fone Logitech G', 600, 1);
insert into produtos values (8, 'Mochila', 'Mochila Logitech G', 230, 1);
```


#### Algumas lições
```php
// Esta tag é análoga ao php echo
<?= $produto['nome'] ?>
```