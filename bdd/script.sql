CREATE DATABASE IF NOT EXISTS goldbook;
USE goldbook;

-- Table user
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    mail VARCHAR(255) UNIQUE NOT NULL,
    numero VARCHAR(20) UNIQUE NOT NULL,
    sex ENUM('masculin', 'feminin') NOT NULL,
    commentaire TEXT NOT NULL,
    signature VARCHAR(255) NOT NULL
);


