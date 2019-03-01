CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
);

INSERT INTO users 
(`name`, `email`, `password`)
VALUES
('Andy', 'andy@email.com', MD5('a password'));