## Set up :

1. Clone the repo and cd into it
2. composer install
3. Rename or copy .env.example file to .env
4. php artisan key:generate
5. Set your database credentials in your .env file
6. Import db file(database/gresteuv.sql) into your database (mysql,sql)
8. npm install
9. npm run watch
10. run command[laravel file manager]:-  php artisan storage:link
11. Edit .env file :- remove APP_URL
12. php artisan serve or use virtual host
13. Visit localhost:8000 in your browser
14. Visit /admin if you want to access the admin panel. Admin Email/Password: admin@grest.in/!Grest@2020. User Email/Password: user@gmail.com/1111

15. npm run watch -- for Watch Style.scss and JS files to create css and js files.
16. For production Storage link - Uncomment Code on line#181, and hit the given URL "grest.in/storage-link"
    Note: if images on websites are not showing, or the file manager in Admin Panel is not workign correctly, delete public/Storage folder and repeat step #16.


