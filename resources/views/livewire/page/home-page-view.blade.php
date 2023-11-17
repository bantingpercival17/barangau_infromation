<x-guest-layout>
    <style>
        .roboto {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <div class="roboto">
        <header class="fixed top-0 left-0 w-full bg-white shadow-md p-4 flex justify-between items-center z-10">
            <!-- Logo or brand name -->
            <img class="h-8 w-auto" src="{{ asset('logo.png') }}" alt="">
            <!-- <div class="text-lg font-semibold">Your Logo</div> -->

            <!-- Navigation Items -->
            <nav class="space-x-4">
                <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">About</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Services</a>
                <!-- Add more navigation items as needed -->
            </nav>

            <!-- Login Button -->
            <a href="/login" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Login</a>
        </header>

        <!-- Your main content goes here -->
        <div class="container-fluid mt-16 w-100">
            <div class="container-fluid w-100">
                <!-- Header Section with Background Image -->
                <header class="relative bg-cover bg-center bg-opacity-70 text-white p-8"
                    style="background-image: url('{{ asset('header-2.png') }}'); width:100%;">
                    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                    <div class="relative z-10">
                        <h1 class="text-4xl font-bold">Welcome to Barangay Management Information System
                        </h1>
                        <p class="text-lg mt-2">Empowering Communities Through Innovation</p>
                    </div>
                </header>
                <div class="container mx-auto p-8">
                    <!-- Key Features Section -->
                    <section class="mb-8 mx-auto">
                        <h2 class="text-2xl font-semibold text-blue-700 mb-4">Key Features:</h2>
                        <!-- Feature Cards go here -->
                    </section>

                    <!-- Why Choose Section -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold text-blue-700 mb-4">Why Choose Barangay BMIS?
                        </h2>
                        <!-- Reasons and benefits go here -->
                    </section>

                    <!-- Call to Action Section -->
                    <section class="text-center">
                        <p class="text-lg mb-4">Explore the possibilities with Barangay BMIS and be a part
                            of
                            a digitally empowered community.</p>
                        <p class="text-lg mb-4">Together, let's build a stronger, more connected future.</p>
                        <p class="text-lg">Experience the Power of Technology. Experience the Strength of Community.</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
