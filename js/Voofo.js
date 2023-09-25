const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const slideWidth = slides[0].clientWidth;
let currentIndex = 0;

function goToSlide(index) {
  if (index < 0) {
    index = slides.length - 1;
  } else if (index >= slides.length) {
    index = 0;
  }
  slider.style.transform = `translateX(-${index * slideWidth}px)`;
  currentIndex = index;
}

function prevSlide() {
  goToSlide(currentIndex - 1);
}

function nextSlide() {
  goToSlide(currentIndex + 1);
}

setInterval(nextSlide, 3000); // Change slide every 3 seconds
function myFunction(){
var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } 
  else {
    x.type = "password";
  }
}
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
function barbecue(){
  window.location.href="barbecue_page.html";
}
function voofologo(){
  window.location.href="thegridofitems.html";
}
var a= new Date();
const day=["Sunday","Monday","Tuesday","Thursday","Friday","Saturday"]
const month=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Nov","Dec"]
var b=a.getDate();
var c=a.getDay();
var d=a.getMonth();
var e=b.toString();
var f=day[c]+","+e+" "+month[d];
function abbbq()
{
  window.location.href="../php/absolutebarbecue.php";
}
function coalbbq()
{
  window.location.href="../php/coalbarbecue.php";
}
function smhbbq()
{
  window.location.href="../php/smhbbq.php";
}
function bbbqn()
{
  window.location.href="../php/bbqnation.php";
}
function ofn()
{
  window.location.href="ordernow.html";
}
function sf()
{
  window.location.href="searchfood.html";
}
function Top()
{
  window.location.href="top10foods.html"
}
function bron()
{
  window.location.href="bofn.html"
}
function cui()
{
  window.location.href="cuisine.html"
}
function cloud()
{
  window.location.href="cloudkitchen.html"
}
function cat()
{
  window.location.href="caterring.html"
}
const liItem= document.querySelectorAll('vnfilter li');
const imgItem=document.querySelectorAll('.t1imagesdiv div');
liItem.forEach(li=>{
  li.onclick=function(){
    liItem.forEach(li=>{
      li.className="";
    })
    li.className="active"
  }
  
  const value=li.textContent;
  button.style.display='none';
  if(button.getAttribute('data-filter'==value.tolowerCase())){
    button.style.display='block';
  }
});
function rc()
{
  window.location.href="rc.html";
}
function slc()
{
  window.location.href="slc.html";
}
function sah()
{
  window.location.href="sange.html";
}
function twh()
{
  window.location.href="twb.html";
}
function os(){
  window.location.href="os.html"
}
function fa(){
  window.location.href="fa.html"
}
function grid(){
  window.location.href="statethroughgrid.html"
}
function map(){
  window.location.href="test.html"
}
function papi(){
  window.location.href="pannerpizza.html"
}
function chpi(){
  window.location.href="chickenpizza.html"
}
function pawr(){
  window.location.href="pannerwrap.html"
}
function egwr(){
  window.location.href="egwr.html"
}
function dosa(){
  window.location.href="dosa.html"
}
function chlo(){
  window.location.href="chickenlolipop.html"
}
function idli(){
  window.location.href="idli.html"
}
function chbi(){
  window.location.href="chbi.html"
}
function tn(){
  window.location.href="tamilnadu.html"
}
function ic(){
  window.location.href="indianc.html"
}
function ppbm(){
  window.location.href="pulkapa.html"
}
function dosa1(){
  window.location.href="dosa1.html"
}
function chlo1(){
  window.location.href="chickenlolipop1.html"
}
function idli1(){
  window.location.href="idli1.html"
}
function chbi1(){
  window.location.href="chbi1.html"
}
function dosa2(){
  window.location.href="dosa2.html"
}
function chlo2(){
  window.location.href="chickenlolipop2.html"
}
function idli2(){
  window.location.href="idli2.html"
}
function chbi2(){
  window.location.href="chbi2.html"
}
function dosa3(){
  window.location.href="dosa3.html"
}
function idli3(){
  window.location.href="idli3.html"
}
function chlo3(){
  window.location.href="chickenlolipop3.html"
}
function chbi3(){
  window.location.href="chbi3.html"
}
function back1(){
  window.location.href="top10foods.html"
}
function back2(){
  window.location.href="../html/barbecue_page.html"
}
function back3(){
  window.location.href="statethroughgrid.html"
}
function back4(){
  window.location.href="bofn.html"
}
function back5(){
  window.location.href="test.html"
}
function back6(){
  window.location.href="tamilnadu2.html"
}
function back7(){
  window.location.href="tamilnadu.html"
}
function back8(){
  window.location.href="cuisine.html"
}
function back9(){
  window.location.href="indianc.html"
}
function back10(){
  window.location.href="cloudkitchen.html"
}
function back11(){
  window.location.href="os.html"
}
function back12(){
  window.location.href="fa.html"
}
function back13(){
  window.location.href="caterring.html"
}
function back14(){
  window.location.href="ordernow.html"
}
function back15(){
  window.location.href="sange.html"
}
function back16(){
  window.location.href="twb.html"
}
function voofologo1(){
  window.location.href="../html/thegridofitems.html";
}