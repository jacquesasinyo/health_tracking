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
                'description' => '1. Stand in an open doorway with your feet about shoulder-width apart.
2. Raise your arms to the sides at shoulder height, elbows bent at 90 degrees.
3. Place your forearms and palms against the door frame or wall on either side.
4. Slowly lean forward through the doorway until you feel a stretch across your chest and front shoulders.
5. Keep your back straight and core engaged during the stretch.
6. Hold the position while taking deep breaths.
7. For a deeper stretch, stagger your stance with one foot forward.
8. Hold for 30 seconds, then relax and repeat 2-3 times.',
                'muscle_group' => 'chest',
                'image' => 'images/stretches/doorway-chest-stretches.jpg',
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            [
                'name' => 'Behind-the-Back Clasp',
                'description' => '1. Stand tall with your feet hip-width apart and your shoulders relaxed.
2. Bring both arms behind your back.
3. Clasp your hands together behind your lower back, interlacing your fingers if possible.
4. Straighten your arms as much as comfortable.
5. Gently lift your clasped hands away from your lower back.
6. Roll your shoulders back and down, opening your chest.
7. Keep your chin parallel to the floor, avoiding neck strain.
8. Breathe deeply while holding the stretch.
9. For increased intensity, try to lift your hands higher.
10. Hold for 20 seconds, then slowly release and repeat 2-3 times.',
                'muscle_group' => 'chest',
                'image' => 'images/stretches/behind-back-clasp.jpg',
                'duration' => '20 seconds',
                'difficulty' => 'beginner'
            ],

            // Abs stretches
            [
                'name' => 'Cobra Pose',
                'description' => '1. Lie face down on a mat with your legs extended behind you.
2. Place your hands flat on the floor under your shoulders, fingers pointing forward.
3. Press the tops of your feet, thighs, and hips firmly into the floor.
4. On an inhale, begin to straighten your arms to lift your chest off the floor.
5. Keep your lower ribs on the floor and draw your shoulders back and down.
6. Lift only as high as is comfortable while maintaining connection between your pubic bone and the floor.
7. Keep your neck neutral, looking straight ahead rather than upward.
8. Breathe normally while holding the position.
9. To release, exhale and slowly lower your chest back to the floor.
10. Hold for 30 seconds, then relax and repeat 2-3 times.',
                'muscle_group' => 'abs',
                'image' => 'images/stretches/cobra-pose.jpg',
                'duration' => '30 seconds',
                'difficulty' => 'intermediate'
            ],
            [
                'name' => 'Standing Side Bend',
                'description' => '1. Stand tall with your feet hip-width apart and arms at your sides.
2. Engage your core and maintain good posture.
3. Extend your right arm overhead, keeping your shoulders relaxed away from your ears.
4. Place your left hand on your hip for support.
5. Slowly bend your torso to the left side, creating a C-shape with your body.
6. Feel the stretch along the right side of your body, particularly in your obliques.
7. Keep both feet firmly planted on the ground and avoid leaning forward or backward.
8. Breathe deeply, extending the stretch slightly with each exhale.
9. Hold the position for 20 seconds.
10. Return to center with control and repeat on the opposite side.',
                'muscle_group' => 'abs',
                'image' => 'images/stretches/side-bend.jpg',
                'duration' => '20 seconds each side',
                'difficulty' => 'beginner'
            ],

            // Back stretches
            [
                'name' => 'Cat-Cow Stretch',
                'description' => '1. Start on your hands and knees in a tabletop position.
2. Position your knees directly below your hips and your wrists directly below your shoulders.
3. Begin with a neutral spine, parallel to the floor.
4. For the Cow position: Inhale deeply as you drop your belly toward the floor.
5. Lift your chin and chest, gaze upward and draw your shoulders away from your ears.
6. For the Cat position: Exhale completely as you round your spine toward the ceiling.
7. Drop your head toward the floor and draw your navel toward your spine.
8. Move slowly between these two positions, synchronizing your movement with your breath.
9. Focus on the sensation of your spine flexing and extending.
10. Continue this flowing movement for about 1 minute, or 8-10 complete cycles.',
                'muscle_group' => 'back',
                'image' => 'images/stretches/cat-cow.jpg',
                'duration' => '1 minute',
                'difficulty' => 'beginner'
            ],
            [
                'name' => 'Child\'s Pose',
                'description' => '1. Begin by kneeling on the floor with your big toes touching each other.
2. Sit back on your heels and separate your knees about as wide as your hips.
3. Exhale and lay your torso down between your thighs.
4. Extend your arms forward with palms facing down, reaching away from your body.
5. Allow your forehead to rest gently on the floor or mat.
6. Relax your shoulders toward the floor and feel the stretch along your entire back.
7. Breathe deeply, sending your breath to any areas of tension.
8. For a deeper shoulder stretch, walk your fingertips further forward.
9. To increase the lower back stretch, bring your arms alongside your body with palms facing up.
10. Hold for 45 seconds to 1 minute while breathing deeply.',
                'muscle_group' => 'back',
                'image' => 'images/stretches/childs-pose.jpg',
                'duration' => '45 seconds',
                'difficulty' => 'beginner'
            ],

            // Legs stretches
            [
                'name' => 'Standing Hamstring Stretch',
                'description' => '1. Stand with your feet hip-width apart and knees slightly bent.
2. Exhale as you bend forward from the hips, not the waist.
3. Lower your upper body toward the floor, keeping your back flat.
4. As you fold forward, gradually straighten your legs as much as is comfortable.
5. Place your hands on your legs, ankles, or the floor depending on your flexibility.
6. Let your head hang freely to release tension in your neck and shoulders.
7. Maintain a micro-bend in the knees to avoid hyperextension.
8. Feel the stretch along the back of your legs (hamstrings) and lower back.
9. Hold the position while breathing deeply.
10. To release, bend your knees and slowly roll up to standing, vertebra by vertebra.
11. Hold the stretch for 30 seconds and repeat 2-3 times.',
                'muscle_group' => 'legs',
                'image' => 'images/stretches/hamstring-stretches.jpg',
                'duration' => '30 seconds',
                'difficulty' => 'beginner'
            ],
            [
                'name' => 'Quad Stretch',
                'description' => '1. Stand with your feet hip-width apart, using a wall or chair for balance if needed.
2. Shift your weight to your left foot.
3. Bend your right knee and bring your right heel toward your buttocks.
4. Grasp your right ankle or foot with your right hand.
5. Keep your knees close together and your right knee pointing toward the floor.
6. Stand tall with shoulders back and core engaged.
7. Pull your right foot gently closer to your buttocks until you feel a stretch in the front of your thigh.
8. Hold the position while maintaining balance and breathing normally.
9. Release and repeat on the left side.
10. Hold for 30 seconds on each leg and repeat 2-3 times per side.',
                'muscle_group' => 'legs',
                'image' => 'images/stretches/quad-stretches.jpg',
                'duration' => '30 seconds each leg',
                'difficulty' => 'intermediate'
            ]
        ];

        foreach ($stretches as $stretch) {
            Stretch::create($stretch);
        }
    }
}
