
<?php $__env->startSection('contenu'); ?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
           liste des utilisateurs
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom Utilisateur
                </th>
                <th scope="col" class="px-6 py-3">
                    Email Utilisateur
                </th>
                <th scope="col" class="px-6 py-3">
                    Nomber Vehicules
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo e($user->name); ?>

                </th>
                <td class="px-6 py-4">
                    <?php echo e($user->email); ?>

                </td>
                <td class="px-6 py-4">
                    2
                    
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="<?php echo e(url('admin/users/'.$user->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>  
                        <input type="submit" value="Suppremer" 
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                        >
                    </form>
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td>
                <h4 class="text-center text-gray-500 dark:text-gray-400">il n'y a pas d'utilisateur</h4>
            </td>
        </tr>
          <?php endif; ?>
        </tbody>
    </table>
</div>

   
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.admin.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\front-end-tall\resources\views/pages/admin/users/index.blade.php ENDPATH**/ ?>