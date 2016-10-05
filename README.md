welaika/wp-cli-db2utf8
===============

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
