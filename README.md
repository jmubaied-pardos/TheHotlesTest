
## The Hotels Test Documentation

The test entails send by param the ID of any hotel that’s in database so the project returns:

- The basic data of the selected hotel
- Registered rooms
- Users who have booked rooms at the hotel

## Step 1 Create database

thn_test.sql is SQL script to create Database and user to manage database with necessary privileges. 

## Step 2 Environment

Rename .env.example to .env

### Step 3 Composer

Composer Install 

## Step 4 Lunch Migrations and Seed

Lunch:

php artisan migrate --seed

or 

php artisan migrate:fresh --seed

This step creates basic structure of database and populate this with fake data but well related.


## Step 5 Raise server

Lunch:

php artisan serve


## End Point

http://localhost:8000/api/hotels/1

The last parameter contains the ID of the Hotel of which we want to see the information of its rooms and lodged customers
