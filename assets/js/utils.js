var Users = Backbone.Model.extend({
	url: "users/",
	defaults: {
		[]
		/*name: "",
		username: "",
		id: 0,
		class: "",
		role: "",
		php: 0,
		storage: ""*/
	},
	
	initialize: function() {
		
	}
});

var UsersCollection = Backbone.Collection.extend({
	model: Users,
	url: "getusers.txt",
	
	initialize: function() {
		alert("new user collection created!");
	},
	
	parse: function(data) {
		for(var i = 0; i<data.length; i++) {
			this.push(data[i]);
		}
	}
});

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


var Router = Backbone.Router.extend({
	routes: {
		'': 'home',
		'management/': 'userManagement',
		'management/user/:id': 'userID'
	}
});