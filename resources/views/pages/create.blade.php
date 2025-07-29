<x-layout title="Upload Artwork">
    <div class="flex-col items-center justify-center min-h-screen">
        <h1 class="text-2xl font-bold text-center text-transform: uppercase">Upload Artwork</h1>


        @if($errors->any())
            <div class="bg-red-300 text-red-700 p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('artworks.store') }}" enctype="multipart/form-data" class="bg-white rounded-lg p-12 mt-9">
            @csrf

            <div class="mb-6">
                <label for="image">Art Image:</label>

                <input type="file" name="image" required
                class="block w-full border border-gray-300 rounded px-3 py-2
                                file:mr-3 file:py-2 file:px-4 file:border-0
                                file:bg-blue-700 file:text-white file:rounded
                                hover:file:bg-blue-800">

                @error('image')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div mb-6>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Art Title:</label>
                <input type="text" name="title" value="{{  old('title') }}" placeholder="Title" required
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm">

                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block mb-2">Description:</label>
                <textarea name="description" rows="3" required
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none"
                >{{ old('description') }}</textarea>

                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-center mt-4">
                <button type="submit" 
                class=" bg-blue-500 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-600 transition">Upload</button>
            </div>
        </form>
    </div>
</x-layout>
