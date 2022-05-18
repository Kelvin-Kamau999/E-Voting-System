// const usernameEl = document.querySelector('#username');
// const firstnameEl = document.querySelector('#firstname');
// const passwordEl = document.querySelector('#password');
// const confirmPasswordEl = document.querySelector('#confirm-password');

// const form = document.querySelector('#signup');


// const checkUsername = () => {

//     let valid = false;

//     const min = 3,
//         max = 25;

//     const username = usernameEl.value.trim();

//     if (!isRequired(username)) {
//         showError(usernameEl, 'Username cannot be blank.');
//     } else if (!isBetween(username.length, min, max)) {
//         showError(usernameEl, `Username must be between ${min} and ${max} characters.`)
//     } else {
//         showSuccess(usernameEl);
//         valid = true;
//     }
//     return valid;
// };


// const checkFirstname = () => {

//     let valid = false;

//     const min = 3,
//         max = 25;

//     const firstname = firstnameEl.value.trim();

//     if (!isRequired(firstname)) {
//         showError(firstnameEl, 'First name cannot be blank.');
//     } else if (!isBetween(firstname.length, min, max)) {
//         showError(firstnameEl, `Firstname must be between ${min} and ${max} characters.`)
//     } else {
//         showSuccess(firstnameEl);
//         valid = true;
//     }
//     return valid;
// };

// const checkPassword = () => {
//     let valid = false;


//     const password = passwordEl.value.trim();

//     if (!isRequired(password)) {
//         showError(passwordEl, 'Password cannot be blank.');
//     } else if (!isPasswordSecure(password)) {
//         showError(passwordEl, 'Password must have at least 8 characters that include at least 1 special character ');
//     } else {
//         showSuccess(passwordEl);
//         valid = true;
//     }

//     return valid;
// };

// const checkConfirmPassword = () => {
//     let valid = false;
//     // check confirm password
//     const confirmPassword = confirmPasswordEl.value.trim();
//     const password = passwordEl.value.trim();

//     if (!isRequired(confirmPassword)) {
//         showError(confirmPasswordEl, 'Please enter the password again');
//     } else if (password !== confirmPassword) {
//         showError(confirmPasswordEl, 'The passwords don`t match');
//     } else {
//         showSuccess(confirmPasswordEl);
//         valid = true;
//     }

//     return valid;
// };



// const isPasswordSecure = (password) => {
//     const re = new RegExp("^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.[!@#\$%\^&\*])(?=.{8,})");
//     return re.test(password);
// };

// const isRequired = value => value === '' ? false : true;
// const isBetween = (length, min, max) => length < min || length > max ? false : true;


// const showError = (input, message) => {
//     // get the form-field element
//     const formField = input.parentElement;
//     // add the error class
//     formField.classList.remove('success');
//     formField.classList.add('error');

//     // show the error message
//     const error = formField.querySelector('small');
//     error.textContent = message;
// };

// const showSuccess = (input) => {
//     // get the form-field element
//     const formField = input.parentElement;

//     // remove the error class
//     formField.classList.remove('error');
//     formField.classList.add('success');

//     // hide the error message
//     const error = formField.querySelector('small');
//     error.textContent = '';
// }


// form.addEventListener('submit', function (e) {
//     // prevent the form from submitting
//     // e.preventDefault();

//     // validate fields
//     let isUsernameValid = checkUsername(),
//         isFirstnameValid = checkFirstname(),
//         isPasswordValid = checkPassword(),
//         isConfirmPasswordValid = checkConfirmPassword();

//     let isFormValid = isUsernameValid &&
//         isFirstnameValid &&
//         isPasswordValid &&
//         isConfirmPasswordValid;

//     // submit to the server if the form is valid
//     if (isFormValid) {

//     }
// });


// const debounce = (fn, delay = 500) => {
//     let timeoutId;
//     return (...args) => {
//         // cancel the previous timer
//         if (timeoutId) {
//             clearTimeout(timeoutId);
//         }
//         // setup a new timer
//         timeoutId = setTimeout(() => {
//             fn.apply(null, args)
//         }, delay);
//     };
// };

// form.addEventListener('input', debounce(function (e) {
//     switch (e.target.id) {
//         case 'username':
//             checkUsername();
//             break;
//         case 'firstname':
//             checkFirstname();
//             break;
//         case 'password':
//             checkPassword();
//             break;
//         case 'confirm-password':
//             checkConfirmPassword();
//             break;
//     }
// }));