<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Introduction to Tailwind CSS


Tailwind CSS is a utility-first CSS framework for building custom designs. It provides low-level utility classes that let you build completely custom designs without ever leaving your HTML.

To learn more about Tailwind CSS, visit their official documentation: https://tailwindcss.com/docs.

## Starting the app

To start the Laravel application, navigate to the project directory and run the following command:

1ST TERMINAL SHOULD BE 
    ```npm run dev```

2ND TERMINAL SHOULD BE 
    ```php artisan serve```

then redirect to this link route
    
    http://127.0.0.1:8000/employees

## Populating data for designation and department

 Before running the application, it's essential to populate the department and designation tables to avoid key constraints. Execute the following SQL queries in your database:

-------------------------------------------------------

-- Department

INSERT INTO departments (department_name, status) VALUES 
('Management', 'active'),

('Engineering', 'active'),

('Design', 'active'),

('Sales', 'active'),

('Marketing', 'active'),

('Human Resources', 'active'),

('Finance', 'active'),

('Information Technology', 'active'),

('Operations', 'active'),

('Customer Service', 'active'),

('Research and Development', 'active'),

('Legal', 'active'),

('Administration', 'active');

-- Designation

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Manager', d.id, 'active' FROM departments d WHERE d.department_name = 'Management';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Developer', d.id, 'active' FROM departments d WHERE d.department_name = 'Engineering';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Designer', d.id, 'active' FROM departments d WHERE d.department_name = 'Design';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Sales Manager', d.id, 'active' FROM departments d WHERE d.department_name = 'Sales';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Marketing Specialist', d.id, 'active' FROM departments d WHERE d.department_name = 'Marketing';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'HR Coordinator', d.id, 'active' FROM departments d WHERE d.department_name = 'Human Resources';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Finance Analyst', d.id, 'active' FROM departments d WHERE d.department_name = 'Finance';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'IT Administrator', d.id, 'active' FROM departments d WHERE d.department_name = 'Information Technology';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Operations Supervisor', d.id, 'active' FROM departments d WHERE d.department_name = 'Operations';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Customer Service Representative', d.id, 'active' FROM departments d WHERE d.department_name = 'Customer Service';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Software Engineer', d.id, 'active' FROM departments d WHERE d.department_name = 'Software Engineering';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Research Scientist', d.id, 'active' FROM departments d WHERE d.department_name = 'Research and Development';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Legal Counsel', d.id, 'active' FROM departments d WHERE d.department_name = 'Legal';

INSERT INTO designations (designation_name, department_id, status) 
SELECT 'Administrator', d.id, 'active' FROM departments d WHERE d.department_name = 'Administration';



