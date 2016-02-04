var formSubmit = angular.module('formSubmit', []);

formSubmit.factory('errorHandler', function(){
    return function(functionName, key, error, customClass, options) {

      switch(functionName) {
        case 'show' :
        return show();
        break;
        case 'clean' :
        return clean();
        break;
        case 'flash' :
        return flash();
        break;
        case 'flash_errors' :
        return flashErrors();
        break;
      }

      function show(){
          if (typeof(error[0]) !== 'undefined') {
            $('input[name="'+key+'"], textarea[name="'+key+'"]').css('border-color','red');
            angular.forEach(error, function(index, value) {
              $('input[name="'+key+'"], textarea[name="'+key+'"]').after('<p class="error '+customClass+'"><i class="fa fa-remove"></i>'+index+'</p>');
            });
          }
      }
      function clean(){
          $('.error').prev('input, textarea').removeAttr('style');
          $('.error').remove();
      }

      function flash(){
        $(options.selector).prev('.alert').remove();
        $(options.selector).before('<div class="alert alert-success"><i class="fa fa-exclamation-circle"></i>'+options.message+'</div>');
      }

      function flashErrors(){
          $(options.selector).prev('.alert').remove();
          $(options.selector).before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i>'+options.message+'</div>');
      }


    };
});
