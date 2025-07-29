
<header class="bg-blue-700 border-10 border-black-900 w-full z-50">
    <div class="mx-auto flex justify-between py-4 px-5">
        <a href="{{ route('home') }}" class="text-white font-bold text-lg">Artistack</a>
        <nav class="flex flex-1 justify-center">
            <ul class="flex space-x-7 text-white font-bold text-lg">
                <li>
                    <a href="{{ route('home') }}" class="hover:text-orange-400 hover:underline">Home</a>
                </li>

                <li>
                    <a href="{{ route('artworks.index') }}" class="hover:text-orange-400 hover:underline">Artworks</a>
                </li>
            </ul>    
        </nav>

        @if(Route::currentRouteName() === 'artworks.index')
            <a href="{{ route('artworks.create') }}" 
            class= "ml-4 text-white text-xl font-bold rounded-full">Add art +</a>
        @endif
        
    </div>
</header>
