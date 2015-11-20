console.log("Servidor de cima");

var express = require("express");
var cima = express();
var servidor;

servidor = cima.listen(8585, function (){
	console.log("servidor arrancado urra");
} );

cima.get("/", function (req,res){
	res.sendfile("home.html");
});

cima.get("/urra/", function (req, res){
	res.send("Ya los estas logrando bien hecho!!!")
});