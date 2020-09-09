const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const prefix = require('gulp-autoprefixer');
const imagemin = require ("gulp-imagemin");
const sourcemaps = require ("gulp-sourcemaps");
const log = require("fancy-log");
const concat = require("gulp-concat");
const babel = require("gulp-babel");
const rename = require("gulp-rename");
const cleanCSS = require("gulp-clean-css");
const cache = require("gulp-cache");

function style() {
        return gulp.src('./src/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .on('end', function() { log('Almost There ...'); })
        .pipe(prefix("last 3 versions"))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./final/css'))
        .pipe(rename({ suffix: ".min" }))
        .pipe(cleanCSS( {compatibility: 'ie8'} ))
        .pipe(gulp.dest('./final/css'))
        .pipe(browserSync.stream());
    }

function images() {
    return gulp.src('./src/images-source/**/*.{jpg, jpeg, png, gif}')
    .pipe(imagemin())
    .pipe(gulp.dest('./final/images-finished/'));
}

function js() {
    return gulp.src('./src/js/*.js', { sourcemaps: true })
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('build.min.js'))
        .pipe(gulp.dest('./final/js/min', { sourcemaps: true }))
        .pipe(browserSync.stream())
        .on('end', function() { log('Done!'); });
}

function watch() {
    browserSync.init({
        proxy: "localhost/resolute",
        notify: true
    });
    gulp.watch('./src/scss/**/*.scss', gulp.series(style, cacheClear, reload));
    gulp.watch('./images-source/**/*.{jpg, jpeg, png, gif}', images);
    gulp.watch("**/*.php").on("change", browserSync.reload);
    gulp.watch('./src/js/**/*.js', js);
    }

function reload(done) {
        browserSync.reload();
        done();
    }

function cacheClear(done) {
    return cache.clearAll(done)
}

exports.style = style;
exports.images = images;
exports.js = js;
exports.watch = watch;
exports.reload = reload;
exports.cacheClear = cacheClear;