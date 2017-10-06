//Vue code here

const CRYPTOCOMPARE_API_URI = "https://www.cryptocompare.com";
const COINMARKETCAP_API_URI = "https://api.coinmarketcap.com";

const UPDATE_INTERVAL = 60 * 1000;

setInterval(function() {
	app.getCoins();
	console.log("Güncelendi");
}, UPDATE_INTERVAL);

var app = new Vue({
	el: "#app",

	data: {
		sortKey: 'name',
		reverse: false,
		search: '',
    	columns: ['name', 'symbol'],
		coins: [],
		coinData: {}

	},

	methods: {

		getCoinData: function(){

			var app = this;

			axios.get('https://www.cryptocompare.com/api/data/coinlist/')
				.then(function(res) {
					app.coinData = res.data.Data;
					app.getCoins();
				}).catch(function(err) {
					app.getCoins();
					console.error(err);
				});

		},
		
		getCoinImage: id =>
			`https://files.coinmarketcap.com/static/img/coins/16x16/${id}.png`,

		getCoins: function() {

			var app = this;

			axios.get('https://api.coinmarketcap.com/v1/ticker/?convert=TRY&limit=2000')
				.then(function(res) {
					app.coins = res.data;
				}).catch(function(err) {
					console.error(err);	
				});

		},
		
		sortBy: function(sortKey) {
	      this.reverse = (this.sortKey == sortKey) ? ! this.reverse : false;

	      this.sortKey = sortKey;
	    },

	    addUser: function() {
	      this.users.push(this.newUser);
	      this.newUser = {};
	    },

		getColor: (num) => {
		  return num > 0 ? "color:green;" : "color:red;";
		}

	},
 
	created: function() {
		this.getCoinData();
	}

}); 
 
