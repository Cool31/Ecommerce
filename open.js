var vs = require('fs');

vs.open('datas.txt', 'w', function (err, file){
 if (err) throw err;
console.log('saved');
});
//ckeck customer name variable via formdata
vs.writeFile('datas.txt', formid, formsub, totalairfare, luggages, tktfare1, ticket, taxes, clas,  function (err){
 if (err) throw err;
console.log('saved');
});
