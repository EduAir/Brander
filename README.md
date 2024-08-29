
# Brand Management CRUD Application

This application is a CRUD system developed with Laravel to manage a list of brands. The application allows creating, reading, updating, and deleting brands, as well as sorting them based on specific criteria, such as rating. It also supports image uploads for each brand and displays brand lists based on geolocation.

## Features

- **Complete CRUD**: Manage brands with create, read, update, and delete operations.
- **Data Validation**: Ensure data consistency with input validation.
- **Image Upload**: Users can upload images for brands.
- **Geolocation**: Configure brand lists based on the user's country, determined by the `CF-IPCountry` header.
- **Rating Sorting**: Brands can be sorted by their rating in descending order.

## Prerequisites

- PHP 8.0 or higher
- Composer
- MySQL or another compatible database

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/EduAir/Brander.git
cd brands-crud
```

### 2. Install dependencies

Install PHP dependencies via Composer:

```bash
composer install
```

### 3. Configure the environment

Copy the `.env.example` file to `.env` and configure your environment variables, especially the database connection:

```bash
cp .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

### 4. Set up the database

Run the migrations to create the necessary tables:

```bash
php artisan migrate
```

### 5. Create a symbolic link for storage

Create a symbolic link to make the image storage folder publicly accessible:

```bash
php artisan storage:link
```

### 6. Start the application

You can start the application using one of the following methods:

#### Method 1: Laravel Server

```bash
php artisan serve
```

#### Method 2: Docker

I have an issue on my windows machine in other to dockerise the project . I hope that it won't be fatal for me :(


## Usage

### API Endpoints

- `GET /api/brands`: Retrieve the list of all brands.
- `GET /api/brands/{id}`: Retrieve a specific brand by its ID.
- `POST /api/brands`: Create a new brand. Required fields are `brand_name`, `brand_image` (file), and `rating`.
- `PUT /api/brands/{id}`: Update an existing brand by its ID.
- `DELETE /api/brands/{id}`: Delete a brand by its ID.
- `GET /api/toplist`: Retrieve a list of brands based on the user's geolocation.

Click on the link Bellow for more details : [here](https://documenter.getpostman.com/view/6223339/2sAXjJ7Yt7)


## Testing

You can test the application using tools like Postman to interact with the API endpoints. Ensure that POST requests include the required fields and files for image uploads.

