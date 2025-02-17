# API Guide for Classified Ads

## Introduction

This project aims to provide an API for managing classified ads, allowing users to create, edit, delete, and search for ads easily.

## Requirements

Before running the project, ensure you have the following requirements:

- PHP 8.0 or later
- Laravel 10 or later
- MySQL Database
- Composer
- A web server like Apache or Nginx

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/abdelmoneimbelal/api_course-.git
   cd api_course
   ```

2. Install the required packages:

   ```bash
   composer install
   ```

3. Create the environment file and update the settings:

   ```bash
   cp .env.example .env
   ```

   Then update the database settings in the `.env` file.

4. Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Run database migrations:

   ```bash
   php artisan migrate
   ```

6. Start the local server:

   ```bash
   php artisan serve
   ```

## API Endpoints

### 1. Register a New User

**Endpoint:** `POST /api/register`

- **Required Parameters:**
  ```json
  {
    "name": "User Name",
    "email": "Email Address",
    "password": "Password",
    "password_confirmation": "Confirm Password"
  }
  ```

### 2. Login

**Endpoint:** `POST /api/login`

- **Required Parameters:**
  ```json
  {
    "email": "Email Address",
    "password": "Password"
  }
  ```

### 3. Get All Ads

**Endpoint:** `GET /api/ads`

- **Description:** Retrieves all published ads.

### 4. Create a New Ad

**Endpoint:** `POST /api/ads`

- **Required Parameters:**
  ```json
  {
    "title": "Ad Title",
    "description": "Ad Description",
    "price": 100,
    "category_id": 1
  }
  ```

### 5. Update an Ad

**Endpoint:** `PUT /api/ads/{id}`

- **Required Parameters:**
  ```json
  {
    "title": "New Title",
    "description": "New Description",
    "price": 150
  }
  ```

### 6. Delete an Ad

**Endpoint:** `DELETE /api/ads/{id}`

## Authentication

- The API uses **Bearer Token** authentication.
- After logging in, you will receive a **token** that must be sent with each protected request in the **Authorization Header**:
  ```
  Authorization: Bearer {your_token_here}
  ```

## Contribution

If you wish to contribute to the project, follow these steps:

1. Fork the repository.
2. Create a new branch for your changes.
3. Make your modifications.
4. Submit a **Pull Request**.

## Support

If you encounter any issues, feel free to contact us at: `abdobelal069@gmail.com`.

## License

This project is licensed under the **MIT License**, meaning you are free to use and modify it.

