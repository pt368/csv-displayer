# CSV Displayer
This is a quick application that allow user to show a csv data in datatable 

## Features

- Search
- Sort Columns
- Pagination
- Change number of row per items
## Potential features to implement
- Add landing for displaying csv file upload before
- Add options to choose datatable and chart (chartjs can be intergrate)
- Add support api url
- Add support SQL query

## Installation

This application run on laravel 8, jquery with datatable.net plugin

Install the dependencies 

```sh
composer install
```
Create .env file from .env.example, fill out database connection and run migrate table csv to track which csv was upload, and support future features
```sh
php artisan migrate
```
Start php serve to use
```sh
php artisan serve
```
For dev install dev js package and compile app.js app.css file
```sh
npm install
npm run dev
```
For watching js and css file
```sh
npm run watch
```

