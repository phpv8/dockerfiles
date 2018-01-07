# Dockerfile for Google's V8 JavaScript Engine


## Usage

While this image is supposed to be a service image, you can give a try to `d8` shell by running
`docker run -it pinepain/libv8 /opt/libv8/d8`

All libv8 files are located under `/opt/libv8` directory which has a `/opt/libv8-X.Y` soft-link where X and Y are major
and minor libv8 versions.

To use specific libv8 version, use full v8 version as a tag.

Build arguments:

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

This repo content is licensed under the [MIT license](http://opensource.org/licenses/MIT).
