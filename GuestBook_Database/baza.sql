DROP DATABASE IF EXISTS guestbook;
CREATE DATABASE guestbook;
USE guestbook;

CREATE TABLE entry(
	first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message VARCHAR(300) NOT NULL,
    entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
    );

CREATE USER IF NOT EXISTS 'GuestBook'@'localhost' IDENTIFIED BY 'GUEST_B00K';
GRANT ALL PRIVILEGES ON guestbook.entry TO 'newuser'@'localhost';
FLUSH PRIVILEGES;

INSERT INTO entry
VALUES ("Jan", "Nowak", "nowak@example.com", "Bylem tu", NULL),
 ("Jan", "Kowalski", "kowal@example.com", "Laboriosam reprehenderit dolorem itaque optio id aut. Cumque nemo eum sed voluptatibus totam. Quia aut non adipisci.", NULL),
 ("Aleksander", "Jakistam", "alek@example.com", "Qui voluptatem totam voluptas molestiae ut eveniet rerum. Dicta dolorem commodi molestiae provident nam. Doloribus non molestiae eius. Rerum quidem suscipit accusantium illum laudantium aliquam eos rerum.", NULL),
 ("Severus", "Snape", "snape@example.com", "10 punktow dla Gryfindoru", NULL),
 ("Ktos", "Jakis", "kto@example.com", "Co tam?", NULL)
