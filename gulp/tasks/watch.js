module.exports =()=>{
    $.gulp.task('watch',()=>{
        $.gulp.watch('assets/styl/**/*.styl',$.gulp.series('stylus'))
    });
}