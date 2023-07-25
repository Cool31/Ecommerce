//double validation of datas
<a href= "https://www.github.com/coolvivel/main/output.php"></a>

<? php 
echo console.log(htmlentities($_SERVER['PHP_SELF'])); 

echo console.log(htmlspecialchars($_SERVER(['PHP_SELF'])); 
?>

if(window.indexedDB){
console.log("ok");
}else{
console.log("DB not available");
}

var db= null, dbs= window.indexedDB.open("grocery.txt",2);
if(dbs.onsuccess){
db= dbs.result;
 storinggroceries(db);
}

dbs.onupgradeneeded= function(event){
db= dbs.result;
if(event.oldVersion < 1){
var datas= db.createObjectStore("groceries", {autoIncrement:true});
}

if(event.oldVersion < 2){
var datas= dbs.transaction.objectStore("groceries");
datas.createIndex("by_name", "name");
}
if(db.onerror){
console.error("unsuccessful db request");   
}

//add data to db
var transaction= db.transaction(["groceries"], "readwrite");
if(transaction.onsuccess){
console.log("successfully  created.");
}
if(transaction.onerror){
console.log('no transaction', transaction.error);
}
var store= transaction.objectStore("groceries");
dbs= store.add({
key: 'totaltopay',
name:'creditcardno',
contents:['orddt', 'currency12', 'ordno', 'txt']
});
dbs.forEach(e=>store.add(e));
transaction.oncomplete= function(){
console.log("all transactions done");
}
db.transaction.forEach('groceries').objectStore('groceries').get(key,name, contents).onsuccess(e=>console.log(e.target.result);
); 
}
