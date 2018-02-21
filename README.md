# wp-newmenu
It adds NewMenu in the admin panel of WordPress

## Installation instructions

In your **composer.json** add the following clauses in each section:

- "repositories":
```
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
 ```
        "composer/installers": "1.*",
        "txinparta/wp-newmenu": "1.*"
 ```
 
-  "extra"
```
        "installer-paths": {
            "public/wp-content/plugins/{$name}/": ["type:wordpress-plugin"]
        }
```


## Switch version

You can switch the version of this plugin after been installed in your wordpress. Ex.
```
composer require txinparta/wp-newmenu:v1.0
composer require txinparta/wp-newmenu:v1.1
```
