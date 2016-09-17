## ninjadevs.io

 - https://docs.docker.com/compose/wordpress

 ```
 docker-compose up -d
 ```

## Web Product

  - http://0.0.0.0

## Database Management

  - http://0.0.0.0:800

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
