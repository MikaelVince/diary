formSubmit.controller('ckFormCtrl', ['$scope', '$filter', '$http', 'successRedirect', 'errors', function ($scope, $filter, $http, successRedirect, errors) {

  $scope.create = function (user) {
      var confirm = window.confirm("Etes-vous sur de vouloir valider?");
      if (confirm == true && user.password == user.passwordConfirm) {
          var request = $http({
              method: "post",
              url: "/subscribe/create/",
              data: page
          }).success(function (data) {
              successRedirect(data);
          }).error(function (data) {
              errors(data);
          });
      }
  };


}]);
