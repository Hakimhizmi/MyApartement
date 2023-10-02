<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <title>My Apartment</title>
    <link rel="icon" href="/logo/logo.png" type="image/gif" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

<style>
  .work-sans {
    font-family: 'Work Sans', sans-serif;
}
        
#menu-toggle:checked + #menu {
    display: block;
}

.hover\:grow {
    transition: all 0.3s;
    transform: scale(1);
}

.hover\:grow:hover {
    transform: scale(1.02);
}

.carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
}

.carousel-item {
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
}

#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3 {
    display: block;
}

.carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
}

#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #000;
    /*Set to match the Tailwind colour you want the active one to be */
}

</style>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

  </head>
  <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
  @include('nav')
  @include('last')
  @if ($errors->has('login'))
    <script>
      Toastify({
  text:"{{ $errors->first('login') }} "
,
  duration: 3500,
  newWindow: true,
  close: true,
  gravity: "top",
  position: "left", 
  stopOnFocus: true,
  offset: {
    y: 30 
  }, 
  style: {
    background: "linear-gradient(to right, #ff0000, #ff9999)",
  },
  onClick: function(){} 
}).showToast();
    </script>
  @endif

  <section class="bg-white py-8">
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
      <nav id="store" class="w-full z-30 top-0 px-6 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
          <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " >
            Store
          </a>
          <div class="flex items-center" id="store-nav-content">
            

            <div class="flex items-center justify-center p-4">
          
            <div class="relative text-gray-600">
  <input type="search" onchange="filter()" name="search" placeholder="Search by title" class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
  <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
    </svg>
  </button>
</div>
  <a id="dropdownDefault" data-dropdown-toggle="dropdown" class="pl-3 inline-block no-underline hover:text-black cursor-pointer" >
              <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width='30' height='30' viewBox="0 0 24 24">
                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
              </svg>
            </a>
            

            <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
    <h6 class="mb-1 text-sm font-medium text-gray-900 dark:text-white">
    surface
    </h6>
    <select onchange="filter()" name="surface_filter" class="bg-gray-50 mb-1 border-none text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
  <option  disabled selected>filter by surface</option>
  <option value="asc">surface , ascending </option>
  <option value="desc">surface , decending</option>
</select>
<h6 class="mb-1 text-sm font-medium text-gray-900 dark:text-white">
    rooms
    </h6>
    <select onchange="filter()" name="rooms_filter"  class="bg-gray-50 mb-1 border-none text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
  <option disabled selected>filter by number of rooms</option>
  <option value="2">2</option>
  <option value="4">4</option>
  <option value="6">6</option>
  <option value="8">8</option>
  <option value="12">12</option>
</select>
<h6 class="mb-1 text-sm font-medium text-gray-900 dark:text-white">
    price
    </h6>
    <select onchange="filter()" name="price_filter" class="bg-gray-50 mb-1 border-none text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
  <option disabled selected>filter by price</option>
  <option value="asc">price , ascending </option>
  <option value="desc">price , decending</option>
</select>
<h6 class="mb-1 text-sm font-medium text-gray-900 dark:text-white">
  availability
  </h6>
  <select onchange="filter()" name="sold_filter" class="bg-gray-50 mb-1 border-none text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
<option disabled selected>filter by availability</option>
<option value="1">Sold</option>
<option value="0">available</option>
</select>
<a onclick="clearFilters()" class="no-underline float-right mt-1 text-blue cursor-pointer">
  clear
</a>
  </div>
</div>


            
          </div>
        </div>
      </nav>
    <div class="flex flex-wrap -mx-6" id="apartements">

      

    </div>
  </section>
  @include('footer')

 

<script>
  var itemsToShow1 = 8; 
  var currentItem1 = itemsToShow1;
  function filter() {
    var surface_filter = $('select[name=surface_filter]').val();
    var rooms_filter = $('select[name=rooms_filter]').val()
    var price_filter = $('select[name=price_filter]').val()
    var search = $('input[name=search]').val()
    var sold_filter = $('select[name=sold_filter]').val()

    $.ajax({
      type: 'POST',
      url: `{{ route('main.filter') }}`,
      data: {surface_filter,rooms_filter,price_filter,search,sold_filter},
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
        let html = ''
        data.data.slice(0, currentItem1).forEach(item => {
          html += `
          <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col "  >
                <a href="/main/${item.id}">
                  <div class="relative ">
                    <img class="hover:grow hover:shadow-lg" src="images/${item.cover}">
                    <div class="absolute top-0 right-0 ">
                      ${item.sold == 1 ? 
                      '<div class="relative top-4 text-white  bg-red-500 text-sm whitespace-no-wrap px-4">Sold</div>' : ''
                      }                  </div>
                    </div>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">${item.title}</p>
                        
                    </div>
                    <p class="pt-1 text-gray-900">${item.price}</p>
                </a>
            </div>
          `
        })
        html += `<button id="load-more-btn1" class="mx-auto hover:text-blue-900" onclick="loadMore()">Load More</button>`
        $('#apartements').html(html);
        if (data.data.length <= currentItem1) {
            $('#load-more-btn1').hide(); 
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      }
    });
 
  }
  function loadMore() {
      currentItem1 += itemsToShow1; 
      filter(); 
    };
  function clearFilters() {
      $('select').prop('selectedIndex', 0);
      filter(); 
  } 
  $(document).ready(function() {
   filter()
  }); 
</script>
  </body>
</html>
