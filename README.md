# CarFlow

CarFlow is a web application designed to manage and streamline car-related operations. This project includes features such as car management, user interactions, and the ability for users to mark their favorite cars.

## Features

- **Car Management**: Add, update, and manage car details.
- **User Management**: Handle user accounts and their interactions.
- **Favorite Cars**: Users can mark cars as their favorites for quick access.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/carFlow.git
    cd carFlow
    ```

2. Install dependencies:
    ```bash
    composer install
    npm install
    ```

3. Set up the environment:
    - Copy `.env.example` to `.env`:
      ```bash
      cp .env.example .env
      ```
    - Update the `.env` file with your database and other configurations.

4. Run migrations:
    ```bash
    php artisan migrate
    ```

5. Start the development server:
    ```bash
    php artisan serve
    ```

6. Compile frontend assets:
    ```bash
    npm run dev
    ```

## Database Structure

The project includes the following key tables:
- `cars`: Stores car details.
- `users`: Stores user information.
- `favourite_cars`: A pivot table linking users and their favorite cars.

## Usage

- Access the application at `http://localhost:8000`.
- Register or log in to start managing cars and marking favorites.

## Contributing

Contributions are welcome! Please follow these steps:
1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Submit a pull request with a detailed description of your changes.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

- Built with [Laravel](https://laravel.com/) and [Vue.js](https://vuejs.org/).
- Inspired by the need for efficient car management systems.

Feel free to reach out for any questions or suggestions!  