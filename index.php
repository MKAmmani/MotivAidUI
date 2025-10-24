<!-- Login Form -->
<form id
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotivAid - Login / Signup</title>
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
<body class="bg-gray-50 min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Logo -->
        <div class="flex flex-col items-center">
            <svg class="w-12 h-12 text-motivaid-teal mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <h2 class="text-3xl font-bold text-gray-900">MotivAid</h2>
        </div>

        <!-- Toggle between Login and Signup -->
        <div class="flex bg-white rounded-md shadow-sm" role="tablist">
            <button id="login-tab" type="button" class="px-4 py-2 text-sm font-medium text-motivaid-teal border-b-2 border-motivaid-teal rounded-tl-md" role="tab">Login</button>
            <button id="signup-tab" type="button" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 rounded-tr-md" role="tab">Signup</button>
        </div>

        <!-- Login Form -->
        <form id="login-form" action="patient.php" class="bg-white px-8 pt-6 pb-8 rounded-md shadow-md space-y-6" role="tabpanel">
            <div>
                <label for="login-email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input id="login-email" type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
            </div>
            <div>
                <label for="login-password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input id="login-password" type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" type="checkbox" class="h-4 w-4 text-motivaid-teal focus:ring-motivaid-teal border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>
                <div class="text-sm">
                    <a href="#" class="font-medium text-motivaid-teal hover:text-teal-500">Forgot password?</a>
                </div>
            </div>
            <button type="submit" formaction="patient.php" class="w-full bg-motivaid-teal text-white py-2 px-4 rounded-md font-medium hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed">
                Sign in
            </button>
        </form>

        <!-- Signup Form -->
        <form id="signup-form" class="hidden bg-white px-8 pt-6 pb-8 rounded-md shadow-md space-y-6" role="tabpanel">
            <div>
                <label for="signup-name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                <input id="signup-name" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
            </div>
            <div>
                <label for="signup-email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input id="signup-email" type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
            </div>
            <div>
                <label for="signup-password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input id="signup-password" type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
            </div>
            <div>
                <label for="signup-confirm-password" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                <input id="signup-confirm-password" type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-motivaid-teal">
            </div>
            <button  formaction="patient.php" type="submit" class="w-full bg-motivaid-teal text-white py-2 px-4 rounded-md font-medium hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-motivaid-teal focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed">
                Sign up
            </button>
        </form>

        <div class="text-center text-sm text-gray-600">
            By signing up, you agree to our <a href="#" class="text-motivaid-teal hover:underline">Terms of Service</a> and <a href="#" class="text-motivaid-teal hover:underline">Privacy Policy</a>.
        </div>
    </div>

    <script>
        const loginTab = document.getElementById('login-tab');
        const signupTab = document.getElementById('signup-tab');
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');
        const loginSubmitBtn = loginForm.querySelector('button[type="submit"]');
        const signupSubmitBtn = signupForm.querySelector('button[type="submit"]');

        // Tab switching
        loginTab.addEventListener('click', () => {
            loginTab.classList.add('text-motivaid-teal', 'border-b-2', 'border-motivaid-teal');
            loginTab.classList.remove('text-gray-500');
            signupTab.classList.add('text-gray-500');
            signupTab.classList.remove('text-motivaid-teal', 'border-b-2', 'border-motivaid-teal');
            loginForm.classList.remove('hidden');
            signupForm.classList.add('hidden');
        });

        signupTab.addEventListener('click', () => {
            signupTab.classList.add('text-motivaid-teal', 'border-b-2', 'border-motivaid-teal');
            signupTab.classList.remove('text-gray-500');
            loginTab.classList.add('text-gray-500');
            loginTab.classList.remove('text-motivaid-teal', 'border-b-2', 'border-motivaid-teal');
            signupForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
        });

        // Simulate backend API call with localStorage for user storage
        function simulateApiCall(endpoint, data) {
            return new Promise((resolve, reject) => {
                setTimeout(() => {
                    // Simulate success for login with specific credentials
                    if (endpoint === '/api/login') {
                        const storedUser = JSON.parse(localStorage.getItem('user') || '{}');
                        if (data.email === 'ammanikabir2@gmail.com' && data.password === '12345678' && storedUser.email === data.email) {
                            resolve({ success: true, token: 'fake-jwt-token', user: storedUser });
                        } else {
                            reject({ success: false, message: 'Invalid credentials' });
                        }
                    } else if (endpoint === '/api/signup') {
                        // Check if user already exists (only one user allowed)
                        const existingUser = JSON.parse(localStorage.getItem('user') || '{}');
                        if (existingUser.email) {
                            reject({ success: false, message: 'User already exists. Only one user allowed.' });
                        } else {
                            const newUser = { name: data.name || 'User', email: data.email, password: data.password }; // In real app, hash password
                            localStorage.setItem('user', JSON.stringify(newUser));
                            localStorage.setItem('token', 'fake-jwt-token');
                            resolve({ success: true, token: 'fake-jwt-token', user: newUser });
                        }
                    }
                }, 1500); // Simulate network delay
            });
        }

        // Login form handler
        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = document.getElementById('login-email').value;
            const password = document.getElementById('login-password').value;
            const remember = document.getElementById('remember').checked;

            loginSubmitBtn.disabled = true;
            loginSubmitBtn.textContent = 'Signing in...';

            try {
                const response = await simulateApiCall('/api/login', { email, password });
                if (response.success) {
                    localStorage.setItem('token', response.token);
                    localStorage.setItem('user', JSON.stringify(response.user));
                    if (remember) {
                        localStorage.setItem('rememberMe', 'true');
                    }
                    // Redirect to app page (assume early-warning.html exists)
                    window.location.href = 'early-warning.html';
                }
            } catch (error) {
                // Removed alert for invalid credentials
            } finally {
                loginSubmitBtn.disabled = false;
                loginSubmitBtn.textContent = 'Sign in';
            }
        });

        // Signup form handler
        signupForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const name = document.getElementById('signup-name').value;
            const email = document.getElementById('signup-email').value;
            const password = document.getElementById('signup-password').value;
            const confirmPassword = document.getElementById('signup-confirm-password').value;

            signupSubmitBtn.disabled = true;
            signupSubmitBtn.textContent = 'Signing up...';

            try {
                const response = await simulateApiCall('/api/signup', { name, email, password, confirmPassword });
                if (response.success) {
                    // Redirect to app page
                    window.location.href = 'early-warning.html';
                }
            } catch (error) {
                // Removed alert for signup errors
            } finally {
                signupSubmitBtn.disabled = false;
                signupSubmitBtn.textContent = 'Sign up';
            }
        });

        // Check if already logged in
        window.addEventListener('load', () => {
            const token = localStorage.getItem('token');
            if (token) {
                window.location.href = 'early-warning.html';
            }
        });
    </script>
</body>
</html>