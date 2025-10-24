<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotivAid - Bleeding After Birth Prevention & Diagnosis</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'motivaid-teal': '#0D9488',
                        'motivaid-dark': '#1F2937',
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
        <div id="last-updated" class="text-sm font-medium text-gray-600">Date :</div>
        <script>
        (function(){
            function formatLagos(now){
                const opts = { timeZone: 'Africa/Lagos', hour: 'numeric', minute: '2-digit', second: '2-digit', hour12: true, month: 'short', day: 'numeric', year: 'numeric' };
                const parts = new Intl.DateTimeFormat('en-US', opts).formatToParts(now).reduce((acc, p) => (acc[p.type] = p.value, acc), {});
                const time = parts.hour + ':' + parts.minute + ':' + parts.second + (parts.dayPeriod ? ' ' + parts.dayPeriod : '');
                const date = parts.month + ' ' + parts.day + ', ' + parts.year;
                return time + ', ' + date;
            }

            const el = document.getElementById('last-updated');
            if (el) {
                const update = () => { el.textContent = 'Last Updated: ' + formatLagos(new Date()); };
                update();
                setInterval(update, 1000);
            }
        })();
        </script>
    </header>

    <!-- Main Content -->
    <main class="flex-1 w-full px-6 py-8">
        <!-- Title Section -->
        <section class="bg-white rounded-xl shadow-sm p-8 mb-8">
            <h2 class="text-3xl font-bold text-motivaid-dark mb-3">Bleeding After Birth</h2>
            <p class="text-lg font-medium text-gray-600">Steps For Diagnostic</p>
        </section>

        <!-- Assess & Record Section -->
        <section class="bg-white rounded-xl shadow-sm p-8 mb-8">
            <h3 class="text-xl font-semibold text-motivaid-dark mb-6 text-red-500">Estimated blood loss greater than 500 mL</h3>
            
            <!-- Step 1: Tonicity -->
            <div class="mb-8 step" data-step="1">
                <h4 class="text-lg font-medium text-gray-700 mb-4">Step 1: TONICITY</h4>
                <div class="flex space-x-4">
                    <button id="tonicity-yes" class="flex-1 bg-motivaid-teal text-white py-3 px-6 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2 transition">YES</button>
                    <button id="tonicity-no" class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg font-medium hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition">NO</button>
                </div>

                <div id="tonicity-followup" class="mt-4 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded hidden">
                    <p class="font-semibold text-gray-800">Follow these steps</p>
                    <div class="mt-3 flex items-center text-gray-700">
                        <input id="tonicity-massage" type="checkbox" value="selected" class="mr-3 w-4 h-4" />
                        <label for="tonicity-massage" class="select-none">Massage the uterus</label>
                    </div>
                    <div class="mt-2 flex items-center text-gray-700">
                        <input id="tonicity-empty" type="checkbox" value="selected" class="mr-3 w-4 h-4" />
                        <label for="tonicity-empty" class="select-none">If full bladder, empty it</label>
                    </div>
                </div>
            </div>

            <!-- Step 2: Tissue -->
            <div class="mb-8 step hidden" data-step="2">
                <h4 class="text-lg font-medium text-gray-700 mb-4">Step 2: TISSUE</h4>
                <div class="flex space-x-4">
                    <button id="tissue-yes" class="flex-1 bg-motivaid-teal text-white py-3 px-6 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2 transition">YES</button>
                    <button id="tissue-no" class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg font-medium hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition">NO</button>
                </div>
                <div id="tissue-followup" class="mt-4 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded hidden">
                    <p class="font-semibold text-gray-800">Follow these steps</p>
                    <div class="mt-3 flex items-center text-gray-700">
                        <input id="tissue-remove" type="checkbox" value="selected" class="mr-3 w-4 h-4" />
                        <label for="tissue-remove" class="select-none">Remove Manually</label>
                    </div>
                </div>
            </div>

            <!-- Step 3: Tear -->
            <div class="mb-8 step hidden" data-step="3">
                <h4 class="text-lg font-medium text-gray-700 mb-4">Step 3: TEAR</h4>
                <div class="flex space-x-4">
                    <button id="tear-yes" class="flex-1 bg-motivaid-teal text-white py-3 px-6 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2 transition">YES</button>
                    <button id="tear-no" class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg font-medium hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition">NO</button>
                </div>
                <div id="tear-followup" class="mt-4 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded hidden">
                    <p class="font-semibold text-gray-800">Follow these steps</p>
                    <div class="mt-3 flex items-center text-gray-700">
                        <input id="tear-repair" type="checkbox" value="selected" class="mr-3 w-4 h-4" />
                        <label for="tear-repair" class="select-none">Repair</label>
                    </div>
                </div>
            </div>

            <!-- Step 4: Thrombin -->
            <div class="mb-8 step hidden" data-step="4">
                <h4 class="text-lg font-medium text-gray-700 mb-4">Step 4: THROMBIN</h4>
                <div class="flex space-x-4 mb-6">
                    <button id="thrombin-yes" class="flex-1 bg-motivaid-teal text-white py-3 px-6 rounded-lg font-medium hover:bg-teal-700 focus:outline-none transition">YES</button>
                    <button id="thrombin-no" class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg font-medium hover:bg-gray-300 focus:outline-none transition">NO</button>
                </div>
                <div id="thrombin-followup" class="mt-4 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded hidden">
                    <p class="font-semibold text-gray-800">Follow these steps</p>
                    <div id="thrombin-yes-group" class="mt-3 flex items-center text-gray-700 hidden">
                        <input id="thrombin-yes-advance" type="checkbox" value="advance" class="mr-3 w-4 h-4" />
                        <label for="thrombin-yes-advance" class="select-none">Seek advanced care</label>
                    </div>
                    <div id="thrombin-no-group" class="mt-3 space-y-2 text-gray-700 hidden">
                        <div class="flex items-center">
                            <input id="thrombin-no-continue" type="checkbox" value="continue" class="mr-3 w-4 h-4" />
                            <label for="thrombin-no-continue" class="select-none">Continue care</label>
                        </div>
                        <div class="flex items-center">
                            <input id="thrombin-no-monitor" type="checkbox" value="monitor" class="mr-3 w-4 h-4" />
                            <label for="thrombin-no-monitor" class="select-none">Monitor bleeding</label>
                        </div>
                        <div class="flex items-center">
                            <input id="thrombin-no-vitals" type="checkbox" value="vitals" class="mr-3 w-4 h-4" />
                            <label for="thrombin-no-vitals" class="select-none">Check vital signs & tone</label>
                        </div>
                        <div class="flex items-center">
                            <input id="thrombin-no-bf" type="checkbox" value="breastfeed" class="mr-3 w-4 h-4" />
                            <label for="thrombin-no-bf" class="select-none">Encourage breastfeeding</label>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="flex justify-center mt-4">
                    <button id="thrombin-done" class="bg-motivaid-teal text-white py-2 px-4 rounded-lg font-medium hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2 transition w-full max-w-xs hidden">Done</button>
                </div>
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

    <div id="completion-popup" class="hidden fixed inset-0 z-50 flex items-center justify-center" role="status" aria-live="polite" aria-hidden="true">
        <div id="completion-panel" class="bg-white border-l-4 border-green-600 p-6 rounded-lg shadow-md max-w-md w-full transform transition duration-200 scale-95 opacity-0">
            <div class="flex items-center justify-between">
                <p class="text-base font-medium text-gray-800">Your action has been completed successfully</p>
                <button id="completion-close" class="text-green-600 text-lg focus:outline-none" aria-label="Close">&times;</button>
            </div>
            <button id="completion-action" class="mt-4 bg-[#0D9488] hover:bg-[#0C7A70] text-white font-medium text-sm py-2 px-4 rounded w-full transition duration-200">
                Add New Patient
            </button>
        </div>
    </div>

    <script>
    (function(){
        const popup = document.getElementById('completion-popup');
        const panel = document.getElementById('completion-panel');
        if (!popup || !panel) return;

        // Ensure panel animation when shown by other scripts
        const showPanel = () => {
            panel.classList.remove('scale-95', 'opacity-0');
            panel.classList.add('scale-100', 'opacity-100');
        };
        const hidePanel = () => {
            popup.setAttribute('aria-hidden', 'true');
            panel.classList.add('scale-95', 'opacity-0');
            panel.classList.remove('scale-100', 'opacity-100');
            setTimeout(() => popup.classList.add('hidden'), 200);
        };

        // Observe visibility changes and enforce 30s auto-hide
        let customTimer = null;
        const observer = new MutationObserver(() => {
            const isVisible = !popup.classList.contains('hidden') && popup.getAttribute('aria-hidden') === 'false';
            if (isVisible) {
                // animate visible
                requestAnimationFrame(showPanel);
                // clear any previous timers and set 30s auto-hide
                if (customTimer) clearTimeout(customTimer);
                customTimer = setTimeout(hidePanel, 30000);
            } else {
                if (customTimer) { clearTimeout(customTimer); customTimer = null; }
            }
        });
        observer.observe(popup, { attributes: true, attributeFilter: ['class', 'aria-hidden'] });

        // Also hide when the close button is pressed
        const closeBtn = document.getElementById('completion-close');
        if (closeBtn) closeBtn.addEventListener('click', hidePanel);
    })();
    </script>

    <script>
    (function(){
        const popup = document.getElementById('completion-popup');
        const doneBtn = document.getElementById('thrombin-done');
        const closeBtn = document.getElementById('completion-close');

        function showCompletionPopup() {
            if (!popup) return;
            // make visible and animate
            popup.classList.remove('hidden');
            popup.setAttribute('aria-hidden', 'false');
            // allow the browser to apply hidden -> visible then run transition
            requestAnimationFrame(() => {
                popup.classList.remove('scale-95', 'opacity-0');
                popup.classList.add('scale-100', 'opacity-100');
            });
            // auto-hide after 5s (optional)
            clearTimeout(popup._hideTimer);
            popup._hideTimer = setTimeout(hideCompletionPopup, 5000);
        }

        function hideCompletionPopup() {
            if (!popup) return;
            popup.setAttribute('aria-hidden', 'true');
            popup.classList.add('scale-95', 'opacity-0');
            popup.classList.remove('scale-100', 'opacity-100');
            // remove from layout after transition
            setTimeout(() => popup.classList.add('hidden'), 200);
        }

        if (doneBtn) doneBtn.addEventListener('click', showCompletionPopup);
        if (closeBtn) closeBtn.addEventListener('click', hideCompletionPopup);
    })();
    </script>

    <script>
        (function() {
            const steps = document.querySelectorAll('.step');
            let currentStep = 1;

            // Function to show current and previous steps
            function showCurrentStep() {
                steps.forEach(step => {
                    const stepNum = parseInt(step.getAttribute('data-step'));
                    step.classList.toggle('hidden', stepNum > currentStep);
                });
            }

            // Function to check if all checkboxes in a followup section are checked
            function areAllCheckboxesChecked(followupId, nextStep) {
                const followup = document.getElementById(followupId);
                const checkboxes = followup.querySelectorAll('input[type="checkbox"]');
                const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
                if (allChecked && nextStep) {
                    currentStep = nextStep;
                    showCurrentStep();
                }
                return allChecked;
            }

            // Initialize: Show only first step
            showCurrentStep();

            // Step 1: Tonicity
            const tonicityYes = document.getElementById('tonicity-yes');
            const tonicityNo = document.getElementById('tonicity-no');
            const tonicityFollowup = document.getElementById('tonicity-followup');
            const tonicityCheckboxes = tonicityFollowup.querySelectorAll('input[type="checkbox"]');

            tonicityYes.addEventListener('click', () => {
                tonicityYes.classList.add('ring-2', 'ring-motivaid-teal');
                tonicityNo.classList.remove('ring-2', 'ring-motivaid-teal');
                tonicityFollowup.classList.add('hidden');
                currentStep = 2;
                showCurrentStep();
            });

            tonicityNo.addEventListener('click', () => {
                tonicityNo.classList.add('ring-2', 'ring-motivaid-teal');
                tonicityYes.classList.remove('ring-2', 'ring-motivaid-teal');
                tonicityFollowup.classList.remove('hidden');
                currentStep = 1; // Reset to Step 1
                showCurrentStep();
            });

            tonicityCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    areAllCheckboxesChecked('tonicity-followup', 2);
                });
            });

            // Step 2: Tissue
            const tissueYes = document.getElementById('tissue-yes');
            const tissueNo = document.getElementById('tissue-no');
            const tissueFollowup = document.getElementById('tissue-followup');
            const tissueCheckboxes = tissueFollowup.querySelectorAll('input[type="checkbox"]');

            tissueYes.addEventListener('click', () => {
                tissueYes.classList.add('ring-2', 'ring-motivaid-teal');
                tissueNo.classList.remove('ring-2', 'ring-motivaid-teal');
                tissueFollowup.classList.remove('hidden');
                currentStep = 2; // Stay on Step 2
                showCurrentStep();
            });

            tissueNo.addEventListener('click', () => {
                tissueNo.classList.add('ring-2', 'ring-motivaid-teal');
                tissueYes.classList.remove('ring-2', 'ring-motivaid-teal');
                tissueFollowup.classList.add('hidden');
                currentStep = 3; // Advance to Step 3
                showCurrentStep();
            });

            tissueCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    areAllCheckboxesChecked('tissue-followup', 3);
                });
            });

            // Step 3: Tear
            const tearYes = document.getElementById('tear-yes');
            const tearNo = document.getElementById('tear-no');
            const tearFollowup = document.getElementById('tear-followup');
            const tearCheckboxes = tearFollowup.querySelectorAll('input[type="checkbox"]');

            tearYes.addEventListener('click', () => {
                tearYes.classList.add('ring-2', 'ring-motivaid-teal');
                tearNo.classList.remove('ring-2', 'ring-motivaid-teal');
                tearFollowup.classList.remove('hidden');
                currentStep = 3; // Stay on Step 3
                showCurrentStep();
            });

            tearNo.addEventListener('click', () => {
                tearNo.classList.add('ring-2', 'ring-motivaid-teal');
                tearYes.classList.remove('ring-2', 'ring-motivaid-teal');
                tearFollowup.classList.add('hidden');
                currentStep = 4; // Advance to Step 4
                showCurrentStep();
            });

            tearCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    areAllCheckboxesChecked('tear-followup', 4);
                });
            });

            // Step 4: Thrombin
            const thrombinYes = document.getElementById('thrombin-yes');
            const thrombinNo = document.getElementById('thrombin-no');
            const thrombinFollowup = document.getElementById('thrombin-followup');
            const thrombinYesGroup = document.getElementById('thrombin-yes-group');
            const thrombinNoGroup = document.getElementById('thrombin-no-group');
            const thrombinDoneButton = document.getElementById('thrombin-done');
            const thrombinCheckboxes = thrombinFollowup.querySelectorAll('input[type="checkbox"]');

            function updateDoneButtonVisibility() {
                const activeGroup = thrombinYesGroup.classList.contains('hidden') ? thrombinNoGroup : thrombinYesGroup;
                const allChecked = Array.from(activeGroup.querySelectorAll('input[type="checkbox"]')).every(checkbox => checkbox.checked);
                thrombinDoneButton.classList.toggle('hidden', !allChecked);
            }

            thrombinYes.addEventListener('click', () => {
                thrombinYes.classList.add('ring-2', 'ring-motivaid-teal');
                thrombinNo.classList.remove('ring-2', 'ring-motivaid-teal');
                thrombinFollowup.classList.remove('hidden');
                thrombinYesGroup.classList.remove('hidden');
                thrombinNoGroup.classList.add('hidden');
                // Reset checkboxes in both groups
                thrombinCheckboxes.forEach(checkbox => checkbox.checked = false);
                thrombinDoneButton.classList.add('hidden'); // Hide Done button
                currentStep = 4; // Stay on Step 4
                showCurrentStep();
            });

            thrombinNo.addEventListener('click', () => {
                thrombinNo.classList.add('ring-2', 'ring-motivaid-teal');
                thrombinYes.classList.remove('ring-2', 'ring-motivaid-teal');
                thrombinFollowup.classList.remove('hidden');
                thrombinYesGroup.classList.add('hidden');
                thrombinNoGroup.classList.remove('hidden');
                // Reset checkboxes in both groups
                thrombinCheckboxes.forEach(checkbox => checkbox.checked = false);
                thrombinDoneButton.classList.add('hidden'); // Hide Done button
                currentStep = 4; // Stay on Step 4
                showCurrentStep();
            });

            thrombinCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    updateDoneButtonVisibility();
                });
            });
        })();
    </script>
</body>
</html>