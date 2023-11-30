PARAM :=

up:
	docker compose up -d
down:
	docker compose down
build:
	docker compose build --no-cache --force-rm
exec:
	docker compose exec ulms-app bash
serve:
	php artisan serve
