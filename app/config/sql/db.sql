CREATE TABLE users (
                       id INT NOT NULL AUTO_INCREMENT,
                       name VARCHAR(255) NOT NULL,
                       email VARCHAR(255) NOT NULL,
                       password VARCHAR(255) NOT NULL,
                       PRIMARY KEY (id)
);

CREATE TABLE sites (
                       id INT NOT NULL AUTO_INCREMENT,
                       url VARCHAR(255) NOT NULL,
                       PRIMARY KEY (id)
);

CREATE TABLE chat_history (
                              id INT NOT NULL AUTO_INCREMENT,
                              user_id INT NOT NULL,
                              message VARCHAR(255) NOT NULL,
                              timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                              PRIMARY KEY (id)
);