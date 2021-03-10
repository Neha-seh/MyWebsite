var order = angular.module("MyOrder",[]);
order.controller("MyCon",function($scope){
	$scope.Message = "Order Summary";
});


order.controller("Details",function($scope){
	$scope.Orders = [
		{order_id:101,place_on_date:"21-01-2020",order_status:'Completed',total_value:12000,no_of_items:4},
		{order_id:175,place_on_date:"21-01-2020",order_status:'Completed',total_value:65000,no_of_items:4},
		{order_id:333,place_on_date:"21-01-2020",order_status:'Completed',total_value:782000,no_of_items:4},
		{order_id:75,place_on_date:"21-01-2020",order_status:'Completed',total_value:33000,no_of_items:4},
		{order_id:508,place_on_date:"21-01-2020",order_status:'Completed',total_value:82000,no_of_items:4},
		{order_id:645,place_on_date:"21-01-2020",order_status:'Completed',total_value:89000,no_of_items:4},
		{order_id:245,place_on_date:"21-01-2020",order_status:'In Transit',total_value:34000,no_of_items:4}
	];
});
// order.controller("Tech",function($scope){
// 	$scope.Technology = [
// 		{Id:1,Name:'C#',Likes:0,Dislikes:0},
// 		{Id:2,Name:'Java',Likes:0,Dislikes:0},
// 		{Id:3,Name:'Angular',Likes:0,Dislikes:0},
// 		{Id:4,Name:'ReactJS',Likes:0,Dislikes:0},
// 		{Id:5,Name:'NodeJS',Likes:0,Dislikes:0},
// 	];

// 	$scope.inclikes = function (tech)
// 	 {
// 		tech.Likes++;
// 	}
// 	$scope.incdilikes = function (tech)
// 	 {
// 		tech.Dislikes++;
// 	}
// });