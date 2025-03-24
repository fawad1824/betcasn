<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Register</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        function registerForm() {
            return {
                email: '',
                password: '',
                emailError: '',
                passwordError: '',
                isValid: false,
                next: '1',
                showModal: true,

                validateEmail() {
                    this.emailError = '';
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!this.email) {
                        this.emailError = "Email is required.";
                    } else if (!emailPattern.test(this.email)) {
                        this.emailError = "Invalid email format.";
                    }
                    this.checkValidation();
                },

                validatePassword() {
                    this.passwordError = '';
                    if (!this.password) {
                        this.passwordError = "Password is required.";
                    } else if (this.password.length < 8) {
                        this.passwordError = "Password must be at least 8 characters.";
                    }
                    this.checkValidation();
                },

                checkValidation() {
                    this.isValid = !this.emailError && !this.passwordError;
                },

                async submitForm() {
                    this.validateEmail();
                    this.validatePassword();

                    if (!this.isValid) return;
                    if (this.next = '2') {
                        this.next = '3';
                    }

                    try {
                        const response = await fetch('/register', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                email: this.email,
                                password: this.password
                            })
                        });

                        const data = await response.json();

                        if (response.ok) {
                            alert(data.message);
                            this.next = '2';
                            this.showModal = false;
                        } else {
                            if (data.errors.email) this.emailError = data.errors.email[0];
                            if (data.errors.password) this.passwordError = data.errors.password[0];
                        }
                    } catch (error) {
                        console.error("Error:", error);
                    }
                }
            }
        }
    </script>
    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>

<body class="p-6 w-full" x-data="registerForm()">

    <div x-show="next === '1'" class="p-6 w-full">
        <main class="flex items-center justify-between">
            <div class="flex-row">
                <h1 class="text-5xl mb-2"><b>Register</b></h1>
                <h3 class="text-xl mb-4 text-left">Email Register</h3>
            </div>
            <div class="flex">
                <img src="https://www.betcasn.com/images/register_1.png" alt="Logo" class="w-48">
            </div>
        </main>

        <div>
            <!-- Email Field -->
            <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Email</h1>
            <input type="email" x-model="email" @input="validateEmail" placeholder="Your Email"
                class="w-full p-2 border rounded mb-2">
            <p class="error" x-text="emailError"></p>

            <!-- Password Field -->
            <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Password</h1>
            <div class="flex items-center space-x-2 border rounded">
                <input type="password" x-model="password" @input="validatePassword" placeholder="Your Password"
                    class="w-full p-2 border-none outline-none">
                <button class="p-2 rounded text-black w-1/3 text-right">
                    Get Verification Code
                </button>
            </div>
            <p class="error" x-text="passwordError"></p>

            <!-- Forgot Password -->
            <h1 class="text-sm mt-5 mb-10"><a href="/forget">Forgot Password?</a></h1>

            <!-- Submit Button -->
            <button @click="submitForm" class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50"
                :disabled="!isValid">
                Next Step
            </button>
        </div>
    </div>

</body>

</html>
