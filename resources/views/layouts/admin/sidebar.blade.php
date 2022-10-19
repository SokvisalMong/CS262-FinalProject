<div class="bg-white flex px-12 py-5 sticky h-screen">
    <ul class="relative">
      <li class="relative">
        <a class="flex my-2 items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" 
        href="/" >
            Home
        </a>
      </li>
      <li class="relative">
        <a class="flex my-2 items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" 
        href="/admintable" >
            Admin Table
        </a>
      </li>
      <li class="relative">
        <a class="flex my-2 items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" 
        href="/adminform" >
            Admin Form
        </a>
      </li>
      <li class="relative">
        <a class="flex my-2 items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" 
        href="/bookingtable" >
            Booking Table
        </a>
      </li>
      <li class="relative">
        <a class="flex my-2 items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" 
        href="/bookingform" >
            Booking Form
        </a>
      </li>
      <li class="relative">
        <a class="flex my-2 items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" 
        href="/restauranttable" >
            Restaurant Table
        </a>
      </li>
      <li class="relative">
        <a class="flex my-2 items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" 
        href="/restaurantform" >
            Restaurant Form
        </a>
      </li>
      <li class="relative">
        <a class="flex my-2 items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" 
        href="/usertable" >
            User Table
        </a>
      </li>
      <li class="relative">
        <a class="flex my-2 items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" 
        href="/userform" >
            User Form
        </a>
      </li>
      <li class="relative">
        <form method="POST" action="/logout" class="inline">
        @csrf
            <button type="submit" class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out">
                Sign Out
            </button>
        </form>
      </li>
    </ul>
</div>
