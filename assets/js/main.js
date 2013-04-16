var home = new HomeView();
var userManagement = new UserManagement();
var user = new User();
var router = new Router();
var userColl = new UsersCollection();

userColl.fetch();

router.on("route:home", function() {
	home.render();
});

router.on("route:userManagement", function() {
	userManagement.render();
});

router.on("route:userID", function(id) {
	user.render({id:id});
});

Backbone.history.start();