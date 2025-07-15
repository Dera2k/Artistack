<x-layout title="Artworks">
    <section class="container mx-auto px-4 pt-20">
        <!-- 
            container: sets max width and centers content
            mx-auto: horizontally centers the section
            px-4: horizontal padding (1rem)
            pt-20: top padding (5rem)
        -->

        <h1 class="text-2xl font-bold mb-6 text-center text-black">
            My Artworks
        </h1>
        <!-- 
            text-2xl: large font size
            font-bold: bold text
            mb-6: bottom margin (1.5rem)
            text-center: center-aligns text
            text-white: sets text color to white
        -->

        <div class="flex justify-center">
            <!-- Centers the grid horizontally -->

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl">
                <!-- 
                    grid: defines a grid layout
                    grid-cols-1: 1 column by default (mobile)
                    sm:grid-cols-2: 2 columns on small screens (≥640px)
                    md:grid-cols-3: 3 columns on medium+ screens (≥768px)
                    gap-6: 1.5rem space between cards
                    max-w-5xl: limits grid width so it doesn't stretch full screen
                -->

                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/art1.jpg') }}" alt="Artwork 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">Sunset Canvas</h2>
                        <p class="text-gray-600 text-sm">
                            A calming blend of warm colors inspired by the evening sky.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/art2.jpg') }}" alt="Artwork 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">Urban Flow</h2>
                        <p class="text-gray-600 text-sm">
                            Modern textures and movement captured on canvas.
                        </p>
                    </div>
                </div>
                

                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/art.jpg') }}" alt="Artwork 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">Sunset Canvas</h2>
                        <p class="text-gray-600 text-sm">
                            A calming blend of warm colors inspired by the evening sky.
                        </p>
                    </div>
                </div>
                <!-- Add more cards here if needed -->

            </div>
        </div>
    </section>
</x-layout>
