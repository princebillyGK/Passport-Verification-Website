const {gulp,parallel,src,dest,watch} = require('gulp');
const imagemin= require('gulp-imagemin');
const uglify= require('gulp-uglify');
const sass= require('gulp-sass');
const autoprefixer= require('gulp-autoprefixer');

function msg(cb){
  console.log('Gulp script working');
  cb();
}

function copyhtml(cb){
   src('src/**/*.php')
    .pipe(dest('dist'));
    cb();
}

function imgmin(cb){
   src('src/img/*')
    .pipe(imagemin())
    .pipe(dest('dist/img'));
    cb();
  }

function js(cb){
    src('src/js/*.js')
      .pipe(uglify())
      .pipe(dest('dist/js/*.js'));
      cb();
}

function compilecss(cb){
 src('src/sass/style.scss')
  .pipe(sass())
  .pipe(dest('src/css'))
  .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
    .pipe(dest('dist/css'));
    cb();
  }
  

function copyFont(cb){
  src('src/webfonts/*')
  .pipe(dest('dist/webfonts/'));
  cb();
}

function watchItBabe(cb){
  watch(['src/**/*.php'],copyhtml);
  watch(['src/img/*'],imgmin);
  watch(['src/js/*.js'],js);
  watch(['src/sass/*'],compilecss);
  watch(['src/webfonts/*'],copyFont);
  cb();
}


function createAppDataDir(){
  return src('*.*', {read: false})
        .pipe(dest('dist/appdata/applicant/photo'))
        .pipe(dest('dist/appdata/applicant/NidorBirth'));
}

exports.wt= watchItBabe;
exports.default = parallel(msg,copyFont, copyhtml, imgmin, js, compilecss,createAppDataDir);
exports.js= js;
exports.css= compilecss;
exports.img= imgmin;
exports.html= copyhtml;
exports.font= copyFont;
exports.createdirs= createAppDataDir;

/**/;module.exports = gulp;