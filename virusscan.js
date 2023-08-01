node.js installation

var exec = require('child_process').exec;
var fs = require('fs');

var outputFile = "/root/hacking/report.csv";
var urlOrHashToScan = "0BB50330-731D-449F-8500-D35F51CF";

exec(`automater ${urlOrHashToScan} --csv ${outputFile}`, (error, stdout, stderr) => {
if(error){
   console.error(`exec error: ${error}`);
return;
}

if (fs.existsSync(outputFile)){
var CSV_DATA = fs.readFileSync(outputFile, "utf8");
var ParsedCSV = parseCSV(CSV_DATA);

// Print every item in the array
        ParsedCSV.forEach((item) => {
            console.log(item.join(" | "));
  });
}else{
     console.log(`stderr: ${stderr}`);
    }
});

/**
 * Wrapped csv line parser
 * @param s string delimited csv string
 * @param sep separator override
 * @attribution : http://www.greywyvern.com/?post=258 (comments closed on blog :( )
 */
function parseCSV(s, sep) {
    // http://stackoverflow.com/questions/1155678/javascript-string-newline-character
var universalNewline = /\r\n|\r|\n/g;
var a = s.split(universalNewline);
for(var i in a) {
for(var f = a[i].split(sep = sep || ","), x = f.length - 1, tl; x >= 0; x--){
if (f[x].replace(/"\s+$/, '"').charAt(f[x].length - 1) == '"') {
                if ((tl = f[x].replace(/^\s+"/, '"')).length > 1 && tl.charAt(0) == '"') {
                    f[x] = f[x].replace(/^\s*"|"\s*$/g, '').replace(/""/g, '"');
} else if(x){
                    f.splice(x - 1, 2, [f[x - 1], f[x]].join(sep));
} else if{
f = f.shift().split(sep).concat(f);
 }else{ f[x].replace(/""/g, '"');
        } a[i] = f;
    }
return a;
}
 }
}