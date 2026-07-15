import './stimulus_bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

document.querySelectorAll('.toggle-password').forEach(button => {

    button.addEventListener('click', function () {

        const wrapper = this.closest('.password-wrapper');
        const input = wrapper.querySelector('input');
        const icon = this.querySelector('i');

        if (input.type === 'password') {

            input.type = 'text';

            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');

        } else {

            input.type = 'password';

            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');

        }

    });

});