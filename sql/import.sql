CREATE SCHEMA bowhotel;

USE bowhotel;

CREATE TABLE contact(
    id INT(11) NOT NULL AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(100),
    user_message TEXT,
    date_created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);


INSERT INTO contact (full_name, email, phone, user_message)
VALUES (
    'Matthew Tuason', 'mtuason@yahoo.com', '8252880514', 'This is a Test Message'
    
);