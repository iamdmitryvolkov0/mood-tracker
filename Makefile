up:
	docker compose up -d

sh:
	docker compose exec laravel bash

fix:
	./vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.php

analyze:
	./vendor/bin/phpstan analyse --memory-limit=2G
