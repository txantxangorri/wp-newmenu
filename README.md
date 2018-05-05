# wp-newmenu
It adds NewMenu in the admin panel of WordPress

## Installation instructions

In your **composer.json** add the following clauses in each section:

- "repositories":
```json
 {
    "type": "composer",
    "url": "https://packagist.org"
 },
 {
    "type": "vcs",
    "url": "https://github.com/txinparta/wp-newmenu.git"
 }
``` 
 
- "require"
 ```json
     "composer/installers": "1.*",
     "txinparta/wp-newmenu": "1.*"
 ```
 
-  "extra"
```json
     "installer-paths": {
          "public/wp-content/plugins/{$name}/": ["type:wordpress-plugin"]
     }
```
In this example, we have plugins hosted inside public/wp-content/plugins, as it is explained in txinparta/wordpresspj. You can change the path if you need it.

Now you can run `composer update` in your console and ready!


## Switch version

You can also switch the version of this plugin after been installed in your wordpress. Ex.
```bash
composer require txinparta/wp-newmenu:v1.0
composer require txinparta/wp-newmenu:v1.1
```
