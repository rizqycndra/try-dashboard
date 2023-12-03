## Laravel + React Dashboard Project with MySQL and Tailwind CSS

Welcome to the Laravel + React Dashboard project! This project aims to provide an experience of creating a responsive dashboard page using Laravel as the backend, React as the frontend, MySQL as the database, and Tailwind CSS for styling.

### Project Requirements

Before you start the project, ensure that your system meets the following requirements:

1. PHP 7.4 or higher.
2. Composer (https://getcomposer.org/)
3. Node.js and npm (https://nodejs.org/)
4. MySQL Server
5. Laravel CLI (optional but recommended for convenient commands)

### Running the Project

Here are the steps to run this project:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/yourrepo/your-project.git
   cd your-project
   ```

2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

3. **Install Node.js Dependencies:**
   ```bash
   npm install
   ```

4. **Create a .env File and Configure the Database:**
   ```bash
   cp .env.example .env
   ```
   Adjust the database configuration in the `.env` file according to your MySQL settings.

5. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations:**
   ```bash
   php artisan migrate
   ```

7. **Run the Application:**
   ```bash
   php artisan serve
   ```

8. **Run Mix (for asset compilation):**
   ```bash
   npm run dev
   ```

The application can now be accessed at [http://localhost:8000](http://localhost:8000).

### Project Structure

Here is the main directory structure of the project:

```
your-project/
|-- app/
|-- database/
|-- public/
|-- resources/
|   |-- js/
|   |   |-- components/
|   |   |-- pages/
|   |-- views/
|-- routes/
|-- tailwind.config.js
|-- webpack.mix.js
|-- .env
|-- ...
```

### Technologies Used

- **Laravel:** Backend framework for business logic and routing.
- **React:** JavaScript library for building dynamic user interfaces.
- **Radix UI:** JavaScript library for components library.
- **MySQL:** Relational database for storing and managing data.
- **Tailwind CSS:** CSS framework for fast and responsive design.

### Contribution

If you'd like to contribute to this project, please fork the repository, create a new branch, make your changes, and submit a pull request. Your contributions are highly appreciated!

### License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.