# Инструкция по разворачиванию

## 🛠️ Требования к окружению  
### Для развертывания проекта необходимы:

- PHP 8.2+
- PHP extensions: fileinfo, zip, pdo_{dbDriver}
- Composer

## 1️⃣ Клонирование репозитория
```bash
git clone git@github.com:ShiroyamaY/test-product-crud.git
cd test-product-crud
```

## 2️⃣ Установка зависимостей

### Backend (Laravel):
```bash
composer install
```

## 3️⃣ Настройка .env
Скопируйте файл `.env.example` в `.env`:
```bash
cp .env.example .env
```
## 4️⃣ Миграции и начальные данные
### Запустите миграции и сидеры:
```bash
php artisan migrate --seed
```

## 5️⃣ Генерация ключа приложения
```bash
php artisan key:generate
```

## 6️⃣  Запуск сервера:
```bash
php artisan serve
```
