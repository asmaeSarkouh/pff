
<?php $__env->startSection('contenu'); ?>
<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
      <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
        Create Modele Vehicule
      </h1>
      <form
        action="<?php echo e(url('admin/modeleVehicule')); ?>"
        method="post"
        class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8"
      >
      <?php echo csrf_field(); ?>
        <div>
          <label class="sr-only">Modele</label>
  
          <div class="relative">
            <input
              type="text"
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
             value="<?php echo e(old('model')); ?>"
             name="model"
             placeholder="nom modele"
              />
          </div>
          <div class="text-red">
            <?php $__errorArgs = ['model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>
        <div>
          <label class="sr-only">Marque List</label>
          <div class="relative">
            <select id="marque_id" name="marque_id" 
            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm">
            <option selected>Select marque</option>
            <?php $__currentLoopData = $marques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($marque->id); ?>"
                    <?php if( old('marque_id')  == $marque->id): ?> selected="selected" <?php endif; ?>>
                    <?php echo e($marque->marque); ?> </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          </div>
          <div class="text-red">
            <?php $__errorArgs = ['marque_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>
  
        <button
          type="submit"
          class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
        >
          Ajouter
        </button>
      </form>
    </div>
  </div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">


    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
           liste des Modeles Vehicules
            
        </caption>
        
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom de marque
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom de modele
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $modeleVehicule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modele): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 ">
                    <?php echo e($modele->marque->marque); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($modele->model); ?>

                </td>
                <td class="px-6 py-4 text-right">
                    <form action="<?php echo e(url('admin/modeleVehicule/'.$modele->id)); ?>" method="post">
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
    <?php echo e($modeleVehicule->links()); ?>

</div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.admin.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\front-end-tall\resources\views/pages/admin/modeleVehicule/index.blade.php ENDPATH**/ ?>