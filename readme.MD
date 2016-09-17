## ninjadevs.io

 - https://docs.docker.com/compose/wordpress

 ```
 docker-compose up -d
 ```

  - http://0.0.0.0/
  
  - http://0.0.0.0:800/

## Local Environment

This actions and credentials are only valid for your `Local Environment`.

```
docker-machine
```

```
docker-machine ps
```

```
docker
```

```
docker ps
```

```
docker exec -it ninjadevsio_db_1 bash
```

```
mysql -u wordpress -pwordpress wordpress
```

```
mysqldump -u wordpress -pwordpress wordpress > /var/lib/mysql/wordpress_`date +%Y-%m-%d-%H.%M.%S`.sql
```
