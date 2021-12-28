install:
	composer install
brain-games:
	./bin/brain-games
autoload:
	composer dump-autoload
chmod:
	chmod +x bin/brain-progression
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	./bin/brain-even
brain-calc:
	./bin/brain-calc
brain-gcd:
	./bin/brain-gcd
brain-progression:
	./bin/brain-progression