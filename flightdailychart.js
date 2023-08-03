var columns, columns1, columns2, all4arr,  headingarr, finalarr=[];
<p id=
"publishchart"></p> columns=["customername", "genders", "Passports", "occupation", "Baby_Wt", "Babies", "Meals"];
customerstore[i].reduce(function(result, field, index){
result[columns[field]] == field;
return result;
}, {});
console.log(result); columns1=["Booking_Seats", "Flight_Dates", "Flight_Nos", "Location", "Air_Amount", "Luggage_Weight"];
storedat[i].reduce(function(results, indexes, fields){
results[column1[indexes]] == fields;
return results;
}, {});
console.log(results);
all4arr= totaldaily[i].concat(bookstore[i], tktstore[i], tkttokstore[i]); 
columns2=["Daily_Sales", "BookingDt", "TicketNo", "TicketNo_Token"];
all4arr.reduce(function(result1, field1, index1){
result1[columns2[index1]] == field1;
return result1;
}, {});
console.log(result1)
headingarr= columns.concat(...columns1, ...columns2);
finalarr[i]= result.concat(results, result1);

document.getElement ById("publishchart").innerHTML+= "Daily Chart Booked List"+ "<hr>"+headingarr+"<hr>"+"<br>"+finalarr[i];