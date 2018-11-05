<h1 align="center">
    <a href="http://demos.krajee.com" title="Krajee Demos" target="_blank">
        <img src="http://kartik-v.github.io/bootstrap-fileinput-samples/samples/krajee-logo-b.png" alt="Krajee Logo"/>
    </a>
    <br>
    Yii 2 Practical-A Project Template
    <hr>
    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DTP3NZQ6G2AYU"
       title="Donate via Paypal" target="_blank">
        <img src="http://kartik-v.github.io/bootstrap-fileinput-samples/samples/donate.png" alt="Donate"/>
    </a>
</h1>

[![Latest Stable Version](https://poser.pugx.org/kartik-v/yii2-app-practical-a/v/stable.svg)](https://packagist.org/packages/kartik-v/yii2-app-practical-a) 
[![License](https://poser.pugx.org/kartik-v/yii2-app-practical-a/license.svg)](https://packagist.org/packages/kartik-v/yii2-app-practical-a)
[![Total Downloads](https://poser.pugx.org/kartik-v/yii2-app-practical-a/downloads.svg)](https://packagist.org/packages/kartik-v/yii2-app-practical-a) 
[![Monthly Downloads](https://poser.pugx.org/kartik-v/yii2-app-practical-a/d/monthly.png)](https://packagist.org/packages/kartik-v/yii2-app-practical-a)
[![Daily Downloads](https://poser.pugx.org/kartik-v/yii2-app-practical-a/d/daily.png)](https://packagist.org/packages/kartik-v/yii2-app-practical-a)

Yii 2 Practical-A Project Template is a skeleton Yii 2 application based on the 
[yii2-advanced template](https://github.com/yiisoft/yii2-app-advanced/) best for 
developing complex Web applications with multiple tiers. The template allows a 
**practical** method to directly access the frontend from the app root and a simplified way to access backend.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Why yii2-practical-a?
---------------------

After installing an `app` in the yii2-advanced application you normally would access the
frontend and backend by:

```
http://domain/app/frontend/web
http://domain/app/backend/web
```

However, in many **practical** scenarios (especially on shared and single domain hosts) one 
would want their users to directly access frontend and backend as:

```
http://domain/app
http://domain/app/backend
```

The `yii2-app-practical-a` enables you to achieve just that by carefully moving and rearranging the 
bootstrap files and web components of frontend to work directly out of the app root and backend out
of the `backend`. The `frontend/web` and `backend/web` folders are entirely eliminated and one can 
directly access the application frontend this way:

```
http://domain/app
```

and backend this way

```
http://domain/app/backend
```

All other aspects of the app configuration remain the same as the **yii2-advanced** app. The `common`, and `console` 
will remain as is. The frontend config, assets, models, controllers, views, widgets and components, will still reside within 
the `frontend` directory. The backend config, assets, models, controllers, views, widgets and components, will still reside within 
the `backend` directory. It is just the web access that is moved out to app root for frontend and to the backend root folder for 
backend.

SOME KEY ADDITIONS
-------------------

1. The template has some security preconfigured for users with Apache web servers. It has a default `.htaccess` security configuration setup.
2. The template has prettyUrl enabled by default and the changes have been made to `.htaccess` as well as `urlManager`
   component config in the common config directory.
3. The template has isolated cookie settings for backend and frontend so that you can seamlessly access frontend and backend from same client. 
   The config files includes special `identity` and `csrf` cookie parameter settings for backend. Edit it according to your needs if necessary.

Detailed documentation can be referred at [docs/guide/README.md](docs/guide/README.md).

DIRECTORY STRUCTURE
-------------------

```
/
    /                    contains the frontend entry script, favicon, and robots.txt.
    assets/              contains frontend application runtime web assets such as JavaScript and CSS
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    /                    contains the backend entry script, favicon, and robots.txt.
    assets/              contains the backend application runtime web assets such as JavaScript and CSS
    assets_b/            contains web assets and scripts used by backend application
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains web assets and scripts used by frontend application
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```