# PHP 8.3 OpenFAAS of-watchdog based template

This is largely based on the official [PHP 8 template](https://github.com/openfaas/templates/tree/master/template/php8), changed just enough to work with [of-watchdog](https://github.com/openfaas/of-watchdog). As such most of the documentation from it applies here.


| Modules (by default) |
| ------------- |
| Core, ctype, curl, date, dom, fileinfo, filter, ftp, hash, iconv, json, libxml, mbstring, mysqlnd, openssl, pcre, PDO, pdo_mysql, pdo_sqlite, Phar, posix, readline, Reflection, session, SimpleXML, sodium, SPL, sqlite3, standard, tokenizer, xml, xmlreader, xmlwriter, zlib |

## Changes versus official template
- Since this is based on of-watchdog running in HTTP mode, it means that you will have direct access to superglobal variables such as `$_GET`, `$_POST`, etc.
- Similarly, you will be able to manipulate response headers yourself.

## Usage:

```shell
faas-cli template pull https://github.com/b-t-927/php8-of-watchdog
faas-cli new my-function --lang php8-of-watchdog
```

## Extra Extensions

If you need to install PHP extensions, you can add the necessary commands in the `php-extension.sh` file within your function directory which will be run at build time. An example which installs the `pgsql` and `pdo_pgsql` extensions can be found at [php-extension.example.sh](php-extension.example.sh).

You can refer to the PHP Docker image [documentation](https://github.com/docker-library/docs/blob/master/php/README.md#how-to-install-more-php-extensions) for additional instructions on the installation and configuration of extensions.

## Private Composer Auth

In some cases, you may need to use private composer repositories - using the `faas-cli` you can pass in
a build argument during build, for example;

```
faas-cli build -f ./functions.yml \
  --build-arg COMPOSER_AUTH='{"bitbucket-oauth": {"bitbucket.org": {"consumer-key": "xxxxxxxx","consumer-secret": "xxxxxxx"}}}'
```
See more information [here](https://getcomposer.org/doc/05-repositories.md#git-alternatives).

That way you can pass in tokens for Composer, if necessary, GitHub tokens to get around rate-limit issues.
