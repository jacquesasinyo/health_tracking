<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <!-- Left Column - Food Info and Image -->
            <div class="col-lg-4 col-md-5 mb-4">
                <div class="card h-100 shadow-sm">
                    <?php if($food->photo): ?>
                        <img src="<?php echo e(asset($food->photo)); ?>" alt="<?php echo e($food->description); ?>" class="card-img-top" style="height: 180px; object-fit: cover; border-radius: 0.5rem 0.5rem 0 0;">
                    <?php else: ?>
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 180px; border-radius: 0.5rem 0.5rem 0 0;">
                            <i class="fas fa-utensils fa-2x text-muted"></i>
                        </div>
                    <?php endif; ?>
                    <div class="card-body text-center">
                        <h1 class="card-title h5 mb-2 text-primary"><?php echo e($food->description ?? $food->turkish_description); ?></h1>
                        <p class="text-muted mb-0 small"><i class="fas fa-info-circle me-1"></i>Nutrition per 100g</p>
                    </div>
                </div>
            </div>

            <!-- Right Column - Nutrition Content -->
            <div class="col-lg-8 col-md-7">
                <!-- Nutrition Calculator Form -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-calculator me-2"></i>Nutrition Calculator</h5>
                    </div>
                    <div class="card-body">
                        <form id="nutritionForm" class="row g-3">
                            <div class="col-md-6">
                                <label for="quantity" class="form-label">Quantity:</label>
                                <input type="number" id="quantity" name="quantity" value="1" min="1" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="measurement" class="form-label">Unit of Measurement:</label>
                                <select id="measurement" name="measurement" class="form-select">
                                    <option value="Gram">Gram</option>
                                    <option value="Quarter">Quarter</option>
                                    <option value="Half">Half</option>
                                    <option value="Piece">Piece</option>
                                    <option value="Serving (Medium)">Serving (Medium)</option>
                                    <option value="Kilogram">Kilogram</option>
                                    <option value="Bowl (200g)">Bowl (200g)</option>
                                    <option value="Soup Spoon">Soup Spoon</option>
                                    <option value="Bowl (Small)">Bowl (Small)</option>
                                    <option value="Bowl (Medium)">Bowl (Medium)</option>
                                    <option value="Cup (Medium)">Cup (Medium)</option>
                                    <option value="Tablespoon">Tablespoon</option>
                                    <option value="Water Glass">Water Glass</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary" onclick="updateNutrition()">
                                    <i class="fas fa-calculator me-2"></i>Calculate
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Macronutrients Overview -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0"><i class="fas fa-chart-pie me-2"></i>Macronutrients Overview</h5>
                        <small class="text-white-50">Per <span id="selectedQuantity">1</span> <span id="selectedMeasurement">Gram</span></small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 d-flex justify-content-center align-items-center mb-3">
                                <div style="position: relative; width: 150px; height: 150px;">
                                    <canvas id="nutritionChart"></canvas>
                                    <div id="calorieLabel"
                                         data-original="<?php echo e($energyValue); ?>"
                                         style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                                           font-size: 16px; font-weight: bold; text-align: center; color: #333;">
                                        <?php echo e($energyValue); ?><br><small style="font-size: 11px;">kcal</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="d-flex flex-column justify-content-center h-100">
                                    <div class="mb-2 p-2 bg-light rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle me-2" style="width: 10px; height: 10px; background-color: #6abf4b;"></div>
                                            <div class="flex-grow-1">
                                                <span class="text-muted small">Carbohydrates</span>
                                                <h6 class="mb-0 small" id="carbValue" data-original="<?php echo e($nutrients->firstWhere('nutrient_name', 'Carbohydrate, by difference')->amount ?? 0); ?>">
                                                    <?php echo e($nutrients->firstWhere('nutrient_name', 'Carbohydrate, by difference')->amount ?? 0); ?> g
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 p-2 bg-light rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle me-2" style="width: 10px; height: 10px; background-color: #e67e22;"></div>
                                            <div class="flex-grow-1">
                                                <span class="text-muted small">Protein</span>
                                                <h6 class="mb-0 small" id="proteinValue" data-original="<?php echo e($nutrients->firstWhere('nutrient_name', 'Protein')->amount ?? 0); ?>">
                                                    <?php echo e($nutrients->firstWhere('nutrient_name', 'Protein')->amount ?? 0); ?> g
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 bg-light rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle me-2" style="width: 10px; height: 10px; background-color: #f1c40f;"></div>
                                            <div class="flex-grow-1">
                                                <span class="text-muted small">Fat</span>
                                                <h6 class="mb-0 small" id="fatValue" data-original="<?php echo e($nutrients->firstWhere('nutrient_name', 'Total lipid (fat)')->amount ?? 0); ?>">
                                                    <?php echo e($nutrients->firstWhere('nutrient_name', 'Total lipid (fat)')->amount ?? 0); ?> g
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detailed Nutritional Information -->
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0"><i class="fas fa-list-alt me-2"></i>Detailed Nutritional Information</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-dark">
                        <tr>
                            <th><i class="fas fa-flask me-1"></i>Nutrient</th>
                            <th class="text-center">Per 100g</th>
                            <th class="text-center">Per <span id="selectedQuantity2">1</span> <span id="selectedMeasurement2">Gram</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $nutrients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nutrient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><strong><?php echo e($nutrient->nutrient_name); ?></strong> <small class="text-muted">(<?php echo e($nutrient->unit_name); ?>)</small></td>
                                <td class="text-center"><?php echo e($nutrient->amount); ?></td>
                                <td class="nutrient-value fw-bold text-center text-primary" data-amount="<?php echo e($nutrient->amount); ?>" data-original="<?php echo e($nutrient->amount); ?>">
                                    <?php echo e($nutrient->amount); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-4 mb-5 text-center">
            <a href="<?php echo e(route('food.index')); ?>" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-arrow-left me-2"></i>Back to Food List
            </a>
        </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

        <script>
            let nutritionChart = null;

            function updateNutrition() {
                let quantity = parseFloat(document.getElementById("quantity").value);
                let measurement = document.getElementById("measurement").value;
                let factor = getMeasurementFactor(measurement);

                // Update display labels
                document.getElementById("selectedQuantity").innerText = quantity;
                document.getElementById("selectedMeasurement").innerText = measurement;
                document.getElementById("selectedQuantity2").innerText = quantity;
                document.getElementById("selectedMeasurement2").innerText = measurement;

                // Update nutrient values in table
                document.querySelectorAll('.nutrient-value').forEach(element => {
                    let originalAmount = parseFloat(element.getAttribute('data-original'));
                    element.innerText = (originalAmount * quantity * factor).toFixed(2);
                });

                updateMacroValues(quantity, factor);
            }

            function getMeasurementFactor(measurement) {
                let conversionFactors = {
                    'Gram': 0.01,
                    'Quarter': 0.25,
                    'Half': 0.5,
                    'Piece': 1,
                    'Serving (Medium)': 1,
                    'Kilogram': 1000,
                    'Bowl (200g)': 200,
                    'Soup Spoon': 15,
                    'Bowl (Small)': 150,
                    'Bowl (Medium)': 250,
                    'Cup (Medium)': 250,
                    'Tablespoon': 10,
                    'Water Glass': 200
                };
                return conversionFactors[measurement] || 1;
            }

            function updateMacroValues(quantity, factor) {
                let carb = parseFloat(document.getElementById("carbValue").getAttribute('data-original')) * quantity * factor;
                let protein = parseFloat(document.getElementById("proteinValue").getAttribute('data-original')) * quantity * factor;
                let fat = parseFloat(document.getElementById("fatValue").getAttribute('data-original')) * quantity * factor;

                document.getElementById("carbValue").innerText = carb.toFixed(2) + " g";
                document.getElementById("proteinValue").innerText = protein.toFixed(2) + " g";
                document.getElementById("fatValue").innerText = fat.toFixed(2) + " g";
                
                let originalCalories = parseFloat(document.getElementById("calorieLabel").getAttribute('data-original')) || 0;
                let updatedCalories = (originalCalories * quantity * factor).toFixed(0);
                document.getElementById("calorieLabel").innerHTML = updatedCalories + '<br><small style="font-size: 12px;">kcal</small>';

                updateChart(carb, protein, fat);
            }

            function updateChart(carb, protein, fat) {
                let total = carb + protein + fat;
                let carbPercent = total > 0 ? (carb / total * 100).toFixed(1) : 0;
                let proteinPercent = total > 0 ? (protein / total * 100).toFixed(1) : 0;
                let fatPercent = total > 0 ? (fat / total * 100).toFixed(1) : 0;

                let ctx = document.getElementById('nutritionChart').getContext('2d');

                if (nutritionChart !== null && typeof nutritionChart.destroy === 'function') {
                    nutritionChart.destroy();
                }

                nutritionChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [
                            `Carbohydrates ${carbPercent}%`,
                            `Protein ${proteinPercent}%`,
                            `Fat ${fatPercent}%`
                        ],
                        datasets: [{
                            data: [carb, protein, fat],
                            backgroundColor: ['#6abf4b', '#e67e22', '#f1c40f'],
                            borderWidth: 2,
                            borderColor: '#fff'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        cutout: '65%',
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        return context.label + ': ' + context.parsed + 'g';
                                    }
                                }
                            }
                        }
                    }
                });
            }

            document.addEventListener("DOMContentLoaded", function () {
                updateMacroValues(1, 0.01);
            });
        </script>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jacques/Desktop/nutrition-website-main/resources/views/foods/show.blade.php ENDPATH**/ ?>