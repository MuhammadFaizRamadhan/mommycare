<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Dokter - MommyCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 h-screen flex justify-center items-center">
    <div class="flex w-full max-w-4xl h-[600px] bg-white rounded-3xl shadow-lg overflow-hidden">
        <!-- Sidebar -->
        <div class="w-1/3 bg-pink-50 p-4">
            <h2 class="text-lg font-semibold mb-4">Chats</h2>
            <div class="space-y-4">
                <!-- Chat list item -->
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/40" alt="profile" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-medium">Dr. cabul</p>
                        <p class="text-sm text-gray-500">piye wes lahir po rung?</p>
                    </div>
                </div>
                <!-- Chat list item -->
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/40" alt="profile" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-medium">Dr. Gek</p>
                        <p class="text-sm text-gray-500">dong pora we?</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat content -->
        <div class="w-2/3 bg-pink-50 flex flex-col">
            <div class="flex-1 p-4">
                <div class="space-y-3">
                    <!-- Incoming message -->
                    <div class="flex items-start">
                        <div class="bg-pink-300 text-white px-4 py-2 rounded-lg max-w-sm">
                            Jadi gini dok...
                        </div>
                    </div>
                    <!-- Outgoing message -->
                    <div class="flex items-start justify-end">
                        <div class="bg-pink-500 text-white px-4 py-2 rounded-lg max-w-sm">
                            napa tuh??
                        </div>
                    </div>
                    <!-- Another message -->
                    <div class="flex items-start justify-end">
                        <div class="bg-pink-500 text-white px-4 py-2 rounded-lg max-w-sm">
                            Edannn
                        </div>
                    </div>
                    <!-- Incoming message -->
                    <div class="flex items-start">
                        <div class="bg-pink-300 text-white px-4 py-2 rounded-lg max-w-sm">
                            kayaknya saya ada rasa sama dokter hehehe
                        </div>
                    </div>
                </div>
            </div>
            <!-- Input area -->
            <div class="p-4 bg-pink-100 flex items-center space-x-2">
                <button class="bg-pink-300 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-4.197 4.197m4.197-4.197l-4.197-4.197M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
                <input type="text" placeholder="type some ..." class="flex-1 p-2 rounded-lg border border-pink-300">
                <button class="bg-pink-500 text-white p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3.172 16.172a4 4 0 105.656-5.656L8 8.5l.172-.172a4 4 0 10-5.656 5.656zm1.415-1.415a2 2 0 113.172-3.172l.172.172-.172.172a2 2 0 01-3.172 3.172zM9 2a1 1 0 011-1h3a1 1 0 010 2h-3a1 1 0 01-1-1zm3.707 2.293a1 1 0 10-1.414 1.414L13.086 7H9a1 1 0 010-2h4a1 1 0 01.707-.293z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</body>
</html>
