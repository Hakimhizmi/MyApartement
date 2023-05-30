<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <nav
    class="z-10 flex shrink-0   grow-0 justify-around gap-4 border-t border-gray-200 bg-white/50 p-2.5 shadow-lg backdrop-blur-lg  fixed top-2/4 -translate-y-2/4 left-6 min-h-[auto] min-w-[64px] flex-col rounded-lg border"
    >
    <a
        href="#"
        onclick="content2()"
        id="content2"
        class="flex aspect-square min-h-[32px] w-20 flex-col items-center justify-center gap-1 rounded-md p-1.5 text-gray-700 hover:bg-gray-100 bg-purple-50 text-purple-600 "
    >
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
      </svg>
      

        <small class="text-center text-xs font-medium"> Manage apartments </small>
    </a>

    <a
    onclick="content1()"
    id="content1"
        href="#"
        class="flex aspect-square min-h-[32px] w-20 flex-col items-center justify-center gap-1 rounded-md p-1.5 text-gray-700 hover:bg-gray-100 "
    >
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>
      

        <small class="text-center text-xs font-medium"> Manage options </small>
    </a>

    <hr class="" />

    <a
        href="/main"
        class="flex h-16 w-16 ml-2 flex-col items-center justify-center gap-1 text-fuchsia-900 "
    >
        <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6"
        >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819"
        />
        </svg>

        <small className="text-xs font-medium">Home</small>
    </a>
    </nav>

<div class="sm:px-6 mx-auto mt-20 w-3/4 " id="apartments">
    <?php if(session('success')): ?>
    <div class="flex bg-green-100 mx-auto w-1/3 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            <span class="font-medium"></span> <?php echo e(session('success')); ?>

            .
        </div>
    </div>
