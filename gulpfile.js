const gulp = require("gulp");
const browsersync = require("browser-sync");
const phpConnect = require('gulp-connect-php');

//Php connect
function connectsync() {
    phpConnect.server({
        port: 8000,
        keepalive: true,
        base: "./"
    }, function (){
        browsersync({
            proxy: '127.0.0.1:8000'
        });
    });
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}

// Watch files
function watchFiles() {
    gulp.watch("assets/css/**/*.css", gulp.series(browserSyncReload));
    // gulp.watch("assets/sass/**/*.scss");
    // gulp.watch("assets/scss/**/*.sass");
    
    // gulp.watch("assets/js/*.js", gulp.series(browserSyncReload));
    gulp.watch("./*.php", gulp.series(browserSyncReload));
}

const watch = gulp.parallel([watchFiles, connectsync]);
exports.default = watch;