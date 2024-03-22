# My Project

This project contains the following files and scripts:

- **CreateDB**: Scripts for building the database (OnlyDB) and tables (Users).
- **index00.html**: Main page of the website with registration and login forms.
 **home.html**: This file serves as the main page of the website, similar to `index00.html`, but with altered links to ensure compatibility and avoid broken links on error pages.
- **register.php**: Script to handle registration form data.
- **login.php**: Script to handle login form data.
- **profile.php**: Profile page accessible only to authenticated users.
- **update-profile**: Scripts for editing user data.
- **auth.php**: Script to check user authentication.
- **database.php**: Script to connect to the database and execute queries.
- **Tasks.txt**: Text of the test assignment.
- **error.php**: Error page for displaying different error messages based on the error code.


## Usage

1. Put all files in the `www` folder in the WAMP folder.
2. First, you should create the database using `CreateDB.php`.
3. After creating the database, rename `index00.php` back to `index.php`.
4. change link in error page to index.html instaead of home.html. now you can delete home.html Then refresh the page. It will automatically open the home page - index.php  , which contains the registration and login forms.

## Contributing

Contributions are welcome! Please see the [Contributing Guidelines](CONTRIBUTING.md) for more details.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
