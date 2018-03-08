V8 = 6.6.313
PHP = 7.2
PHP_REF = v0.6.0
PHP_V8 = v0.2.2
DOCKER = docker
NAME = pinepain/php-v8

all: build-all

build-all: build-latest build-stable
push-all: push-latest push-stable

latest: push-latest
stable: push-stable

build-stable:
	$(DOCKER) build --build-arg PHP=$(PHP) \
	                --build-arg V8=$(V8) \
	                --build-arg PHP_REF=$(PHP_REF) \
	                --build-arg PHP_V8=$(PHP_V8) \
	                -t $(NAME):$(PHP_V8) .

build-latest:
	$(DOCKER) build --build-arg PHP=$(PHP) \
	                -t $(NAME):latest .

push-stable: build-stable
	$(DOCKER) push $(NAME):$(PHP_V8)

push-latest: build-latest
	$(DOCKER) push $(NAME):latest

clean: clean-latest clean-stable

clean-stable:
	$(DOCKER) rmi $(NAME):$(PHP_V8)

clean-latest:
	$(DOCKER) rmi $(NAME):latest
