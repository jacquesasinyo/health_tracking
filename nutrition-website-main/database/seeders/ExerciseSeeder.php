<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $exercises = [
            // Chest exercises
            [
                'name' => 'Bench Press',
                'description' => '1. Lie flat on a bench with your feet firmly planted on the ground. 2. Grip the barbell slightly wider than shoulder-width apart. 3. Unrack the barbell and position it directly above your chest with arms extended. 4. Lower the barbell slowly to your mid-chest, keeping elbows at approximately a 45-degree angle. 5. Once the bar lightly touches your chest, push the weight back up to the starting position. 6. Maintain control throughout the movement, focusing on engaging your chest muscles. 7. Complete 8-12 repetitions per set with appropriate weight.',
                'muscle_group' => 'chest',
                'image' => 'images/newdemos/bench.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'barbell, bench'
            ],
            [
                'name' => 'Chest Dips',
                'description' => '1. Position yourself on parallel dip bars with arms fully extended. 2. Lean your torso forward approximately 30 degrees to target the chest. 3. Bend your knees and cross your ankles behind you. 4. Lower your body by bending your elbows until your upper arms are parallel to the floor. 5. Keep your elbows slightly flared out to engage the chest muscles. 6. Push yourself back up to the starting position by extending your arms. 7. Focus on feeling the contraction in your chest muscles. 8. Perform 8-12 repetitions per set.',
                'muscle_group' => 'chest',
                'image' => 'images/newdemos/chestdips (1).gif',
                'difficulty' => 'intermediate',
                'equipment' => 'dip bars'
            ],
            [
                'name' => 'Chest Press',
                'description' => '1. Sit on a chest press machine with your back firmly against the pad. 2. Grip the handles at chest level with palms facing forward. 3. Push the handles forward in a smooth, controlled motion. 4. Extend your arms fully without locking out your elbows. 5. Slowly return to the starting position with control. 6. Focus on squeezing your chest muscles throughout the movement.',
                'muscle_group' => 'chest',
                'image' => 'images/newdemos/chestpress.gif',
                'difficulty' => 'beginner',
                'equipment' => 'chest press machine'
            ],
            
            // Abs exercises
            [
                'name' => 'Ab Circles',
                'description' => '1. Lie flat on your back with your knees bent and feet flat on the floor. 2. Place your hands behind your head with elbows pointing outward. 3. Lift your shoulders and upper back off the ground, engaging your core. 4. Make a circular motion with your upper body, keeping your lower back pressed into the floor. 5. Complete 10-12 circles in one direction, then reverse for another 10-12 reps. 6. Focus on the contraction in your abdominal muscles throughout the movement.',
                'muscle_group' => 'abs',
                'image' => 'images/newdemos/abcircles.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'none'
            ],
            [
                'name' => 'Ab Raise',
                'description' => '1. Lie flat on your back with legs extended straight. 2. Place your arms at your sides or under your lower back for support. 3. Engage your core and slowly lift your legs toward the ceiling until they form a 90-degree angle with the floor. 4. Keep your lower back pressed into the floor throughout the movement. 5. Slowly lower your legs back down without letting them touch the floor. 6. Repeat for 12-15 repetitions, focusing on controlled movement.',
                'muscle_group' => 'abs',
                'image' => 'images/newdemos/abraise.gif',
                'difficulty' => 'beginner',
                'equipment' => 'none'
            ],
            [
                'name' => 'Cable Crunch',
                'description' => '1. Attach a rope handle to a high cable pulley. 2. Kneel facing the cable machine, holding the rope with both hands behind your head. 3. Position your hips back over your heels and keep your spine neutral. 4. Contract your abs and pull your elbows down toward your thighs, rounding your back. 5. Focus on crunching with your abs, not pulling with your arms. 6. Hold the contracted position briefly before slowly returning to the starting position. 7. Repeat for 12-15 controlled repetitions.',
                'muscle_group' => 'abs',
                'image' => 'images/newdemos/cablecrunch.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'cable machine'
            ],
            
            // Legs exercises
            [
                'name' => 'Deadlift',
                'description' => '1. Stand with feet hip-width apart, barbell over mid-foot. 2. Bend at hips and knees to grip the bar with hands just outside your legs. 3. Keep your chest up, shoulders back, and spine neutral. 4. Drive through your heels and extend hips and knees simultaneously. 5. Stand tall with shoulders back, squeezing glutes at the top. 6. Lower the bar by pushing hips back first, then bending knees. 7. Complete 5-8 repetitions with proper form.',
                'muscle_group' => 'hamstrings',
                'image' => 'images/newdemos/dead.gif',
                'difficulty' => 'advanced',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Romanian Deadlift',
                'description' => '1. Stand holding a barbell with feet hip-width apart. 2. Keep knees slightly bent and chest up. 3. Push your hips back and lower the bar by hinging at the hips. 4. Keep the bar close to your legs throughout the movement. 5. Feel the stretch in your hamstrings as you lower. 6. Drive your hips forward to return to standing position. 7. Focus on squeezing your glutes at the top.',
                'muscle_group' => 'hamstrings',
                'image' => 'images/newdemos/deadlift2.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Glute Bridge',
                'description' => '1. Lie on your back with knees bent and feet flat on the floor. 2. Place your arms at your sides for stability. 3. Squeeze your glutes and push through your heels to lift your hips. 4. Create a straight line from knees to shoulders at the top. 5. Hold the position for 1-2 seconds, focusing on glute contraction. 6. Slowly lower back to the starting position. 7. Repeat for 15-20 repetitions.',
                'muscle_group' => 'glutes',
                'image' => 'images/newdemos/booty.gif',
                'difficulty' => 'beginner',
                'equipment' => 'none'
            ],
            
            // Shoulders exercise
            [
                'name' => 'Lateral Raises',
                'description' => '1. Stand with feet shoulder-width apart, holding dumbbells at your sides. 2. Keep a slight bend in your elbows and maintain good posture. 3. Raise the weights out to your sides until they reach shoulder height. 4. Focus on lifting with your shoulders, not your arms. 5. Slowly lower the weights back to the starting position. 6. Complete 12-15 repetitions with controlled movement.',
                'muscle_group' => 'shoulders',
                'image' => 'images/newdemos/deltraise.gif',
                'difficulty' => 'beginner',
                'equipment' => 'dumbbells'
            ]
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }
    }
}
