const { src, dest, watch, series, parallel }= require('gulp');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const replace = require('gulp-replace');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const concatCss = require('gulp-concat-css');
const browserSync = require('browser-sync');

const app = {
    path : {
        sass : './src/sass',
        css : './src/css',
        js : './src/js',
    },
    files : {
        sass : './src/sass/*.sass',
        css : './src/css/*.css',
        js : './src/js/*.js'
    }
}

const dist = {
    path : {
        css : './docs/css',
        js : './docs/js',
        root : './docs'
    },
    files : {
        css : './docs/css/*.css',
        js : './docs/js/*.js',
        html : './docs/*.html',
    }
}

const dev = {
    bootstrap : {
        css : './node_modules/bootstrap/dist/css/bootstrap.min.css',
        js: './node_modules/bootstrap/dist/js/bootstrap.min.js'
    },
    jquery : './node_modules/jquery/dist/jquery.min.js'
}

function sassTask() {
    return src(app.files.sass)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(app.path.css)
    );
}

function cssTask() {
    return src(app.files.css)
        .pipe(concatCss('styles.min.css'))
        .pipe(postcss([ autoprefixer(), cssnano() ]))
        .pipe(dest(dist.path.css)
    );
}

function jsTask() {
    return src(app.files.js)
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(dest(dist.path.js)
    );
}

function watchTask() {
    browserSync.init({
        proxy: 'localhost/arq-proyect/docs/'
    });
    watch(app.files.sass).on('change', series(
        sassTask,
        cssTask,
        browserSync.reload
    ));
    watch(app.files.js).on('change', series(
        jsTask,
        browserSync.reload
    ));
    watch(dist.files.html).on('change', series(
        browserSync.reload
    ));
}

function cssBootstrapTask(){
    return src(dev.bootstrap.css)
        .pipe(dest(dist.path.css)
    );
}

function jsBootstrapTask(){
    return src(dev.bootstrap.js)
        .pipe(dest(dist.path.js)
    );
}

function jqueryTask(){
    return src(dev.jquery)
        .pipe(dest(dist.path.js)
    );
}

exports.default = watchTask;
exports.init = series(
    cssBootstrapTask,
    jsBootstrapTask,
    jqueryTask
);