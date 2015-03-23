var requestUrl = location.protocol + '//' + location.host + "/taskManagerAPI.php",
	GET_ALL_EVENTS = "GET_ALL_EVENTS",
	GET_EVENTS_IN_PERIOD = "GET_EVENTS_IN_PERIOD",
	GET_EVENT_BY_ID = "GET_EVENT_BY_ID",
	CREATE_EVENT = "CREATE_EVENT",
	UPDATE_EVENT = "UPDATE_EVENT",
	DELETE_EVENT = "DELETE_EVENT";

jQuery(function($) { $(document).ready(function() {
	$('.Banner').slick({
		autoplay: true,
		infinite: true,
		speed: 300,
		variableWidth: true,
		centerMode: true,
	});
})});

var MainModule = angular.module('MainModule', ['ngRoute']);

MainModule.config(['$routeProvider', function($routeProvide){
$routeProvide
	.when('/', {
		templateUrl: 'pages/home.php',
	})
	.when('/about', {
		templateUrl: 'pages/about.php',
	})
	.when('/contacts', {
		templateUrl: 'pages/contacts.php',
	})
	.when('/deal', {
		templateUrl: 'pages/deal.php',
	})			
	.when('/application', {
		templateUrl: 'pages/application.php',
		controller: 'ApplicationCtrl'
	})
	.when('/copyright', {
		templateUrl: 'pages/copyright.php',
	})
	.otherwise({
		redirectTo : '/'
	});
}]);
