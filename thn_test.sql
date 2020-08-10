CREATE DATABASE the_hotels_test_db;
CREATE USER 'hotel_user'@'localhost' IDENTIFIED BY 'FoMedea314';
GRANT ALL ON the_hotels_test_db.* TO 'hotel_user'@'localhost';
