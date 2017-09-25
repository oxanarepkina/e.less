# How to work with Laravel projects on github

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Installing

First of all Clone the repo to Your local directory:
     
```
git clone https://github.com/oxanarepkina/e.less.git
```         

Next step: Run composer & npm to install all dependencies:

```
composer install
npm install 
```

Create database for the project. To do this you should create a database named **'e-less'** and run sql code saved by reference

```
https://gist.github.com/oxanarepkina/80d47050de6abb198c9c6cedb3424088
```

Create your .env from .env.example

```
cp .env.example .env
```

Update your .env (change database connection properly)

```
DB_CONNECTION=mysql          
DB_HOST=127.0.0.1            
DB_PORT=3306                 
DB_DATABASE=e-less       
DB_USERNAME=root             
DB_PASSWORD=secret    
```

Generate application key

```
php artisan key:generate  
```

Run the command to start server

```
php artisan serve 
```

Done! Laravel development server started on **http://localhost:8000**



