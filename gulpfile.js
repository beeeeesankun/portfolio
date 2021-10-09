var gulp = require('gulp');
var sass = require('gulp-sass'); //Sassコンパイル
var plumber = require('gulp-plumber'); //エラー時の強制終了を防止
var notify = require('gulp-notify'); //エラー発生時にデスクトップ通知する
var sassGlob = require('gulp-sass-glob'); //@importの記述を簡潔にする
var browserSync = require( 'browser-sync' ); //ブラウザ反映
var postcss = require('gulp-postcss'); //autoprefixerとセット
var autoprefixer = require('autoprefixer'); //ベンダープレフィックス付与
var cssdeclsort = require('css-declaration-sorter'); //css並べ替え
var mqpacker = require('css-mqpacker');

// scssのコンパイル
gulp.task('sass', function() {
return gulp
.src( './src/scss/*.scss' )
.pipe( plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }) )//エラーチェック
.pipe( sassGlob() )//importの読み込みを簡潔にする
.pipe( sass({
outputStyle: 'expanded' //expanded, nested, campact, compressedから選択
}) )
.pipe( postcss([ autoprefixer(
{
// ☆IEは11以上、Androidは4.4以上
// その他は最新2バージョンで必要なベンダープレフィックスを付与する
"overrideBrowserslist": ["last 2 versions", "ie >= 11", "Android >= 4"],
cascade: false}
) ]) )
.pipe(postcss([mqpacker()]))
.pipe( postcss([ cssdeclsort({ order: 'alphabetical' }) ]) )//プロパティをソートし直す(アルファベット順)
.pipe(gulp.dest('./dist/css'));//コンパイル後の出力先
});

// 保存時のリロード
gulp.task( 'browser-sync', function(done) {
browserSync.init({

//ローカル開発
server: {
baseDir: "./dist",
index: "index.html"
}
});
done();
});

gulp.task( 'bs-reload', function(done) {
browserSync.reload();
done();
});


// 監視
gulp.task( 'watch', function(done) {
gulp.watch( './src/scss/**/*.scss', gulp.task('sass') ); //sassが更新されたらgulp sassを実行
gulp.watch('./src/scss/**/*.scss', gulp.task('bs-reload')); //sassが更新されたらbs-reloadを実行
gulp.watch( './dist/js/**/*.js', gulp.task('bs-reload') ); //jsが更新されたらbs-relaodを実行
gulp.watch('./dist/**/*.html',gulp.task('bs-reload') ) ; //ejsが更新されたらgulp-ejsを実行
// gulp.watch('./ejs/**/*.ejs',gulp.task('bs-reload') ) ; //ejsが更新されたらbs-reloadを実行
});

// default
gulp.task('default', gulp.series(gulp.parallel('browser-sync', 'watch')));



