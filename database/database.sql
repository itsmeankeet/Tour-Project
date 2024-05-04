--database name tour
-- Create the admin table
CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(255)
);

-- Create the booked_tours table
CREATE TABLE IF NOT EXISTS booked_tours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    destination VARCHAR(100) NOT NULL,
    tour_date DATE NOT NULL,
    num_days INT NOT NULL,
    notes TEXT,
    booked_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(50) DEFAULT 'pending'
);

-- Create the contact_emails table
CREATE TABLE IF NOT EXISTS contact_emails (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email_id VARCHAR(30)
);

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,
    email_id VARCHAR(30) NOT NULL,
    password VARCHAR(15) NOT NULL,
    registration_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



INSERT INTO booked_tours (full_name, email, phone, destination, tour_date, num_days, notes, status) 
VALUES 
('John Doe', 'john@example.com', '1234567890', 'Kathmandu', '2024-05-15', 5, 'Special requests or notes', 'pending'),
('Jane Smith', 'jane@example.com', '9876543210', 'Pokhara', '2024-06-20', 3, NULL, 'accepted'),
('Alice Johnson', 'alice@example.com', '5558889999', 'Mustang', '2024-07-10', 7, 'Family trip', 'pending'),
('Bob Brown', 'bob@example.com', '7773331111', 'Manang', '2024-08-05', 4, NULL, 'pending'),
('Emma Wilson', 'emma@example.com', '2224446666', 'Kathmandu', '2024-09-02', 2, 'Honeymoon trip', 'rejected'),
('Michael Davis', 'michael@example.com', '3332221111', 'Pokhara', '2024-10-15', 6, 'Adventure tour', 'accepted'),
('Sarah Lee', 'sarah@example.com', '9997775555', 'Manali', '2024-11-20', 4, NULL, 'pending'),
('David Clark', 'david@example.com', '1115557777', 'Darjeeling', '2024-12-05', 3, NULL, 'pending'),
('Olivia Martinez', 'olivia@example.com', '6669993333', 'Annapurna Base Camp', '2025-01-10', 5, 'Trekking tour', 'pending'),
('Daniel Taylor', 'daniel@example.com', '8882224444', 'Lumbini', '2025-02-15', 2, NULL, 'accepted');



INSERT INTO contact_emails (email_id) 
VALUES 
('info@example.com'),
('support@example.com'),
('sales@example.com'),
('enquiries@example.com'),
('contactus@example.com'),
('feedback@example.com'),
('info@travelcompany.com'),
('reservations@travelcompany.com'),
('customer.service@travelcompany.com'),
('marketing@travelcompany.com');



INSERT INTO admin (username, password, full_name) 
VALUES ('adhikariankit553@gmail.com', 'Ankit12', 'Ankit Adhikari');


INSERT INTO users (user_name, email_id, password, registration_time) 
VALUES 
    ('John Doe', 'johndoe@example.com', 'password123', NOW()),
    ('Jane Smith', 'janesmith@example.com', 'securepassword', NOW()),
    ('Alice Johnson', 'alicejohnson@example.com', 'password1234', NOW()),
    ('Bob Williams', 'bobwilliams@example.com', 'secret123', NOW()),
    ('Emily Brown', 'emilybrown@example.com', 'p@ssw0rd', NOW());