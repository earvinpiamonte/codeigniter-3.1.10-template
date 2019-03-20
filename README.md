# Welcome to my Codeigniter template

This is a simple template I created to be able to start a Codeigniter project in just a few minutes.

This reduces the amount of time I spend in creating a new Codeigniter project. Before, I used to download Codeigniter on their website every time I need to create a new project. And then I update the config, htaccess, route etc and install packages I need individually.

I then decided to create a simple template and just pull the template whenever I start a new Codeigniter project. Cool!

## Features
- Codeigniter 3.1.10.
- Apache only (you need to configure on your own on nginx).
- Bootstrap 4.3.1.
- SCSS.
- Auto minify HTML, CSS and JavaScript files.
- Optimized images.
- Auto generate distribution files using **gulp-watch** or **gulp-serve**.
- Auto reload browser when made changes on PHP files under `application/` folder.
- Automatically applies changes to the browser when changes made on assets.
- Automatic setting of `$config['base_url']`.
- Automatic rewrite **www** and/ or **http**.
- Assets expiration with versioning.

## Development dependencies
I really like using SCSS as my CSS preprocessor on every project. Before, I use Less but now I use SCSS. Hahaha, very punny. No? Okay here are the dependencies:
- [Node.js](https://nodejs.org/en/)
- [Sass](http://sass-lang.com/install)

## Download
Open up your terminal and make sure you are on the document root of your web server. For eg. **/var/www/html/** or **c:/wamp/www/** then do:
```
git clone https://gitlab.com/earvinpiamonte/codeigniter-3.1.10-template.git
```

## Install packages

Install packages needed for the project to run and the packages to be used on development.

```
cd codeigniter-3.1.10-template/
npm install
```

## Create distribution files

Do:

```
gulp
```

## Watch (optional)

You can also watch the `src` files and then it will automatically apply changes to the `dist` files.

Do:

```
gulp watch
```

## Serve (optional but cool)

You can also auto reload your browser/ inject styles whenever you make changes on the `src` files and the *.php* files inside `application` then it will automatically apply changes to your `dist` files.

Check first the `gulpfile.js` on line number 19 and change the value for **proxy** to your preference.

eg. default:
```javascript
browserSync.init({
        proxy: 'localhost/codeigniter-3.1.10-template/'
});
```

On the same folder `src/` do:

```
gulp serve
```

## DONE!
> Don't let me drown
> -- Bring Me the Horizon