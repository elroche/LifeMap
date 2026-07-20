import './stimulus_bootstrap.js';
import './styles/app.css';

window.addEventListener('load', () => {

    document.querySelectorAll('.toggle-password').forEach(button => {

        button.addEventListener('click', function () {

            console.log("clic");

            const wrapper = this.closest('.password-wrapper');
            const input = wrapper.querySelector('input');
            const icon = this.querySelector('i');

            if (input.type === 'password') {

                input.type = 'text';
                icon.classList.replace('bi-eye-slash', 'bi-eye');

            } else {

                input.type = 'password';
                icon.classList.replace('bi-eye', 'bi-eye-slash');

            }

        });

    });

});