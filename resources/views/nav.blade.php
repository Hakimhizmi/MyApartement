<nav id="header" class="w-full z-30 top-0 py-1">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">
      <label htmlFor="menu-toggle" class="cursor-pointer md:hidden block">
        <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
          <title>menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </label>
      <input class="hidden" type="checkbox" id="menu-toggle" />
      <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
        <nav>
          <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="/main">Main</a></li>
            @auth
            <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="/dashboard">Dashboard</a></li>
            @endauth
          </ul>
        </nav>
      </div>
      <div class="order-1 md:order-2">
        <a href="/main" class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " >
          

          My Apartment
</a>
      </div>
      <div class="order-2 md:order-3 flex items-center" id="nav-content">
        <a class="inline-block no-underline hover:text-black cursor-pointer" >
          <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" data-dropdown-toggle="dropdown1"  viewBox="0 0 24 24">
            <circle fill="none" cx="12" cy="7" r="3" />
            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
          </svg>
        </a>
        @auth 
        <div data-dropdown-toggle="dropdown1" class="flex items-center ml-2  relative cursor-pointer whitespace-nowrap">Admin</div>
        @endauth
        <div id="dropdown1" class="z-10 hidden w-92 p-3 bg-white shadow rounded ">
          <div class="w-72">
          @guest 
            <form class="mt-4" action="{{route('login')}}" method="post">
              @csrf
              <div class="mb-3">
                <label class="mb-2 block text-xs font-semibold">Email</label>
                <input type="email" name="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-blue-700 focus:outline-none focus:ring-1 focus:ring-blue-700 py-1 px-1.5 text-gray-500" />
              </div>
    
              <div class="mb-3">
                <label class="mb-2 block text-xs font-semibold">Password</label>
                <input type="password" name="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-blue-700 focus:outline-none focus:ring-1 focus:ring-blue-700 py-1 px-1.5 text-gray-500" />
              </div>
              <button type="submit" class="mb-1.5 mt-2 block w-full text-center text-white bg-blue-700 hover:bg-blue-900 px-2 py-1.5 rounded-md">Sign in</button>

            </form>
          @endguest 
          @auth
          <a
             class="block px-2 py-1  bg-transparent rounded-lg  text-sm font-medium md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
             href="/logout"     >Log Out</a
          @endauth
          </div>
        </div>
      </div>
    </div>
  </nav>