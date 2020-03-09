.PHONY: install help test run
.DEFAULT_GOAL = help

composer.lock: composer.json
	composer update

vendor: composer.lock
	composer install

install: vendor ## Installe les composants dont le projet a besoin.

test: ## Réalise les tests unitaires pour valider le bon fonctionnement complet.
	php ./vendor/bin/phpunit --stop-on-failure

help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-10s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

run: install
	php bin/console server:run
