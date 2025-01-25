sh:
	docker compose exec laravel sh

build:
	docker compose build --build-arg USER_ID=$(id -u) --build-arg GROUP_ID=$(id -g)
