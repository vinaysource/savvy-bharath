
var express = require('express');
var app = express();
var http = require('http').Server(app);
var nodemailer = require('nodemailer');
var transporter = nodemailer.createTransport();
 

// var sendMail = function(req, res){
// 	var data = req.body;
//  	transporter.sendMail({
//  		from: data.email_from,
//  		to: 'dineshg5678@gmail.com',
//  		subject: 'Message From' +data.name,
//  		text: "Looking for Job: " +data.job_role +"/n data of birth:"+data.DOB

//  	});
//  	res.json("success"+data.email_from);
//  }
 app.route('/sendMail').post(function(req, res){
	var data = req.body;
 	transporter.sendMail({
 		from: data.email_from,
 		to: 'dineshg5678@gmail.com',
 		subject: 'Message From' +data.name,
 		text: "Looking for Job: " +data.job_role +"/n data of birth:"+data.DOB

 	});
 	res.json("success"+data.email_from);	
})



//app.use(express.static(__dirname + '/public'));
app.use(express.static('public'));

process.on('uncaughtException', function (err) {
	  console.log('Caught exception: ' + err);
	});


app.get('/', function(req, res){
   res.redirect('/');

});

app.get('/', function (req, res) {
	 // res.sendFile(__dirname + '/public/View/template/login.html');
    res.sendFile(__dirname + '/public/index.html');
	});


app.listen(7000);


