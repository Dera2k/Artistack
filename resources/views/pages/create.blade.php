<x-layout title="Upload Artwork">
    <div class="flex-col items-center justify-center min-h-screen">
        <h1 class="text-2xl font-bold text-center text-transform: uppercase">Upload Artwork</h1>
        <form method="POST" action="{{ route('artworks.store') }}" enctype="multipart/form-data" class="bg-white rounded-lg p-12 mt-9">
            @csrf

            <div class="mb-6">
                <label for="image">Art Image:</label>
                <input type="file" name="image"
                class="block w-full border border-gray-300 rounded px-3 py-2
                                file:mr-3 file:py-2 file:px-4 file:border-0
                                file:bg-blue-700 file:text-white file:rounded
                                hover:file:bg-blue-800">

            </div>

            <div mb-6>
                <label for="title" class="block mb-2">Art Title:</label>
                <input type="text" name="title" placeholder="Title" 
                class="block ">
            </div>

            <div>
                <label for="description">Description:</label>
                <input type="text" name="desription"> 
            </div>

            <div>
                <button type="submit" class=" text-red-300 rounded-lg bg-blue-500 justify-center">Upload</button>
            </div>
        </form>
    </div>
</x-layout>