<?php endif; ?>
    <h2 class="text-lg font-medium text-gray-800 ">Apartments</h2>

                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                    <div class="sm:flex items-center justify-between">
                        <div class="flex items-center">
                            <a onclick="sold(0)" class="rounded-full focus:outline-none focus:ring-2  focus:bg-purple-50 focus:ring-purple-800"   href="#" >
                                <div class="py-2 px-8 text-gray-600 bg-purple-100 text-purple-700 rounded-full hover:text-purple-700 hover:bg-purple-100" id="sold0">
                                    <p>Available</p>
                                </div>
                            </a>
                            <a onclick="sold(1)" class="rounded-full focus:outline-none focus:ring-2 focus:bg-purple-50 focus:ring-purple-800 ml-4 sm:ml-8"  href="#">
                                <div class="py-2 px-8 text-gray-600 hover:text-purple-700 hover:bg-purple-100 rounded-full " id="sold1">
                                    <p>Sold</p>
                                </div>
                            </a>
                        </div>
                        <a href="/dashboard/create">
                        <button  class="focus:ring-2 focus:ring-offset-2 focus:ring-purple-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-purple-700 hover:bg-purple-600 focus:outline-none rounded">
                            <p class="text-sm font-medium leading-none text-white" >Add an apartment</p>
                        </button></a>
                    </div>
                    <div class="mt-7 overflow-x-auto">

                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Title</th>
                            <th class="py-3 px-6 text-left">Surface</th>
                            <th class="py-3 px-6 text-center">Price</th>
                            <th class="py-3 px-6 text-center">City</th>
                            <th class="py-3 px-6 text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light" id="table">
                        <?php $__currentLoopData = $apartements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full" src="/images/<?php echo e($item->cover); ?>"/>
                                    </div>
                                    <span class="font-medium"><?php echo e($item->title); ?></span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    
                                    <span><?php echo e($item->surface); ?></span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span><?php echo e($item->price); ?></span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="py-1 px-3"><?php echo e($item->city); ?></span>
                            </td>
                            
                            <td class="mx-auto float-right mr-10 mt-1 mb-1">
                                <a href="<?php echo e(route('dashboard.UpdateSold',['id' => $item->id, 'type' => 1])); ?>"> <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-8 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Sold</button></a>

                                <a href="<?php echo e(route('dashboard.edit',$item->id)); ?>"> <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-8 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Edit</button></a>
                               
                                <a href="deleteApartement/<?php echo e($item->id); ?>"><button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Delete</button></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
           
                    </div>
                </div>
            </div>


            <section class="container px-4 sm:px-6  mt-20  mx-auto w-3/4" id="options" style="display: none">
                <h2 class="text-lg font-medium text-gray-800 ">Options</h2>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                    <form action="<?php echo e(route('dashboard.insertOption')); ?>" method="POST" id="form1">
                        <?php echo csrf_field(); ?>
                    <div class="sm:flex items-center justify-between mt-4">
                        <input
                                            class="block w-full px-4 py-3  text-sm placeholder-gray-500 bg-white border border-gray-300 rounded  "
                                            type="text" name="Name" placeholder="Enter name of option" >

                        <button  class="focus:ring-2 ml-4  focus:ring-offset-2 focus:ring-purple-600  sm:mt-0 inline-flex items-start justify-start px-6 py-2 bg-purple-700 hover:bg-purple-600 focus:outline-none rounded">
                            <p class="text-sm  font-medium leading-none text-white" >Add Option</p>
                        </button> 
                    </div>
                    <?php $__errorArgs = ['Name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </form>
                <div id="form2" style="display: none">
                    <form action="<?php echo e(route('dashboard.updateOption')); ?>" method="post" >
                        <?php echo csrf_field(); ?>
                        <input type="number" name="id"  hidden>
                        <div class="sm:flex items-center justify-between mt-4">
                            <input
                                        class="block w-full  px-4 py-2   text-sm placeholder-gray-500 bg-white border border-gray-300 rounded  "
                                        type="text" name="NameOption" required >

                            <button  class="focus:ring-2 ml-4  focus:ring-offset-2 focus:ring-purple-600  sm:mt-0 inline-flex items-start justify-start px-6 py-2 bg-purple-700 hover:bg-purple-600 focus:outline-none rounded">
                                    <p class="text-sm  font-medium leading-none text-white" >Update</p>
                            </button> 
                        </form>
                            <button type="button" onclick="Cancel()"  class="focus:ring-2 ml-4  focus:ring-offset-2 focus:ring-purple-600  sm:mt-0 inline-flex items-start justify-start px-6 py-2 bg-gray-700 hover:bg-purple-600 focus:outline-none rounded">
                                <p class="text-sm  font-medium leading-none text-white" >Cancel</p>
                            </button> 
                        </div>
                   
                  
            </div>
                <div class="mt-7 overflow-x-auto">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-center float-right mr-20 mt-1">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light" id="tableOptions">
                        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    
                                    <span><?php echo e($item->Name); ?></span>
                                </div>
                            </td>
                            <td class="mx-auto float-right mr-10 mt-1 mb-1">
                               <button onclick="Edit(<?php echo e($item->id); ?>,'<?php echo e($item->Name); ?>')" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-8 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Edit</button>

                               <a href="deleteOption/<?php echo e($item->id); ?>"> <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Delete</button></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
            </div>

            </section>

                      
        
            <script>
                function Edit(id,name) {
                    $('#form1').hide();
                    $('#form2').slideDown();
                    $("input[name='id']").val(id);
                    $("input[name='NameOption']").val(name);
                }
                function Cancel() {
                    $('#form2').hide();
                    $('#form1').slideDown();
                }

            </script>    

            <script>
                function content1() {
                    $('#options').slideDown();
                    $('#content2').removeClass('bg-purple-50 text-purple-600');
                    $('#content1').addClass('bg-purple-50 text-purple-600');
                    $('#apartments').hide();
                }
                function content2() {
                    $('#apartments').slideDown();
                    $('#content1').removeClass('bg-purple-50 text-purple-600');
                    $('#content2').addClass('bg-purple-50 text-purple-600');
                    $('#options').hide();
                }

                 function sold(type) {
                    if (type == 0) {
  $('#sold1').removeClass('bg-purple-100 text-purple-700');
  $('#sold0').addClass('bg-purple-100 text-purple-700');
} else {
  $('#sold0').removeClass('bg-purple-100 text-purple-700');
  $('#sold1').addClass('bg-purple-100 text-purple-700');
}


    $.ajax({
      type: 'post',
      url: `<?php echo e(route('dashboard.sold')); ?>`,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {type:type},
      success: function(data) {
        let html = ''
        data.data.forEach(item => {
          html += `
          <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full" src="/images/${item.cover}"/>
                                    </div>
                                    <span class="font-medium">${item.title}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    
                                    <span>${item.surface}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>${item.price}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="py-1 px-3">${item.city}</span>
                            </td>
                            
                            <td class="mx-auto float-right mr-10 mt-1 mb-1">
                                <a href="/Updatesold/${item.id}/${item.sold == 0 ? 1 : 0}"> <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-8 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">${item.sold == 0 ? 'Sold' : 'get Back'}</button></a>

                                <a href="/dashboard/${item.id}/edit"> <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-8 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Edit</button></a>

                                <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">Delete</button>
                            </td>
                        </tr>
          `
        })
        $('#table').html(html);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      }
    });
  
  }
            </script>
           
</body>
</html><?php /**PATH C:\Users\ISTA TASSILA 3\Desktop\pfe 2\resources\views/dashboard.blade.php ENDPATH**/ ?>