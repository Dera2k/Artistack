<header class="bg-blue-700 border-10 border-black-900 w-full z-50">
    <div class="mx-auto flex justify-between py-4 px-5">
        <a href="{{ route('home') }}" class="text-white font-bold text-lg">Artistack</a>
        <nav>
            <ul class="flex space-x-7 text-white  font-bold text-lg">
                <li><a href="{{ route('home') }}" class="hover:text-orange-400 hover:underline {{request()->is('home') ? "text-orange-400 font-bold": ""}}">Home</a></li>
                <li><a href="{{ route('artworks.index') }}" class="hover:text-orange-400 hover:underline {{request()->is('artworks') ? "text-orange-400" : ""}}">Artworks</a></li>
            </ul>
        </nav>
    </div>
</header>
