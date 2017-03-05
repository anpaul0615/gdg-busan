# 데이터베이스

## 데이터베이스 환경을 sqlite 로 설정
```bash
vi .env
  ...
  DB_CONNECTION=sqlite  # add
  ...
  ;DB_CONNECTION=mysql  # delete
  ;DB_HOST=127.0.0.1
  ;DB_PORT=3306
  ;DB_DATABASE=homestead
  ;DB_USERNAME=homestead
  ;DB_PASSWORD=secret
  ...
```


## 데이터베이스 파일생성
```bash
touch /database/database.sqlite
```


## 데이터베이스에 마이그레이션 파일 적용
```bash
php artisan migrate
```


## 테이블 확인
```bash
php artisan tinker
>> DB::select("SELECT name FROM sqlite_master WHERE type='table' ORDER BY name")
```


## 데이터베이스 스키마 추가
```bash
php artisan make:migration create_persons_table --create Persons
# --create :: create table that does not yet exist

vi 0000_00_00_000000_create_persons_table.php
php artisan migrate:refresh
```


## 데이터베이스 스키마 수정
```bash
php artisan make:migration alter_persons_table --table Persons
# --table :: add/change existing table columns

vi 0000_00_00_000000_alter_persons_table.php
php artisan migrate:refresh
```


## 테이블 확인
```bash
php artisan tinker
>> DB::select("SELECT name FROM sqlite_master WHERE type='table' ORDER BY name")
>> DB::select("SELECT name FROM Persons")
>> DB::select("PRAGMA table_info(Persons)")
```
