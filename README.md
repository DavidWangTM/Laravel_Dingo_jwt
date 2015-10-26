## Installation

### Step 1: Clone the repo
```
git clone https://github.com/DavidWangTM/Laravel_Dingo_jwt.git
```

### Step 2: Prerequisites
```
cp .env.example .env
composer install
php artisan migrate
php artisan db:seed
php artisan key:generate
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:generate
```

### Step 3: Serve
```
php artisan serve
```

### Setp 4:jwt-auth token
```
http://localhost:8000/api/dogs?token=(get_token)
```