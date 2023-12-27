# 환경설정, 라우팅, 뷰바인딩, 템플릿엔진

## php 설치
```bash
# v5.6, x64 thread-safe, zip
# add path %PHP_HOME%
php -v
```


## php 옵션설정
```bash
cd %PHP_HOME%
cp ./php.ini-development ./php.ini
vi ./php.ini
  ...
  extension_dir = "ext"         // 주석해제
  ...
  extension=php_mbstring.dll    // 주석해제
  extension=php_openssl.dll     // 주석해제
  ...
```


## composer 설치
```bash
composer --version
```


## 프로젝트 생성
```bash
composer create-project --prefer-dist laravel/laravel <PROJECT>
cd <PROJECT>
php artisan --version
php artisan serve
```


## 라우팅 테스트
```bash
vi /routes/web.php
vi /resources/views/hello.blade.php
```


## 뷰바인딩 테스트
```bash
vi /routes/web.php
vi /resources/views/param.blade.php
```


## 템플릿엔진 테스트
```bash
vi /routes/web.php
vi /resources/views/child.blade.php
vi /resources/views/layouts/parent.blade.php
vi /resources/views/layouts/footer.blade.php
```
