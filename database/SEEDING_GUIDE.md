# Database Seeding Guide

This guide explains how to seed your carFlow database with test data for development purposes.

## Available Seeders

### Individual Seeders
- `CarTypesTableSeeder` - Seeds car types (Sedan, SUV, Hatchback, etc.)
- `FuelTypesTableSeeder` - Seeds fuel types (Petrol, Diesel, Electric, etc.)
- `MakersTableSeeder` - Seeds car manufacturers (Toyota, Honda, BMW, etc.)
- `ModelsTableSeeder` - Seeds car models for each manufacturer
- `StatesTableSeeder` - Seeds US states
- `CitiesTableSeeder` - Seeds cities for each state
- `CarsTableSeeder` - Seeds 50 cars with realistic data
- `CarsFeaturesTableSeeder` - Seeds features for each car
- `CarImagesTableSeeder` - Seeds image paths for each car
- `FavouriteCarsTableSeeder` - Seeds favourite cars for test user

### Alternative Seeders
- `AlternativeCarsTableSeeder` - Uses factories to create 100 cars with more realistic faker data

## Running Seeders

### Fresh Migration with Seeding
```bash
php artisan migrate:fresh --seed
```

### Run All Seeders
```bash
php artisan db:seed
```

### Run Specific Seeder
```bash
php artisan db:seed --class=CarTypesTableSeeder
```

### Run Alternative Seeder (for more cars)
```bash
php artisan db:seed --class=AlternativeCarsTableSeeder
```

## Test Data Overview

After running the main seeders, you'll have:
- **11 Users** (1 test user + 10 factory users)
- **10 Car Types** (Sedan, SUV, Hatchback, etc.)
- **7 Fuel Types** (Petrol, Diesel, Electric, etc.)
- **20 Car Makers** (Major automotive brands)
- **35 Car Models** (Popular models for each maker)
- **20 States** (US states)
- **30 Cities** (Multiple cities per state)
- **50 Cars** (Realistic car listings)
- **50 Car Feature Sets** (One per car)
- **~200 Car Images** (3-5 images per car)
- **7 Favourite Cars** (For the test user)

## Factory Usage

The `CarFactory` can be used to create additional test cars:

```php
// In tinker or seeder
Car::factory(25)->create(); // Creates 25 additional cars
```

## Test User Credentials

- **Email**: test@example.com
- **Password**: password (default Laravel factory password)

## Notes

- All seeders respect foreign key constraints and are run in the correct order
- VIN numbers are auto-generated with proper format
- Prices range from $15,000 to $80,000
- Car years range from 2015 to 2024
- Phone numbers and addresses use realistic faker data
- Image paths are placeholder paths (actual images not included)
