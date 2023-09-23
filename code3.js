/*var f_n ="nosiba";
f_n="nosa";
var f_n="nosiba";
var age =25;
var is_married = true;
var my_arr =[1,2,3,'nosiba'];
var course = {
    name:'laravel',
    std_count:18
}
let a=45;
a=10;
//let a = 6; error

var> allow update
let> allow update without repeat declaration
const>dont allow update and repeat declaration
 
function sum(no1,no2){
    var result =no1+no2;
    return result;

}
var result =sum(10,15);
console.log(result);
for(var i=0;i<my_arr.length;++i){
    console.log(my_arr[i]);

}
var par =document.querySelector('.test');
par.innerHTML ='java';
par.style.color = "red";
par.style.fontsize ="50px";
par.className="test1";
par.classList.add('test1');

var btnsend = document.querySelector('button');
btnsend.addEventListener('click',print);
function print(){
    console.log("hello")
}
btnsend.addEventListener('mousehover',print);
function print(){
    btnsend.style.color="red";
}
var divhtml =document.querySelector('div');
var par =document.createElement('p');
divhtml.appendChild(par);
par.innerHTML="larael";
par.style.color="red";
*/
var par = document.querySelector('p');
var plus = document.querySelector('.plus');
var minus = document.querySelector('.minus');
var reset = document.querySelector('.reset');


var no = 0;
var fontsize =16;

plus.addEventListener('click', pr);


function pr(){
  no++;
  fontsize++;
  par.innerHTML= no;
  par.style.fontSize = fontsize + "px";
}
minus.addEventListener('click',pri);
function pri(){
  no--;
  fontsize--;
  par.innerHTML=no;
  par.style.fontSize = fontsize + "px";
  
}
reset.addEventListener('click',prii);
function prii(){
    no=0;
    fontsize=16;
    par.innerHTML=no;
    par.style.fontSize = fontsize + "px";
}
/**
 * getelementbyid
 * getelementbytagname
 * getelementbyname --> input name 
 */