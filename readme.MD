## ninjadevs.io

[![NinjaDevs.IO](https://drive.google.com/uc?export=download&id=0B1pDFiUHXp9WMWZ4cW8yQ1p2bjg)](http://ninjadevs.io/)

 - [WordPress docker-compose Docs](https://docs.docker.com/compose/wordpress)

```
docker-compose up -d
```

## Web Product

  - [0.0.0.0](http://0.0.0.0)

## Database Management

  - [0.0.0.0:800](http://0.0.0.0:800)

```
Server:     db
Username:   wordpress
Password:   wordpress
```

## Local Theme Development

```
cd ~/Sites/ninjadevs.io/ninjadevs.io/wp-content/themes/ninjadevs

npm install

bower install

gulp watch
```

### Browsersync + Gulp

 - [localhost:3000](http://localhost:3000)

## Check Your Local Environment

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

### Manually Backup Our Container DB

```
mysql -u wordpress -pwordpress wordpress
```

```
mysqldump -u wordpress -pwordpress wordpress > /var/lib/mysql/wordpress_`date +%Y-%m-%d-%H.%M.%S`.sql

exit
```

### Check Your Local Environment Configuration

```
ls -la ~/Sites/ninjadevs.io/mysql
```

## Local WordPress Configuration

Set the right ```wp-config.php``` for your local environment:

```
cp ~/Sites/ninjadevs.io/ninjadevs.io/wp-config-development.php ~/Sites/ninjadevs.io/ninjadevs.io/wp-config.php

atom ~/Sites/ninjadevs.io/ninjadevs.io/wp-config.php
```

## Manually Backup Our Remote Site

```
ssh {REMOTE_USERNAME}@ninjadevs.io

rm -fr BACKUPS
mkdir BACKUPS

mysqldump -u {REMOTE_USERNAME} -p -h {REMOTE_DB_HOST} {REMOTE_DB_NAME} | gzip > /home/ninjadevsio/BACKUPS/ninjadevsio_`date +%F-%H-%M-%S`.sql.gz

cp -Rp ninjadevs.io BACKUPS/ninjadevs.io_`date +%F-%H-%M-%S`

exit
```

# Rsync wp-content

 - [explainshell.com: rsync -chavzP --stats](http://www.explainshell.com/explain?cmd=rsync+-chavzP+--stats)

```
rsync -chavzP --stats \
{REMOTE_USERNAME}@ninjadevs.io:/home/ninjadevsio/ninjadevs.io/wp-content/uploads  \
/Users/{LOCAL_USERNAME}/Sites/ninjadevs.io/ninjadevs.io/wp-content
```

# Uploads Folder

```
rsync -chavzP --stats \
{REMOTE_USERNAME}@ninjadevs.io:/home/ninjadevsio/ninjadevs.io/wp-content \
/Users/{LOCAL_USERNAME}/Sites/ninjadevs.io/ninjadevs.io
```

# BACKUPS Folder

```
rsync -chavzP --stats \
{REMOTE_USERNAME}@ninjadevs.io:/home/ninjadevsio/BACKUPS \
/Users/{LOCAL_USERNAME}/Sites/ninjadevs.io/ninjadevs.io
```
