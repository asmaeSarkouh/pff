
<?php $__env->startSection('contenu'); ?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
           liste des Vehicules
            
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom de vehicule
                </th>
                <th scope="col" class="px-6 py-3">
                    Number d'immatricule
                </th>
                <th scope="col" class="px-6 py-3">
                    Marque de vehicule
                </th>
                <th scope="col" class="px-6 py-3">
                    Modele de vehicule
                </th>
                <th scope="col" class="px-6 py-3">
                    Type de carburant
                </th>
                <th scope="col" class="px-6 py-3">
                    Année de mise  
                </th>
                <th scope="col" class="px-6 py-3">
                    Consomation
                </th>
                <th scope="col" class="px-6 py-3">
                    Kilométrage
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $espace_vehicules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $espace_vehicule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo e($espace_vehicule->nom_vehicule); ?>

                </th>
                <td class="px-6 py-4">
                    <?php echo e($espace_vehicule->immatricule); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($espace_vehicule->marque->marque); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($espace_vehicule->modele->model); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($espace_vehicule->typeCarburant->type); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($espace_vehicule->anneeMise->annee); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($espace_vehicule->consomation); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($espace_vehicule->kilometrage); ?>

                </td>
                <td class="px-6 py-4 text-right">
                    <form action="<?php echo e(url('admin/espace_vehicules/'.$espace_vehicule->id)); ?>" method="post">
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
                <h4 class="text-center text-gray-500 dark:text-gray-400">il n'y a pas de vehicule</h4>
            </td>
        </tr>
          <?php endif; ?>
        </tbody>
    </table>
    <?php echo e($espace_vehicules->links()); ?>

</div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.admin.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\front-end-tall\resources\views/pages/admin/espace_vehicule/index.blade.php ENDPATH**/ ?>