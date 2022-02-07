# PracticaCrud

## Instrucciones Acceso Crus
Para acceder a este Crud de una Agenda de contactos, lo primero de todo que tiene que hacer el usuario es hacer login con su correo y contraseña. 

Actualmente en la agenda hay 2 usuarios:
 - Usuario 1:
    - Email: jmateo@cifpfbmoll.eu
    - Password: secretos
 - Usuario 1:
    - Email: randion@cifpfbmoll.eu
    - Password: secretos

Una vez hecho el login aparecera la Home donde da la bienvenida al Usuario. 
Hacemos click en la imagen y nos lleva a la agenda en si.

Cuando estamos en Nuestra agenda solo podemos Crear, editar o eliminar un nuevo contacto especifico si tenemos el rol de admin(En nuestro caso solo lo tiene el Usuario 1) y cerrar sesion si queremos.






## Contenido .env

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:dpcR7ZiAk97RH6eu7TRA2nLdp2nwQGtVRM4R5Pie608=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=51.178.152.213
DB_PORT=5432
DB_DATABASE=jmateo_crud_laravel
DB_USERNAME=jmateo_usr
DB_PASSWORD=abc123.

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
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

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
