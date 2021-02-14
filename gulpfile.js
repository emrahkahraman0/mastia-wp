const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');

// Sass Task
function scssTask(){
    return src('app/sass/mastia.scss', { sourcemaps: false })
        .pipe(sass())
        .pipe(postcss([cssnano()]))
        .pipe(dest('dist/css', { sourcemaps: '.' }));
}

// JavaScript Task
function jsTask(){
    return src('app/js/mastia.js', { sourcemaps: false })
      .pipe(terser())
      .pipe(dest('dist/js', { sourcemaps: '.' }));
}

// Default Gulp Task
exports.default = series(
    scssTask,
    jsTask,
    watchTask
);

// Watch Task
function watchTask(){
    watch(['app/**/*.scss', 'app/**/*.js'], series(scssTask, jsTask));
}