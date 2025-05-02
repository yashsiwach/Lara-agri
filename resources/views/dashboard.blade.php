@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 rounded-lg shadow-md p-6">
        <h2 class="text-3xl font-semibold text-green-700 mb-6 text-center">Dashboard</h2>
        <p class="text-gray-600 text-lg text-center mb-8">Welcome to your personalized dashboard</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-2xl font-semibold text-green-600 mb-4">Key Information & Updates</h3>
                <div class="space-y-6">
                    <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
                        <p class="text-green-700 font-medium">Latest Government Schemes</p>
                        <ul class="list-disc list-inside text-gray-700 ml-5 mt-2">
                            <li><a href="{{ url('/schemes/1') }}" class="hover:text-blue-500 hover:underline">PM-KISAN</a> - Financial assistance of ₹6,000 per year to small and marginal farmer families.</li>
                            <li><a href="{{ url('/schemes/2') }}" class="hover:text-blue-500 hover:underline">PMFBY</a> - Comprehensive crop insurance for losses due to natural calamities.</li>
                            <li><a href="{{ url('/schemes/3') }}" class="hover:text-blue-500 hover:underline">MGNREGA</a> - Guarantees 100 days of wage employment to rural households.</li>
                        </ul>
                         <a href="{{ url('/schemes') }}" class="text-blue-500 hover:underline mt-2 inline-block">View All Schemes</a>
                    </div>
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-md">
                        <p class="text-blue-700 font-medium">Agricultural Best Practices</p>
                        <ul class="list-disc list-inside text-gray-700 ml-5 mt-2">
                            <li><a href="{{ url('/information/soil-health-management') }}" class="hover:text-blue-500 hover:underline">Soil Health Management</a> - Learn about soil testing, nutrient management, and organic inputs.</li>
                            <li><a href="{{ url('/information/water-management-in-agriculture') }}" class="hover:text-blue-500 hover:underline">Water Management</a> - Explore efficient irrigation techniques like drip and sprinkler systems.</li>
                            <li>Crop Rotation: Discover how rotating crops can improve soil health and reduce pests.</li>

                        </ul>
                         <a href="{{ url('/information') }}" class="text-blue-500 hover:underline mt-2 inline-block">Learn More</a>
                    </div>
                    <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded-md">
                         <p class="text-yellow-700 font-medium">Announcements</p>
                        <p class="text-gray-700">Stay updated on new government policies, subsidy announcements, and market price trends for your crops.</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-2xl font-semibold text-green-600 mb-4">Farmer Connect</h3>
                <div class="text-center">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.xpK8mOFCIViaPBDInrLoHQHaHc&pid=Api&P=0&h=180" alt="Farmer Community" class="rounded-md shadow-md mx-auto mb-4">
                    <p class="text-gray-700 mb-4">Connect with fellow farmers across India, share your experiences, ask questions, and learn from agricultural experts.</p>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                        Join the Community
                    </button>
                     <p class="text-gray-500 text-sm mt-2">Participate in discussions on best practices, problem-solving, and market opportunities.</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 mt-8">
            <h2 class="text-2xl font-semibold text-green-700 mb-4">Upcoming Events & Training</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border rounded-md p-4">
                    <h4 class="text-lg font-semibold text-green-600 mb-2">Krishi Mela 2024</h4>
                    <p class="text-gray-700 mb-2">Date: 2024-12-10 to 2024-12-15</p>
                    <p class="text-gray-700">Location: Punjab, India</p>
                    <p class="text-gray-700">Description: Participate in the annual agricultural fair showcasing the latest technologies, seeds, and farm equipment.  Meet experts and other farmers.</p>
                </div>
                <div class="border rounded-md p-4">
                    <h4 class="text-lg font-semibold text-green-600 mb-2">Sustainable Farming Workshop</h4>
                    <p class="text-gray-700 mb-2">Date: 2025-01-15 to 2025-01-17</p>
                     <p class="text-gray-700">Location: Haryana, India</p>
                    <p class="text-gray-700">Learn about the latest sustainable practices, organic farming methods, and climate-smart agriculture techniques from leading experts.</p>
                </div>
            </div>
             <a href="{{ url('/events') }}" class="text-blue-500 hover:underline mt-4 inline-block">View All Events</a>
        </div>
    </div>
@endsection
