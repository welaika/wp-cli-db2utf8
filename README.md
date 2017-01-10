welaika/wp-cli-db2utf8
===============

[![Build Status](https://travis-ci.org/welaika/wp-cli-db2utf8.svg?branch=master)](https://travis-ci.org/welaika/wp-cli-db2utf8)

Alter WP tables char set and collation to UTF8.

Used when default UTF8-mb4 is not an option for you staging or production
environment - MT Grid anyone?

Use at your own risk and **only on new installations** with fresh database:
altering tables this way could lead to unwanted data loss.

### Install

    wp package install welaika/wp-cli-db2utf8

### Use

Use it from inside the root of a WordPress installation

    NAME

      wp db2utf8

    DESCRIPTION

      Convert database's tables in UTF8. Used to downgrade the UTF8-mb4 encoding

    SYNOPSIS

      wp db2utf8


## Author

made with ❤️ and ☕️ by [weLaika](http://dev.welaika.com)

## License

(The MIT License)

Copyright © 2017 [weLaika](http://dev.welaika.com)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the ‘Software’), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED ‘AS IS’, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
