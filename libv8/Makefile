V8 = 6.6.313
DOCKER = docker
NAME = phpv8/libv8

all: build-all

build-all: build-latest build-stable
push-all: push-latest push-stable

latest: push-latest
stable: push-stable

build-stable:
	$(DOCKER) build --build-arg V8=$(V8) \
	                -t $(NAME):$(V8) .

build-latest:
	$(DOCKER) build --build-arg V8=$(V8) \
	                -t $(NAME):latest .

push-stable: build-stable
	$(DOCKER) push $(NAME):$(V8)

push-latest: build-latest
	$(DOCKER) push $(NAME):latest

clean: clean-latest clean-stable

clean-stable:
	$(DOCKER) rmi $(NAME):$(V8)

clean-latest:
	$(DOCKER) rmi $(NAME):latest
