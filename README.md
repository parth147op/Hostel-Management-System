# Hostel Management System

A comprehensive Hostel Management System designed for administrators to efficiently manage and automate various hostel-related tasks. Developed using PHP, MySQL, and Bootstrap.

## Features

1. **Book Hostel**: Allows an administrator to book a hostel room for a student.
2. **View & Edit Room Details**: Admin can view the details of all rooms and make edits as necessary.
3. **Add New Rooms**: Provision to add new rooms to the system.
4. **Manage Students**: Admin can cancel student registrations, change room details, or make any necessary modifications related to students.
5. **Admin Profile Management**: Administrators can update their personal details.

## Technology Stack

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: Bootstrap and Vanilla HTML

## Getting Started

### Prerequisites

- Web server environment (e.g., XAMPP, MAMP, WAMP)
- MySQL

### Installation & Setup Guide

1. **Set Up Database**
   - Load the `hostel.sql` file into your MySQL environment to initialize required tables.

2. **Configuration**
   - Update the `connect.php` file to reflect your specific database connection parameters.

3. **Run**
   - Initiate your web server and direct it to the project's root directory.
   - For security considerations, direct admin registration isn't available. Manually insert an admin entry in the `admin` table through phpMyAdmin to gain initial access.

## Contribution

Feel free to fork this repository and submit pull requests. For major changes, please open an issue first to discuss the proposed change.


## Acknowledgements

Special thanks to all contributors and testers for making this system robust and efficient.

