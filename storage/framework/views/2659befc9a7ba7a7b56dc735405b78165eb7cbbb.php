
<?php $__env->startSection('contenu'); ?>
<div class="bg-gray-50 min-h-screen flex items-center justify-center px-16">
    <div class="relative w-full max-w-lg">
      <div class="absolute top-0 -left-4 w-72 h-72
       bg-gray-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob "></div>
      <div class="absolute top-0 -right-4 w-72 h-72 bg-gray-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
      <div class="absolute -bottom-32 left-20 w-72 h-72 bg-gray-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
      <div class="m-8 relative space-y-4">
            
<div>
    <form action="<?php echo e(url('admin/marqueVehicule')); ?>" method="post" class="m-4 flex">
        <?php echo csrf_field(); ?>
      <input class="rounded-l-lg w-full  p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white"
      name="marque" value="<?php echo e(old('marque')); ?>"/>
      
      <button class=" bg-gray-300 text-white px-8 rounded-r-lg font-bold p-4 uppercase border-white-500
       border-t border-b border-r">Ajouter</button>
       <div class="text-red">
        <?php $__errorArgs = ['marque'];
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
  </form>

</div>

   <?php $__currentLoopData = $marqueVahicule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">
          <div class="flex-1 flex justify-between items-center">
            <p><?php echo e($marque->marque); ?> </p>
            <form action="<?php echo e(url('admin/marqueVehicule/'.$marque->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>  
                <input type="submit" value="Suppremer" 
                class="w-24 h-6 rounded-lg bg-gray-300 text-white"                >
            </form>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.admin.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\front-end-tall\resources\views/pages/admin/marqueVehicule/index.blade.php ENDPATH**/ ?>