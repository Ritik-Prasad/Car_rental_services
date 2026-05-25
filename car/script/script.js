 // Function to handle form submission
  function handleFormSubmit(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Get the values from the form fields
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Perform validation
    if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
      alert('Please fill in all fields');
      return;
    }

    // Display a success message
    alert('Thank you for your message! We will get back to you soon.');

    // Reset the form fields
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('message').value = '';
  }
 