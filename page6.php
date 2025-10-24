<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotivAid - PPH Treatment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'motivaid-teal': '#0D9488',
                        'motivaid-dark': '#1F2937',
                        'pph-pink': '#FECDD3',
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4 flex items-center justify-between">
        <div class="flex items-center space-x-3">
            <svg class="w-8 h-8 text-motivaid-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <h1 class="text-2xl font-bold text-motivaid-teal">MotivAid</h1>
        </div>
        <div class="text-sm font-medium text-gray-600">Last Updated: 06:17 PM, Oct 24, 2025</div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 w-full px-6 py-8">
        <!-- Title Section -->
        <section class="bg-white rounded-xl shadow-sm p-8 mb-8">
            <h2 class="text-3xl font-bold text-motivaid-dark mb-3">Postpartum Hemorrhage (PPH) Treatment</h2>
            <p class="text-lg font-medium text-gray-600">Immediate Actions and Management Protocol</p>
        </section>

        <!-- Bundle Start -->
        <section class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-motivaid-dark">Initiate PPH Bundle</h3>
                <span class="text-sm text-gray-500">Started 16 min ago</span>
            </div>
            <div class="flex justify-center">
                <div class="bg-pph-pink text-motivaid-teal px-6 py-3 rounded-lg font-mono text-2xl font-bold">00:12:45</div>
            </div>
        </section>

        <!-- Initial Actions -->
        <section class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <h3 class="text-lg font-semibold text-motivaid-dark mb-4">Initial Actions</h3>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                <button class="bg-pph-pink text-motivaid-teal px-4 py-3 rounded-lg font-medium border border-motivaid-teal/20 hover:bg-motivaid-teal hover:text-white focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-lg">✋</span>
                        <span>Massage Uterus</span>
                    </div>
                </button>
                <button class="bg-pph-pink text-motivaid-teal px-4 py-3 rounded-lg font-medium border border-motivaid-teal/20 hover:bg-motivaid-teal hover:text-white focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-lg">💉</span>
                        <span>Give Oxytocin</span>
                    </div>
                </button>
                <button class="bg-pph-pink text-motivaid-teal px-4 py-3 rounded-lg font-medium border border-motivaid-teal/20 hover:bg-motivaid-teal hover:text-white focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-lg">💊</span>
                        <span>Administer TXA</span>
                    </div>
                </button>
                <button class="bg-pph-pink text-motivaid-teal px-4 py-3 rounded-lg font-medium border border-motivaid-teal/20 hover:bg-motivaid-teal hover:text-white focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-lg">💉</span>
                        <span>Start IV Fluids</span>
                    </div>
                </button>
            </div>
        </section>

        <!-- Still Bleeding Section -->
        <section class="bg-pph-pink rounded-xl p-6 mb-8">
            <h3 class="text-lg font-semibold text-motivaid-teal mb-4 text-center">Still Bleeding?</h3>
            <div class="grid grid-cols-2 gap-4">
                <button class="bg-white text-motivaid-teal px-4 py-3 rounded-lg font-medium border-2 border-motivaid-teal hover:bg-motivaid-teal hover:text-white focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                    Escalate Care & Assign Roles
                </button>
                <button class="bg-white text-motivaid-teal px-4 py-3 rounded-lg font-medium border-2 border-motivaid-teal hover:bg-motivaid-teal hover:text-white focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                    Continue Assessment
                </button>
            </div>
        </section>

        <!-- Escalate Care Options -->
        <section class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <h3 class="text-lg font-semibold text-motivaid-dark mb-4">Escalation and Advanced Interventions</h3>
            
            <!-- Additional Uterotonic -->
            <div class="mb-6">
                <h4 class="text-md font-medium text-gray-700 mb-3">Additional Uterotonic</h4>
                <div class="grid grid-cols-2 gap-4">
                    <button class="bg-motivaid-teal text-white px-4 py-3 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                        <div class="flex items-center justify-center space-x-2">
                            <span class="text-lg">💉</span>
                            <span>Give Uterotonic</span>
                        </div>
                    </button>
                    <button class="bg-motivaid-teal text-white px-4 py-3 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                        <div class="flex items-center justify-center space-x-2">
                            <span class="text-lg">❤️</span>
                            <span>Manage Shock</span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Catheterize Bladder -->
            <div class="mb-6">
                <h4 class="text-md font-medium text-gray-700 mb-3">Bladder Management</h4>
                <div class="grid grid-cols-2 gap-4">
                    <button class="bg-motivaid-teal text-white px-4 py-3 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                        <div class="flex items-center justify-center space-x-2">
                            <span class="text-lg">🩹</span>
                            <span>Catheterize Bladder</span>
                        </div>
                    </button>
                    <button class="bg-motivaid-teal text-white px-4 py-3 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                        <div class="flex items-center justify-center space-x-2">
                            <span class="text-lg">➡️</span>
                            <span>Apply NASG</span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Clear Uterus/Cervix -->
            <div class="mb-6">
                <h4 class="text-md font-medium text-gray-700 mb-3">Uterine/Cervical Management</h4>
                <div class="grid grid-cols-2 gap-4">
                    <button class="bg-motivaid-teal text-white px-4 py-3 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                        <div class="flex items-center justify-center space-x-2">
                            <span class="text-lg">👐</span>
                            <span>Clear Uterus/Cervix</span>
                        </div>
                    </button>
                    <button class="bg-motivaid-teal text-white px-4 py-3 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                        <div class="flex items-center justify-center space-x-2">
                            <span class="text-lg">➡️</span>
                            <span>Arrange Transfer/Surgery</span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Bimanual Compression -->
            <div>
                <h4 class="text-md font-medium text-gray-700 mb-3">Compression and Repair</h4>
                <div class="grid grid-cols-2 gap-4">
                    <button class="bg-motivaid-teal text-white px-4 py-3 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                        <div class="flex items-center justify-center space-x-2">
                            <span class="text-lg">👐</span>
                            <span>Bimanual Compression</span>
                        </div>
                    </button>
                    <button class="bg-motivaid-teal text-white px-4 py-3 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                        <div class="flex items-center justify-center space-x-2">
                            <span class="text-lg">✂️</span>
                            <span>Repair Cervical Tears</span>
                        </div>
                    </button>
                </div>
            </div>
        </section>

        <!-- Record & Save Button -->
        <section class="mb-8">
            <button class="w-full bg-pph-pink text-motivaid-teal px-6 py-4 rounded-lg font-medium border-2 border-motivaid-teal hover:bg-motivaid-teal hover:text-white focus:outline-none focus:ring-2 focus:ring-motivaid-teal transition">
                Record & Save
            </button>
        </section>
    </main>

    <!-- Bottom Navigation (Mobile) -->
    <nav class="bg-white border-t border-gray-200 px-6 py-3 flex justify-around items-center fixed bottom-0 left-0 right-0 md:hidden">
        <button class="flex flex-col items-center space-y-1 text-gray-500 hover:text-motivaid-teal transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            <span class="text-xs font-medium">Edit</span>
        </button>
        <button class="flex flex-col items-center space-y-1 text-gray-500 hover:text-motivaid-teal transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
            </svg>
            <span class="text-xs font-medium">Select</span>
        </button>
        <button class="flex flex-col items-center space-y-1 text-motivaid-teal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-xs font-medium">Save</span>
        </button>
        <button class="flex flex-col items-center space-y-1 text-gray-500 hover:text-motivaid-teal transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
            </svg>
            <span class="text-xs font-medium">Share</span>
        </button>
    </nav>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex justify-center space-x-12 py-4 bg-white border-t border-gray-200">
        <button class="flex items-center space-x-2 text-gray-500 hover:text-motivaid-teal transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            <span class="font-medium">Edit</span>
        </button>
        <button class="flex items-center space-x-2 text-gray-500 hover:text-motivaid-teal transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
            </svg>
            <span class="font-medium">Select</span>
        </button>
        <button class="flex items-center space-x-2 text-motivaid-teal">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="font-medium">Save</span>
        </button>
        <button class="flex items-center space-x-2 text-gray-500 hover:text-motivaid-teal transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
            </svg>
            <span class="font-medium">Share</span>
        </button>
    </nav>
</body>
</html>