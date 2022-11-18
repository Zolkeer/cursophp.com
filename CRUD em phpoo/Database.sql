create database pdo {
    create table produtos {
        id primary key AUTO_INCREMENT;
        nome not null varchar;
        descricao varchar;
    }
}