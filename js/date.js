var a= new Date();
const day=["Sunday","Monday","Tuesday","Thursday","Friday","Saturday"]
const month=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Nov","Dec"]
var b=a.getDate();
var c=a.getDay();
var d=a.getMonth();
var e=b.toString();
var f=day[c]+","+e+" "+month[d];
document.write(f);