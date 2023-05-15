
<?php $__env->startSection('content'); ?>
<form method="post" enctype="multipart/form-data" 
action="<?php echo e(url('espace_carburants/')); ?>" 
>
<?php echo csrf_field(); ?>
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">

  <div class="space-y-12">
    <h2 class="text-base font-semibold leading-7 text-gray-900"></h2>
    <div class="border-b border-gray-900/10 pb-12">
      <div class="border-b border-gray-900/10 pb-12">
<p class="mt-1 text-sm leading-6 text-gray-600">____________
      <span class="text-base font-semibold leading-7 text-gray-900">Create Carburant</span>
        ____________</p>
        <div class="sm:col-span-3">
          <label for="quantite" class="block text-sm font-medium leading-6 text-gray-900">Quantite de Carburant</label>
          <div class="relative mt-2 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <span class="text-gray-500 sm:text-sm">Km</span>
            </div>
            <input type="number" min="0" required value="<?php echo e(old('quantite')); ?>" name="quantite" id="quantite" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00">
          </div>
          <?php $__errorArgs = ['quantite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="sm:col-span-3">
          <label for="espace_vehicule_id" class="block text-sm font-medium leading-6 text-gray-900">Nom Vehicule</label>
          <div class="mt-2">
            <select id="espace_vehicule_id" required name="espace_vehicule_id" autocomplete="espaceVehicule-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option value="">__Selectioner Vehicule__</option>
              <?php $__currentLoopData = $espaceVehicules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $espaceVehicule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($espaceVehicule->id); ?>"
                    <?php if( old('espace_vehicule_id')  == $espaceVehicule->id): ?> selected="selected" <?php endif; ?>>
                    <?php echo e($espaceVehicule->nom_vehicule); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <?php $__errorArgs = ['espace_vehicule_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
          <div class="sm:col-span-3">
            <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date d'operation</label>
            <div class="relative mt-2 rounded-md shadow-sm">
             <input type="date" required value="<?php echo e(old('date')); ?>" name="date" id="kilometrage" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00">
            </div>
            <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>
        <div class="sm:col-span-3">
          <label for="paye" class="block text-sm font-medium leading-6 text-gray-900">Montant Paye</label>
          <div class="relative mt-2 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <span class="text-gray-500 sm:text-sm">DH</span>
            </div>
            <input type="number" min="0" required value="<?php echo e(old('paye')); ?>" name="paye" id="paye" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00">
          </div>
          <?php $__errorArgs = ['frais'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      </div>


  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajouter</button>
  </div>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\front-end-tall\resources\views/pages/espace_carburant/create.blade.php ENDPATH**/ ?>