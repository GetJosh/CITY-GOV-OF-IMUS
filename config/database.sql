/*
 * Database Schema for City of Imus Website
 * 
 * This file documents the recommended database structure
 * for the City of Imus government website
 * 
 * To implement: Copy the SQL statements below and run them in your MySQL admin tool
 */

-- Create database
CREATE DATABASE IF NOT EXISTS city_imus;
USE city_imus;

-- Business Inquiries Table
CREATE TABLE IF NOT EXISTS business_inquiries (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    organization VARCHAR(255) NOT NULL,
    business_type VARCHAR(100) NOT NULL,
    message LONGTEXT NOT NULL,
    status ENUM('new', 'contacted', 'in_progress', 'completed', 'closed') DEFAULT 'new',
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_status (status),
    INDEX idx_submitted_at (submitted_at),
    INDEX idx_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Users Table (for future admin functionality)
CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    role ENUM('admin', 'staff', 'viewer') DEFAULT 'viewer',
    is_active BOOLEAN DEFAULT TRUE,
    last_login TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_role (role)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Business Opportunities Table (for dynamic content management)
CREATE TABLE IF NOT EXISTS business_opportunities (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description LONGTEXT NOT NULL,
    category VARCHAR(100),
    content_html LONGTEXT,
    is_published BOOLEAN DEFAULT TRUE,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_by INT,
    FOREIGN KEY (created_by) REFERENCES users(id),
    INDEX idx_category (category),
    INDEX idx_published (is_published),
    INDEX idx_sort_order (sort_order)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Service Rates Table (for dynamic pricing)
CREATE TABLE IF NOT EXISTS service_rates (
    id INT PRIMARY KEY AUTO_INCREMENT,
    service_name VARCHAR(255) NOT NULL,
    service_category VARCHAR(100),
    rate_php DECIMAL(10, 2),
    rate_usd DECIMAL(10, 2),
    description TEXT,
    is_active BOOLEAN DEFAULT TRUE,
    effective_date DATE,
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_category (service_category),
    INDEX idx_active (is_active),
    INDEX idx_effective_date (effective_date)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Audit Log Table (for security and tracking)
CREATE TABLE IF NOT EXISTS audit_logs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    action VARCHAR(255),
    entity_type VARCHAR(100),
    entity_id INT,
    old_values JSON,
    new_values JSON,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    INDEX idx_user_id (user_id),
    INDEX idx_created_at (created_at),
    INDEX idx_entity (entity_type, entity_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Sample Data
-- Insert initial admin user (password should be hashed in production)
INSERT INTO users (username, email, password_hash, first_name, last_name, role) 
VALUES ('admin', 'admin@cityofimus.gov.ph', '$2y$10$placeholder_hash_here', 'Admin', 'User', 'admin')
ON DUPLICATE KEY UPDATE username=username;

-- Sample business opportunity
INSERT INTO business_opportunities (title, category, description, sort_order, is_published)
VALUES ('Advanced Manufacturing', 'Manufacturing', 'State-of-the-art manufacturing facilities await investors', 1, TRUE);

-- Sample service rates
INSERT INTO service_rates (service_name, service_category, rate_php, rate_usd, effective_date)
VALUES 
('Standard Room - 2 pax', 'Accommodation', 1500.00, 25.66, CURDATE()),
('Family Room - 4 pax', 'Accommodation', 3000.00, 51.32, CURDATE()),
('Manila to Imus - Air Conditioned', 'Transportation', 40.00, 0.68, CURDATE());
