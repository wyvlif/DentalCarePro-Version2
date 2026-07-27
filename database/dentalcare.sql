-- ==========================================
-- DentalCare Pro v2.0
-- Database Structure
-- Version 2.0
-- Author: Wiclif Hirwa & ChatGPT
-- ==========================================

CREATE DATABASE IF NOT EXISTS dentalcare_pro_v2;
USE dentalcare_pro_v2;

-- ==========================================
-- USERS TABLE
-- ==========================================

CREATE TABLE users (

    id INT AUTO_INCREMENT PRIMARY KEY,

    full_name VARCHAR(100) NOT NULL,

    email VARCHAR(100) UNIQUE NOT NULL,

    phone VARCHAR(20),

    password VARCHAR(255) NOT NULL,

    role ENUM('admin','dentist','receptionist','patient') DEFAULT 'patient',

    profile_image VARCHAR(255) DEFAULT 'default.png',

    status ENUM('Active','Inactive') DEFAULT 'Active',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- ==========================================
-- PATIENTS
-- ==========================================

CREATE TABLE patients (

    id INT AUTO_INCREMENT PRIMARY KEY,

    patient_number VARCHAR(20) UNIQUE,

    full_name VARCHAR(100),

    gender ENUM('Male','Female','Other'),

    date_of_birth DATE,

    phone VARCHAR(20),

    email VARCHAR(100),

    address TEXT,

    blood_group VARCHAR(10),

    allergies TEXT,

    medical_history TEXT,

    emergency_contact VARCHAR(100),

    emergency_phone VARCHAR(20),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- ==========================================
-- DENTISTS
-- ==========================================

CREATE TABLE dentists (

    id INT AUTO_INCREMENT PRIMARY KEY,

    full_name VARCHAR(100),

    specialization VARCHAR(100),

    qualification VARCHAR(100),

    experience VARCHAR(50),

    phone VARCHAR(20),

    email VARCHAR(100),

    profile_image VARCHAR(255),

    bio TEXT,

    status ENUM('Available','Unavailable') DEFAULT 'Available'

);

-- ==========================================
-- SERVICES
-- ==========================================

CREATE TABLE services (

    id INT AUTO_INCREMENT PRIMARY KEY,

    service_name VARCHAR(100),

    description TEXT,

    price DECIMAL(10,2),

    duration INT,

    status ENUM('Active','Inactive') DEFAULT 'Active'

);

-- ==========================================
-- APPOINTMENTS
-- ==========================================

CREATE TABLE appointments (

    id INT AUTO_INCREMENT PRIMARY KEY,

    appointment_number VARCHAR(20) UNIQUE,

    patient_name VARCHAR(100),

    phone VARCHAR(20),

    email VARCHAR(100),

    dentist_id INT,

    service_id INT,

    appointment_date DATE,

    appointment_time TIME,

    reason TEXT,

    status ENUM('Pending','Confirmed','Completed','Cancelled') DEFAULT 'Pending',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (dentist_id) REFERENCES dentists(id)
        ON DELETE SET NULL,

    FOREIGN KEY (service_id) REFERENCES services(id)
        ON DELETE SET NULL

);

-- ==========================================
-- CONTACT MESSAGES
-- ==========================================

CREATE TABLE contact_messages (

    id INT AUTO_INCREMENT PRIMARY KEY,

    full_name VARCHAR(100),

    email VARCHAR(100),

    phone VARCHAR(20),

    subject VARCHAR(200),

    message TEXT,

    status ENUM('Unread','Read') DEFAULT 'Unread',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- ==========================================
-- PAYMENTS
-- ==========================================

CREATE TABLE payments (

    id INT AUTO_INCREMENT PRIMARY KEY,

    appointment_id INT,

    amount DECIMAL(10,2),

    payment_method ENUM('Cash','Card','Mobile Money','Insurance'),

    payment_status ENUM('Pending','Paid') DEFAULT 'Pending',

    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (appointment_id) REFERENCES appointments(id)
        ON DELETE CASCADE

);

-- ==========================================
-- TREATMENTS
-- ==========================================

CREATE TABLE treatments (

    id INT AUTO_INCREMENT PRIMARY KEY,

    appointment_id INT,

    diagnosis TEXT,

    treatment_plan TEXT,

    prescription TEXT,

    notes TEXT,

    next_visit DATE,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (appointment_id) REFERENCES appointments(id)
        ON DELETE CASCADE

);

-- ==========================================
-- SETTINGS
-- ==========================================

CREATE TABLE settings (

    id INT AUTO_INCREMENT PRIMARY KEY,

    clinic_name VARCHAR(150),

    clinic_email VARCHAR(100),

    clinic_phone VARCHAR(30),

    clinic_address TEXT,

    opening_hours TEXT,

    logo VARCHAR(255)

);