The Copper Skeleton is a minimal and empty [Copper][1] project which you can base your new projects on.

Requirements
------------
- PHP 7.0 or higher

Installation
------------

```
composer create-project rceman/copper_skeleton app
```

[1]: https://github.com/rceman/copper

Usage
------------

Configure a web server like Apache to run the application.

#### Apache with mod_php/PHP-CGI
The **optimized configuration** to get your application running under Apache is:
```
<VirtualHost *:80>
    ServerName domain.tld
    ServerAlias www.domain.tld

    DocumentRoot /var/www/project/public
    <Directory /var/www/project/public>
        AllowOverride None
        Order Allow,Deny
        Allow from All

        FallbackResource /index.php
    </Directory>

    ErrorLog /var/log/apache2/project_error.log
    CustomLog /var/log/apache2/project_access.log combined
</VirtualHost>
```
