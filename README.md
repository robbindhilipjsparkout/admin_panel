.env

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:YZ0O3f+q7x2cV8Ef+2WdtNzgR01Kd1vtMhoQBNRf4Vo=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=admin_panel
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=1df4d6e97a9dad
MAIL_PASSWORD=8530921f60b28c
MAIL_ENCRYPTION=tls

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


Create database:   admin_panel



To Install composer:  composer install



For migrating database: php artisan migrate



For seeder:

php artisan db:seed
php artisan db:seed --class=UsersSeeder



To serve this project: php artisan serve

For mail configuration , I have used https://mailtrap.io/inboxes/ for sending mail and OTP after the user registered.

Basic Flow of the Task :

Mainpage : Go to the default route ('/'); 
There user can Sign-In or Sign-Up 
After Sign-In the user can see there user name and email id that they used for login 
and a logout button for logout the user in the dashboard page , after loggin out the user redirects to the mainpage.
If the user was a new user , they register they're name, email, phn_number and password that creditanls have been stored in the database
after that user can Sign-In.
