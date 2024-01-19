@extends('layouts.app')

<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);
* {
box-sizing: inherit;
-webkit-transition-property: all;
        transition-property: all;
-webkit-transition-duration: .6s;
        transition-duration: .6s;
-webkit-transition-timing-function: ease;
        transition-timing-function: ease;
}

html,
body {
box-sizing: border-box;
height: 100%;
width: 100%;
overflow-x: hidden;

}
/* Custom Scrollbar */

::-webkit-scrollbar {
width: 8px;
}

::-webkit-scrollbar-track {
background: #0a0707;
}

::-webkit-scrollbar-thumb {
background: #150c0f;
}

::-webkit-scrollbar-thumb:hover {
background: #080607;
}
body {
background: #110c0d ;
font-family: 'Roboto', sans-serif;
font-weight: 400;
}

.buttons {
display: table;
height: 100%;
width: 100%;
margin-left: auto;
   margin-right: auto ;
}

.container {
display: table-cell;
padding: 1em;
text-align: center;
vertical-align: middle;
}

h1 {
color: #fff;
font-size: 1.25em;
font-weight: 900;
margin-top: 80px;
}
@media (min-width: 450px) {
h1 {
  font-size: 1.75em;
}
}
@media (min-width: 760px) {
h1 {
  font-size: 3.25em;
}
}
@media (min-width: 900px) {
h1 {
  font-size: 5.25em;
}
}



.btn {
color: #070102;
cursor: pointer;
display: block;
font-size: 16px;
font-weight: 400;
line-height: 45px;
margin-top: 35px;
max-width: 160px;
position: relative;
 margin-left: auto;
   margin-right: auto ;
text-decoration: none;
text-transform: uppercase;
    

width: 100%;
}
@media (min-width: 400px) {
.btn {
  display: inline-block;
  margin-right: 2.5em;
}
.btn:nth-of-type(even) {
  margin-right: 0;
}
}
@media (min-width: 600px) {
.btn:nth-of-type(even) {
  margin-right: 2.5em;
}
.btn:nth-of-type(5) {
  margin-right: 0;
}
}
.btn:hover {
text-decoration: none;
}

.btn-1 {
background: #fff  ;
font-weight: 100;
}
.btn-1 svg {
height: 45px;
left: 0;
position: absolute;
top: 0;
width: 100%;
}
.btn-1 rect {
fill: none;
stroke: #fff;
stroke-width: 2;
stroke-dasharray: 422, 0;
}

.btn-1:hover {
background: rgba(225, 51, 45, 0);
font-weight: 900;
letter-spacing: 1px;
color: #fff;
}
.btn-1:hover rect {
stroke-width: 5;
stroke-dasharray: 15, 310;
stroke-dashoffset: 48;
-webkit-transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);
        transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);
}

.load {
width: 100px;
height: 100px;
/** height is required as absolute value **/
background-color: #3498db;
border-radius: 100px;
margin-left: auto;
   margin-right: auto ;
   margin-top: 100px;
position:relative;
animation: pulse 2000ms linear infinite;
-webkit-animation: pulse 2000ms linear infinite;
-moz-animation: pulse 2000ms linear infinite;
}

.load i{
position:absolute;
top:28px;
left:24%;
color:white;
text-shadow:-1px -1px #333;
}

.load:after,
.load:before {
display: inline-block;
margin: auto;
position: absolute;
content: "";
width: 100px;
height: 100px;
border-radius: 100px;
background-color: #3498db;
}

.load:after {
z-index: -100;
-webkit-animation: outer-ripple 2000ms linear infinite;
-moz-animation: outer-ripple 2000ms linear infinite;
animation: outer-ripple 2000ms linear infinite;
}

.load:before {
z-index: -200;
-webkit-animation: inner-ripple 2000ms linear infinite;
-moz-animation: inner-ripple 2000ms linear infinite;
animation: inner-ripple 2000ms linear infinite;
}
/* outer ripple */


