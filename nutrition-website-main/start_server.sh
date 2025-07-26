#!/bin/bash

# Start Laravel server for testing
cd "/Volumes/WD Elements/web projects/health/nutrition-website-main"

echo "Starting Laravel development server..."
echo "Visit: http://localhost:8000/foods"
echo "Press Ctrl+C to stop the server"

php artisan serve --host=127.0.0.1 --port=8000
