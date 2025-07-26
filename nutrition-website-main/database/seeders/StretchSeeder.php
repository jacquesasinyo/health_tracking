<?php

namespace Database\Seeders;

use App\Models\Stretch;
use Illuminate\Database\Seeder;

class StretchSeeder extends Seeder
{
    public function run(): void
    {
        $stretches = [
            // Chest stretches
            [
                'name' => 'Doorway Chest Stretch',
                'description' => '1. Stand in a doorway with your arm extended against the door frame. 2. Place your forearm against the frame at shoulder height. 3. Step forward through the doorway until you feel a stretch in your chest. 4. Hold the position while breathing deeply. 5. Switch arms and repeat on the other side.',
                'muscle_group' => 'chest',
                'image' => null,
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            
            // Shoulder stretches
            [
                'name' => 'Cross-Body Shoulder Stretch',
                'description' => '1. Stand with your feet shoulder-width apart. 2. Bring one arm across your body at chest level. 3. Use your opposite hand to gently pull your arm closer to your chest. 4. Hold the stretch while keeping your shoulders relaxed. 5. Switch arms and repeat on the other side.',
                'muscle_group' => 'shoulders',
                'image' => null,
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            
            // Biceps stretches
            [
                'name' => 'Wall Bicep Stretch',
                'description' => '1. Stand next to a wall with your arm extended against it. 2. Place your palm flat against the wall at shoulder height. 3. Slowly turn your body away from the wall until you feel a stretch in your bicep. 4. Keep your arm straight and pressed against the wall. 5. Hold the position and then switch sides.',
                'muscle_group' => 'biceps',
                'image' => null,
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            
            // Triceps stretches
            [
                'name' => 'Overhead Tricep Stretch',
                'description' => '1. Raise one arm overhead and bend your elbow, bringing your hand toward your upper back. 2. Use your opposite hand to gently pull your elbow toward the center. 3. Feel the stretch along the back of your upper arm. 4. Keep your torso upright and avoid arching your back. 5. Hold and then switch arms.',
                'muscle_group' => 'triceps',
                'image' => null,
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            
            // Hamstring stretches
            [
                'name' => 'Standing Hamstring Stretch',
                'description' => '1. Stand and place one heel on a raised surface like a step or bench. 2. Keep your leg straight and your toes pointing up. 3. Lean forward from your hips until you feel a stretch in the back of your thigh. 4. Keep your back straight throughout the stretch. 5. Hold and then switch legs.',
                'muscle_group' => 'hamstrings',
                'image' => null,
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            
            // Glute stretches
            [
                'name' => 'Seated Figure-4 Stretch',
                'description' => '1. Sit in a chair and place your right ankle on your left knee. 2. Gently press down on your right knee with your hand. 3. Lean forward slightly to deepen the stretch in your glutes. 4. Keep your back straight throughout the movement. 5. Hold and then switch sides.',
                'muscle_group' => 'glutes',
                'image' => null,
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            
            // Leg stretches
            [
                'name' => 'Standing Quad Stretch',
                'description' => '1. Stand on one leg and bend your other knee, bringing your heel toward your glutes. 2. Grab your ankle with your hand and gently pull. 3. Keep your knees close together and your standing leg slightly bent. 4. Feel the stretch in the front of your thigh. 5. Use a wall for balance if needed, then switch legs.',
                'muscle_group' => 'quads',
                'image' => null,
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            [
                'name' => 'Standing Calf Stretch',
                'description' => '1. Stand arm\'s length from a wall and place your hands against it. 2. Step your right foot back 2-3 feet and press your heel into the ground. 3. Keep your back leg straight and lean forward into the wall. 4. Feel the stretch in your calf muscle. 5. Hold the position and then switch legs.',
                'muscle_group' => 'calves',
                'image' => null,
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            
            // Back stretches
            [
                'name' => 'Cat-Cow Stretch',
                'description' => '1. Start on your hands and knees in a tabletop position. 2. Arch your back and look up (cow position). 3. Round your back toward the ceiling and tuck your chin (cat position). 4. Move slowly between these two positions. 5. Focus on mobilizing your entire spine through the movement.',
                'muscle_group' => 'lowerback',
                'image' => null,
                'duration' => '60 seconds',
                'difficulty' => 'beginner'
            ],
            
            // Abs stretches
            [
                'name' => 'Cobra Stretch',
                'description' => '1. Lie face down on the floor with your palms flat beside your chest. 2. Press through your hands to lift your chest off the ground. 3. Keep your hips pressed into the floor and your shoulders away from your ears. 4. Feel the stretch through your abdominals and hip flexors. 5. Hold the position while breathing deeply.',
                'muscle_group' => 'abs',
                'image' => null,
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ]
        ];

        foreach ($stretches as $stretch) {
            Stretch::create($stretch);
        }
    }
}
