<x-layout>
    <div class="flex justify-center items-start pt-28 min-h-screen bg-gray-100">
        <form method="POST" action="{{ route('artworks.store') }}" enctype="multipart/form-data"
              class="bg-white shadow-lg rounded-xl p-8 w-full max-w-lg">
            @csrf

            {{-- <div class="holder mx-auto w-full">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Upload New Artwork</h2>
                <div class="mb-5">
                    <label for="image" class="block text-gray-700 mb-2">Artwork Image:</label>
                    <input type="file" name="image" id="image"
                        class="block w-full border border-gray-300 rounded px-3 py-2 file:mr-3 file:py-2 file:px-4 file:border-0 file:bg-blue-700 file:text-white file:rounded hover:file:bg-blue-800">
                </div> --}}

                <div class="mb-6">
                    <label for="title" class="block text-gray-700 mb-2">Title:</label>
                    <input type="text" name="title" id="title" placeholder="e.g. Starry Night"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-6">
                    <label for="title" class="block text-gray-700 mb-2">Description:</label>
                    <input type="text" name="description" id="description" placeholder="e.g. A dark and Starry Night"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit"
                        class="w-full bg-blue-700 text-white py-2 rounded-md font-semibold hover:bg-red-100 transition">
                    Upload
                </button>
            </div>
        </form>
    </div>
</x-layout>
