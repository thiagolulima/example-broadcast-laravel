# Conteúdo desenvolvido na playlist sobre Broadcast no Laravel - APP em real time.

** [Link Video Aulas](https://www.youtube.com/watch?v=RHV6aN2bsR8&list=PL5o2Kk3hauP_4_0-hzGJXpXVlY20n-Xlo) **


## Configure seu banco de dados no arquivo .env
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=seudb
DB_USERNAME=root
DB_PASSWORD=
```
## Configure a fila de processamento e broadcast driver no arquivo .env
```
BROADCAST_DRIVER=pusher
QUEUE_CONNECTION=database
```
## Configure as chaves secrets do pusher conforme ensinado nas aulas no arquivo .env
```
PUSHER_APP_ID=seuid
PUSHER_APP_KEY=seuappkeypublico
PUSHER_APP_SECRET=seuappkeyprivado
PUSHER_APP_CLUSTER=mt1
```
## Rode os comandos no terminal
```
composer install
php artisan migrate
php artisan db:seed
php artisan key:generate
npm install
npm run dev
php artisan serve --port=80
php artisan websockets:serve
php artisan queue:work --daemon --tries=5
```

