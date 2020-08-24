<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Installation

01. git clone https://github.com/miarsiddique/tech-round.git
02. cp .env.example .env
03. Set mysql connectivity
04. Goto localhosst/phpmyadmin 
05. Create a db for example:- tech-round
06. Run composer install
07. Run php artisan migrate
08. Run php artisan serve
09. Goto brower type on URL: http://localhost:8000
10. Base path opened
    > Default users list showing
11. Navbar for add new user link available
12. Users list link availabe

## .env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:nFHD1BxZRgTPjwFTkmtyutTD1WfOIczS7be5P7oWEjA=
APP_DEBUG=true
APP_URL=http://localhost:6300

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tech-round
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

