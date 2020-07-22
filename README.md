# Laravel 6 test application

A little test application based on Laravel 6.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them

```
git + docker + docker-compose
```

### Installing

```
git clone git@github.com:fzberlin23/laravel-6.git 
docker-compose up --build
docker-compose -f docker-compose.yml -f docker-compose-oneshot.yml run --rm composer install
docker-compose -f docker-compose.yml -f docker-compose-oneshot.yml run --rm artisan migrate
```

### Updating composer packages

```
docker-compose -f docker-compose.yml -f docker-compose-oneshot.yml run --rm composer update
```

### Run the application

```
docker-compose up
Visit http://localhost:8001 and http://localhost:8001/products
```
