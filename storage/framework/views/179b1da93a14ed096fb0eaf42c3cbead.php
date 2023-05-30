<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Apartment</title>
    <link rel="icon" href="/logo/logo.png" type="image/gif" >
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</head>
<body>
    <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:px-8 ">
    <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
        <div class="px-4 md:text-center ">
            <p class="mb-4 text-xl font-bold text-blue-500 ">
                Order Information
            </p>
            <div class="flex w-32 mt-2 overflow-hidden rounded md:mx-auto md:mb-14">
                <div class="flex-1 h-2 bg-blue-200">
                </div>
                <div class="flex-1 h-2 bg-blue-400">
                </div>
                <div class="flex-1 h-2 bg-blue-300">
                </div>
            </div>
        </div>
    <div class="flex flex-col md:flex-row -mx-4">
      <div class="md:flex-1 px-4">
        <a class="mb-0 overflow-hidden bg-white rounded shadow " href="/main/<?php echo e($apartement->id); ?>">
            <div class="relative overflow-hidden h-72">
                <img class="object-cover w-full h-full transition-all hover:scale-110"
                    src="/images/<?php echo e($apartement->cover); ?>

                    " alt="">
            </div>
            <div class="relative z-20 p-8 -mt-12 ">
                <span class="inline-block px-4 py-2 mb-5 text-xs text-white bg-blue-500 rounded">
                    Apartement n'<?php echo e($apartement->id); ?>

                </span>
                <h2 class="mb-3 text-2xl font-bold leading-9 text-gray-600 ">
                    <?php echo e($apartement->title); ?>

                </h2>
                <p class="mb-4 text-base leading-7 text-gray-400">
                    <?php echo e($apartement->description); ?>


                </p>
                <a href="/main/<?php echo e($apartement->id); ?>"
                class="px-4 py-2 text-gray-100 bg-blue-500 rounded-full  hover:bg-blue-600">
                Apartement Datail
            </a>
            </div>
        </a>
      </div>
      <div class="md:flex-1 px-4">
        <div class="w-full px-6 mb-10 lg:w-2/2 lg:mb-0 ">
            <div class="pl-4 mb-6 border-l-4 border-blue-500 ">
                <span class="text-sm text-gray-600 uppercase "><?php echo e($data->date); ?></span>
                <h1 class="mt-2 text-3xl font-black text-gray-700 md:text-5xl ">
                    <?php echo e($data->name); ?> <?php echo e($data->lastName); ?>

                </h1>
            </div>
            <div class="flex items-center mb-4 text-base text-gray-600 ">
                <span class="mr-3 text-blue-500 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="w-5 h-5 bi bi-patch-check-fill" viewBox="0 0 16 16">
                        <path
                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                    </svg>
                </span>
                <?php echo e($data->phone); ?>

            </div>
            <div class="flex items-center mb-4 text-base text-gray-600 ">
                <span class="mr-3 text-blue-500 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="w-5 h-5 bi bi-patch-check-fill" viewBox="0 0 16 16">
                        <path
                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                    </svg>
                </span>
                <?php echo e($data->email); ?>

            </div>
            <p class="mb-6  text-base leading-7 text-gray-500 ">
                <?php echo e($data->message); ?>

            </p>
            <a href="/dashboard"
                class="px-4 py-2 text-gray-100 bg-blue-500 rounded-lg  hover:bg-blue-600">
                Go back
            </a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\pfe 2\resources\views/detailOrder.blade.php ENDPATH**/ ?>