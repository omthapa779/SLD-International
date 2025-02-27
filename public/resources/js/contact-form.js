// Save this as public/js/contact-form.js
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.form_holder');
    
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      
      // Show loading state
      const submitButton = form.querySelector('button[type="submit"]');
      const originalButtonText = submitButton.innerHTML;
      submitButton.innerHTML = '<h3 class="alt_text">Sending...</h3>';
      submitButton.disabled = true;
      
      // Get CSRF token
      const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      
      // Create FormData object
      const formData = new FormData(form);
      
      // Send the form data to Laravel route
      fetch('/contact-form', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': token
        },
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          // Show success popup
          showSuccessPopup();
          // Reset the form
          form.reset();
        } else {
          // Show validation errors
          if (data.errors) {
            const errorMessages = Object.values(data.errors).flat();
            showAlert(errorMessages.join('<br>'), 'error');
          } else {
            showAlert(data.message || 'There was an error sending your message. Please try again.', 'error');
          }
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showAlert('There was an error sending your message. Please try again.', 'error');
      })
      .finally(() => {
        // Restore button state
        submitButton.innerHTML = originalButtonText;
        submitButton.disabled = false;
      });
    });
    
    function showSuccessPopup() {
      // Create success popup element
      const popup = document.createElement('div');
      popup.className = 'success-popup';
      popup.innerHTML = `
        <div class="success-popup-content">
          <div class="success-icon">✓</div>
          <h3>Thank You!</h3>
          <p>Your message has been sent successfully. We'll get back to you soon.</p>
          <button class="primary_button close-popup">
            <h3 class="alt_text">Close</h3>
          </button>
        </div>
      `;
      
      // Add popup styles
      const style = document.createElement('style');
      style.textContent = `
        .success-popup {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
          display: flex;
          justify-content: center;
          align-items: center;
          z-index: 1000;
        }
        .success-popup-content {
          background-color: white;
          padding: 30px;
          border-radius: 5px;
          text-align: center;
          max-width: 400px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .success-icon {
          background-color: #4CAF50;
          color: white;
          width: 50px;
          height: 50px;
          border-radius: 50%;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 24px;
          margin: 0 auto 15px;
        }
      `;
      
      document.head.appendChild(style);
      document.body.appendChild(popup);
      
      // Add close functionality
      popup.querySelector('.close-popup').addEventListener('click', function() {
        document.body.removeChild(popup);
      });
    }
    
    function showAlert(message, type) {
      const alertEl = document.createElement('div');
      alertEl.className = `alert alert-${type}`;
      alertEl.innerHTML = message;
      
      // Add alert styles if not already present
      if (!document.querySelector('#alert-styles')) {
        const style = document.createElement('style');
        style.id = 'alert-styles';
        style.textContent = `
          .alert {
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 15px;
            color: white;
            font-weight: bold;
          }
          .alert-error {
            background-color: #f44336;
          }
          .alert-success {
            background-color: #4CAF50;
          }
        `;
        document.head.appendChild(style);
      }
      
      // Insert alert at top of form
      form.insertBefore(alertEl, form.firstChild);
      
      // Remove alert after 3 seconds
      setTimeout(() => {
        if (alertEl.parentNode) {
          alertEl.parentNode.removeChild(alertEl);
        }
      }, 3000);
    }
  });