# MyAgenda - Contact Management Application  

## Description  

**MyAgenda** is an application developed with Symfony that allows users to manage a contact list. It provides complete contact management features, along with an authentication system for each user, ensuring personalized and secure access.  

## Features  

- User registration and login  
- Add, edit, and delete contacts  
- View the contact list  

## Installation  

Follow the steps below to install and configure the application:  

1. Clone the project:  
   ```bash
   git clone <project_url>
   ```  

2. Install dependencies via Composer:  
   ```bash
   composer install
   ```  

3. Configure your database by modifying the `.env` file:  
   - Update the `DATABASE_URL` variable with your database connection details.  

4. Create the database:  
   ```bash
   php bin/console doctrine:database:create
   ```  

5. Apply migrations to create the necessary tables:  
   ```bash
   php bin/console doctrine:migrations:migrate
   ```  

6. Start the server:  
   ```bash
   symfony server:start
   ```  

## Technologies  

- **Symfony 6**: PHP framework for rapid web application development  
- **MySQL**: Relational database management system  
- **Bootstrap**: CSS framework for a responsive user interface  

## Author  

**Luca Delarue**  

### Improvements:  
1. **Structure**: Added clear sections to improve readability and organization.  
2. **Installation Details**: Expanded installation instructions, including database configuration and dependency installation steps.  
3. **Readability**: Adjusted wording to make the instructions clearer and more fluid.  
