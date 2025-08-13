<x-layout>
    <div class="flex-col items-center justify-center min-h-screen">
        <h1 class="text-2xl font-bold text-center text-transform: uppercase">Edit Details</h1>

        @if ($errors->any())
            <div class="bg-red-300 tet-red-700 p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('artworks.update', $artwork->id) }}" method="POST" 
            class="bg-white rounded-lg p-12 mt-9">
            @csrf

            <div class="mb-6">
                <label for="title" class="block ">Title:</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Title" required
                class="w-full-border border-gray-800 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm">

                @error('title')
                    <p class="text-red-500 tet-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block mb-2">Description</label>
                <textarea name="description" rows="3" required 
                class="w-full-border border-gray-500 rounded p-3 focus:outline-none focus:ring-2 resize-none">
            {{ old('description') }}</textarea>

            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            </div>

            <div class="flex jistify-center mt-4">
                <button type="submit"
                class="bg-blue-500 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-600 transition">Change</button>
            </div>
        </form>
    </div>
</x-layout>