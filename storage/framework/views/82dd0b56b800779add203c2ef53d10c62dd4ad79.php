
<?php $__env->startSection('content'); ?>

  
  <div class="mt-5 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 ">
    <?php $__currentLoopData = $espace_carburants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $espace_carburant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="md:w-1/3 sm:w-full rounded-lg shadow-lg bg-gradient-to-br my-3">
        <div class="flex justify-between border-b border-gray-100 px-5 py-4">
      		<div>
              <i class="fas fa-exclamation-circle text-blue-500"></i>
              <span class="font-bold text-gray-700 text-lg"><?php echo e($espace_carburant->date); ?></span>
          	</div>
          <div>
            <form action="<?php echo e(url('espace_carburants/'.$espace_carburant->id)); ?>" method="post">
              <?php echo csrf_field(); ?>
              <?php echo method_field('delete'); ?>    
              <button type="submit">
                <i class="fa fa-times-circle text-red-500 hover:text-red-600 transition duration-150"></i>
              </button>
              </form> 
              
          	</div>
      	</div>
      
      	<div class="px-10 py-5 text-gray-600">
            Quantite de Carburant :<span class="text-red-900"> <?php echo e($espace_carburant->quantite); ?> L</span>
      	</div>
        <div class="px-10 py-5 text-gray-600">
            Montant Payé :<span class="text-red-900"> <?php echo e($espace_carburant->paye); ?> DH</span>
      	</div>
        <div class="px-10 py-5 text-gray-600">
            Nom de Vehicule :<span class="text-red-900"> <?php echo e($espace_carburant->espaceVehicule->nom_vehicule); ?> L</span>
      	</div>
      	<div class="px-5 py-4 flex justify-end">
          <a href="<?php echo e(url('espace_carburants/'.$espace_carburant->id.'/edit')); ?>"
             class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Edit</a>
      	</div>
	</div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<a href="<?php echo e(url('espace_carburants/create')); ?>"
  class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
  Ajouter Carburant</a> 

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\front-end-tall\resources\views/pages/espace_carburant/index.blade.php ENDPATH**/ ?>