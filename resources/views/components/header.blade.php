<header class="bg-blue-700 border-10 border-black-900 fixed top-0 left-0 w-full z-50
">
    <div class="mx-auto flex justify-between py-4 px-5">
        <a href="{{ route('home') }}" class="text-white font-bold text-lg">Artistack</a>
        <nav>
            <ul class="flex space-x-7 text-white  font-bold text-lg">
                <li><a href="{{ route('home') }}" class="hover:text-orange-400 hover:underline">Home</a></li>
                <li><a href="{{ route('artworks') }}" class="hover:text-orange-400 hover:underline">Artworks</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-orange-400 hover:underline">About</a></li>
            </ul>
        </nav>
    </div>
</header>
