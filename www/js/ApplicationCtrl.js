/**
 * 
 */

var requestUrl = location.protocol + '//' + location.host + "/sendMail.php";

MainModule.factory('MainModuleAppFieldsFactory', function() {
	  return {
	    	userName : '',
	    	eMail : '',
	    	theme : '',
	    	text : ''
	  };
});

MainModule.controller('ApplicationCtrl', ['$scope', '$http', '$location', 'MainModuleAppFieldsFactory', 
                                          function ($scope, $http, $location, MMF) {
	
	$scope.appUserName = MMF.appUserName;
	$scope.appEMail = MMF.appEMail;
	$scope.appTheme = MMF.appTheme;
	$scope.appText = MMF.appText;
	
	$scope.ChangeUserName = function() {	
		MMF.appUserName = $scope.appUserName;
	}
	
	$scope.ChangeEMail = function() {	
		MMF.appEMail = $scope.appEMail;
	}
	
	$scope.ChangeTheme = function() {	
		MMF.appTheme = $scope.appTheme;
	}
	
	$scope.ChangeText = function() {	
		MMF.appText = $scope.appText;
	}
		
	$scope.Send = function() {	
		if(($scope.appUserName !== "") && 
				($scope.appUserName !== undefined) && 
				($scope.appEMail !== "") && 
				($scope.appEMail !== undefined) && 
				($scope.appTheme !== "") && 
				($scope.appTheme !== undefined) && 
				($scope.appText !== "") && 
				($scope.appText !== undefined)){
			
			$http({
			    url: requestUrl, 
			    method: "POST",
			    data: {
			    	userName : $scope.appUserName,
			    	eMail : $scope.appEMail,
			    	theme: $scope.appTheme,
			    	text: $scope.appText
			    }
			}).success(function(){
				MMF.appTheme = "";
				MMF.appText = "";
				//$location.path('/');
			});
		}
	}
}]);
