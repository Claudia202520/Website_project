// Subscribe feature: Display alert on subscription
document.getElementById('subscribeBtn').addEventListener('click', function() {
  alert('Thank you for subscribing!');
});

// Footer subscribe feature (with basic email validation)
document.getElementById('subscribeFooterBtn').addEventListener('click', function() {
  const emailInput = document.getElementById('email').value;
  if (validateEmail(emailInput)) {
    alert(`Thank you for subscribing, ${emailInput}!`);
  } else {
    alert('Please enter a valid email address.');
  }
});

// Simple email validation function
function validateEmail(email) {
  const re = /\S+@\S+\.\S+/;
  return re.test(email);
}

// Additional JS for cart functionality, form submissions, etc.
