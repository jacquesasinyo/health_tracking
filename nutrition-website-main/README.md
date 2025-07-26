# Health Tracker - Combined Laravel Application

A comprehensive health and fitness tracking web application that combines workout planning and nutrition monitoring into a single platform.

## Features

### 🏋️ Workout Tracker
- **Interactive Muscle Map**: Clickable human body diagram (front and back views)
- **Targeted Exercises**: Click on muscle groups to see relevant exercises
- **Exercise Details**: Visual demonstrations and step-by-step instructions
- **Stretch Routines**: Complementary stretches for each muscle group
- **Difficulty Levels**: Exercises categorized by beginner, intermediate, advanced
- **Equipment Information**: Shows required equipment for each exercise

### 🍎 Nutrition Tracker
- **Comprehensive Food Database**: Detailed nutritional information for various foods
- **Turkish Language Support**: Food items with Turkish descriptions
- **Search Functionality**: Quick search through food items
- **Detailed Nutrition Facts**: Calories, proteins, fats, vitamins, minerals
- **User Management**: Authentication system for managing food entries
- **Visual Interface**: Food images and intuitive card-based layout

## Technology Stack
- **Backend**: Laravel 11
- **Frontend**: Bootstrap 5, Font Awesome icons
- **Database**: SQLite (can be configured for other databases)
- **Languages**: PHP, JavaScript, HTML, CSS

## Installation & Setup

1. **Database Migration**:
   ```bash
   php artisan migrate
   ```

2. **Seed Database**:
   ```bash
   php artisan db:seed
   ```

3. **Start Development Server**:
   ```bash
   php artisan serve
   ```

## Usage

1. **Dashboard**: Navigate between workout and nutrition sections
2. **Workout Planning**: 
   - Click on muscle groups in the interactive diagram
   - View exercises with visual demos and instructions
   - Check complementary stretches
3. **Nutrition Tracking**:
   - Search for foods in Turkish or English
   - View detailed nutritional breakdowns
   - Track calories, macronutrients, and micronutrients

This combined application provides users with a complete health tracking solution, allowing them to plan workouts based on targeted muscle groups and monitor their nutrition intake in one convenient platform.
