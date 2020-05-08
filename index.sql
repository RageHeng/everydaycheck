CREATE DATABASE sample;

CREATE TABLE IF NOT EXISTS sample_user(
id TINYINT UNSIGNED NOT NULL,
name VARCHAR(20) NOT NULL,
done TINYINT UNSIGNED NOT NULL,
PRIMARY KEY (`id`)
)CHARSET=utf8;    

INSERT INTO sample_user 
(id, name, done)
VALUES
(1, "张三", 0);

INSERT INTO sample_user 
(id, name, done)
VALUES
(2, "李四", 0);

INSERT INTO sample_user 
(id, name, done)
VALUES
(3, "王五", 0);

