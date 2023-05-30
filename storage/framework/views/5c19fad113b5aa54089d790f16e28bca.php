<div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <?php $__currentLoopData = $scroller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input class="carousel-open" type="radio" id="carousel-<?php echo e($loop->iteration); ?>" name="carousel" aria-hidden="true" hidden="" checked="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;" >
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('/images/<?php echo e($item->cover); ?>');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-white font-bold text-2xl my-4">Our Last Apartements</p>
                            <a class="text-xl text-white inline-block no-underline border-b border-white leading-relaxed hover:text-black hover:border-black" href="/main/<?php echo e($item->id); ?>">view product</a>
                        </div>
                    </div>

                </div>
            </div>
           
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
          
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>
<?php /**PATH C:\Users\ISTA TASSILA 3\Desktop\pfe 2\resources\views/last.blade.php ENDPATH**/ ?>