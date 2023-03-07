composer-install:
	@docker run -it -w /data -v ${PWD}:/data:delegated --entrypoint composer --rm registry.gitlab.com/grahamcampbell/php:7.4-base install

composer-update:
	@docker run -it -w /data -v ${PWD}:/data:delegated --entrypoint composer --rm registry.gitlab.com/grahamcampbell/php:7.4-base update

phpunit:
	@docker run -it -w /data -v ${PWD}:/data:delegated --entrypoint vendor/bin/phpunit --rm registry.gitlab.com/grahamcampbell/php:7.4-base

box-compile:
	@docker run -it -w /data -v ${PWD}:/data:delegated --rm registry.gitlab.com/grahamcampbell/box:4.3 compile
