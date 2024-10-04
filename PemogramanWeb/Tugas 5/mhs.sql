CREATE DATABASE mhs;

USE mhs;

CREATE TABLE identitas (
    npm VARCHAR(12) PRIMARY KEY,
    nama VARCHAR(40),
    alamat VARCHAR(100),
    tgl_lhr DATE,
    jk CHAR(1),
    email VARCHAR(50)
);
