# Blog/CMS Project

A simple Blog/CMS (Content Management System) project built with PHP.

## Overview

This project is a basic Blog/CMS that allows users to create, edit, and delete blog posts. It includes user authentication, post categorization, tagging, and comment functionality.

## Directory Structure

```
/blog-cms
│
├── assets
│   ├── css
│   │   └── style.css
│   ├── images
│   └── js
│       └── main.js
│
├── includes
│   ├── config.php
│   ├── functions.php
│   └── session.php
│
├── templates
│   ├── header.php
│   ├── footer.php
│   └── home.php
│
├── uploads
│
├── .gitignore
├── index.php
├── login.php
├── register.php
├── create_post.php
├── view_post.php
├── edit_post.php
├── delete_post.php
├── categories.php
├── tags.php
├── search.php
│
└── .htaccess
```

## Features

- User registration and login system
- CRUD functionality for managing blog posts
- Post categorization and tagging
- Comment system for blog posts
- Responsive styling with CSS
- Pagination for displaying posts
- Search functionality to find specific posts

## Setup

1. Clone the repository.
   ```bash
   git clone https://github.com/pushpraj-rmx/blog-cms.git
   cd blog-cms
   ```

2. Set up a local development environment with PHP and a MySQL database.

3. Configure the database by creating the necessary tables. Refer to the [Database Configuration](#database-configuration) section.

4. Customize the project as needed, updating files and adding your own features.

## Database Configuration

1. Create a MySQL database.

2. Update the `includes/config.php` file with your database connection details.

3. Design the necessary tables for storing user information, blog posts, comments, etc.

## Usage

1. Run the project on your local server.

2. Navigate to the homepage (`index.php`) to view and interact with the blog.

3. Use the registration and login pages to create an account and log in.

4. Create, edit, and delete blog posts, explore categorization and tagging features, and interact with the comment system.

## Contributing

Contributions are welcome! Feel free to open issues or pull requests.

## License

This project is licensed under the [MIT License](LICENSE).
```