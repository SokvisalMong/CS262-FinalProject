<nav class="bg-gray-800 flex justify-between px-96 py-5">
    {{-- logo on the left --}}
    <div class="text-white font-bold">
        <a href="/">LOGO</a>
    </div>
    {{-- sign up/in button on the right --}}
    <div class="flex">
        @auth('web')
            <div class="ml-2">
                <a href="/edit" type="button" class="bg-white hover:bg-gray-100 text-black py-1 px-2 rounded"> {{auth()->user()->name}} </a>
            </div>
            
            <div class="ml-2">
                <form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit" class="bg-white hover:bg-gray-100 text-black py-1 px-2 rounded">
                    Sign Out
                </button>
                </form>
            </div>
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
                    <a href="/login">Log In</a>
                </button>
            </div>
        @endauth
    </div>
</nav>