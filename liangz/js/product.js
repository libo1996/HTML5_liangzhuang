function getRTime(){ 
var EndTime= new Date('2017/08/12 10:30:00'); //截止时间 
var NowTime = new Date(); 
var t =EndTime.getTime() - NowTime.getTime(); 
/*var d=Math.floor(t/1000/60/60/24); 
t-=d*(1000*60*60*24); 
var h=Math.floor(t/1000/60/60); 
t-=h*60*60*1000; 
var m=Math.floor(t/1000/60); 
t-=m*60*1000; 
var s=Math.floor(t/1000);*/
 
var d=Math.floor(t/1000/60/60/24); 
var h=Math.floor(t/1000/60/60%24); 
var m=Math.floor(t/1000/60%60); 
var s=Math.floor(t/1000%60); 
 
document.getElementById("t_d").innerHTML = d + "天"; 
document.getElementById("t_h").innerHTML = h + "时"; 
document.getElementById("t_m").innerHTML = m + "分"; 
document.getElementById("t_s").innerHTML = s + "秒"; 
} 
setInterval(getRTime,1000); 
function getRTime1(){ 
var EndTime= new Date('2017/08/10 10:45:00'); //截止时间 
var NowTime = new Date(); 
var t =EndTime.getTime() - NowTime.getTime(); 
/*var d=Math.floor(t/1000/60/60/24); 
t-=d*(1000*60*60*24); 
var h=Math.floor(t/1000/60/60); 
t-=h*60*60*1000; 
var m=Math.floor(t/1000/60); 
t-=m*60*1000; 
var s=Math.floor(t/1000);*/
 
var d=Math.floor(t/1000/60/60/24); 
var h=Math.floor(t/1000/60/60%24); 
var m=Math.floor(t/1000/60%60); 
var s=Math.floor(t/1000%60); 
 
document.getElementById("t_d1").innerHTML = d + "天"; 
document.getElementById("t_h1").innerHTML = h + "时"; 
document.getElementById("t_m1").innerHTML = m + "分"; 
document.getElementById("t_s1").innerHTML = s + "秒"; 
} 
setInterval(getRTime1,1000); 
function getRTime2(){ 
var EndTime= new Date('2017/08/08 10:20:00'); //截止时间 
var NowTime = new Date(); 
var t =EndTime.getTime() - NowTime.getTime(); 
/*var d=Math.floor(t/1000/60/60/24); 
t-=d*(1000*60*60*24); 
var h=Math.floor(t/1000/60/60); 
t-=h*60*60*1000; 
var m=Math.floor(t/1000/60); 
t-=m*60*1000; 
var s=Math.floor(t/1000);*/
 
var d=Math.floor(t/1000/60/60/24); 
var h=Math.floor(t/1000/60/60%24); 
var m=Math.floor(t/1000/60%60); 
var s=Math.floor(t/1000%60); 
 
document.getElementById("t_d2").innerHTML = d + "天"; 
document.getElementById("t_h2").innerHTML = h + "时"; 
document.getElementById("t_m2").innerHTML = m + "分"; 
document.getElementById("t_s2").innerHTML = s + "秒"; 
} 
setInterval(getRTime2,1000); 
function getRTime3(){ 
var EndTime= new Date('2017/08/08 10:50:00'); //截止时间 
var NowTime = new Date(); 
var t =EndTime.getTime() - NowTime.getTime(); 
/*var d=Math.floor(t/1000/60/60/24); 
t-=d*(1000*60*60*24); 
var h=Math.floor(t/1000/60/60); 
t-=h*60*60*1000; 
var m=Math.floor(t/1000/60); 
t-=m*60*1000; 
var s=Math.floor(t/1000);*/
 
var d=Math.floor(t/1000/60/60/24); 
var h=Math.floor(t/1000/60/60%24); 
var m=Math.floor(t/1000/60%60); 
var s=Math.floor(t/1000%60); 
 
document.getElementById("t_d3").innerHTML = d + "天"; 
document.getElementById("t_h3").innerHTML = h + "时"; 
document.getElementById("t_m3").innerHTML = m + "分"; 
document.getElementById("t_s3").innerHTML = s + "秒"; 
} 
setInterval(getRTime3,1000); 
