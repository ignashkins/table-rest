ifneq (,$(wildcard ./.env))
    include .env
    export
endif

up:
	docker run -d --rm -p 3306:3306 --name dbsql -it harianto/mysql

down:
	docker stop dbsql