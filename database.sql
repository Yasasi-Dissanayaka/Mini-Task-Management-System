CREATE DATABASE IF NOT EXISTS intern_task_system;
USE intern_task_system;
CREATE TABLE tasks(
id INT (AUTO_INCREMENT)PRIMARY KEY,
title VARCHAR(255),
description TEXT,
priority ENUM('Low','Medium','High'),
status ENUM('Pending','Completed'),
created_at TIMESTAMP
);