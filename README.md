## Skills Demonstrated

### Docker:

-   Proficiency in using Docker for containerization.

### MVC Architecture:

-   Knowledge of the Model-View-Controller pattern.

### Tailwind CSS:

-   Styling frontend components with Tailwind CSS.

### Laravel:

#### Routes

-   Creating, grouping, and prefixing routes.
-   Using resource routes for efficient route management.

#### Views and Blade Templates

-   Creating functional views, layouts, and components with Blade.
-   Building forms and ensuring component separation and reuse.

#### Controllers

-   Linking methods to routes and views for navigation.
-   Using route model binding.
-   Implementing methods for creating, editing, and deleting models.

#### Environment Configuration

-   Configuring the app using environment variables.

#### Database Migrations

-   Creating and modifying database tables.

#### Eloquent ORM

-   Performing CRUD operations with Eloquent.
-   Defining model relationships for efficient queries and saving models.

#### Pagination

-   Implementing pagination for model retrieval and connecting it to frontend elements.

#### Data Validation

-   Validating incoming data to meet database and security requirements.

#### Session Management

-   Using session data to trigger success messages.

#### Soft Deletion

-   Utilizing soft delete functionality to move models to a "trashed" status, keeping them recoverable.

#### User Authentication

-   Implementing login and account creation with Laravel Breeze.
-   Using middleware to protect routes.
-   Securing data input with CSRF tokens.
-   Protecting data access with the Auth helper.

## Installation and Setup

### Prerequisites

-   Install Docker Desktop (or Docker Engine) on your operating system.
    -   Follow the instructions on the [Docker documentation](https://docs.docker.com/desktop/) to install Docker Desktop.
    -   Open Docker Desktop to ensure the Docker engine is running.

### Clone the Project

1. Clone the project from Git:

    ```sh
    git clone <repository-url>
    ```

2. Navigate to the project root directory:
    ```sh
    cd laravel-notes-app
    ```

### Install Composer Dependencies

Run the following command to install the project's Composer dependencies:

```sh
docker run --rm \
     -u "$(id -u):$(id -g)" \
     -v "$(pwd):/var/www/html" \
     -w /var/www/html \
     laravelsail/php82-composer:latest \
     composer install --ignore-platform-reqs
```

When using the laravelsail/phpXX-composer image, you should use the same version of PHP that you plan to use for your application (80, 81, 82, or 83).

### Set Up Environment Variables

Copy the `.env.example` file to create a new `.env` file:

```sh
cp .env.example .env
```

### Start the Project

Start the project using Laravel Sail, ensure the necessary ports are not in use. If the command fails, free up the ports or modify the `docker-compose.yml` accordingly:

```sh
./vendor/bin/sail up
```

### Access the Application

1. Open your browser and navigate to:

```arduino
http://0.0.0.0:80
```

2. You will be prompted to generate an application key. Click the button to generate the key.

3. Open a new terminal tab at the project root and run following command to build database tables:

```sh
./vendor/bin/sail artisan migrate
```

4. In the same terminal tab, install the application's Node dependencies:

```sh
npm install
```

5. Then, start the project's frontend by running the following command:

```sh
npm run dev
```

6. Copy the `APP_URL` provided in the terminal and paste it into your browser.

### Use the Application

Your application should now be running and accessible in your browser. Enjoy using the app!
