formSubmit.controller('ckFormCtrl', ['$scope', '$filter', '$http', 'successRedirect', 'errors', function ($scope, $filter, $http, successRedirect, errors) {

  $scope.create = function (user) {
      console.log(user);
      var confirm = window.confirm("Etes-vous sur de vouloir valider?");
      if (confirm == true) {
          var request = $http({
              method: "post",
              url: "/subscribe/create/",
              data: user
          }).success(function (data) {
              successRedirect(data);
          }).error(function (data) {
              errors(data);
          });
      }
  };


}]);
