$(function () {
  $('.login-form').validate({
    rules: {
      username: {
        required: true,
        minlength: 3
      },
      password: {
        required: true,
        minlength: 8
      }
    },
    messages: {
      username: {
        required: 'Please enter your username.',
        minlength: 'Use at least 3 characters.'
      },
      password: {
        required: 'Please enter your password.',
        minlength: 'Use at least 8 characters.'
      }
    },
    errorElement: 'label',
    errorClass: 'error',
    validClass: 'valid',
    submitHandler: function (form) {
      form.reset();
      $('#loginSuccess').prop('hidden', false);
      $('.login-form input').removeClass('valid');
    }
  });

  $('.register-form').validate({
    rules: {
      'register-username': {
        required: true,
        minlength: 3,
        maxlength: 24,
        pattern: /^[a-zA-Z0-9_]+$/
      },
      email: {
        required: true,
        email: true
      },
      'register-password': {
        required: true,
        minlength: 8,
        strongPassword: true
      },
      'confirm-password': {
        required: true,
        equalTo: '#register-password'
      }
    },
    messages: {
      'register-username': {
        required: 'Please choose a username.',
        minlength: 'Use at least 3 characters.',
        maxlength: 'Use 24 characters or fewer.',
        pattern: 'Use only letters, numbers, and underscores.'
      },
      email: {
        required: 'Please enter your email address.',
        email: 'Enter a valid email address.'
      },
      'register-password': {
        required: 'Please create a password.',
        minlength: 'Use at least 8 characters.',
        strongPassword: 'Include an uppercase letter, a number, and a symbol.'
      },
      'confirm-password': {
        required: 'Please confirm your password.',
        equalTo: 'Passwords do not match.'
      }
    },
    errorElement: 'label',
    errorClass: 'error',
    validClass: 'valid',
    submitHandler: function (form) {
      form.reset();
      $('#registerSuccess').prop('hidden', false);
      $('.register-form input').removeClass('valid');
    }
  });

  $.validator.addMethod('strongPassword', function (value) {
    return /[A-Z]/.test(value) && /[0-9]/.test(value) && /[^a-zA-Z0-9]/.test(value);
  });
});