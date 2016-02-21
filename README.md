# kerk
hhvm / hack minimal mvc

This is a very lightweight starting point mvc to be used with Hack.  This is purely code organisation / design pattern - the Model has currently been left as a blank class - so that you're able to do what you like with it.

There is a php version of this lightweight mvc - in the php_version branch.

We use Composer, and our code organisation is such that the core of Kerk sits in the src directory.  We hook directly into composer autoloader.

To get started do a :

```
composer install
```

###run the hvvm server

```
hhvm -m server -p 8080
```

You can now access on localhost:8080/?route=home

###routing

```
?route=controller/method/var

```
