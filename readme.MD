## ninjadevs.io

[![NinjaDevs.IO](https://drive.google.com/uc?export=download&id=0B1pDFiUHXp9WMWZ4cW8yQ1p2bjg)](http://ninjadevs.io/)

 - https://docs.docker.com/compose/wordpress

 ```
 docker-compose up -d
 ```

## Web Product

  - http://0.0.0.0

## Database Management

  - http://0.0.0.0:800

```
Server:     db
Username:   wordpress
Password:   wordpress
```

## Local Environment

This actions and credentials are only valid for Our `Local Environment`.

```
docker-compose
```

```
docker-compose ps

Name                        Command               State           Ports
-----------------------------------------------------------------------------------------
ninjadevsio_db_1          docker-entrypoint.sh mysqld      Up      0.0.0.0:3306->3306/tcp
ninjadevsio_wordpress_1   /entrypoint.sh apache2-for ...   Up      0.0.0.0:80->80/tcp
phpmyadmin                /run.sh phpmyadmin               Up      0.0.0.0:800->80/tcp
```

```
docker
```

```
docker ps
```

## SSH the DB Container

```
docker exec -it ninjadevsio_db_1 bash
```

### Manual Database Backup

```
mysql -u wordpress -pwordpress wordpress
```

```
mysqldump -u wordpress -pwordpress wordpress > /var/lib/mysql/wordpress_`date +%Y-%m-%d-%H.%M.%S`.sql
```

### On Our local machine

```
ls -la ~/Sites/ninjadevs.io/mysql
```

## atom wp-config.php

```
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'db:3306');
```

## Manually Backup Remote Site

```
ssh {REMOTE_USERNAME}@ninjadevs.io

rm -fr BACKUPS

mysqldump -u {DB_USERNAME} -p -h {DB_HOST} {DB_NAME} | gzip > BACKUPS/ninjadevsio_`date +%F-%H-%M-%S`.sql.gz

cp -Rp ninjadevs.io BACKUPS/ninjadevs.io_`date +%F-%H-%M-%S`

exit
```

## Rsync your local uploads folder

```
rsync -chavzP --stats {REMOTE_USERNAME}@ninjadevs.io:/home/ninjadevsio/ninjadevs.io/wp-content/uploads  /Users/{LOCAL_USERNAME}/Sites/ninjadevs.io/ninjadevs.io/wp-content
```

## Get your backup own copy

```
rsync -chavzP --stats {REMOTE_USERNAME}@ninjadevs.io:/home/ninjadevsio/BACKUPS  /Users/{LOCAL_USERNAME}/Sites/ninjadevs.io/BACKUPS/remote
```
