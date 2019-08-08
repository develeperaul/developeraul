const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const htmlMin = require('gulp-htmlmin');
const tinypng = require('gulp-tinypng-compress');
const imagemin = require('gulp-imagemin');

gulp.task('image', (done) =>
    gulp.src('src/image/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/image'))
        
);

gulp.task('minify-css', function(done){
    return gulp.src('./src/css/*.css')
    .pipe(cleanCSS({
        compatibility: 'ie8'
    }))
    .pipe(gulp.dest('dist/css'))
    done()
})

gulp.task('move-js', function(done){
    return gulp.src('./src/js/*.js')
    .pipe(cleanCSS({
        compatibility: 'ie8'
    }))
    .pipe(gulp.dest('dist/js'))
    done()
})

gulp.task('htmlmin', function(done){
    return gulp.src('./src/*.html')
    .pipe(htmlMin({ collapseWhitespace: true }))
    .pipe(gulp.dest('dist/'))
    done()
})

gulp.task('fonts', function(done){
    return gulp.src('./src/fonts/**/*')
    .pipe(gulp.dest('dist/fonts'))
    done()
})

gulp.task('tinypng', function (done) {
    gulp.src('./src/img/**/*.{png,jpg,jpeg}')
        .pipe(tinypng({
            key: 'XsmDqsNsL775F1dkm2lkbRZMSWDpksT6',
        }))
        .pipe(gulp.dest('dist/img'));
        done();
});

gulp.task('default', gulp.series('minify-css', 'move-js', 'htmlmin', 'fonts', 'image', function(done) {
    done()
}));