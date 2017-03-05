# 어플리케이션 설정, 컨트롤러, 레이아웃, 세션

## 어플리케이션 설정
```bash
# Global-Config
vi /config/~
# Language-Config
vi /resources/lang/en/~
vi /resources/lang/ko/~
```


## 컨트롤러 작성
```bash
php artisan make:controller HomeController
vi /routes/web.php
vi /app/Http/Controllers/HomeController.php
```


## 레이아웃 적용
```bash
vi /resources/views/layouts/app.blade.php
vi /resources/views/layouts/partial/navigation.blade.php
vi /resources/views/layouts/partial/footer.blade.php
vi /resources/views/home.blade.php
```


## 세션 (일반로그인,세션로그인)
```bash
php artisan make:migration create_users_table.php
php artisan make:controller UsersController
php artisan make:controller SessionsController
vi /routes/web.php
vi /app/Http/Controllers/UsersController.php
vi /app/Http/Controllers/SessionsController.php
```


## 소셜세션 (토큰로그인)
```bash
# 모듈 설치
composer require "laravel/socialite"
# 모듈 등록
vi /config/app.php
# 서비스 추가
vi /config/services.php
vi /.env
# 컨트롤러 작성
php artisan make:controller SocialController
vi /routes/web.php
vi /app/Http/Controllers/SocialController.php
# 데이터베이스 스키마 수정
php artiasn make:migration alter_users_table --table users
vi /database/migrations/0000_00_00_000000_alter_users_table.php
php artiasn migrate:refresh
```
