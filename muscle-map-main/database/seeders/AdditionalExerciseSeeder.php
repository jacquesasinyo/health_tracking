<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class AdditionalExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $exercises = [
            // ABS - Additional Exercises (Adding more to reach 5+)
            [
                'name' => 'Hanging Leg Raises',
                'description' => '1. Hang from a pull-up bar with arms fully extended and hands slightly wider than shoulder-width apart.
2. Keep your shoulders engaged to protect your joints.
3. Engage your core and lift your legs straight in front of you.
4. Raise your legs until they are parallel to the floor (or higher if possible).
5. Pause briefly at the top of the movement.
6. Lower your legs with control to the starting position.
7. Avoid swinging or using momentum during the exercise.
8. Complete 10-12 repetitions with good form.',
                'muscle_group' => 'abs',
                'image' => 'images/placeholders/abs_hanging_leg_raises.jpg',
                'equipment' => 'pull-up bar'
            ],
            [
                'name' => 'Plank',
                'description' => '1. Start in a prone position with your forearms flat on the floor, elbows positioned under your shoulders.
2. Extend your legs straight behind you, toes tucked under.
3. Engage your core and lift your body off the ground, forming a straight line from head to heels.
4. Keep your neck neutral by looking at the floor about 12 inches in front of you.
5. Pull your belly button toward your spine and squeeze your glutes.
6. Breathe normally and hold the position for 30-60 seconds.
7. Avoid dropping your hips or raising your buttocks.
8. Rest briefly and repeat for 3-5 sets.',
                'muscle_group' => 'abs',
                'image' => 'images/placeholders/abs_plank.jpg',
                'equipment' => 'none'
            ],
            [
                'name' => 'Russian Twists',
                'description' => '1. Sit on the floor with your knees bent and feet flat.
2. Lean back slightly, maintaining a straight back at about a 45-degree angle to the floor.
3. Lift your feet a few inches off the ground for increased difficulty (or keep them on the ground for beginners).
4. Hold your hands together in front of your chest or hold a weight if desired.
5. Twist your torso to the right, bringing your hands or weight beside your right hip.
6. Return to center, then twist to the left side.
7. Each twist to the right and left counts as one repetition.
8. Complete 12-16 repetitions (6-8 per side) with controlled movement.',
                'muscle_group' => 'abs',
                'image' => 'images/placeholders/abs_russian_twists.jpg',
                'equipment' => 'optional: weight plate or medicine ball'
            ],
            
            // CHEST - Additional Exercises
            [
                'name' => 'Cable Fly',
                'description' => '1. Set the pulleys on a cable machine to chest height and attach handles.
2. Stand in the center of the machine with feet shoulder-width apart.
3. Grab the handles with palms facing each other and step forward slightly.
4. Extend your arms out to your sides, maintaining a slight bend in the elbows.
5. Keep your chest up and core engaged throughout the exercise.
6. Bring your hands together in front of your chest in a hugging motion.
7. Squeeze your chest muscles at the point of contraction.
8. Slowly return to the starting position with control.
9. Perform 12-15 repetitions with proper form.',
                'muscle_group' => 'chest',
                'image' => 'images/placeholders/chest_cable_fly.jpg',
                'equipment' => 'cable machine'
            ],
            [
                'name' => 'Push-Ups',
                'description' => '1. Begin in a plank position with hands slightly wider than shoulder-width apart.
2. Position your feet together or slightly apart for stability.
3. Keep your body in a straight line from head to heels.
4. Engage your core and glutes to maintain proper alignment.
5. Lower your body by bending your elbows until your chest nearly touches the floor.
6. Keep your elbows at a 45-degree angle to your body, not flared out to the sides.
7. Push through your palms to extend your arms and return to the starting position.
8. Breathe in as you lower and exhale as you push up.
9. Complete 10-20 repetitions depending on your fitness level.',
                'muscle_group' => 'chest',
                'image' => 'images/placeholders/chest_push_ups.jpg',
                'equipment' => 'none'
            ],
            [
                'name' => 'Dumbbell Fly',
                'description' => '1. Lie on a flat bench holding a dumbbell in each hand.
2. Extend your arms above your chest with palms facing each other.
3. Maintain a slight bend in your elbows throughout the exercise.
4. Lower the dumbbells in a wide arc until you feel a stretch in your chest.
5. Keep the movement controlled and avoid dropping your arms too low.
6. Use your chest muscles to bring the dumbbells back together above your chest.
7. Maintain the same elbow bend throughout the entire movement.
8. Perform 10-12 repetitions with appropriate weight.',
                'muscle_group' => 'chest',
                'image' => 'images/placeholders/chest_dumbbell_fly.jpg',
                'equipment' => 'dumbbells, bench'
            ],
            [
                'name' => 'Decline Bench Press',
                'description' => '1. Set up a decline bench at a 15-30 degree decline angle.
2. Secure your legs under the leg pads or hooks.
3. Lie back on the bench with your head lower than your feet.
4. Grip the barbell slightly wider than shoulder-width apart.
5. Unrack the bar and hold it directly over your lower chest.
6. Lower the bar with control until it touches your lower chest.
7. Press the bar back up to the starting position.
8. Focus on using your lower chest muscles throughout the movement.
9. Complete 8-10 repetitions with proper form.',
                'muscle_group' => 'chest',
                'image' => 'images/placeholders/chest_decline_bench.jpg',
                'equipment' => 'barbell, decline bench'
            ],
            
            // BICEPS - Additional Exercises (Currently has few exercises)
            [
                'name' => 'Barbell Curl',
                'description' => '1. Stand upright with feet shoulder-width apart.
2. Hold a barbell with an underhand grip (palms facing up), hands shoulder-width apart.
3. Keep your elbows close to your sides and your upper arms stationary.
4. Starting with your arms fully extended, exhale and curl the barbell toward your shoulders.
5. Focus on contracting your biceps to move the weight.
6. Curl until the barbell is at shoulder level and your biceps are fully contracted.
7. Hold the contracted position briefly, squeezing your biceps.
8. Inhale and slowly lower the barbell back to the starting position.
9. Perform 8-12 controlled repetitions.',
                'muscle_group' => 'biceps',
                'image' => 'images/placeholders/biceps_barbell_curl.jpg',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Preacher Curl',
                'description' => '1. Adjust a preacher curl bench so your armpits are resting comfortably at the top of the pad.
2. Grab a barbell or dumbbells with an underhand grip (palms facing up).
3. Rest your upper arms firmly against the angled pad.
4. Start with your arms almost fully extended but maintaining a slight bend in the elbows.
5. Curl the weight upward by flexing at the elbow, focusing on bicep contraction.
6. Continue curling until your forearms are nearly vertical.
7. Squeeze your biceps at the top of the movement.
8. Slowly lower the weight back to the starting position with control.
9. Perform 10-12 repetitions with proper form.',
                'muscle_group' => 'biceps',
                'image' => 'images/placeholders/biceps_preacher_curl.jpg',
                'equipment' => 'preacher bench, dumbbells or barbell'
            ],
            [
                'name' => 'Concentration Curl',
                'description' => '1. Sit on a bench with your legs spread, feet flat on the floor.
2. Hold a dumbbell in your right hand, letting your arm hang straight down.
3. Place the back of your right upper arm against your inner right thigh.
4. Rest your free hand on your left thigh for support.
5. Keeping your upper arm stationary, curl the dumbbell upward by flexing your bicep.
6. Rotate your pinky finger upward as you curl for maximum contraction.
7. Pause briefly at the top of the movement and squeeze your bicep.
8. Lower the weight slowly back to the starting position.
9. Complete all repetitions with one arm before switching to the other.
10. Perform 10-12 controlled repetitions per arm.',
                'muscle_group' => 'biceps',
                'image' => 'images/placeholders/biceps_concentration_curl.jpg',
                'equipment' => 'dumbbell'
            ],
            [
                'name' => 'Cable Curl',
                'description' => '1. Stand facing a cable machine with a straight or EZ-curl bar attached to a low pulley.
2. Grasp the bar with an underhand grip, hands shoulder-width apart.
3. Keep your elbows close to your sides and your upper arms stationary.
4. Position your feet shoulder-width apart for stability.
5. Starting with your arms extended, curl the bar upward by flexing at the elbows.
6. Continue curling until your forearms are roughly parallel with your biceps.
7. Squeeze your biceps at the peak contraction point.
8. Slowly lower the bar back to the starting position with control.
9. Maintain tension throughout the entire movement (cables allow for consistent resistance).
10. Perform 12-15 controlled repetitions.',
                'muscle_group' => 'biceps',
                'image' => 'images/placeholders/biceps_cable_curl.jpg',
                'equipment' => 'cable machine'
            ],
            [
                'name' => 'Chin-Ups',
                'description' => '1. Grab a pull-up bar with an underhand grip (palms facing you), hands shoulder-width apart.
2. Hang from the bar with your arms fully extended, shoulders engaged.
3. Pull your body upward by flexing your elbows and driving your elbows down toward your ribs.
4. Focus on using your biceps to assist in the pulling motion.
5. Continue pulling until your chin clears the bar.
6. Squeeze your biceps and back muscles at the top of the movement.
7. Lower yourself with control to the starting position.
8. Avoid swinging or using momentum to complete repetitions.
9. Perform as many controlled repetitions as possible.
10. If needed, use an assisted chin-up machine until you build enough strength.',
                'muscle_group' => 'biceps',
                'image' => 'images/placeholders/biceps_chin_ups.jpg',
                'equipment' => 'pull-up bar'
            ],

            // TRICEPS - Additional Exercises
            [
                'name' => 'Close-Grip Bench Press',
                'description' => '1. Lie on a flat bench with your feet firmly on the ground.
2. Grip the barbell with hands 8-12 inches apart (narrower than a standard bench press).
3. Unrack the bar and position it directly above your lower chest.
4. Keep your elbows tucked close to your body throughout the movement.
5. Lower the bar with control until it lightly touches your lower chest.
6. Press the bar back up by extending your elbows, focusing on tricep engagement.
7. Lock out your arms at the top without letting your elbows flare outward.
8. Maintain proper form by keeping your wrists straight and shoulders back.
9. Complete 8-10 repetitions with appropriate weight.',
                'muscle_group' => 'triceps',
                'image' => 'images/placeholders/triceps_close_grip_bench.jpg',
                'equipment' => 'barbell, bench'
            ],
            [
                'name' => 'Skull Crushers',
                'description' => '1. Lie on a flat bench holding an EZ-curl bar or barbell with an overhand grip.
2. Position your hands about shoulder-width apart on the bar.
3. Extend your arms straight up over your chest, perpendicular to the floor.
4. Keep your elbows pointed forward and upper arms stationary.
5. Slowly bend your elbows to lower the weight toward your forehead (hence "skull crushers").
6. Stop just before the weight touches your forehead.
7. Contract your triceps to extend your arms back to the starting position.
8. Keep your upper arms perpendicular to the floor throughout the exercise.
9. Focus on the triceps doing the work, not the shoulders or chest.
10. Perform 10-12 controlled repetitions.',
                'muscle_group' => 'triceps',
                'image' => 'images/placeholders/triceps_skull_crushers.jpg',
                'equipment' => 'barbell or EZ bar, bench'
            ],
            [
                'name' => 'Diamond Push-Ups',
                'description' => '1. Start in a standard push-up position but place your hands close together.
2. Position your thumbs and index fingers touching to form a diamond or triangle shape.
3. Place the diamond shape directly under your chest.
4. Keep your body in a straight line from head to heels.
5. Engage your core and glutes for stability.
6. Lower your body by bending your elbows, keeping them close to your sides.
7. Continue lowering until your chest nearly touches your hands.
8. Push through your palms to extend your arms back to the starting position.
9. Focus on feeling the contraction in your triceps muscles.
10. Complete 10-15 repetitions with proper form.',
                'muscle_group' => 'triceps',
                'image' => 'images/placeholders/triceps_diamond_pushups.jpg',
                'equipment' => 'none'
            ],
            [
                'name' => 'Overhead Tricep Extension',
                'description' => '1. Stand or sit with feet shoulder-width apart and maintain good posture.
2. Hold a dumbbell with both hands around one end of the dumbbell.
3. Raise the dumbbell overhead until arms are fully extended.
4. Keep your upper arms close to your head and pointed toward the ceiling.
5. Slowly lower the dumbbell behind your head by bending at the elbows.
6. Lower until you feel a stretch in your triceps (about ear level).
7. Extend your arms back to the starting position by contracting your triceps.
8. Keep your upper arms stationary throughout the entire movement.
9. Focus on the triceps doing the work, not the shoulders.
10. Perform 10-12 controlled repetitions.',
                'muscle_group' => 'triceps',
                'image' => 'images/placeholders/triceps_overhead_extension.jpg',
                'equipment' => 'dumbbell or cable'
            ],
            
            // SHOULDERS - Additional Exercises
            [
                'name' => 'Front Raise',
                'description' => '1. Stand with feet shoulder-width apart, holding dumbbells in front of your thighs.
2. Keep your back straight, shoulders back, and core engaged.
3. With a slight bend in your elbows, raise the weights directly in front of you.
4. Lift until your arms are parallel to the floor (shoulder height).
5. Pause briefly at the top of the movement.
6. Lower the weights slowly back to the starting position with control.
7. Avoid swinging or using momentum to lift the weights.
8. You can alternate arms or lift both simultaneously.
9. Keep your wrists neutral throughout the movement.
10. Complete 10-12 controlled repetitions.',
                'muscle_group' => 'shoulders',
                'image' => 'images/placeholders/shoulders_front_raise.jpg',
                'equipment' => 'dumbbells or weight plate'
            ],
            [
                'name' => 'Reverse Fly',
                'description' => '1. Sit or stand with feet shoulder-width apart, holding dumbbells at your sides.
2. Hinge forward at the hips to about a 45-degree angle, keeping your back flat.
3. Allow the dumbbells to hang directly below your shoulders with palms facing each other.
4. Keep a slight bend in your elbows throughout the movement.
5. Raise your arms out to the sides, squeezing your shoulder blades together.
6. Lift until your arms are roughly parallel to the floor.
7. Focus on using your posterior deltoids and upper back to move the weights.
8. Pause briefly at the top of the movement.
9. Lower the weights back to the starting position with control.
10. Complete 12-15 controlled repetitions with light to moderate weight.',
                'muscle_group' => 'shoulders',
                'image' => 'images/placeholders/shoulders_reverse_fly.jpg',
                'equipment' => 'dumbbells or cable machine'
            ],
            [
                'name' => 'Upright Row',
                'description' => '1. Stand with feet shoulder-width apart, holding a barbell or dumbbells in front of your thighs.
2. Grip the barbell with hands about shoulder-width apart or hold dumbbells close together.
3. Keep your back straight and core engaged throughout the exercise.
4. Lift the weight straight up toward your chin, leading with your elbows.
5. Keep the weight close to your body during the upward movement.
6. Raise until your elbows are at approximately shoulder height.
7. Pause briefly at the top of the movement.
8. Lower the weight with control back to the starting position.
9. Avoid excessive wrist flexion or extension during the movement.
10. Complete 10-12 controlled repetitions.',
                'muscle_group' => 'shoulders',
                'image' => 'images/placeholders/shoulders_upright_row.jpg',
                'equipment' => 'barbell or dumbbells'
            ],
            [
                'name' => 'Arnold Press',
                'description' => '1. Sit on a bench with back support, holding dumbbells at shoulder height.
2. Start with palms facing your body (supinated grip) and elbows bent.
3. As you press the weights overhead, rotate your palms to face forward (pronated grip).
4. Continue pressing until your arms are fully extended overhead.
5. At the top position, your palms should be facing forward.
6. Pause briefly at the top of the movement.
7. While lowering the weights, rotate your palms back towards your body.
8. Return to the starting position with control.
9. Keep your core engaged and avoid excessive arching in your lower back.
10. Complete 8-10 controlled repetitions.',
                'muscle_group' => 'shoulders',
                'image' => 'images/placeholders/shoulders_arnold_press.jpg',
                'equipment' => 'dumbbells'
            ],
            
            // TRAPS - Exercises (Need complete set)
            [
                'name' => 'Barbell Shrugs',
                'description' => '1. Stand with feet shoulder-width apart, holding a barbell with an overhand grip.
2. Position your hands just outside shoulder width on the barbell.
3. Stand upright with a neutral spine and the barbell resting against your thighs.
4. Keep your arms straight and relaxed throughout the movement.
5. Elevate your shoulders directly upward toward your ears as high as possible.
6. Hold the contracted position at the top for 1-2 seconds.
7. Lower your shoulders back to the starting position with control.
8. Maintain a stable core and avoid rolling your shoulders.
9. Focus on the trapezius muscles doing the work.
10. Perform 10-12 controlled repetitions.',
                'muscle_group' => 'traps',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Dumbbell Shrugs',
                'description' => '1. Stand with feet shoulder-width apart, holding a dumbbell in each hand at your sides.
2. Keep your arms fully extended and relaxed with palms facing your body.
3. Maintain good posture with your back straight and core engaged.
4. Elevate your shoulders straight upward toward your ears as high as possible.
5. Avoid rotating or rolling your shoulders during the movement.
6. Hold the contracted position at the top for 1-2 seconds.
7. Lower the dumbbells with control back to the starting position.
8. Focus on a full range of motion and trapezius contraction.
9. Keep your neck relaxed throughout the exercise.
10. Complete 12-15 controlled repetitions.',
                'muscle_group' => 'traps',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'dumbbells'
            ],
            [
                'name' => 'Rack Pulls',
                'description' => '1. Set the safety bars in a power rack at just below knee height.
2. Position a barbell on the safety bars and stand with feet hip-width apart.
3. Bend at the hips and knees to grip the bar with an overhand or mixed grip.
4. Position your hands just outside your legs, about shoulder-width apart.
5. Maintain a flat back and engaged core, with shoulders directly over the bar.
6. Stand up by driving through your heels and extending your hips and knees.
7. Pull your shoulders back at the top of the movement.
8. Hold the contracted position briefly before returning the weight to the safety bars.
9. Allow the barbell to settle on the bars between repetitions.
10. Complete 6-8 controlled repetitions with heavy weight.',
                'muscle_group' => 'traps',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'barbell, power rack'
            ],
            [
                'name' => 'Farmer\'s Walk',
                'description' => '1. Place two heavy dumbbells or farmer\'s walk handles on the floor beside you.
2. Squat down and grip the weights firmly with a neutral grip.
3. Stand up with the weights at your sides, maintaining proper posture.
4. Engage your core, keep your chest up, and shoulders back.
5. Walk forward with controlled steps at a moderate pace.
6. Focus on keeping your shoulders engaged and spine neutral.
7. Take short, deliberate steps while maintaining good posture.
8. Continue walking for the prescribed distance or time (typically 30-60 seconds).
9. Place the weights down with control when finished.
10. Rest briefly before performing another set if desired.',
                'muscle_group' => 'traps',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'heavy dumbbells or farmer\'s walk handles'
            ],
            [
                'name' => 'Smith Machine Shrugs',
                'description' => '1. Set the bar on a Smith machine at approximately mid-thigh height.
2. Stand facing the machine with feet shoulder-width apart.
3. Grip the bar with an overhand grip, hands just outside shoulder width.
4. Unlock the bar and stand upright, allowing the bar to hang at arms\' length.
5. Keep your arms straight and core engaged throughout the movement.
6. Elevate your shoulders directly upward toward your ears.
7. Hold the contracted position at the top for 1-2 seconds.
8. Lower your shoulders back to the starting position with control.
9. Focus on isolating your trapezius muscles without using momentum.
10. Complete 10-12 controlled repetitions.',
                'muscle_group' => 'traps',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'smith machine'
            ],
            
            // FOREARMS - Exercises
            [
                'name' => 'Wrist Curls',
                'description' => '1. Sit on a bench with your feet flat on the floor.
2. Hold a barbell or dumbbells with an underhand grip (palms facing up).
3. Rest your forearms on your thighs or on a bench, with wrists extending beyond the edge.
4. Allow your wrists to extend fully, lowering the weight as far as comfortable.
5. Curl your wrists upward by flexing your hands as high as possible.
6. Focus on contracting your forearm flexors at the top of the movement.
7. Hold the contracted position briefly.
8. Lower the weight slowly back to the starting position.
9. Keep your forearms stationary throughout the exercise.
10. Perform 15-20 repetitions with a moderate weight.',
                'muscle_group' => 'forearms',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'dumbbells or barbell'
            ],
            [
                'name' => 'Reverse Wrist Curls',
                'description' => '1. Sit on a bench with your feet flat on the floor.
2. Hold a barbell or dumbbells with an overhand grip (palms facing down).
3. Rest your forearms on your thighs or on a bench, with wrists extending beyond the edge.
4. Allow your wrists to flex downward, lowering the weight as far as comfortable.
5. Extend your wrists upward by lifting the back of your hands toward the ceiling.
6. Focus on contracting your forearm extensors at the top of the movement.
7. Hold the contracted position briefly.
8. Lower the weight slowly back to the starting position.
9. Keep your forearms stationary throughout the exercise.
10. Perform 12-15 repetitions with a light to moderate weight.',
                'muscle_group' => 'forearms',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'dumbbells or barbell'
            ],
            [
                'name' => 'Plate Pinch',
                'description' => '1. Select two weight plates of equal size (typically 5-10 pounds each).
2. Stand with feet shoulder-width apart and good posture.
3. Hold the plates together with the smooth sides facing outward.
4. Pinch the plates together using only your fingertips and thumb.
5. Hold the plates at your side with your arm straight but not locked.
6. Maintain the pinch grip for the prescribed time (typically 20-30 seconds).
7. Focus on squeezing the plates together with maximum effort.
8. Switch hands and repeat with your other hand.
9. For added difficulty, try walking while maintaining the grip.
10. Perform 3-4 sets per hand with appropriate rest between efforts.',
                'muscle_group' => 'forearms',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'weight plates'
            ],
            [
                'name' => 'Finger Curls',
                'description' => '1. Sit on a bench with a barbell or dumbbell held in one hand.
2. Rest your forearm on your thigh or a bench, with your palm facing up.
3. Let the weight roll down to the tips of your fingers.
4. Using only your fingers, curl the weight back into your palm.
5. Once the weight is in your palm, curl your wrist upward.
6. Lower your wrist back down while keeping the weight in your palm.
7. Allow the weight to roll back to your fingertips.
8. Repeat the movement for 12-15 controlled repetitions.
9. Switch hands and repeat with your other hand.
10. Use a lighter weight than regular wrist curls to maintain proper form.',
                'muscle_group' => 'forearms',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'barbell or dumbbell'
            ],
            [
                'name' => 'Hand Gripper',
                'description' => '1. Sit or stand with good posture and select an appropriate resistance hand gripper.
2. Hold the gripper in one hand with the handles parallel to the floor.
3. Place the gripper across your palm with the handles extending past your pinky and index finger.
4. Position your fingers comfortably on the handle, keeping your wrist straight.
5. Squeeze the handles together until they touch or come as close as possible.
6. Hold the contracted position briefly.
7. Slowly release the grip back to the starting position with control.
8. Complete 15-20 repetitions or until fatigue sets in.
9. Switch hands and repeat with your other hand.
10. Perform 2-3 sets per hand, gradually increasing resistance as strength improves.',
                'muscle_group' => 'forearms',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'hand gripper'
            ],
            
            // LATS - Additional Exercises
            [
                'name' => 'Pull-Ups',
                'description' => '1. Grab a pull-up bar with an overhand grip, hands slightly wider than shoulder-width apart.
2. Hang from the bar with arms fully extended and shoulders engaged.
3. Engage your core and slightly cross your ankles behind you.
4. Pull your body up by driving your elbows down toward your hips.
5. Focus on using your back muscles rather than your arms.
6. Continue pulling until your chin clears the bar or your chest touches it.
7. Pause briefly at the top of the movement.
8. Lower your body with control back to the starting position.
9. Maintain tension in your lats throughout the entire movement.
10. Perform as many clean repetitions as possible.',
                'muscle_group' => 'lats',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'pull-up bar'
            ],
            [
                'name' => 'Bent Over Barbell Row',
                'description' => '1. Stand with feet shoulder-width apart, holding a barbell with an overhand grip.
2. Bend your knees slightly and hinge at the hips until your torso is nearly parallel to the floor.
3. Keep your back flat and head in a neutral position.
4. Allow the barbell to hang directly below your shoulders with arms extended.
5. Pull the barbell toward your lower ribcage by driving your elbows back.
6. Keep your elbows close to your body during the pulling motion.
7. Squeeze your shoulder blades together at the top of the movement.
8. Slowly lower the barbell back to the starting position with control.
9. Maintain a stable torso position throughout the exercise.
10. Perform 8-12 controlled repetitions.',
                'muscle_group' => 'lats',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Single-Arm Dumbbell Row',
                'description' => '1. Place your right knee and right hand on a bench for support.
2. Position your left foot flat on the floor beside the bench.
3. Hold a dumbbell in your left hand, allowing your arm to hang straight down.
4. Keep your back flat and parallel to the floor.
5. Pull the dumbbell up toward your hip by driving your elbow back.
6. Keep your elbow close to your body throughout the movement.
7. Squeeze your lat at the top of the movement.
8. Lower the dumbbell with control back to the starting position.
9. Complete all repetitions on one side before switching to the other.
10. Perform 10-12 controlled repetitions per side.',
                'muscle_group' => 'lats',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'dumbbell, bench'
            ],
            [
                'name' => 'Straight Arm Pulldown',
                'description' => '1. Stand facing a cable machine with a straight bar or rope attachment on a high pulley.
2. Grab the attachment with an overhand grip, hands shoulder-width apart.
3. Step back from the machine to create tension in the cable.
4. Start with your arms extended forward at shoulder height.
5. Keep a slight bend in your elbows and maintain this position throughout.
6. Pull the attachment down in an arcing motion by using your lats.
7. Continue the movement until your hands are beside your thighs.
8. Squeeze your lats at the bottom of the movement.
9. Slowly return to the starting position with control.
10. Perform 12-15 controlled repetitions.',
                'muscle_group' => 'lats',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'cable machine'
            ],
            [
                'name' => 'T-Bar Row',
                'description' => '1. Position yourself on a T-bar row machine or set up a barbell in a landmine attachment.
2. Stand straddling the bar with feet shoulder-width apart.
3. Bend at your hips and knees to grasp the handle(s) with both hands.
4. Keep your back flat and chest up throughout the exercise.
5. Pull the weight up toward your abdomen by driving your elbows back.
6. Squeeze your shoulder blades together at the top of the movement.
7. Hold the contracted position briefly.
8. Lower the weight with control back to the starting position.
9. Maintain proper form by avoiding excessive back arching.
10. Complete 8-12 controlled repetitions.',
                'muscle_group' => 'lats',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 't-bar row machine or barbell landmine setup'
            ],
            
            // UPPER BACK - Additional Exercises
            [
                'name' => 'Shrugged Row',
                'description' => '1. Set up a cable row machine with a straight bar attachment at chest height.
2. Grab the bar with an overhand grip and stand with feet shoulder-width apart.
3. Step back to create tension in the cable with arms extended.
4. Pull the bar toward your upper chest while simultaneously shrugging your shoulders.
5. Focus on squeezing your upper traps and rhomboids at peak contraction.
6. Hold the contracted position briefly.
7. Return to the starting position with control, fully extending your arms.
8. Maintain good posture throughout the exercise.
9. Avoid using momentum to move the weight.
10. Complete 10-12 controlled repetitions.',
                'muscle_group' => 'upperback',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'barbell or cable'
            ],
            [
                'name' => 'Prone Y Raises',
                'description' => '1. Lie face down on an incline bench set to a 30-45 degree angle.
2. Hold light dumbbells with arms hanging straight down, palms facing each other.
3. Keep your head neutral and core engaged throughout the exercise.
4. Raise your arms upward and outward in a Y pattern.
5. Lift until your arms are in line with your torso.
6. Focus on squeezing your lower traps at the top of the movement.
7. Hold the contracted position briefly.
8. Lower the weights with control back to the starting position.
9. Keep the movement slow and controlled to maintain proper form.
10. Perform 12-15 repetitions with light weight.',
                'muscle_group' => 'upperback',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'light dumbbells, incline bench'
            ],
            [
                'name' => 'Inverted Row',
                'description' => '1. Set a barbell in a rack or use a Smith machine at waist to chest height.
2. Position yourself under the bar, grabbing it with an overhand grip.
3. Hang with your body straight, heels on the floor, and arms extended.
4. Pull your chest toward the bar by driving your elbows down and back.
5. Keep your body rigid from head to heels throughout the movement.
6. Pull until your chest nearly touches the bar.
7. Squeeze your shoulder blades together at the top.
8. Lower yourself with control back to the starting position.
9. For easier variation, bend your knees and place feet flat on the floor.
10. Complete 8-12 controlled repetitions.',
                'muscle_group' => 'upperback',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'barbell in rack or smith machine'
            ],
            
            // LOWER BACK - Additional Exercises
            [
                'name' => 'Good Morning',
                'description' => '1. Stand with feet shoulder-width apart, holding a barbell across your upper back.
2. Keep your chest up and maintain a slight bend in your knees.
3. Brace your core and push your hips back as you hinge forward.
4. Lower your torso until it\'s nearly parallel to the floor.
5. Keep your back flat and head in a neutral position throughout.
6. Engage your hamstrings and lower back to return to the starting position.
7. Focus on the hip hinge movement rather than bending your knees.
8. Maintain a strong core throughout the exercise.
9. Start with light weight until you master the form.
10. Perform 8-10 controlled repetitions.',
                'muscle_group' => 'lowerback',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Back Extension',
                'description' => '1. Position yourself on a hyperextension bench with your hips on the pad.
2. Hook your feet under the ankle pads and cross your arms over your chest.
3. Start with your body bent at the hips, torso hanging toward the floor.
4. Engage your lower back muscles to raise your torso.
5. Lift until your body forms a straight line, not hyperextending beyond this point.
6. Squeeze your glutes and lower back muscles at the top of the movement.
7. Lower your torso with control back to the starting position.
8. For added resistance, hold a weight plate against your chest.
9. Keep your movements smooth and controlled.
10. Complete 12-15 controlled repetitions.',
                'muscle_group' => 'lowerback',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'hyperextension bench'
            ],
            [
                'name' => 'Superman',
                'description' => '1. Lie face down on a mat with arms extended overhead.
2. Keep your legs straight and together, toes pointed.
3. Simultaneously lift your arms, chest, and legs off the floor.
4. Aim to create a gentle arch in your back.
5. Hold the elevated position for 2-3 seconds, focusing on contracting your lower back.
6. Lower back to the starting position with control.
7. Keep your neck neutral by looking at the floor throughout.
8. Breathe normally during the exercise.
9. For progression, increase the hold time at the top.
10. Perform 12-15 controlled repetitions.',
                'muscle_group' => 'lowerback',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'none'
            ],
            [
                'name' => 'Bird Dog',
                'description' => '1. Start on all fours with hands under shoulders and knees under hips.
2. Keep your back flat and neck in a neutral position.
3. Simultaneously extend your right arm forward and left leg backward.
4. Aim to make both limbs parallel to the floor.
5. Hold the extended position for 2-3 seconds while maintaining balance.
6. Return to the starting position with control.
7. Repeat with the opposite arm and leg.
8. Maintain a stable core throughout the exercise.
9. Focus on keeping your hips level without rotating.
10. Perform 10-12 repetitions on each side.',
                'muscle_group' => 'lowerback',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'none'
            ],
            
            // OBLIQUES - Exercises (Need complete set)
            [
                'name' => 'Side Plank',
                'description' => '1. Lie on your side with your legs straight and feet stacked.
2. Place your elbow directly under your shoulder, forearm flat on the ground.
3. Engage your core and lift your hips off the ground, creating a straight line from head to heels.
4. Balance on the edge of your lower foot and your forearm.
5. Place your top hand on your hip or extend it toward the ceiling.
6. Keep your head aligned with your spine, looking straight ahead.
7. Hold this position while breathing normally for 20-60 seconds.
8. Lower back down with control and repeat on the other side.
9. For progression, add leg raises or reach-throughs.
10. Complete 2-3 holds per side.',
                'muscle_group' => 'obliques',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'none'
            ],
            [
                'name' => 'Woodchoppers',
                'description' => '1. Set a cable machine to a high position and attach a handle.
2. Stand with your side toward the machine, feet shoulder-width apart.
3. Grab the handle with both hands and step away for tension.
4. Start with arms extended, hands above the opposite shoulder.
5. Engage your core and rotate your torso downward and across your body.
6. Pull the handle diagonally across your body to the opposite hip.
7. Keep your arms relatively straight throughout the movement.
8. Control the return to the starting position.
9. Complete all repetitions on one side before switching.
10. Perform 12-15 controlled repetitions per side.',
                'muscle_group' => 'obliques',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'cable machine or medicine ball'
            ],
            [
                'name' => 'Bicycle Crunches',
                'description' => '1. Lie on your back with hands behind your head, elbows wide.
2. Lift your shoulders off the ground and raise your legs with knees bent at 90 degrees.
3. Rotate your torso, bringing your right elbow toward your left knee.
4. Simultaneously extend your right leg straight out.
5. Return to center briefly, then rotate to the opposite side.
6. Bring your left elbow to your right knee while extending your left leg.
7. Continue alternating sides in a pedaling motion.
8. Focus on the rotation coming from your core, not your neck.
9. Keep your lower back pressed into the floor throughout.
10. Perform 12-20 repetitions on each side.',
                'muscle_group' => 'obliques',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'none'
            ],
            [
                'name' => 'Side Bends',
                'description' => '1. Stand with feet shoulder-width apart, holding a dumbbell in your right hand.
2. Place your left hand behind your head or on your hip.
3. Keep your back straight and core engaged throughout the exercise.
4. Bend sideways to your right, lowering the dumbbell toward your knee.
5. Feel the stretch along your left side.
6. Use your obliques to pull yourself back to the starting position.
7. Perform all repetitions on one side before switching the weight to the other hand.
8. Avoid leaning forward or backward during the movement.
9. Focus on lateral flexion, not rotation.
10. Complete 12-15 controlled repetitions on each side.',
                'muscle_group' => 'obliques',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'dumbbell'
            ],
            [
                'name' => 'Windshield Wipers',
                'description' => '1. Lie on your back with arms extended out to the sides for stability.
2. Raise your legs straight up toward the ceiling, keeping them together.
3. Engage your core and lower your legs to the right side.
4. Control the movement and go as far as you can without lifting your shoulders.
5. Return to the center position with legs pointing up.
6. Lower your legs to the left side with control.
7. Return to center and continue alternating sides.
8. For beginners, bend knees to decrease difficulty.
9. For advanced, hold a weight between your feet for resistance.
10. Perform 8-12 repetitions on each side.',
                'muscle_group' => 'obliques',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'none'
            ],
            
            // QUADS - Additional Exercises
            [
                'name' => 'Front Squat',
                'description' => '1. Position a barbell at upper chest height on a squat rack.
2. Step under the bar and place it across the front of your shoulders.
3. Create a "shelf" with your shoulders by crossing your arms and lifting your elbows high.
4. Alternatively, use a clean grip with elbows up and wrists extended.
5. Unrack the barbell and step back, feet shoulder-width apart with toes slightly turned out.
6. Keep your chest up and core tight throughout the movement.
7. Bend your knees and hips to lower into a squat position.
8. Descend until your thighs are at least parallel to the floor.
9. Drive through your heels to return to the starting position.
10. Complete 6-10 controlled repetitions.',
                'muscle_group' => 'quads',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Lunges',
                'description' => '1. Stand upright with feet hip-width apart, hands on hips or holding dumbbells at your sides.
2. Step forward with your right foot, taking a comfortable stride.
3. Lower your body by bending both knees to approximately 90-degree angles.
4. Keep your front knee aligned over your ankle, not pushed forward beyond your toes.
5. Maintain an upright torso and engaged core throughout the movement.
6. Push through your right heel to return to the starting position.
7. Repeat with the left leg stepping forward.
8. Continue alternating legs for the desired number of repetitions.
9. For walking lunges, continue moving forward with each rep.
10. Perform 10-12 repetitions per leg.',
                'muscle_group' => 'quads',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'bodyweight or dumbbells'
            ],
            [
                'name' => 'Sissy Squat',
                'description' => '1. Start by standing upright with feet hip-width apart.
2. If available, use a sissy squat bench or hold onto a stable support for balance.
3. Rise onto the balls of your feet, keeping your heels elevated throughout.
4. Lean your upper body backward while bending your knees forward.
5. Descend as far as your flexibility allows while maintaining a straight line from knees to shoulders.
6. Feel the intense contraction in your quadriceps throughout the movement.
7. Pause briefly at the bottom position.
8. Use your quads to pull yourself back to the starting position.
9. Keep your core tight throughout to protect your lower back.
10. Start with 6-8 repetitions and gradually build up as strength improves.',
                'muscle_group' => 'quads',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'sissy squat bench or bodyweight'
            ],
            [
                'name' => 'Bulgarian Split Squat',
                'description' => '1. Stand about two feet in front of a bench or platform.
2. Place the top of your right foot on the bench behind you.
3. Keep your left foot flat on the floor, pointing straight ahead.
4. Maintain an upright torso and engage your core.
5. Lower your body by bending your left knee until your thigh is parallel to the ground.
6. Keep your left knee aligned with your foot, not pushed forward past your toes.
7. Push through your left heel to return to the starting position.
8. Complete all repetitions on one leg before switching to the other.
9. For added resistance, hold dumbbells at your sides.
10. Perform 8-12 controlled repetitions per leg.',
                'muscle_group' => 'quads',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'bench, dumbbells optional'
            ],
            
            // HAMSTRINGS - Additional Exercises
            [
                'name' => 'Lying Leg Curl',
                'description' => '1. Lie face down on a leg curl machine with your legs fully extended.
2. Position the pad of the machine just above your heels, against your lower calves.
3. Grasp the support handles for stability.
4. Flex your feet to engage your hamstrings before beginning.
5. Curl your legs toward your buttocks by bending at the knees.
6. Continue curling until your legs form a 90-degree angle or slightly less.
7. Squeeze your hamstrings at the peak contraction.
8. Slowly lower your legs back to the starting position with control.
9. Avoid lifting your hips off the bench during the movement.
10. Complete 12-15 controlled repetitions.',
                'muscle_group' => 'hamstrings',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'leg curl machine'
            ],
            [
                'name' => 'Seated Leg Curl',
                'description' => '1. Sit on a seated leg curl machine with your back against the pad.
2. Position the pad of the machine against the back of your lower calves.
3. Hook your feet under the bottom padding.
4. Grasp the side handles for stability.
5. Flex your feet and engage your hamstrings before beginning.
6. Curl your legs under the seat by bending at the knees.
7. Pull as far as comfortable, feeling the contraction in your hamstrings.
8. Hold the contracted position briefly.
9. Return to the starting position with control, not letting the weight stack touch down.
10. Perform 12-15 controlled repetitions.',
                'muscle_group' => 'hamstrings',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'leg curl machine'
            ],
            [
                'name' => 'Good Morning',
                'description' => 'A hip hinge exercise targeting the hamstrings, glutes, and lower back.',
                'muscle_group' => 'hamstrings',
                'image' => 'images/placeholders/hamstrings_good_morning.jpg',
                'equipment' => 'barbell'
            ],
            [
                'name' => 'Glute-Ham Raise',
                'description' => '1. Position yourself in a GHD machine with your feet secured under the footpads.
2. Adjust the machine so your thighs are resting on the hip pad and your body can move freely.
3. Start with your body in a vertical position, perpendicular to the floor.
4. Cross your arms over your chest or place them behind your head.
5. Keep your back flat as you slowly lower your torso toward the floor.
6. Lower until your body is parallel to the ground or as far as your strength allows.
7. Use your hamstrings to pull your body back to the starting position.
8. If needed, assist with your hands as you develop strength.
9. Maintain a rigid body position throughout the movement.
10. Begin with 6-8 repetitions and gradually build up.',
                'muscle_group' => 'hamstrings',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'GHD machine'
            ],
            [
                'name' => 'Nordic Ham Curl',
                'description' => '1. Kneel on a soft surface with your ankles secured under a stable object or with a partner holding them.
2. Position your knees hip-width apart and keep your body upright.
3. Cross your arms over your chest or hold them straight out in front of you.
4. Engage your core and hamstrings before beginning.
5. Keeping your body straight from knees to shoulders, slowly lower yourself forward.
6. Resist the movement with your hamstrings as long as possible.
7. When your hamstrings can no longer hold, catch yourself with your hands.
8. Push yourself back to the starting position using your arms to assist.
9. As you get stronger, use less assistance from your arms.
10. Begin with 3-5 repetitions and gradually increase.',
                'muscle_group' => 'hamstrings',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'partner or anchor for feet'
            ],
            
            // CALVES - Additional Exercises
            [
                'name' => 'Single-Leg Calf Raise',
                'description' => '1. Stand on a step or platform with the ball of your right foot on the edge.
2. Let your heel hang off the edge of the step.
3. Hold onto something stable for balance if needed.
4. Lift your left foot by bending your knee and shifting your weight to your right foot.
5. Lower your right heel below the level of the step, feeling a stretch in your calf.
6. Push through the ball of your foot to raise your heel as high as possible.
7. Squeeze your calf at the top of the movement.
8. Lower back down with control to the starting position.
9. Complete all repetitions on one leg before switching to the other.
10. Perform 15-20 controlled repetitions per leg.',
                'muscle_group' => 'calves',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'step or platform, optional dumbbell'
            ],
            [
                'name' => 'Seated Tibia Raise',
                'description' => '1. Sit on a bench or chair with your feet flat on the floor.
2. Place a dumbbell or weight plate on top of your feet near your toes.
3. Stabilize the weight with your hands if needed.
4. Keep your heels on the ground throughout the exercise.
5. Lift your toes and the front of your feet as high as possible, flexing your feet.
6. Focus on contracting the muscles in the front of your shins (tibialis anterior).
7. Hold the raised position briefly.
8. Lower your feet back to the starting position with control.
9. Maintain an upright posture throughout the movement.
10. Complete 15-20 controlled repetitions.',
                'muscle_group' => 'calves',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'resistance band or specialized machine'
            ],
            [
                'name' => 'Jump Rope',
                'description' => '1. Hold the jump rope handles with your hands at waist height.
2. Stand with feet close together, knees slightly bent.
3. Keep your elbows close to your body and rotate from the wrists.
4. Jump just high enough to clear the rope, about 1-2 inches off the ground.
5. Land softly on the balls of your feet, allowing heels to touch down lightly.
6. Establish a consistent rhythm and breathing pattern.
7. Focus on using your calves to propel each jump.
8. Keep your core engaged and posture upright.
9. Start with 30-second intervals and gradually increase duration.
10. Aim for 1-3 minutes of continuous jumping for calf development.',
                'muscle_group' => 'calves',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'jump rope'
            ],
            
            // GLUTES - Exercises (Need complete set)
            [
                'name' => 'Hip Thrust',
                'description' => '1. Sit on the floor with your upper back against a bench.
2. Place a barbell across your hips, using a pad for comfort.
3. Position your feet flat on the floor, about shoulder-width apart.
4. Bend your knees to approximately 90 degrees.
5. Brace your core and drive through your heels to lift your hips.
6. Extend until your body forms a straight line from shoulders to knees.
7. Squeeze your glutes hard at the top of the movement.
8. Hold the contracted position briefly.
9. Lower your hips with control back to the starting position.
10. Complete 10-12 controlled repetitions.',
                'muscle_group' => 'glutes',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'bench, barbell'
            ],
            [
                'name' => 'Glute Bridge',
                'description' => '1. Lie on your back with knees bent and feet flat on the floor.
2. Position your feet hip-width apart, about 12-16 inches from your buttocks.
3. Place your arms at your sides with palms facing down.
4. Tighten your core and press your lower back into the floor.
5. Drive through your heels to lift your hips toward the ceiling.
6. Raise until your body forms a straight line from shoulders to knees.
7. Squeeze your glutes intensely at the top of the movement.
8. Hold the top position for 1-2 seconds.
9. Lower your hips with control back to the starting position.
10. Perform 15-20 controlled repetitions.',
                'muscle_group' => 'glutes',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'bodyweight or barbell'
            ],
            [
                'name' => 'Cable Kickback',
                'description' => '1. Stand facing a cable machine with an ankle cuff attached to the low pulley.
2. Attach the cuff around your right ankle.
3. Hold onto the machine for balance and stand up straight.
4. Keep a slight bend in your supporting leg and engage your core.
5. Maintaining a slight bend in your working leg, kick it backward.
6. Focus on using your glute to move your leg, not your lower back.
7. Extend your leg as far as comfortable without arching your back.
8. Hold the extended position briefly, squeezing your glute.
9. Return to the starting position with control.
10. Complete all repetitions on one side before switching legs.
11. Perform 12-15 controlled repetitions per leg.',
                'muscle_group' => 'glutes',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'cable machine, ankle attachment'
            ],
            [
                'name' => 'Step-Up',
                'description' => '1. Place a sturdy bench or platform in front of you.
2. Hold dumbbells at your sides for added resistance (optional).
3. Step onto the platform with your right foot, placing it firmly in the center.
4. Drive through your right heel to lift your body up onto the platform.
5. Bring your left foot up to join your right foot on the platform.
6. Focus on using the glute of your leading leg to power the movement.
7. Step down with your left foot first, followed by your right foot.
8. Maintain an upright posture throughout the exercise.
9. Alternate leading legs or complete all repetitions on one side before switching.
10. Perform 10-12 repetitions per leg.',
                'muscle_group' => 'glutes',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'bench or platform, optional dumbbells'
            ],
            [
                'name' => 'Sumo Deadlift',
                'description' => '1. Stand with feet wider than shoulder-width apart, toes pointed outward.
2. Position the barbell directly over the middle of your feet.
3. Bend at the hips and knees to grip the bar with hands inside your legs.
4. Use an overhand grip with hands about shoulder-width apart.
5. Keep your chest up, back flat, and core engaged.
6. Drive through your heels and extend your hips and knees to stand up.
7. Pull your shoulders back at the top and squeeze your glutes.
8. Keep the barbell close to your body throughout the movement.
9. Lower the weight with control by bending at the hips and knees.
10. Maintain a neutral spine position throughout the exercise.
11. Complete 6-10 controlled repetitions.',
                'muscle_group' => 'glutes',
                'image' => 'images/placeholders/placeholder.svg',
                'equipment' => 'barbell'
            ],
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }
    }
}