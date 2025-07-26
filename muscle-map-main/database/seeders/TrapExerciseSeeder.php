<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class TrapExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $exercises = [
            // Trap exercises
            [
                'name' => 'Barbell Shrug',
                'description' => '1. Stand with feet shoulder-width apart, holding a barbell in front of you with an overhand grip.
2. Keep your arms fully extended, shoulders back, and maintain a neutral spine.
3. Elevate your shoulders directly upward as high as possible toward your ears.
4. Hold the contracted position at the top for 1-2 seconds.
5. Lower the weight back down slowly with control.
6. Avoid rolling your shoulders forward or backward during the movement.
7. Focus on using only your traps to move the weight.
8. Complete 10-12 repetitions with appropriate weight.',
                'muscle_group' => 'traps',
                'image' => 'images/exercises/barbell_shrug.jpg',
                'difficulty' => 'beginner',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Dumbbell Shrug',
                'description' => '1. Stand upright holding a dumbbell in each hand with palms facing your body.
2. Let your arms hang straight down at your sides.
3. Keep your back straight and core engaged throughout the movement.
4. Elevate your shoulders straight up toward your ears as high as possible.
5. Hold the contraction at the top for 1-2 seconds.
6. Lower the weights back down with control to the starting position.
7. Maintain a neutral head position, looking straight ahead.
8. Perform 12-15 repetitions with a controlled tempo.',
                'muscle_group' => 'traps',
                'image' => 'images/exercises/dumbbell_shrug.jpg',
                'difficulty' => 'beginner',
                'equipment' => 'dumbbells'
            ],
            [
                'name' => 'Rack Pull',
                'description' => '1. Set up a barbell in a power rack at knee height or slightly below.
2. Stand with feet shoulder-width apart, toes under the bar.
3. Bend at the hips and grab the bar with an overhand or mixed grip.
4. Keep your chest up and back flat as you pull the weight.
5. Drive through your heels and stand up straight, pulling your shoulders back.
6. At the top, focus on squeezing your traps while holding the weight.
7. Lower the weight back to the starting position with control.
8. Complete 6-8 repetitions with heavy weight for optimal trap development.',
                'muscle_group' => 'traps',
                'image' => 'images/exercises/rack_pull.jpg',
                'difficulty' => 'advanced',
                'equipment' => 'barbell, power rack'
            ],
            [
                'name' => 'Farmer\'s Walk',
                'description' => '1. Select two heavy dumbbells or kettlebells and place them on either side of you.
2. Squat down and grip the weights firmly in each hand.
3. Stand up straight with good posture, keeping your shoulders back and down.
4. Begin walking forward with controlled, even steps.
5. Keep your core tight and maintain proper posture throughout the movement.
6. Walk for a predetermined distance or time (30-60 seconds).
7. Focus on keeping your traps engaged during the entire walk.
8. Place the weights down with control when finished.
9. Rest briefly and repeat for 3-4 sets.',
                'muscle_group' => 'traps',
                'image' => 'images/exercises/farmers_walk.jpg',
                'difficulty' => 'intermediate',
                'equipment' => 'dumbbells or kettlebells'
            ],
            [
                'name' => 'Face Pull',
                'description' => '1. Set a cable pulley to upper chest or face height and attach a rope handle.
2. Grasp the rope with both hands, palms facing inward.
3. Step back to create tension in the cable with feet shoulder-width apart.
4. Pull the rope toward your face, separating your hands as you pull.
5. Focus on squeezing your rear delts and upper traps at the end of the movement.
6. Your elbows should be high and wide at the end position.
7. Hold the contracted position briefly, then slowly return to the starting position.
8. Maintain upright posture throughout the exercise.
9. Perform 12-15 repetitions with controlled form.',
                'muscle_group' => 'traps',
                'image' => 'images/exercises/face_pull_traps.jpg',
                'difficulty' => 'intermediate',
                'equipment' => 'cable machine, rope attachment'
            ]
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }
    }
}