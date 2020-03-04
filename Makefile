.PHONY: install help test
.DEFAULT_GOAL = help

composer.lock: composer.json
	composer update

vendor: composer.lock
	composer install

install: vendor ## Installe les composant dont le projet a besoin.

test: ## Réalise les tests unitaires pour valider le bon fonctionnement complet.
	php ./vendor/bin/phpunit --stop-on-failure

essai:
	composer install
	echo faire les tests maintenant.