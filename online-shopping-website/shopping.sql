CREATE DATABASE IF NOT EXISTS shopping;
USE shopping;
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT,
    price DECIMAL(10,2)
);
INSERT INTO products (name, description, price) VALUES
('Phone', 'Smartphone with 4GB RAM', 9999.99),
('Laptop', 'Basic laptop for students', 29999.50);
