# Dockerfile for php-v8 PHP extension and it dependencies

## Usage

While this image is supposed to be a service image, you can give a try to `d8` shell by running
`docker run -it phpv8/php-v8 bash -c "php test.php"`

## Purpose

This image supposed to be used to provide a complete environment to get starting with [php-v8](https://github.com/phpv8/php-v8).
We don't build image for every v8 tag, so if you are urgently need some specific version and you are not up to fork
and setup your own docker hub repo, feels free to open an issue for that. 

## License

This repo content is licensed under the [MIT license](http://opensource.org/licenses/MIT).
