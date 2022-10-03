const gulp = require('gulp');
const del = require('del');
const csso = require('gulp-csso');
const uglify = require('gulp-uglify-es').default;
const rename = require('gulp-rename');

// Directories
const dirPath = {
    src: './resources',
    dist: './public',
    assets: '/assets',
    assets_dev: '/assets_dev'
};

// Paths
const srcAssets = dirPath.src + dirPath.assets;
const distAssets = dirPath.dist + dirPath.assets;
const distAssetsDev = dirPath.dist + dirPath.assets_dev;

gulp.task('delete', function () {
    return del([distAssets, distAssetsDev]);
});

gulp.task('css', function () {
    return gulp.src(srcAssets + '/css/**/*.*css')
        .pipe(gulp.dest(distAssetsDev + '/css'))
        .pipe(csso())
        .pipe(gulp.dest(distAssets + '/css'));
});

gulp.task('js', function () {
    return gulp.src(srcAssets + '/js/**/*.*js')
        .pipe(gulp.dest(distAssetsDev + '/js'))
        .pipe(uglify())
        .pipe(gulp.dest(distAssets + '/js'));
});

gulp.task('js-views', function () {
    return gulp.src(dirPath.src + '/views/**/*.*js')
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest(distAssetsDev + '/js'))
        .pipe(uglify())
        .pipe(gulp.dest(distAssets + '/js'));
});

gulp.task('files', function () {
    return gulp.src([
        srcAssets + '/fonts/**/*.*',
        srcAssets + '/images/**/*.*',
        srcAssets + '/webfonts/**/*.*'
    ], {base: srcAssets})
        .pipe(gulp.dest(distAssetsDev))
        .pipe(gulp.dest(distAssets));
});

gulp.task('watch', function () {
    gulp.watch(srcAssets + '/css/**/*.*css', gulp.series('css'));
    gulp.watch(srcAssets + '/js/**/*.*js', gulp.series('js'));
    gulp.watch(dirPath.src + '/views/**/*.*js', gulp.series('js-views'));
    gulp.watch([dirPath.src + '/fonts/**/*.*', dirPath.src + '/images/**/*.*', dirPath.src + '/webfonts/**/*.*'], gulp.series('files'));
});

gulp.task('build', gulp.series('delete', 'css', 'js', 'js-views', 'files', function (done) {
    done();
}));
