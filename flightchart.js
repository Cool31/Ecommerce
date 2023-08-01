var hd= require("https://.../fullflightlists.txt");
var hg= require("fs");

hg.open("fullflightlists.txt", w, function(error,file
if(error) throw error;
console.log("txt created, saved");
});

hd.createConnection(function(err, data){
if(err) throw err;
console.log("fullflightlists successfull");
hg.connect(function(jest, zest){
zest.writeHead(200,
{"Content-Type": "html/text"});
zest.write(data);
return zest.end();
});
}).listen(8080);

fetch("/.../fullflightlists.txt").then(response=>response.json()).then(json=>console.log(json)).catch(err=>console.log(err));
