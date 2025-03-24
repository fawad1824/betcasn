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
                    // Handle Laravel API error response
                    const errorText = await response.text();
                    console.error("Server Error:", errorText);
                    return;
                }

                const data = await response.json();

                if (data.message == 'User logged in successfully') {
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


