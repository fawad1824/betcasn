function registerForm() {
    return {

        email: 'fawadmin@gmail.com',
        otp: '',
        emailError: '',
        otpError: '',
        isValid: false,
        verificationCode: "",


        isValid1: false,
        lpassword: "",
        cpassword: "",
        lpasswordError: "",
        cpasswordError: "",

        isValid2: false,
        wlpassword: '',
        wcpassword: '',
        lcpasswordError: '',
        wcpasswordError: '',

        isValid3: false,
        phone: '',
        phoneError: '',
        code: '',

        checkValidation() {
            this.isValid = this.emailError === '' && this.otpError === '';
        },

        checkValidation2() {
            if (this.lpassword != this.cpassword) {
                this.cpasswordError = "Passwords do not match.";
                return;
            }
            else {
                this.cpasswordError = '';
            }
            this.isValid1 = this.lpasswordError === '' && this.cpasswordError === '';

        },

        checkValidation3() {
            if (this.wlpassword != this.wcpassword) {
                this.wcpasswordError = "Passwords do not match.";
                return;
            }
            else {
                this.wcpasswordError = '';
            }
            this.isValid2 = this.lcpasswordError === '' && this.wcpasswordError === '';

        },
        checkValidation4() {

            this.isValid3 = this.phoneError === '';

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



        generateCode() {
            this.verificationCode = Math.floor(100000 + Math.random() * 900000); // Generates a 6-digit code
            this.showCode = true;
            if (!this.otp) {
                this.otp = this.verificationCode;
            }
        },

        validateOTP() {
            this.otpError = '';
            if (!this.otp) {
                this.otpError = "Otp is required.";
            }

            this.checkValidation();
        },


        validateLpasswordL() {
            this.lpasswordError = '';
            if (!this.lpassword) {
                this.lpasswordError = "password is required.";
            }
            this.checkValidation2();
        },

        validateLpasswordC() {
            this.cpasswordError = '';
            if (!this.cpassword) {
                this.cpasswordError = "password is required.";
            }
            this.checkValidation2();
        },

        validateWLpassword() {
            this.lcpasswordError = '';
            if (!this.wlpassword) {
                this.lcpasswordError = "password is required.";
            }
            this.checkValidation3();
        },
        validateCLpassword() {
            this.wcpasswordError = '';
            if (!this.wcpassword) {
                this.wcpasswordError = "password is required.";
            }
            this.checkValidation3();
        },

        validatephone() {
            this.phoneError = '';
            if (!this.phone) {
                this.phoneError = "Phone is required.";
            }
            this.checkValidation4();
        },


        async submitForm(id) {
            if (!this.isValid) return;

            if (id == '2') return this.next = '2';
            if (id == '3') return this.next = '3';
            if (id == '4') return this.next = '4';

            if (id == '5') {
                try {
                    const response = await fetch('/user-register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            email: this.email,
                            otp: this.otp,
                            lpassword: this.lpassword,
                            cpassword: this.cpassword,
                            wlpassword: this.wlpassword,
                            wcpassword: this.wcpassword,
                            phone: this.phone,
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
                    console.log("Response Data:", data);
                    if (data.message == 'User registered successfully') {
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
}


