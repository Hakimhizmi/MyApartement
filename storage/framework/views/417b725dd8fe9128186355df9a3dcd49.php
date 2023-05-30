<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Apartment</title>
    <link rel="icon" href="/logo/logo.png" type="image/gif" >
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.7.1/cdn.js" defer ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex flex-wrap h-screen w-full content-center justify-center bg-white  ">
            <div class="w-3/4  px-4 mx-auto ">
                <div class="p-8 px-4 bg-white mb-12  ">
                    <div class="grid grid-cols-1 lg:grid-cols-[30%,1fr] gap-6">
                        <div>
                            <h2 class="px-4 text-lg font-medium leading-6 text-gray-900 ">Edit Apartment Information
                            </h2>
                            <p class="px-4 mt-1 text-sm text-gray-600 ">
                                Please enter the information correctly.
                            </p>
                            <div class="mb-6 mt-5 lg:mb-10 lg:h-2/4 ">
                                <img src="/images/<?php echo e($apartement->cover); ?>" alt="" id="cover"
                                    class="object-cover w-full lg:h-full rounded-lg shadow-lg">
                            </div>
                        </div>
                        <div>
                            <form action="<?php echo e(route('dashboard.update',$apartement->id)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo method_field('put'); ?>
                                <?php echo csrf_field(); ?>
                                

                                <input type="text" name="defaulimage" value="<?php echo e($apartement->cover); ?>" hidden />  
                                <div class="px-4 mb-6">
                                    <label class="block mb-2 text-sm font-medium ">Title</label>
                                    <input
                                        class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg   "
                                        type="text" name="title" placeholder="Enter a title" value="<?php echo e($apartement->title); ?>">
                                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                              
                                <div class="flex flex-wrap items-center">
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label class="block mb-2 text-sm font-medium ">Surface</label>
                                        <input
                                        class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg  "
                                        type="number" name="surface" placeholder="Enter a surface" value="<?php echo e($apartement->surface); ?>">
                                        <?php $__errorArgs = ['surface'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="w-full px-4 mb-6 lg:w-2/4">
                                        <label class="block mb-2 text-sm font-medium "> Price
                                            <input
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg  "
                                            type="number" name="price" placeholder="Enter a price" value="<?php echo e($apartement->price); ?>">
                                            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                
                                <div class="px-4 mb-6">
                                    
                                    <label class="block mb-2 text-sm font-medium text-gray-900 "
                                        for="file_input">Update Cover</label>
                                        <input name="cover" onchange="changeImage(event)" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " id="file_input" type="file">
                                        <?php $__errorArgs = ['cover'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="flex flex-wrap items-center">
                                    <div class="w-full px-4 mb-6 lg:w-1/3">
                                        <label class="block mb-2 text-sm font-medium ">Pieces</label>
                                        <input
                                        class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg  "
                                        type="number" name="pieces" placeholder="Enter a pieces" value="<?php echo e($apartement->pieces); ?>">
                                        <?php $__errorArgs = ['pieces'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="w-full px-4 mb-6 lg:w-1/3">
                                        <label class="block mb-2 text-sm font-medium "> Floor
                                            <input
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg  "
                                            type="number" name="floor" placeholder="Enter a floor" value="<?php echo e($apartement->floor); ?>">
                                            <?php $__errorArgs = ['floor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="w-full px-4 mb-6 lg:w-1/3">
                                        <label class="block mb-2 text-sm font-medium "> Rooms
                                            <input
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg  "
                                            type="number" name="rooms" placeholder="Enter a rooms" value="<?php echo e($apartement->rooms); ?>">
                                            <?php $__errorArgs = ['rooms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center">
                                    <div class="w-full px-4 mb-6 lg:w-1/3">
                                        <label class="block mb-2 text-sm font-medium ">City</label>
                                        <input
                                        class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg  "
                                        type="text" name="city" placeholder="Enter a city" value="<?php echo e($apartement->city); ?>">
                                        <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="w-full px-4 mb-6 lg:w-1/3">
                                        <label class="block mb-2 text-sm font-medium "> Adresse
                                            <input
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg  "
                                            type="text" name="adresse" placeholder="Enter a adresse" value="<?php echo e($apartement->adresse); ?>">
                                            <?php $__errorArgs = ['adresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="w-full px-4 mb-6 lg:w-1/3">
                                        <label class="block mb-2 text-sm font-medium "> Postal Code
                                            <input
                                            class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg  "
                                            type="number" name="postalcode" placeholder="Enter a postal code" value="<?php echo e($apartement->postalcode); ?>">
                                            <?php $__errorArgs = ['postalcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                               
                                
                                <div class="px-4 mb-6">
                                    <label class="block mb-2 text-sm font-medium ">Description</label>
                                    <textarea
                                        class="block w-full px-4 py-3 mb-2 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-lg "
                                        name="description" rows="5" placeholder="Write something..."  ><?php echo e($apartement->description); ?></textarea>
                                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="w-full px-4">
                                    <label class="block  text-sm font-medium "> Options
                                <select id="select2" name="options[]"  class="hidden" multiple>
                                    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"  <?php echo e(in_array($item->id, $apartementOptions->pluck('id')->toArray()) ? 'selected' : ''); ?>><?php echo e($item->Name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                
                                <div class="relative flex" x-data="{ ...selectMultiple('select2') }">
                                
                                    <div class="flex flex-wrap border w-full mb-5 mt-2  border border-gray-300 rounded-3xl"
                                        @click="isOpen = true;"
                                        @keydown.arrow-down.prevent="if(dropdown.length > 0) document.getElementById(elSelect.id+'_'+dropdown[0].index).focus();">
                                
                                        <template x-for="(option,index) in selected;" :key="option.value">
                                            <p class="m-1 self-center p-2  text-xs whitespace-nowrap rounded-3xl bg-blue-200 cursor-pointer hover:bg-red-300"
                                                x-text="option.text"
                                                @click="toggle(option)">
                                            </p>
                                        </template>
                                
                                        <input type="text" placeholder="Find options" class="pl-2 border-none placeholder-gray-500 focus:ring-0  h-10"
                                            x-model="term"
                                            x-ref="input" />
                                    </div>
                                
                                    <div class="absolute mt-12 z-10 w-1/4  max-h-72 overflow-y-auto border border-gray-300 rounded-lg bg-gray-100 "
                                        x-show="isOpen"
                                        @mousedown.away="isOpen = false">
                                
                                        <template x-for="(option,index) in dropdown" :key="option.value">
                                            <div class="cursor-pointer hover:bg-blue-200 focus:bg-blue-300 focus:outline-none"
                                                :class="(term.length > 0 && !option.text.toLowerCase().includes(term.toLowerCase())) && 'hidden';"
                                                x-init="$el.id = elSelect.id + '_' + option.index; $el.tabIndex = option.index;"
                                                @click="toggle(option)"
                                                @keydown.enter.prevent="toggle(option);"
                                                @keydown.arrow-up.prevent="if ($el.previousElementSibling != null) $el.previousElementSibling.focus();"
                                                @keydown.arrow-down.prevent="if ($el.nextElementSibling != null) $el.nextElementSibling.focus();">
                                
                                                <p class="p-2"
                                                   x-text="option.text"></p>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                      <div class="px-4 ">
                                    <div class="flex float-right ">
                                        <button type="submit"
                                            class="inline-block px-6 py-2.5 bg-blue-500  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg ">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> </div>


            
<script>
    function changeImage(e) {
  $('#cover').attr('src', URL.createObjectURL(e.target.files[0]));
}

    document.addEventListener('alpine:init', () => {
        Alpine.data('selectMultiple', (elSelectId) => ({

            elSelect: document.getElementById(elSelectId),
            isOpen: false,
            term: '',

            selected: [],
            dropdown: [],
            init()
            {
                for(var index=0; index < this.elSelect.options.length; index++)
                {
                    if (this.elSelect.options[index].selected)
                        this.selected.push(this.elSelect.options[index]);
                    else
                        this.dropdown.push(this.elSelect.options[index]);
                }
            },

            toggle(option)
            {
                var property1 = (option.selected == true) ? 'dropdown' : 'selected';
                var property2 = (option.selected == true) ? 'selected' : 'dropdown';

                option.selected = !option.selected;
                this[property1].push(option);
                this[property2] = this[property2].filter((opt, index)=>{
                    return opt.value != option.value;
                });
                                if (property1 == 'dropdown')
                    this.dropdown.sort((opt1, opt2) => (opt1.index > opt2.index) ? 1 : -1)
                if (option.selected)
                    this.$refs.input.focus();
            },
        })
        )
    });
</script>
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\pfe 2\resources\views/editApartement.blade.php ENDPATH**/ ?>