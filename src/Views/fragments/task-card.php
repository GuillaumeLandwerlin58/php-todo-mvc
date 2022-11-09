<?php
/**
 * @var TaskEntity $task
 */
?>

            <!-- Task -->
            <div class="bg-white hover:bg-slate-50 transition-colors duration-300 my-2 py-4 rounded flex flex-row border-2 border-slate-100 items-stretch">
                <!-- Checkbox -->
                <div class="mx-4 flex items-center">
                    <input
                        id="task-1"
                        name="task-1"
                        type="checkbox"
                        class="w-4 h-4 text-slate-600 bg-slate-100 rounded-xl border-2 border-slate-300 cursor-pointer accent-teal-400"
                    />
                </div>

                <!-- Content -->
                <label for="task-1" class="mx-4 -my-4 py-4 flex-1 text-lg font-medium cursor-pointer select-none flex items-center">
                    <?php echo $task->getTitle(); ?>
                </label>


                <!-- Actions -->
                <ul class="mx-4 text-lg font-bolder flex items-center flex">
                    <!-- Show only if the task has a description -->
                    <?php echo $description = $task->getDescription()?>
                    <li class="px-2 border-r-2 border-slate-100">
                        <span class="sr-only">Cette tâche a une description</span>
                        <i class="iconoir-align-left text-slate-400"></i>
                    </li>
                </ul>
            </div>