@keyframes pulse{
0% {
  transform: scale(0.8);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
10% {
  transform: scale(1.1);
  filter: alpha(opacity=1);
  opacity: 1;
}
20% {
  transform: scale(0.9);
  filter: alpha(opacity=1);
  opacity: 1;
}
100% {
  transform: scale(0.8);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
}

@-moz-keyframes pulse{
0% {
  transform: scale(0.8);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
10% {
  transform: scale(1.1);
  filter: alpha(opacity=1);
  opacity: 1;
}
20% {
  transform: scale(0.9);
  filter: alpha(opacity=1);
  opacity: 1;
}
100% {
  transform: scale(0.8);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
}

@-webkit-keyframes pulse{
0% {
  transform: scale(0.8);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
10% {
  transform: scale(1.1);
  filter: alpha(opacity=1);
  opacity: 1;
}
20% {
  transform: scale(0.9);
  filter: alpha(opacity=1);
  opacity: 1;
}
100% {
  transform: scale(0.8);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
}


@keyframes outer-ripple {
0% {
  transform: scale(1);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
80% {
  transform: scale(3.5);
  filter: alpha(opacity=0);
  opacity: 0;
}
100% {
  transform: scale(3.5);
  filter: alpha(opacity=0);
  opacity: 0;
}
}

@-webkit-keyframes outer-ripple {
0% {
  transform: scale(1);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
80% {
  transform: scale(3.5);
  filter: alpha(opacity=0);
  opacity: 0;
}
100% {
  transform: scale(3.5);
  filter: alpha(opacity=0);
  opacity: 0;
}
}

@-moz-keyframes outer-ripple {
0% {
  transform: scale(1);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
80% {
  transform: scale(3.5);
  filter: alpha(opacity=0);
  opacity: 0;
}
100% {
  transform: scale(3.5);
  filter: alpha(opacity=0);
  opacity: 0;
}
}
/* inner ripple */

@keyframes inner-ripple {
0% {
  transform: scale(1);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
30% {
  transform: scale(1);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
100% {
  transform: scale(2.5);
  filter: alpha(opacity=0);
  opacity: 0;
}
}

@-webkit-keyframes inner-ripple {
0% {
  transform: scale(1);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
30% {
  transform: scale(1);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
100% {
  transform: scale(2.5);
  filter: alpha(opacity=0);
  opacity: 0;
}
}

@-moz-keyframes inner-ripple {
0% {
  transform: scale(1);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
30% {
  transform: scale(1);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
100% {
  transform: scale(2.5);
  filter: alpha(opacity=0);
  opacity: 0;
}
}
#wrapper {
position: absolute;
width: 100%;
height: 100px;
padding: 0;
  margin-left: auto;
   margin-right: auto ;
text-align: center;
top: 90%;
margin-top: -50px;
}

.bt_wrap {
display: inline-block;
width: auto;
height: auto;
background: #ecf3ed;
width: 100px;
height: 100px;
cursor: pointer;
perspective: 200px;
transition: background 0.2s ease-out;

}

.box {
position: absolute;
perspective-origin: 50px 50px;
transform-origin: 50px 50px;
transition: transform 0.2s ease-out;
transform-style: preserve-3d;
}

.icon,
.icon2 {
position: absolute;
top: 0;
left: 20px;
margin-top: 20px;
background: #3498db;
color: #ffffff;
width: 60px;
height: 60px;
font-size: 2em;
line-height: 60px;
transition: background 0.2s ease-out;
transform: translate3d(0px, 0px, 30px) rotateY(0deg);
}

.icon2 {
background: #464646;
transform: translate3d(29px, 0px, 0px) rotateY(90deg);
transition: background 0.2s ease-out;
}

.bt_wrap:hover {
background: #3498db;
}

.bt_wrap:hover .icon {
background: #3498db;
}

.bt_wrap:hover .icon2 {
background: #3498db;
}

.bt_wrap:hover .box {
transform: rotateY(-90deg);
}
</style>
@section('content')












      <div class="load">
    <i class="fa fa-heartbeat fa-3x"></i>
  </div>


  <Center>  <h1>optix eye care</h1></Center>
  
</section>
   </center>
      <div id="wrapper">
<div class="bt_wrap">
  <a href="\contacted">
        <div class="box">
      
          <i class="icon fa fa-phone" ></i>
          <i class="icon2 fa fa-phone"></i>
        </div>
      </div>
      <div class="bt_wrap">
        <div class="box">
          <i class="icon fa fa-envelope"></i>
          <i class="icon2 fa fa-envelope"></i>
        </div>
      </div>
      <div class="bt_wrap">
        <div class="box">
          <i class="icon fa fa-twitter"></i>
          <i class="icon2 fa fa-twitter"></i>
          
        </div>
      </div>
    </div>
    @endsection