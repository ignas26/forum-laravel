What it is about:

LT_overflow is a web application based on Laravel framework (https://github.com/laravel/laravel). LT_overflow is essentially a forum, which gives its users the platform to solve their individual questions by filling in the question form fields and sending it to the message board.
With the set default seeds the application is tailor as a forum to help web developers. Keep in mind, that seeds can be changed therefore the application can relay on another topic.


How to install/use:

1. A command "composer global require "laravel/installer"" should be issued in your system in advance.

2. Download or clone the project.

3. type in "php artisan storage:link" in your cmd (terminal) while in the project folder. That's needed for establishing a connectiion between storage\app\public and public\storage folder in order to display icons and other pictures within the application.

4. Import "projektasFINAL.sql" into your database.

5. Register (login) to enter. Name "admin" and email "admin@admin.lt" enters the app as admin (by default).

6. (optional). In order to display various different topics within the applications, feel to to experiment with seeds in the "database/seeds" folder. In case anything changes, always use "php artisan migrate:refreh" and then "php artisan db:seed".



How the application works:

It register a new user to a database. If user tries to login, it checks if the user data is in the database. After logging in, the main function is filling in the question form. After filling in the form, the question appears on the message board in its respective channel.

