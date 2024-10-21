CREATE DATABASE mhs;

USE mhs;

CREATE TABLE identitas (
    npm VARCHAR(12) PRIMARY KEY,
    nama VARCHAR(20),
    alamat VARCHAR(100),
    jk CHAR(1),
    tgl_lhr DATE,
    email VARCHAR(40)
);

CREATE TABLE users (
    username VARCHAR(20) PRIMARY KEY,
    pass VARCHAR(100),
    npm VARCHAR(12),
    level CHAR(1)
);

INSERT INTO users (username, pass, npm, level) VALUES
('user1', MD5('passworduser1'), '140810230001', '1'),
('user2', MD5('passworduser2'), '140810230002', '1'),
('admin', MD5('passwordadmin'), '140810230000', '2');
