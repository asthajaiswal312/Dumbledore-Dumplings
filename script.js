// // Get the student button
// const studentBtn = document.getElementById('studentBtn');

// // Get the student login form
// const studentLoginForm = document.getElementById('studentLogin');

// // Add event listener to the student button
// studentBtn.addEventListener('click', function() {
//     // Blur the entire page
//     document.body.style.filter = 'blur(5px)';
    
//     // Display the student login form
//     studentLoginForm.style.display = 'block';
// });

// Get the buttons
const studentBtn = document.getElementById('studentBtn');
const staffBtn = document.getElementById('staffBtn');

// Add event listener to the student button
studentBtn.addEventListener('click', function() {
    // Open student login page
    window.location.href = 'studentLogin.html';
});

// Add event listener to the staff button
staffBtn.addEventListener('click', function() {
    // Open staff login page
    window.location.href = 'staffLogin.html';
});


// //adding functionality to the sign up buttons

// // Add event listener to the sign-up link in the login form
// studentLoginForm.querySelector('a').addEventListener('click', function(event) {
//     event.preventDefault(); // Prevent default link behavior

//     // Hide the login form
//     studentLoginForm.style.display = 'none';

//     // Display the sign-up form
//     studentSignUpForm.style.display = 'block';
// });

// // Add event listener to the sign-up link in the sign-up form
// studentSignUpForm.querySelector('a').addEventListener('click', function(event) {
//     event.preventDefault(); // Prevent default link behavior

//     // Hide the sign-up form
//     studentSignUpForm.style.display = 'none';

//     // Display the login form
//     studentLoginForm.style.display = 'block';
// });