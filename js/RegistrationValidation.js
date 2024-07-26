function validateInput(event) {
  var uid = document.getElementById('uid').value.trim();
  var name = document.getElementById('name').value.trim();
  var username = document.getElementById('username').value.trim();
  var email = document.getElementById('email').value.trim();
  var number = document.getElementById('number').value.trim();
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirm-password').value;
  var gender = document.querySelector('input[name="Gender"]:checked');
  var errorMessage = document.getElementById('error-message');

  // Reset error message
  errorMessage.textContent = '';

  // Basic validation checks
  if (!uid || !name || !username || !email || !number || !password || !confirmPassword || !gender) {
    errorMessage.textContent = 'All fields are required.';
    return false;
  }

  // Input sanitization
  var namePattern = /^[a-zA-Z\s]+$/;
  var usernamePattern = /^[a-zA-Z0-9_]+$/;
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var phonePattern = /^[0-9]{10}$/;

  if (!namePattern.test(name)) {
    errorMessage.textContent = 'Name can only contain letters and spaces.';
    return false;
  }

  if (!usernamePattern.test(username)) {
    errorMessage.textContent = 'Username can only contain letters, numbers, and underscores.';
    return false;
  }

  if (!emailPattern.test(email)) {
    errorMessage.textContent = 'Invalid email address.';
    return false;
  }

  if (!phonePattern.test(number)) {
    errorMessage.textContent = 'Phone number must be exactly 10 digits.';
    return false;
  }

  if (password.length < 8) {
    errorMessage.textContent = 'Password must be at least 8 characters long.';
    return false;
  }

  if (password !== confirmPassword) {
    errorMessage.textContent = 'Passwords do not match.';
    return false;
  }

  // All checks passed, form can be submitted
  return true;
}