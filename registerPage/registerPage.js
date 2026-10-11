$(function () {
  $('#registerForm').validate({
    rules: {
      username: {
        required: true,
        minlength: 3,
        maxlength: 24,
        pattern: /^[a-zA-Z0-9_]+$/
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 8,
        strongPassword: true
      },
      confirmPassword: {
        required: true,
        equalTo: '#password'
      },
      terms: {
        required: true
      }
    },
    messages: {
      username: {
        required: 'Please choose a username.',
        minlength: 'Use at least 3 characters.',
        maxlength: 'Use 24 characters or fewer.',
        pattern: 'Use only letters, numbers, and underscores.'
      },
      email: {
        required: 'Please enter your email address.',
        email: 'Enter a valid email address.'
      },
      password: {
        required: 'Please create a password.',
        minlength: 'Use at least 8 characters.',
        strongPassword: 'Include an uppercase letter, a number, and a symbol.'
      },
      confirmPassword: {
        required: 'Please confirm your password.',
        equalTo: 'Passwords do not match.'
      },
      terms: 'You must accept the terms to continue.'
    },
    errorElement: 'label',
    errorClass: 'error',
    validClass: 'valid',
    errorPlacement: function (error, element) {
      if (element.attr('name') === 'terms') {
        error.insertAfter(element.closest('.terms-field').find('span'));
      } else {
        error.insertAfter(element);
      }
    },
    submitHandler: function (form) {
      form.reset();
      $('#successMessage').prop('hidden', false);
      $('.register-form input').removeClass('valid');
    }
  });

  $.validator.addMethod('strongPassword', function (value) {
    return /[A-Z]/.test(value) && /[0-9]/.test(value) && /[^a-zA-Z0-9]/.test(value);
  });
});