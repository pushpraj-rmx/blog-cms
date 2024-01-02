#!/bin/bash

# Create the main project directory
# mkdir blog-cms
# cd blog-cms

# Create subdirectories
mkdir assets includes templates uploads

# Create subdirectories inside 'assets'
mkdir assets/css assets/images assets/js

# Create files
touch assets/css/style.css assets/js/main.js

# Create files inside 'includes'
touch includes/config.php includes/functions.php includes/session.php

# Create files inside 'templates'
touch templates/header.php templates/footer.php templates/home.php


# Create other PHP files
touch index.php login.php register.php create_post.php view_post.php
touch edit_post.php delete_post.php categories.php tags.php search.php

# Create .htaccess file
touch .htaccess

# Create .gitignore file
echo -e "assets/\nuploads/\nconfig.php" > .gitignore

echo "Directory structure created successfully!"
