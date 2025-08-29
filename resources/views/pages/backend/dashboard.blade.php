@extends('layouts.backend.app')

@section('title', 'NijerShastho | Dashboard')

@section('page-title')
    <h2 class="text-3xl font-bold mb-6 text-background">Dashboard</h2>
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-medium text-gray-600">Total Users</h3>
                <p class="text-4xl font-bold text-blue-600">1.5k</p>
            </div>
            <i data-lucide="users" class="w-10 h-10 text-blue-400"></i>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-medium text-gray-600">Active Users</h3>
                <p class="text-4xl font-bold text-green-600">800</p>
            </div>
            <i data-lucide="user-check" class="w-10 h-10 text-green-400"></i>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h3 class="text-lg font-medium text-gray-600">Posts This Month</h3>
                <p class="text-4xl font-bold text-purple-600">30</p>
            </div>
            <i data-lucide="file-text" class="w-10 h-10 text-purple-400"></i>
        </div>
    </div>
    <!-- Main content grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">
        <!-- Recent Posts Table -->
        <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold mb-4">Recent Posts</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Title</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Author</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Category</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Date</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Status</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">10 Tips for a
                                Healthier Diet</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Jane Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Nutrition</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">July 19, 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                <button class="text-blue-500 hover:text-blue-700"><i data-lucide="edit-2"
                                        class="w-4 h-4"></i></button>
                                <button class="text-red-500 hover:text-red-700 ml-2"><i data-lucide="trash-2"
                                        class="w-4 h-4"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">The Benefits
                                of Morning Yoga</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">John Smith
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Fitness</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">July 18, 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                <button class="text-blue-500 hover:text-blue-700"><i data-lucide="edit-2"
                                        class="w-4 h-4"></i></button>
                                <button class="text-red-500 hover:text-red-700 ml-2"><i data-lucide="trash-2"
                                        class="w-4 h-4"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Understanding
                                Mental Wellness</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Alice Johnson
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Mental Health
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">July 17, 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Draft</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                <button class="text-blue-500 hover:text-blue-700"><i data-lucide="edit-2"
                                        class="w-4 h-4"></i></button>
                                <button class="text-red-500 hover:text-red-700 ml-2"><i data-lucide="trash-2"
                                        class="w-4 h-4"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Chart Placeholder -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold mb-4">Post Views Over Time</h3>
            <div class="h-64">
                <svg class="w-full h-full" viewBox="0 0 300 200">
                    <!-- X-axis -->
                    <line x1="30" y1="170" x2="270" y2="170" stroke="#e5e7eb" stroke-width="2" />
                    <!-- Y-axis -->
                    <line x1="30" y1="170" x2="30" y2="30" stroke="#e5e7eb" stroke-width="2" />

                    <!-- Data points and line -->
                    <polyline fill="none" stroke="#6366f1" stroke-width="2"
                        points="30,150 80,100 130,120 180,80 230,110 270,60" />

                    <!-- X-axis labels -->
                    <text x="25" y="185" class="text-xs text-gray-500">Jan</text>
                    <text x="75" y="185" class="text-xs text-gray-500">Feb</text>
                    <text x="125" y="185" class="text-xs text-gray-500">Mar</text>
                    <text x="175" y="185" class="text-xs text-gray-500">Apr</text>
                    <text x="225" y="185" class="text-xs text-gray-500">May</text>
                    <text x="265" y="185" class="text-xs text-gray-500">Jun</text>

                    <!-- Y-axis labels -->
                    <text x="15" y="165" class="text-xs text-gray-500">0</text>
                    <text x="15" y="115" class="text-xs text-gray-500">50</text>
                    <text x="15" y="65" class="text-xs text-gray-500">100</text>
                </svg>
            </div>
        </div>
    </div>
    <!-- Recent Comments Table -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-8">
        <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold mb-4">Recent Comments</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Comment</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Author</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Post</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Date</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Great tips!
                                I'll try the yoga routine.</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">User123</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">The Benefits
                                of Morning Yoga</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">July 20, 2025
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Very
                                insightful article on mental wellness.</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">HealthFan</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Understanding
                                Mental Wellness</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">July 19, 2025
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Can you
                                suggest more recipes for healthy diet?</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">Foodie</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">10 Tips for a
                                Healthier Diet</td>
                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">July 18, 2025
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="module">
        toastr.success('toastr is working fine', 'Success');
    </script>
@endpush
