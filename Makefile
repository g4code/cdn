TITLE = [cdn]

all: install

clean-composer-lock:
	@rm -rf composer.lock \
	&& /bin/echo -e "${TITLE} deleted composer.lock"

install:
	@/bin/echo -e "${TITLE} downloading composer ..." \
	&& curl -sS https://getcomposer.org/installer | php \
	&& /bin/echo -e "${TITLE} installing dependencies..." \
	&& php composer.phar install \
	&& /bin/echo -e "${TITLE} dependencies installed"

self-update:
	@ /bin/echo -e "${TITLE} running composer self update" \
	&& php composer.phar self-update"

unit-tests:
	@/bin/echo -e "${TITLE} unit test suite started..." \
	&& ./vendor/bin/phpunit -c tests/unit/phpunit.xml --coverage-html tests/unit/coverage

update:
	@/bin/echo -e "${TITLE} update dependencies..." \
	&& php composer.phar update \
	&& /bin/echo -e "${TITLE} dependencies updated"

.PHONY: all
.PHONY: clean-composer-lock
.PHONY: install update self-update
.PHONY: test test-group