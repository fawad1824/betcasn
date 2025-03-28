function showToast(message, bgColor = "bg-gray-800") {
    const toast = document.createElement("div");
    toast.className = `fixed top-5 right-5 ${bgColor} text-white px-4 py-2 rounded-lg shadow-lg transition-opacity opacity-100`;
    toast.innerText = message;

    document.body.appendChild(toast);

    setTimeout(() => {
        toast.classList.add("opacity-0");
        setTimeout(() => toast.remove(), 500);
    }, 2500);
}

function loginForm() {
    return {

        email: '',
        emailError: '',

        password: '',
        passwordError: '',

        emailPhone: '',
        emailPhoneError: '',

        otpError: '',
        isValid: false,


        checkValidation() {
            this.isValid = this.emailError === '' && this.passwordError === '';
        },
        checkValidation1() {
            this.isValid = this.emailPhoneError === '' && this.passwordError === '';
        },


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
            }
            this.checkValidation();
        },

        async submitForm() {
            if (!this.isValid) return;

            try {
                const response = await fetch('/user-login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        email: this.email,
                        password: this.password,
                        emailPhone: this.emailPhone,
                        otp: this.otp,
                        code: this.code
                    })
                });

                if (!response.ok) {
                    try {
                        const errorData = await response.json(); // Parse JSON response
                        const errorMessage = errorData.error || "An unknown error occurred";
                        showToast(errorMessage, "bg-red-500"); // Show toast with error message
                    } catch (parseError) {
                        showToast("Error: Unable to process response", "bg-red-500");
                    }
                    return;
                }


                const data = await response.json();

                if (data.message == 'User logged in successfully') {
                    showToast(data.message, "bg-green-500"); // Show toast with error message
                    window.location.href = '/home'; // Redirect to the home page
                }
                // Handle errors if present in response
                if (data.errors) {
                    if (data.errors.email) this.emailError = data.errors.email[0];
                    if (data.errors.password) this.passwordError = data.errors.password[0];
                }

            } catch (error) {
                console.error("Error:", error);
            }

        }

    }
}


