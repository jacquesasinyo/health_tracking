<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $exercises = [
            // Abs exercises
            [
                'name' => 'Ab Circles',
                'description' => '1. Lie flat on your back with your knees bent and feet flat on the floor.
2. Place your hands behind your head with elbows pointing outward.
3. Lift your shoulders and upper back off the ground, engaging your core.
4. Make a circular motion with your upper body, keeping your lower back pressed into the floor.
5. Complete 10-12 circles in one direction, then reverse for another 10-12 reps.
6. Focus on the contraction in your abdominal muscles throughout the movement.',
                'muscle_group' => 'abs',
                'image' => 'images/newdemos/abcircles.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'none'
            ],
            [
                'name' => 'Ab Raise',
                'description' => '1. Lie flat on your back with legs extended straight.
2. Place your arms at your sides or under your lower back for support.
3. Engage your core and slowly lift your legs toward the ceiling until they form a 90-degree angle with the floor.
4. Keep your lower back pressed into the floor throughout the movement.
5. Slowly lower your legs back down without letting them touch the floor.
6. Repeat for 12-15 repetitions, focusing on controlled movement.',
                'muscle_group' => 'abs',
                'image' => 'images/newdemos/abraise.gif',
                'difficulty' => 'beginner',
                'equipment' => 'none'
            ],
            [
                'name' => 'Cable Crunch',
                'description' => '1. Attach a rope handle to a high cable pulley.
2. Kneel facing the cable machine, holding the rope with both hands behind your head.
3. Position your hips back over your heels and keep your spine neutral.
4. Contract your abs and pull your elbows down toward your thighs, rounding your back.
5. Focus on crunching with your abs, not pulling with your arms.
6. Hold the contracted position briefly before slowly returning to the starting position.
7. Repeat for 12-15 controlled repetitions.',
                'muscle_group' => 'abs',
                'image' => 'images/newdemos/cablecrunch.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'cable machine'
            ],

            // Chest exercises
            [
                'name' => 'Bench Press',
                'description' => '1. Lie flat on a bench with your feet firmly planted on the ground.
2. Grip the barbell slightly wider than shoulder-width apart.
3. Unrack the barbell and position it directly above your chest with arms extended.
4. Lower the barbell slowly to your mid-chest, keeping elbows at approximately a 45-degree angle.
5. Once the bar lightly touches your chest, push the weight back up to the starting position.
6. Maintain control throughout the movement, focusing on engaging your chest muscles.
7. Complete 8-12 repetitions per set with appropriate weight.',
                'muscle_group' => 'chest',
                'image' => 'images/newdemos/bench.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'barbell, bench'
            ],
            [
                'name' => 'Chest Dips',
                'description' => '1. Position yourself on parallel dip bars with arms fully extended.
2. Lean your torso forward approximately 30 degrees to target the chest.
3. Bend your knees and cross your ankles behind you.
4. Lower your body by bending your elbows until your upper arms are parallel to the floor.
5. Keep your elbows slightly flared out to engage the chest muscles.
6. Push yourself back up to the starting position by extending your arms.
7. Focus on feeling the contraction in your chest muscles.
8. Perform 8-12 repetitions per set.',
                'muscle_group' => 'chest',
                'image' => 'images/newdemos/chestdips (1).gif',
                'difficulty' => 'intermediate',
                'equipment' => 'dip bars'
            ],
            [
                'name' => 'Chest Press Machine',
                'description' => '1. Adjust the seat height so the handles are at mid-chest level.
2. Sit on the machine with your back flat against the pad.
3. Grasp the handles with a full grip, palms facing away from you.
4. Push the handles forward until your arms are extended but not locked.
5. Slowly return to the starting position, allowing a full stretch in your chest.
6. Maintain control during the entire movement.
7. Complete 10-15 repetitions with proper form.',
                'muscle_group' => 'chest',
                'image' => 'images/newdemos/chestpress.gif',
                'difficulty' => 'beginner',
                'equipment' => 'chest press machine'
            ],
            [
                'name' => 'Incline Bench Press',
                'description' => '1. Set an adjustable bench to a 30-45 degree incline.
2. Lie back on the bench with feet flat on the floor.
3. Grip the barbell slightly wider than shoulder width.
4. Unrack the barbell and hold it with arms extended above your chest.
5. Lower the barbell slowly until it touches your upper chest near your clavicles.
6. Push the barbell back up to the starting position.
7. Focus on engaging your upper chest muscles throughout the movement.
8. Complete 8-12 repetitions with appropriate weight.',
                'muscle_group' => 'chest',
                'image' => 'images/newdemos/incline.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'barbell, incline bench'
            ],

            // Back exercises
            [
                'name' => 'Deadlift',
                'description' => '1. Stand with feet hip-width apart, toes under the barbell.
2. Bend at the hips and knees, keeping your back straight.
3. Grip the bar with hands just outside your legs, using an overhand or mixed grip.
4. Keep your chest up and back flat as you drive through your heels.
5. Stand up straight, pulling the bar up along your shins and thighs.
6. At the top, stand tall with shoulders back, but don\'t overextend your back.
7. Reverse the movement by pushing your hips back first, then bending your knees.
8. Keep the bar close to your body during the entire movement.
9. Complete 5-8 repetitions with proper form.',
                'muscle_group' => 'lowerback',
                'image' => 'images/newdemos/dead.gif',
                'difficulty' => 'advanced',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Lat Pulldown',
                'description' => '1. Sit at the lat pulldown machine with thighs secured under the pads.
2. Reach up and grasp the bar with a grip slightly wider than shoulder width, palms facing forward.
3. Keep your chest up and slightly arch your back.
4. Pull the bar down toward your upper chest while squeezing your shoulder blades together.
5. Focus on using your back muscles, not your arms.
6. Slowly extend your arms to return to the starting position with control.
7. Maintain proper posture throughout the movement, avoiding leaning too far back.
8. Complete 10-12 repetitions per set.',
                'muscle_group' => 'lats',
                'image' => 'images/newdemos/latpulldown.gif',
                'difficulty' => 'beginner',
                'equipment' => 'cable machine'
            ],
            [
                'name' => 'Face Pull',
                'description' => '1. Set a cable pulley to slightly above head height and attach a rope handle.
2. Grasp the rope with both hands, palms facing each other.
3. Step back to create tension in the cable, standing with feet shoulder-width apart.
4. Pull the rope toward your face, aiming the ends of the rope at your ears.
5. Keep your elbows high and at shoulder level throughout the movement.
6. Focus on squeezing your shoulder blades together at the end of the movement.
7. Slowly return to the starting position with control.
8. Perform 12-15 repetitions with light to moderate weight.',
                'muscle_group' => 'upperback',
                'image' => 'images/newdemos/facepull.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'cable machine'
            ],
            [
                'name' => 'Seated Row',
                'description' => '1. Sit at a seated row machine with your feet on the platform and knees slightly bent.
2. Grab the handle with both hands, palms facing each other.
3. Keep your back straight and chest up throughout the exercise.
4. Pull the handle toward your lower abdomen while keeping your elbows close to your body.
5. Squeeze your shoulder blades together at the end of the movement.
6. Slowly extend your arms back to the starting position with control.
7. Avoid rounding your back or using momentum to move the weight.
8. Complete 10-12 controlled repetitions.',
                'muscle_group' => 'upperback',
                'image' => 'images/newdemos/seatedrow.gif',
                'difficulty' => 'beginner',
                'equipment' => 'cable machine'
            ],

            // Shoulder exercises
            [
                'name' => 'Lateral Raise',
                'description' => '1. Stand with feet shoulder-width apart, holding dumbbells at your sides.
2. Keep your back straight and core engaged.
3. With a slight bend in your elbows, raise the dumbbells out to your sides.
4. Lift until your arms are parallel to the floor (at shoulder height).
5. Pause briefly at the top of the movement.
6. Lower the weights slowly back to your sides with control.
7. Avoid using momentum or swinging the weights.
8. Complete 12-15 repetitions with light to moderate weight.',
                'muscle_group' => 'shoulders',
                'image' => 'images/newdemos/deltraise.gif',
                'difficulty' => 'beginner',
                'equipment' => 'dumbbells'
            ],
            [
                'name' => 'Shoulder Press',
                'description' => '1. Sit on a bench with back support, holding dumbbells at shoulder height.
2. Position the dumbbells with palms facing forward or facing each other.
3. Keep your core tight and back straight against the bench.
4. Press the dumbbells upward until your arms are fully extended overhead.
5. Avoid locking your elbows at the top of the movement.
6. Lower the weights with control back to shoulder level.
7. Keep the movement smooth and controlled throughout.
8. Perform 8-12 repetitions per set.',
                'muscle_group' => 'shoulders',
                'image' => 'images/newdemos/shoulderp.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'dumbbells'
            ],

            // Leg exercises
            [
                'name' => 'Hack Squat',
                'description' => '1. Position yourself on the hack squat machine with shoulders under the pads.
2. Place your feet shoulder-width apart on the platform.
3. Release the safety bars and lower your body by bending your knees.
4. Keep your back flat against the pad throughout the movement.
5. Lower until your thighs are parallel to the platform or slightly below.
6. Push through your heels to extend your legs and return to the starting position.
7. Keep your knees in line with your toes throughout the movement.
8. Complete 8-12 repetitions with appropriate weight.',
                'muscle_group' => 'quads',
                'image' => 'images/newdemos/hacksquat.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'hack squat machine'
            ],
            [
                'name' => 'Leg Press',
                'description' => '1. Sit on the leg press machine with your back against the padded support.
2. Place your feet shoulder-width apart on the platform, toes slightly pointed outward.
3. Release the safety catches and lower the platform by bending your knees.
4. Lower until your knees form approximately a 90-degree angle.
5. Push through your heels and extend your legs to return to the starting position.
6. Don\'t lock your knees at the top of the movement.
7. Keep your head and back against the pad throughout the exercise.
8. Perform 10-12 controlled repetitions.',
                'muscle_group' => 'quads',
                'image' => 'images/newdemos/legpress.gif',
                'difficulty' => 'beginner',
                'equipment' => 'leg press machine'
            ],
            [
                'name' => 'Romanian Deadlift',
                'description' => '1. Stand holding a barbell in front of your thighs with an overhand grip.
2. Keep your feet hip-width apart and knees slightly bent.
3. Hinge at your hips and push your butt backward while keeping your back straight.
4. Lower the bar along your shins, maintaining the slight bend in your knees.
5. Lower until you feel a stretch in your hamstrings (typically mid-shin level).
6. Keep the bar close to your body throughout the movement.
7. Return to the starting position by driving your hips forward.
8. Focus on squeezing your glutes at the top of the movement.
9. Complete 8-12 repetitions with proper form.',
                'muscle_group' => 'hamstrings',
                'image' => 'images/newdemos/romanian.gif',
                'difficulty' => 'intermediate',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Seated Calf Raise',
                'description' => '1. Sit on the seated calf raise machine with the balls of your feet on the platform.
2. Place your thighs under the knee pads and adjust to a comfortable position.
3. Release the safety lever and lower your heels as far as comfortable.
4. Feel the stretch in your calves at the bottom of the movement.
5. Press through the balls of your feet to raise your heels as high as possible.
6. Squeeze your calf muscles at the top of the movement.
7. Slowly lower back to the starting position with control.
8. Complete 15-20 repetitions for optimal calf development.',
                'muscle_group' => 'calves',
                'image' => 'images/newdemos/seatcalf.gif',
                'difficulty' => 'beginner',
                'equipment' => 'seated calf machine'
            ],
            [
                'name' => 'Standing Calf Raise',
                'description' => '1. Position yourself on a standing calf raise machine with shoulders under the pads.
2. Place the balls of your feet on the platform with heels extending off the edge.
3. Stand up straight and release the safety bar.
4. Lower your heels as far as comfortable, feeling a stretch in your calves.
5. Push through the balls of your feet to raise your heels as high as possible.
6. Hold and squeeze your calves at the top of the movement.
7. Lower back down with control for the next repetition.
8. Complete 15-20 repetitions per set.',
                'muscle_group' => 'calves',
                'image' => 'images/newdemos/standingcalf.gif',
                'difficulty' => 'beginner',
                'equipment' => 'standing calf machine'
            ],

            // Arm exercises
            [
                'name' => 'Hammer Curls',
                'description' => '1. Stand holding dumbbells at your sides with palms facing each other.
2. Keep your upper arms stationary and elbows close to your torso.
3. Curl the weights upward while maintaining the neutral grip (palms facing each other).
4. Focus on contracting your biceps to move the weight, not momentum.
5. Curl until the dumbbells are at shoulder level.
6. Hold briefly at the top and squeeze your biceps.
7. Lower the weights slowly back to the starting position.
8. Complete 10-12 repetitions per set.',
                'muscle_group' => 'biceps',
                'image' => 'images/newdemos/hammer.gif',
                'difficulty' => 'beginner',
                'equipment' => 'dumbbells'
            ],
            [
                'name' => 'Tricep Pushdown',
                'description' => '1. Stand facing a cable machine with a straight bar attachment set at head height.
2. Grab the bar with an overhand grip, hands shoulder-width apart.
3. Keep your upper arms close to your body and perpendicular to the floor.
4. Keeping elbows stationary, use your triceps to push the bar down.
5. Fully extend your arms but don\'t lock your elbows.
6. Squeeze your triceps at the bottom of the movement.
7. Slowly allow the bar to rise back to the starting position.
8. Complete 12-15 controlled repetitions.',
                'muscle_group' => 'triceps',
                'image' => 'images/newdemos/tricepdown.gif',
                'difficulty' => 'beginner',
                'equipment' => 'cable machine'
            ],
            [
                'name' => 'Tricep Rope Pulldown',
                'description' => '1. Attach a rope handle to a high pulley on a cable machine.
2. Stand facing the machine and grab the rope with both hands, palms facing each other.
3. Keep your upper arms close to your sides and elbows bent at 90 degrees.
4. Push the rope downward by extending your elbows, keeping upper arms stationary.
5. At the bottom, split the rope apart slightly to increase triceps contraction.
6. Squeeze your triceps for a moment at full extension.
7. Control the weight as you allow your elbows to bend back to the starting position.
8. Perform 12-15 controlled repetitions.',
                'muscle_group' => 'triceps',
                'image' => 'images/newdemos/triceppull.gif',
                'difficulty' => 'beginner',
                'equipment' => 'cable machine, rope attachment'
            ]
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }
    }
}
