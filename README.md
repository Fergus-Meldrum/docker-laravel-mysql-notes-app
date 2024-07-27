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

### Set Up Environment Variables

Copy the `.env.example` file to create a new `.env` file:

```sh
   cp .env.example .env
```

### Start the Project

Start the project using Laravel Sail:

```sh
   ./vendor/bin/sail up
```

### Access the Application

1. Open your browser and navigate to:

```arduino
   http://0.0.0.0:80
```

2. You will be prompted to generate an application key. Click the button to generate the key.

3. After generating the key, you will be prompted to run the following command in the terminal:

```sh
   npm run dev
```

4. Copy the `APP_URL` provided in the terminal and paste it into your browser.

### Use the Application

Your application should now be running and accessible in your browser. Enjoy using the app!
