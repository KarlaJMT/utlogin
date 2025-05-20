/*CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(50) UNIQUE NOT NULL,
	passw VARCHAR(20) NOT NULL,
	roll ENUM('admin', 'user', 'guest') NOT NULL
);*/

/*INSERT INTO users(username, passw, roll) VALUES
('Jungkook', 'Namjoon', 'admin'),
('Tania', 'Yagami', 'user'),
('invitado', 'invitado', 'guest');*/

SELECT * FROM users;