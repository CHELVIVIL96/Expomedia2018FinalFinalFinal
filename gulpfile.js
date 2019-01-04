// var gulp = require('gulp'),
//     sass = require('gulp-sass'),
//     concat = require('gulp-concat'),
//     uglify = require('gulp-uglify'),
//     rename = require('gulp-rename'),
//     livereload = require('gulp-livereload');


// gulp.task('sass', function () {
//     return gulp.src('./assets/scss/styles.scss').pipe(sass.sync({
//         outputStyle: 'compressed'
//     }).on('error', sass.logError)).pipe(livereload()).pipe(gulp.dest('./assets/css'));
// });
// gulp.task('watch', function () {
//     gulp.watch('./assets/scss/*.scss', ['sass']);
// });



var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    livereload = require('gulp-livereload');
   
var  browserSync = require('browser-sync').create();

gulp.task('sass', function () {
    return gulp.src('./assets/scss/styles.scss')
    .pipe(sass.sync({
        outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(browserSync.stream())
    .pipe(livereload()).pipe(gulp.dest('./assets/css'));
    
});

gulp.task('watch', function () {
    gulp.watch('./assets/scss/*.scss', ['sass']);
});

gulp.task('server',['sass'], function(){
    browserSync.init({
        server:'./index.php'
    });

    gulp.watch('./assets/scss/styles.scss',['sass']);
    gulp.watch('./index.php').on('change',browserSync.reload);

});

gulp.task('default', ['server']);


// var gulp = require('gulp');
// var sass = require('gulp-sass');
// var bs = require('browser-sync').create();

// gulp.task('browser-sync', ['sass'], function() {
//     bs.init({
//         server: {
//             baseDir: "http://localhost:3000"
//         },
//     });
// });

// gulp.task('sass', function () {
//     return gulp.src('./assets/scss/styles.scss')
//                 .pipe(sass())
//                 .pipe(gulp.dest('./assets/css'))
//                 .pipe(bs.reload({stream: true}));
// });

// gulp.task('watch', ['browser-sync'], function () {
//     gulp.watch("./assets/scss/styles.scss", ['sass']);
//     gulp.watch("*.html").on('change', bs.reload);
// });
