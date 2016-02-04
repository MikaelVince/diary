var diaryApp = angular.module('diaryApp', ['formSubmit','dndLists','angularFileUpload']);
var domain = 'http://www.diary.dev';

diaryApp.factory('successRedirect', function(){
    return function(data) {

      if(data.status === "success") {
        alert(data.message);
        if (typeof(data.redirect) !== "undefined"){
          document.location.href = data.redirect;
        }
      }else{

      }

    };
});

diaryApp.factory('errors', function(){
    return function(data) {

      alert(data.message)
      for(var i = 0; i<data.errors.length;i++){
        $('#new-page-form-container').append('<p>'+data.errors[i]+'</p>');
      }
    };
});
