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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div id="detail">
    @include('nav')
    @if(session('success'))
    <div class="flex bg-green-100 mx-auto w-1/3 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            <span class="font-medium"></span> {{ session('success') }}
            .
        </div>
    </div>
@endif

    <section class="overflow-hidden bg-white py-11 font-poppins  " >
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="sticky top-0 z-50 overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
                            <img src="/images/{{$data->cover}}" alt=""
                                class="object-cover w-full lg:h-full ">
                        </div>
                        
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="lg:pl-20">
                        <div class="mb-5 ">
                            <span class="px-2.5 py-0.5 text-xs {{$data->sold == 0 ? ' text-blue-600 bg-blue-100' : ' text-red-600 bg-red-100'}}  rounded-xl ">{{$data->sold == 0 ? 'Avalible' : 'sold'}}</span>

                            <h2 class="max-w-xl mt-2 mb-6 text-2xl font-bold  md:text-4xl">
                                {{$data->title}}</h2>
                           
                            <p class="max-w-md mb-8 text-gray-700 ">
                                {{$data->description}}
                            </p>
                            <p class="inline-block mb-8 text-4xl font-bold text-gray-700  ">
                               <span>
                                ${{$data->price}}
                                </span>
                            </p>
                        </div>
                        <div class="mb-6">
                            <h2 class="mb-2 text-lg font-bold text-gray-700 ">Characteristic :</h2>
                            <div class="bg-gray-100  rounded-xl">
                            <div class="p-3 lg:p-5 ">
                            <div class="p-2 rounded-xl lg:p-6  bg-gray-50">
                            <div class="flex flex-wrap justify-center gap-x-10 gap-y-4">
                             <div class="w-full mb-4 md:w-2/5">
                            <div class="flex ">
                            <span class="mr-3 text-gray-500 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                  </svg>
                                  
                            </span>
                            <div>
                            <p class="mb-2 text-sm font-medium text-gray-500 ">
                            surface
                            </p>
                            <h2 class="text-base font-semibold text-gray-700 ">
                            {{$data->surface}}
                            </h2>
                            </div>
                            </div>
                            </div>
                            <div class="w-full mb-4 md:w-2/5">
                            <div class="flex ">
                            <span class="mr-3 text-gray-500 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                                  </svg>
                                  
                            </span>
                             <div>
                            <p class="mb-2 text-sm font-medium text-gray-500 ">
                                rooms
                            </p>
                            <h2 class="text-base font-semibold text-gray-700 ">
                                {{$data->rooms}}
                            </h2>
                            </div>
                            </div>
                            </div>
                            <div class="w-full mb-4 lg:mb-0 md:w-2/5">
                            <div class="flex ">
                            <span class="mr-3 text-gray-500 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z" />
                                  </svg>
                                  
                            </span>
                            <div>
                            <p class="mb-2 text-sm font-medium text-gray-500 ">
                                pieces
                            </p>
                            <h2 class="text-base font-semibold text-gray-700 ">
                                {{$data->pieces}}
                            </h2>
                            </div>
                            </div>
                            </div>
                            <div class="w-full mb-4 lg:mb-0 md:w-2/5">
                            <div class="flex ">
                            <span class="mr-3 text-gray-500 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                                  </svg>
                                  
                            </span>
                            <div>
                            <p class="mb-2 text-sm font-medium text-gray-500 ">
                                floor
                            </p>
                            <h2 class="text-base font-semibold text-gray-700 ">
                                {{$data->floor}}
                            </h2>
                            </div>
                            </div>
                            </div>
                           
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="mt-6 ">
                                <div class="flex flex-wrap items-center">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                      </svg>
                                </span>
                                <h2 class="text-lg font-bold text-gray-700 ">Location</h2>
                                </div>
                                <div class="px-7">
                                <p class="mb-2 text-sm "> {{$data->city}}  {{$data->adresse}}  
                                    <br>{{$data->postalcode}}</p>
                                </div>
                            </div>
                            @if ($options  != null )

                        <div class="mt-6">
                            <p class="mb-2 text-lg font-semibold">Specificity : </p>
                            
                            <div class="grid grid-cols-2 gap-4 pb-4 mt-2 mb-4 border-b-2 border-gray-300 lg:grid-cols-3">
                            @foreach ($options as $item)
                            <button class="flex items-center justify-center w-full h-full py-2 border-2 border-gray-300  hover:border-blue-400">
                            <div>
                            <div class="mb-2 font-semibold">
                                {{$item->Name}}</div>
                            </div>
                            </button>
                          @endforeach    
                            </div>
                            </div>
                       @endif
                        <div class="flex flex-wrap mt-5  items-center -mx-4 ">
                           
                            @if($data->sold == 0 )
                            <div class="w-full  px-4 mb-4 lg:mb-0 lg:w-1/2">
                                <button
                                onclick="Contact()"
                                    class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md   hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 ">
                                    contact us
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="flex min-h-screen items-center justify-start bg-white" id="form" style="display: none;">

    <button onclick="back()" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 fixed top-4 right-4">
        <span class="sr-only">Close menu</span>
        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      

    <div class="mx-auto w-full max-w-lg">
      <h1 class="text-4xl font-medium">Contact us</h1>
      <p class="mt-3">Email us at Myapartement@gmail.com or message us here:</p>
  
      <form  class="mt-10" action="{{route('main.order',$data->id)}}" method="post">
      @csrf
      
        <div class="grid gap-6 sm:grid-cols-2">
          <div class="relative z-0">
            <input type="text" name="name" required class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
            <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your name</label>
          </div>
          <div class="relative z-0">
            <input type="text" name="lastName" required class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
            <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your last name</label>
          </div>
          <div class="relative z-0">
            <input type="text" name="phone" required class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
            <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your phone</label>
          </div>
          <div class="relative z-0">
            <input type="email" name="email" required class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
            <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your email</label>
          </div>
          <div class="relative z-0 col-span-2">
            <textarea name="message" rows="5" required class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" "></textarea>
            <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your message</label>
          </div>
        </div>
        <button type="submit" class="mt-5 rounded-md bg-black px-10 py-2 text-white">Send Message</button>
      </form>
    </div>
  </div>

  
  <script>
    function Contact() {
    $('#form').slideDown();
    $('#detail').hide();
    }
    function back() {
        $('#detail').slideDown();
        $('#form').hide();
    }
  </script>
 
  
</body>
</html>