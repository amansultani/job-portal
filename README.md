
# Job Portal Application

A full-featured job portal application developed using the Laravel framework. This project showcases key Laravel functionalities such as advanced search and filtering, file uploads, access control using middleware, soft deletes, and seamless integration with modern frontend tools like Tailwind CSS and Alpine.js.

This application is designed to allow employers to post jobs, and job seekers to browse and apply for job listings. The project serves as a portfolio piece to demonstrate your skills in Laravel and full-stack web development.

## Features

- **Advanced Search & Filtering**: Search and filter job listings by criteria like location, job type, category, and salary range, providing an efficient and user-friendly experience.
- **File Uploads and Management**: Job seekers can upload their resumes and other relevant documents, which are securely managed and associated with their profile or job applications.
- **Soft Deletes**: Implemented soft delete functionality for job postings and user accounts to prevent permanent data loss and allow for easy recovery of deleted items.
- **Middleware for Access Control**: Used Laravel middleware to protect certain routes and features, such as employer-only access for job creation, and admin-level access for managing users and listings.
- **Tailwind CSS and Alpine.js Integration**: Modern, responsive UI built using Tailwind CSS for styling and Alpine.js for handling interactive components on the frontend.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Screenshots](#screenshots)
- [Tech Stack](#tech-stack)
- [Contributing](#contributing)
- [License](#license)

## Installation

To run this project locally, follow these steps:

### Prerequisites

- PHP >= 8.0
- Composer
- Node.js & NPM
- MySQL or any other supported database

### Steps

1. **Clone the repository:**

   \`\`\`bash
   git clone https://github.com/your-username/job-portal.git
   cd job-portal
   \`\`\`

2. **Install dependencies:**

   \`\`\`bash
   composer install
   npm install
   \`\`\`

3. **Create a `.env` file by copying the example file:**

   \`\`\`bash
   cp .env.example .env
   \`\`\`

4. **Set up your environment variables in the `.env` file:**

   Configure your database and other settings here:

   \`\`\`bash
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   \`\`\`

5. **Generate the application key:**

   \`\`\`bash
   php artisan key:generate
   \`\`\`

6. **Run migrations to create the database tables:**

   \`\`\`bash
   php artisan migrate
   \`\`\`

7. **(Optional) Seed the database:**

   If you want to populate the database with sample data, use the following command:

   \`\`\`bash
   php artisan db:seed
   \`\`\`

8. **Compile assets:**

   Tailwind CSS and Alpine.js are integrated and need to be compiled:

   \`\`\`bash
   npm run dev
   \`\`\`

9. **Start the development server:**

   \`\`\`bash
   php artisan serve
   \`\`\`

   The application will be available at `http://localhost:8000`.

## Usage

- **For Employers**: Employers can create an account, post new job listings, and manage their existing listings. Access to job creation and management is controlled via middleware.
  
- **For Job Seekers**: Job seekers can browse and filter jobs, upload resumes, and apply for available positions.
  

## Features

### 1. Advanced Filtering and Search Functionality
  - Users can search for jobs based on multiple criteria including job title, location, job type, and salary.
  - Filtering supports a combination of criteria for precise results.

### 2. File Uploads and Management
  - Users (job seekers) can upload resumes in PDF format only.
  - Files are securely stored, and proper validations are in place to ensure the safety and integrity of the uploads.

### 3. Soft Deletes
  - Job listings uses Laravel's soft delete functionality.
  - Soft deleted records can be restored from the admin panel of employer.

### 4. Middleware for Access Control
  - Middleware has been implemented to control access to different parts of the application.
  - Employers have restricted access to job creation, while employers have full access to user management and job listing moderation.

### 5. Tailwind CSS and Alpine.js Integration
  - Tailwind CSS provides modern, responsive design with minimal effort.
  - Alpine.js is used for handling dynamic UI components without the overhead of a larger frontend framework.


## Tech Stack

- **Backend**: Laravel 9.x (PHP 8)
- **Frontend**: Tailwind CSS, Alpine.js
- **Database**: MySQL
- **Authentication**: Laravel Breeze
- **File Management**: Laravel File Uploads
- **Deployment**: The application is live in AWS amazon linux ec2 instance (job-portal.amansultani.com)

## Contributing

Feel free to fork this project, submit issues, and make pull requests. Contributions are more than welcome.

To contribute:
1. Fork the repository
2. Create a feature branch (`git checkout -b feature-name`)
3. Commit your changes (`git commit -m 'Add some feature'`)
4. Push to the branch (`git push origin feature-name`)
5. Open a pull request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
