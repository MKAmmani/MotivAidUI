<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotivAid - Real-Time Guidance</title>
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
        <div id="nigeria-time" class="text-sm text-gray-500"></div>
        <script>
            function updateNigeriaTime() {
            // Nigeria is in Africa/Lagos timezone (UTC+1, with DST not observed)
            const options = { hour: '2-digit', minute: '2-digit', hour12: false, timeZone: 'Africa/Lagos' };
            const now = new Date();
            document.getElementById('nigeria-time').textContent = now.toLocaleTimeString('en-GB', options);
            }
            updateNigeriaTime();
            setInterval(updateNigeriaTime, 1000);
        </script>
    </header>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto px-4 py-6">
        <!-- Title Section -->
        <section class="bg-motivaid-teal text-white px-6 py-8 rounded-lg mb-6">
            <h2 class="text-2xl font-semibold mb-2">Steps For Prevension</h2>
            <p class="text-motivaid-teal/90 font-medium">(Delivery Mode)</p>
        </section>

        <!-- Timer and Estimate Card -->
        <section class="bg-white rounded-lg shadow-sm p-4 mb-4">
            <h3 class="text-sm font-medium text-gray-700 mb-2">Live Timer</h3>
            <div class="flex justify-between items-center text-lg font-semibold">
                <div class="flex items-center space-x-3">
                    <span id="live-timer" class="text-gray-800">15:00</span>
                    <span id="timer-status" class="text-sm text-red-600 hidden">Time is off</span>
                </div>
                <script>
                (function(){
                    const DURATION = 15 * 60; // seconds
                    const KEY = 'motive_end_ts';
                    // use localStorage so timer persists across reloads and revisits
                    let endTs = localStorage.getItem(KEY);
                    if (!endTs) {
                        endTs = Date.now() + DURATION * 1000;
                        localStorage.setItem(KEY, String(endTs));
                    } else {
                        endTs = parseInt(endTs, 10);
                    }

                    const timerEl = document.getElementById('live-timer');
                    const statusEl = document.getElementById('timer-status');

                    function pad(n){ return n < 10 ? '0' + n : String(n); }

                    function finish() {
                        timerEl.textContent = '00:00';
                        timerEl.classList.add('text-red-600', 'font-bold');
                        statusEl.classList.remove('hidden');
                        statusEl.textContent = 'Time is off';
                        clearInterval(interval);
                        // If you want the timer to restart on next visit after it finishes,
                        // uncomment the next line to remove the saved end timestamp:
                        // localStorage.removeItem(KEY);
                    }

                    function update() {
                        const remaining = Math.ceil((endTs - Date.now()) / 1000);

                        if (remaining <= 0) {
                            finish();
                            return;
                        }

                        const mm = Math.floor(remaining / 60);
                        const ss = remaining % 60;
                        timerEl.textContent = pad(mm) + ':' + pad(ss);
                    }

                    update();
                    const interval = setInterval(update, 1000);
                })();
                </script>
                <!--<span class="text-motivaid-teal">600 ml</span>-->
            </div>
        </section>

        <!-- Alert Banner -->
        <section class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-red-800">Possible Postpartum Hemorrhage – Begin E-MOTIVE steps now!</p>
                </div>
            </div>
        </section>

        <!-- Checklist Card (show one item at a time with Next button) -->
        <section class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <h3 class="text-lg font-medium text-gray-700 mb-4">E-MOTIVE Step Checklist</h3>
            <ul id="emotive-checklist" class="space-y-3">
            <li data-step="0" class="flex items-center p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
            <input type="checkbox" checked class="h-5 w-5 text-motivaid-teal focus:ring-motivaid-teal rounded mr-3">
            <div>
                <span class="text-sm text-gray-700">Early identification of bleeding</span>
                <p class="text-sm text-gray-500 mt-2">Promptly identify and monitor blood loss. Initiate E-MOTIVE protocol if blood loss is 500ml or less.</p>
            </div>
            </li>
            <li data-step="1" class="flex items-center p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
            <input type="checkbox" class="h-5 w-5 text-motivaid-teal focus:ring-motivaid-teal rounded mr-3">
            <div>
                <span class="text-sm text-gray-700">Massaging of uterus</span>
                <p class="text-sm text-gray-500 mt-2"></p>
            </div>
            </li>
            <li data-step="2" class="flex items-center p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
            <input type="checkbox" class="h-5 w-5 text-motivaid-teal focus:ring-motivaid-teal rounded mr-3">
            <div>
                <span class="text-sm text-gray-700">Administer Oxytocin</span>
                <p class="text-sm text-gray-500 mt-2">Administer 10IU of oxytocin (I.M)</p>
            </div>
            </li>
            <li data-step="3" class="flex items-center p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
            <input type="checkbox" class="h-5 w-5 text-motivaid-teal focus:ring-motivaid-teal rounded mr-3">
            <div>
                <span class="text-sm text-gray-700">Administer Tranexamic Acid</span>
                <p class="text-sm text-gray-500 mt-2">1g of traxenamic acid (I.V)</p>
            </div>
            </li>
            <li data-step="4" class="flex items-center p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
            <input type="checkbox" class="h-5 w-5 text-motivaid-teal focus:ring-motivaid-teal rounded mr-3">
            <div>
                <span class="text-sm text-gray-700">IV fluids</span>
                <p class="text-sm text-gray-500 mt-2">Administer N/S or R/L with 10IU of oxytonic</p>
            </div>
            </li>
            <li data-step="5" class="flex items-center p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
            <input type="checkbox" class="h-5 w-5 text-motivaid-teal focus:ring-motivaid-teal rounded mr-3">
            <div>
                <span class="text-sm text-gray-700">Vital signs monitoring</span>
                <p class="text-sm text-gray-500 mt-2"></p>
            </div>
            </li>
            <li data-step="6" class="flex items-center p-3 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
            <input type="checkbox" class="h-5 w-5 text-motivaid-teal focus:ring-motivaid-teal rounded mr-3">
            <div>
                <span class="text-sm text-gray-700">Examination / Escalation</span>
                <p class="text-sm text-gray-500 mt-2"></p>
            </div>
            </li>
            </ul>

            <div class="mt-4 flex justify-end">
            <button id="emotive-next" type="button" class="bg-motivaid-teal text-white px-4 py-2 rounded-md font-medium hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2">
                Next
            </button>
            </div>

            <script>
            (function(){
            const list = document.getElementById('emotive-checklist');
            const items = Array.from(list.querySelectorAll('li'));
            const nextBtn = document.getElementById('emotive-next');
            let idx = 0;

            // hide all except first
            items.forEach((li, i) => {
            if (i !== 0) li.style.display = 'none';
            });

            function setBtnEnabled(enabled) {
                nextBtn.disabled = !enabled;
                nextBtn.classList.toggle('opacity-50', !enabled);
                nextBtn.classList.toggle('cursor-not-allowed', !enabled);
            }

            function updateNextState() {
                const cb = items[idx].querySelector('input[type="checkbox"]');
                // Next is enabled only when the currently visible checkbox is checked
                const enabled = !!(cb && cb.checked);
                setBtnEnabled(enabled);
                // update text for last step
                if (idx === items.length - 1) {
                nextBtn.textContent = enabled ? 'Done' : 'Done';
                } else {
                nextBtn.textContent = 'Next';
                }
            }

            // add change listeners to checkboxes so state updates when they are toggled
            items.forEach((li) => {
                const cb = li.querySelector('input[type="checkbox"]');
                if (cb) {
                cb.addEventListener('change', updateNextState);
                }
            });

            // initialize button state based on first checkbox
            updateNextState();

            nextBtn.addEventListener('click', () => {
            // ensure button action only runs when enabled
            if (nextBtn.disabled) return;

            if (idx < items.length - 1) {
                idx++;
                items[idx].style.display = 'flex';
                // focus the checkbox of the newly shown item
                const cb = items[idx].querySelector('input[type="checkbox"]');
                if (cb) cb.focus();
                // after showing new item, update button enabled state based on that checkbox
                updateNextState();
                if (idx === items.length - 1) {
                nextBtn.textContent = 'Done';
                }
            } else {
                // last step and checkbox was checked -> finalize
                nextBtn.disabled = true;
                nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
                nextBtn.textContent = 'Completed';
            }
            });
            })();
            </script>
        </section>

        <!-- Action Button -->
        <div class="mb-6">
            <button 
                class="w-full bg-motivaid-teal text-white px-6 py-3 rounded-md font-medium hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2"
                onclick="alert('Notification sent successfully!'); window.location.href='documentation.php';"
            >
                Document
            </button>
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