## About

This is a repo that is meant to provide a developer with a placeholder website that can be configured into a full coming soon website with a mailing list. The mailing list is for notifying the subscribed users of when the main website goes live. The mail users receive looks like this:

<img width="50%" src="https://res.cloudinary.com/dkgtd3pil/image/upload/v1589750683/coming-soon/email.png" alt="Email">
 
**Note:** The Website was built completely with [Laravel](https://laravel.com/docs/7.x).
 
## How to Use

Clone the repo on any server and run the following command on the commands line at the root of your project:
```$xslt
$ php -r "file_exists('.env') || copy('.env.example', '.env');"
$ composer install -q --no-ansi --no-interaction --no-scripts --no-suggest --no-progress --prefer-dist
$ php artisan key:generate
```
If you do not have shell access to your server, add a valid laravel `APP_KEY` to your Server's Environment Variables. You should change the default `APP_NAME` of the project to be the name of your app/website but this is not necessary.
That's all you need for the placeholder website.
 
In order to get the mailing list functionality, you need to have a database for storing the mailing list. You will also need an SMTP mailing server that will be used to send the emails. Store the database and SMTP credentials in the `.env` file and run the following command on the command line:
```$xslt
php artisan migrate
```
That's it.

The affected credentials on the `.env` for mailing list functionality are:
- **DB_HOST** - The database host address
- **DB_PORT** - database port (usually 3306)
- **DB_DATABASE** - The name of the target database
- **DB_USERNAME** - Username used to log in.
- **DB_PASSWORD** - password for said username
- **MAIL_HOST** - the domain for the SMTP server e.g smtp.gmail.com
- **MAIL_PORT** - the port to be used to send mails e.g 587
- **MAIL_USERNAME** - the username to log in with.
- **MAIL_PASSWORD** - password for said username
- **MAIL_ENCRYPTION** - mailing encryption e.g tls
- **MAIL_FROM_ADDRESS** - the email address to use as the `from` address


## License

The Repo is open-sourced software licensed under the [MIT license](https://github.com/dopesky/coming-soon/blob/master/LICENSE).
