<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Service Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 h-screen p-6 text-white">
            <h2 class="text-2xl font-bold mb-8">Catering Dashboard</h2>
            <nav>
                <ul>
                    <li class="mb-4"><a href="#" class="hover:text-gray-300">Manage User Profile</a></li>
                    <li class="mb-4"><a href="#" class="hover:text-gray-300">Manage Catalog</a></li>
                    <li class="mb-4"><a href="#" class="hover:text-gray-300">Manage Bookings</a></li>
                    <li class="mb-4"><a href="#" class="hover:text-gray-300">Manage Feedback</a></li>
                    <li class="mb-4"><a href="#" class="hover:text-gray-300">Reports & Analytics</a></li>
                    <li><a href="#" class="hover:text-gray-300">Settings</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold">Dashboard</h1>
                <div class="flex items-center">
                    <button class="bg-blue-900 text-white px-4 py-2 rounded-lg">Notifications</button>
                    <img src="https://via.placeholder.com/40" alt="Profile" class="ml-4 w-10 h-10 rounded-full">
                </div>
            </header>

            <!-- Dashboard Widgets -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 shadow rounded-lg">
                    <h2 class="text-xl font-bold">Total Bookings</h2>
                    <p class="text-3xl mt-4">{{ $totalBookings }}</p>
                </div>
                <div class="bg-white p-6 shadow rounded-lg">
                    <h2 class="text-xl font-bold">Pending Bookings</h2>
                    <p class="text-3xl mt-4">{{ $pendingBookings }}</p>
                </div>
                <div class="bg-white p-6 shadow rounded-lg">
                    <h2 class="text-xl font-bold">Revenue</h2>
                    <p class="text-3xl mt-4">${{ $revenue }}</p>
                </div>
                <div class="bg-white p-6 shadow rounded-lg">
                    <h2 class="text-xl font-bold">Feedback Score</h2>
                    <p class="text-3xl mt-4">{{ $feedbackScore }}/5</p>
                </div>
            </div>

            <!-- Recent Bookings -->
            <div class="bg-white p-6 shadow rounded-lg mb-8">
                <h2 class="text-xl font-bold mb-4">Recent Bookings</h2>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="border-b py-2">Client Name</th>
                            <th class="border-b py-2">Date</th>
                            <th class="border-b py-2">Pax</th>
                            <th class="border-b py-2">Status</th>
                            <th class="border-b py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recentBookings as $booking)
                        <tr>
                            <td class="py-2">{{ $booking['name'] }}</td>
                            <td class="py-2">{{ $booking['date'] }}</td>
                            <td class="py-2">{{ $booking['pax'] }}</td>
                            <td class="py-2">{{ $booking['status'] }}</td>
                            <td class="py-2">
                                <button class="bg-green-500 text-white px-4 py-1 rounded">Edit</button>
                                <button class="bg-red-500 text-white px-4 py-1 rounded">Cancel</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
