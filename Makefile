composer-install:
	@rm -rf vendor && docker run -it -w /data -v ${PWD}:/data:delegated -v ~/.composer:/root/.composer:delegated --entrypoint composer --rm registry.gitlab.com/grahamcampbell/php:7.4-base install --no-suggest

composer-update:
	@rm -rf vendor composer.lock && docker run -it -w /data -v ${PWD}:/data:delegated -v ~/.composer:/root/.composer:delegated --entrypoint composer --rm registry.gitlab.com/grahamcampbell/php:7.4-base install

phpunit:
	@rm -f bootstrap/cache/*.php && docker run -it -w /data -v ${PWD}:/data:delegated --entrypoint vendor/bin/phpunit --rm registry.gitlab.com/grahamcampbell/php:7.4-base

box-compile:
	@docker run -it -w /data -v ${PWD}:/data:delegated --rm registry.gitlab.com/grahamcampbell/box:3.8 compile
