# Gig
######Krystal Digital Solution 


## Installation
* Clone Repo
* Install packages

```bash
composer install
```

* Duplicate `.env.example`

```bash
cp .env.example .env
```
###
* Create a database called 'gig'
######
* Update database credentials

* Update the mail server credentials in the .env file  - you can 
  sign-up [here](https://mailtrap.io/) to get your mailtrap test credentials
####


* Generate app key

```bash
php artisan key:generate
```

* Run Migrations

```bash
php artisan migrate --seed
```


[comment]: <> (Check the docs [here]&#40;https://documenter.getpostman.com/view/7185838/TVetaR6x&#41;)
