$(function(){
const config = {
	apiKey: "AIzaSyCXDNS0Kaq5IKU4zBIo74_fhydA1msmb28",
	authDomain: "cuscosquare.firebaseapp.com",
	databaseURL: "https://cuscosquare.firebaseio.com",
	storageBucket: "cuscosquare.appspot.com",
	messagingSenderId: "75914634548"
	};
	firebase.initializeApp(config);
	$('.js-form').on('submit', event => {
		event.preventDefault();
		const namecontact = $('#namecontact').val();
		const ruccontact = $('#ruccontact').val();
		const phonecontact = $('#phonecontact').val();
		const emailcontact = $('#emailcontact').val();
		console.log(namecontact, ruccontact, phonecontact, emailcontact);
	});
});