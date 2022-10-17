{{-- Navigation bar section --}}
<nav class="bg-gray-800 flex justify-between px-16 py-5 sticky top-0">
    {{-- logo on the left --}}
    <div class="text-white font-bold">
        <a href="/">LOGO</a>
    </div>
    {{-- sign up/in button on the right --}}
    <div class="flex">
        @auth
        <div class="ml-2">
            <a href="/manage" type="button" class="bg-white hover:bg-gray-100 text-black py-1 px-2 rounded"> Manage </a>
        </div>
        
        <div class="ml-2">
            <form class="inline" method="POST" action="/logout">
            @csrf
            <button type="submit" class="bg-white hover:bg-gray-100 text-black py-1 px-2 rounded">
                Sign Out
            </button>
            </form>
        </div>
        </form>
        @else
        {{-- Sign Up botton --}}
        <div class="ml-2">
            <button class="bg_blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
                <a href="/register">Sign Up</a>
            </button>
        </div>

        {{-- sign in button --}}
        <div class="ml-2">
            <button class="bg_blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
                <a href="/signin">Log In</a>
            </button>
        </div>
        @endauth
    </div>
</nav>