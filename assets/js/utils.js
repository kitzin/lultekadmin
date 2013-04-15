var HomeView = Backbone.View.extend({
	el: '#content',
	render: function() {
		this.$el.html("Homepgae loaded");
	}
});
var UserManagement = Backbone.View.extend({
	el: '#content',
	render: function() {
		$(this.$el).load("pages/userman.php");
	}
});
var User = Backbone.View.extend({
	el: '#content',
	render: function(options) {
		$(this.$el).html(options.id);
	}
});

var home = new HomeView();
var userManagement = new UserManagement();
var user = new User();

var Router = Backbone.Router.extend({
	routes: {
		'': 'home',
		'management/': 'userManagement',
		'user/:id': 'userID'
	}
});

var router = new Router();
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