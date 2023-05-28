ifneq (,$(wildcard ./.env))
    include .env
    export
endif


bootstrap:
	docker stop dbsql
	docker run -d --rm -p 3306:3306 --name dbsql -it harianto/mysql
	sleep 3
	docker exec -it dbsql sh -c 'mysql -h 127.0.0.1 -u root -e "create database test;"'
	sudo php -S localhost:80

migrate:
	curl http://localhost/migrations/item.php

fake-data:
	curl http://localhost/migrations/itemfake.php

drop-data:
	docker exec -it dbsql sh -c 'mysql -h 127.0.0.1 -u root -e "use test; truncate table items;"'