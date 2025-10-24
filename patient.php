<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotivAid - Early Warning & Preparedness</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'motivaid-teal': '#0D9488',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200 px-4 py-3 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <svg class="w-6 h-6 text-motivaid-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
           <a href="patient.php" class="text-xl font-bold text-motivaid-teal">MotivAid</a>
        </div>
        <div id="realtime-clock" class="text-sm text-gray-500"></div>
        <script>
            function updateClock() {
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            if (minutes < 10) minutes = '0' + minutes;
            document.getElementById('realtime-clock').textContent = `${hours}:${minutes}`;
            }
            updateClock();
            setInterval(updateClock, 1000);
        </script>
    </header>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto px-4 py-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Patient Bio Data</h2>

        <section class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <h3 class="text-lg font-medium text-gray-700 mb-4">Patient Information</h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Patient Name</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Age</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">History Of Antenatal visit</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
                            <option value="">Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Gravida/Parity</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">History of Previous PPH</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
                            <option value="">select</option>
                            <option value="">Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">History Of Ceaserian Section</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Type Of Pregenency</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
                            <option value="">Select</option>
                            <option>Single Preginancy</option>
                            <option>Twin Preginency</option>
                            <option>Triplet Pregenancy</option>
                            <option>Higher</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Gestational Age</label>
                    <input type="text" weeks" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Hospital</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
                </div>
            </div>
        </section>

        <!-- Warning Badge -->
        <div id="warning-badge" class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6 hidden">
            <div class="flex items-center">
            <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            </div>
            <div class="ml-3">
            <p class="text-sm text-yellow-800">High Risk of Postpartum Hemorrhage</p>
            </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            const ageInput = document.querySelectorAll('input[type="text"]')[1];
            const warningBadge = document.getElementById('warning-badge');

            function checkAge() {
                const age = parseInt(ageInput.value, 10);
                if (!isNaN(age) && age >= 18 && age <= 35) {
                warningBadge.classList.remove('hidden');
                } else {
                warningBadge.classList.add('hidden');
                }
            }

            // Always hide the badge initially
            warningBadge.classList.add('hidden');
            ageInput.addEventListener('input', checkAge);
            });
        </script>

        <!-- Action Buttons -->
        <div class="grid grid-cols-2 gap-4 mb-6">
            <button 
                class="bg-motivaid-teal text-white px-6 py-3 rounded-md font-medium hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2"
                onclick="alert('Profile saved successfully');"
            >
                Save Profile
            </button>
            <a href="motive.php" class="bg-motivaid-teal text-white px-6 py-3 rounded-md font-medium hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2">
                Proceed to Delivery Mode
            </a>
        </div>
    </main>

    <!-- Bottom Navigation -->
    <nav class="bg-white border-t border-gray-200 px-4 py-2 flex justify-around items-center fixed bottom-0 left-0 right-0 md:hidden">
        <button class="flex flex-col items-center space-y-1 text-gray-500 hover:text-motivaid-teal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            <span class="text-xs">Edit</span>
        </button>
        <button class="flex flex-col items-center space-y-1 text-gray-500 hover:text-motivaid-teal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
            </svg>
            <span class="text-xs">Select</span>
        </button>
        <button class="flex flex-col items-center space-y-1 text-motivaid-teal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-xs">Save</span>
        </button>
        <button class="flex flex-col items-center space-y-1 text-gray-500 hover:text-motivaid-teal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
            </svg>
            <span class="text-xs">Share</span>
        </button>
    </nav>

    <!-- Desktop Navigation (Hidden on Mobile) -->
    <nav class="hidden md:flex justify-center space-x-8 py-4 bg-white border-t border-gray-200">
        <button class="flex items-center space-x-2 text-gray-500 hover:text-motivaid-teal">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            <span>Edit</span>
        </button>
        <button class="flex items-center space-x-2 text-gray-500 hover:text-motivaid-teal">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
            </svg>
            <span>Select</span>
        </button>
        <button class="flex items-center space-x-2 text-motivaid-teal">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Save</span>
        </button>
        <button class="flex items-center space-x-2 text-gray-500 hover:text-motivaid-teal">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
            </svg>
            <span>Share</span>
        </button>
    </nav>
</body>
</html>