include "flightdailychart.js";
var result1= bookedflights[i].filter(function((obj)=>{
var flag=false;
Object.values(obj).forEach((val)=>{
if(String(val).indexOf(datsz[i]) >-1){
flag=true;
return;
}
}
});
if(flag) return obj;
});