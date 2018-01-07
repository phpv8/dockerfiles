# Dockerfile for Google's V8 JavaScript Engine

## Usage

While this image is supposed to be a service image, you can give a try to `d8` shell by running
`docker run -it pinepain/libv8 /opt/libv8/d8`

All `libv8` files are located under `/opt/libv8` directory.

To fetch specific `libv8` version, use docker image tagged with that version.

## Purpose

This image supposed to be used for [php-v8](https://github.com/pinepain/php-v8). I don't build image for every v8 tag, so
if you are urgently need some specific version and you are not up to fork and setup your own docker hub repo, feels free
to open an issue for that. 

## Build arguments:

```
is_debug: false
is_official_build: true
is_component_build: true
is_cfi: false
is_clang: false
v8_use_external_startup_data: false
treat_warnings_as_errors: false
use_custom_libcxx: false 
use_sysroot: false
use_gold: false
use_allocator_shim: false
```

## License

This repo content is licensed under the [MIT license](http://opensource.org/licenses/MIT).
