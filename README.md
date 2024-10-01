# PHP 8.3 OpenFAAS of-watchdog based template

This is largely based on the official [PHP 8 template](https://github.com/openfaas/templates/tree/master/template/php8), changed just enough to work with [of-watchdog](https://github.com/openfaas/of-watchdog). As such most of the documentation from it applies here.

## Changes
- Since this is based on of-watchdog running in HTTP mode, it means that you will have direct access to variables such as `$_GET`, `$_POST`, etc.
- Similarly, you will be able to manipulate response headers yourself.

| Modules (by default) |
| ------------- |
| Core, ctype, curl, date, dom, fileinfo, filter, ftp, hash, iconv, json, libxml, mbstring, mysqlnd, openssl, pcre, PDO, pdo_mysql, pdo_sqlite, Phar, posix, readline, Reflection, session, SimpleXML, sodium, SPL, sqlite3, standard, tokenizer, xml, xmlreader, xmlwriter, zlib |

## Usage:

```shell
faas-cli template pull https://github.com/bruceigt/php8-of-watchdog
```


