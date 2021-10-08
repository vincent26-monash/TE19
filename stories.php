<?php
/*
Template Name: Stories for Kids
 */

get_header();?>

<style type="text/css">
	.slide{
-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;  
  border:solid 1em #000;
  background:#fff;
  cursor: pointer;
  height:auto;
}

.slide table {
width:100%;
height:100%;
  margin:0;
  overflow:auto;
}

.slide td {
  height:100%;
   vertical-align:middle;
}
.slide div {
 max-width:100%;
 margin:auto;
}

img {max-width:100%; height:auto;
border:none; //max-height:25%;}

button, html input[type="button"], input[type="reset"], input[type="submit"]{border: 5px solid #fe6601; padding: 0;}

h1 {
font-weight:normal;
font-size:3.8em;
font-size:5vw;
text-align:center;
}
p { font-size:1.7em; font-size:2.25vw; line-height:1.4; margin:.2em auto;}

.cover{background: #f2eee2;}

.p1{background: #eef0fd;}
.p2{background: url(http://www.eznetu.com/happy-giant.png) no-repeat bottom #9cddee; 
  background-size:auto 50%; 
} 
.p3{background:  #f3c36f;
}
.p4{background: #def;}
.p5{background: #123; color:#ccc;}
.p6 {background:#800; color:#ffe;}
.p7 { background:url(http://www.eznetu.com/beanstalk-rough.png) right bottom no-repeat #59c;
  background-size:auto 100%; 
color:#cfa;
}
.p8 {background:#222; color:#bbb;}
.p9 {background:#ccc; color:#333;}
.p10 {cursor:default;}

.button {
  display:inline-block;
  background:black;
  color:white;
  padding:.75em;
  border-radius:6px;
  cursor:pointer;
  transition: .25s ease-out;
}
.button:hover {
  background:#c11; 
}

.mfp-close-btn-in .mfp-close{color: white}

.floating {
  border:solid transparent;
animation: floating 5s ease-in-out infinite;
}

@keyframes floating {
  50% {transform: translateY(9px);}
}

.white-popup {
	 position: relative;
	 background: #27263c;
	 padding: 0% 3%;
	 width: 100%;
	 max-width: 100%;
	 margin: 0 auto;
}

 .mfp-newspaper .mfp-with-anim {
	 opacity: 0;
	 -webkit-transition: all 0.2s ease-in-out;
	 transition: all 0.5s;
	 transform: scale(0) rotate(500deg);
}
 .mfp-newspaper.mfp-bg {
	 opacity: 0;
	 transition: all 0.5s;
}
 .mfp-newspaper.mfp-ready .mfp-with-anim {
	 opacity: 1;
	 transform: scale(1) rotate(0deg);
}
 .mfp-newspaper.mfp-ready.mfp-bg {
	 opacity: 0.8;
}

</style>

<section>
	<div class="container pad0all">
		<img src="https://tenderminds.live/wp-content/uploads/2021/09/Storiesbanner.jpg" class="h600px" alt="Homepage banner" width="100%">
		<!--<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12" style="height: 700px;background: black;">
				<p style="color:white; font-weight:700" class="aven-book">BANNER</p>
			</div>
		</div>-->
		<p class="centertext tacenter textforbluebannertext">Read Stories!</p>
	</div>
</section>

<section class="ptb2" style="padding-bottom:8%">
<section>
	<div class="container">
		<p class="pforvideos wow fadeInLeft"><u>EXCITED TO READ SOME STORIES?</u></p>
	</div>
</section>

<section style="padding-bottom:5%;">
	<div class="container">
		<p style="padding: 2% 0% 2% 0%; text-align: center; background: #fe6601; color: white;" class="archfont">For Kids 5 - 7</p>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
				<button id = "story1" class="firstu">
					<img src="https://tenderminds.live/wp-content/uploads/2021/09/Thumbnail1.jpg" style="cursor: pointer;">
				</button>

				<div id="popup" class="white-popup mfp-with-anim mfp-hide">
				  <div class="cover slide">
				  <table><td><div>
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Cover.jpg" width="100%" height="auto">
				    </div></td></table>
				</div>
			  
				<div class="p1 slide">
				<table><td><div>
				   
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page1.jpg" width="100%" height="auto">
				    
				</div></td></table>
				</div>
			  
				<div class="p2 slide">
				    <table><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page2.jpg" width="100%" height="auto">
				    
				    </div></td></table>
				</div>
			  
			  
				<div class="p3 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page3.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="p4 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page4.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="p5 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page5.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="p6 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page6.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="p7 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page7.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="p8 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page8.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			     <div class="p9 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page9.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			    <div class="p10 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page10.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="p11 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page11.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="p12 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page12.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="p13 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page13.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="p14 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Page14.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
			<button id = "story2" class="secondu">
					<img src="https://tenderminds.live/wp-content/uploads/2021/09/Antcover.png" style="cursor: pointer;">
				</button>

				<div id="popup1" class="white-popup mfp-with-anim mfp-hide">
				  <div class="cover slide">
				  <table><td><div>
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant1.jpg" width="100%" height="auto">
				    </div></td></table>
				</div>
			  
				<div class="pp1 slide">
				<table><td><div>
				   
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant2.jpg" width="100%" height="auto">
				    
				</div></td></table>
				</div>
			  
				<div class="pp2 slide">
				    <table><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant3.jpg" width="100%" height="auto">
				    
				    </div></td></table>
				</div>
			  
			  
				<div class="pp3 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant4.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="pp4 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant5.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="pp5 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant6.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="pp6 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant7.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="pp7 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant8.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="pp8 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant9.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			     <div class="pp9 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant10.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			    <div class="pp10 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant11.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="pp11 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant12.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="pp12 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant13.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="pp13 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant14.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="pp14 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/ant15.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
			<button id = "story3" class="thirdu">
					<img src="https://tenderminds.live/wp-content/uploads/2021/09/chothumb.jpg" style="cursor: pointer;">
				</button>

				<div id="popup2" class="white-popup mfp-with-anim mfp-hide">
				  <div class="cover slide">
				  <table><td><div>
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/chocover.jpg" width="100%" height="auto">
				    </div></td></table>
				</div>
			  
				<div class="ppp1 slide">
				<table><td><div>
				   
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho1.jpg" width="100%" height="auto">
				    
				</div></td></table>
				</div>
			  
				<div class="ppp2 slide">
				    <table><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho2.jpg" width="100%" height="auto">
				    
				    </div></td></table>
				</div>
			  
			  
				<div class="ppp3 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho3.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="p4 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho4.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="ppp5 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho5.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="ppp6 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho6.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="ppp7 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho7.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="ppp8 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho8.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			     <div class="ppp9 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho9.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			    <div class="ppp10 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho10.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="ppp11 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho11.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="ppp12 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho12.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="ppp13 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho13.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="ppp14 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho14.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				<div class="ppp15 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/cho15.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			</div>
		</div>
	</div>

<p id="error"></p>

</div>
</section>

<section style="padding-bottom:5%; padding-top: 5%;">
	<div class="container">
		<p style="padding: 2% 0% 2% 0%; text-align: center; background: #fe6601; color: white;" class="archfont">For Kids 7 - 10</p>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
				<button id = "story4" class="fourthu">
					<img src="https://tenderminds.live/wp-content/uploads/2021/09/divThumb.jpg" style="cursor: pointer;">
				</button>

				<div id="popup3" class="white-popup mfp-with-anim mfp-hide">
				  <div class="cover slide">
				  <table><td><div>
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/divcover.jpg" width="100%" height="auto">
				    </div></td></table>
				</div>
			  
				<div class="h1 slide">
				<table><td><div>
				   
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div1.jpg" width="100%" height="auto">
				    
				</div></td></table>
				</div>
			  
				<div class="h2 slide">
				    <table><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div2.jpg" width="100%" height="auto">
				    
				    </div></td></table>
				</div>
			  
			  
				<div class="h3 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div3.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="h4 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div4.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="h5 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div5.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="h6 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div6.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="h7 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div7.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="h8 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div8.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			     <div class="h9 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div9.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			    <div class="h10 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div10.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="h11 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div11.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="h12 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/div12.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
			<button id = "story5" class="fifthu">
					<img src="https://tenderminds.live/wp-content/uploads/2021/09/noThumb.jpg" style="cursor: pointer;">
				</button>

				<div id="popup4" class="white-popup mfp-with-anim mfp-hide">
				  <div class="cover slide">
				  <table><td><div>
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/Coverno.jpg" width="100%" height="auto">
				    </div></td></table>
				</div>
			  
				<div class="hh1 slide">
				<table><td><div>
				   
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/1no.jpg" width="100%" height="auto">
				    
				</div></td></table>
				</div>
			  
				<div class="hh2 slide">
				    <table><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/2no.jpg" width="100%" height="auto">
				    
				    </div></td></table>
				</div>
			  
			  
				<div class="hh3 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/3no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="hh4 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/4no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="hh5 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/5no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="hh6 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/6no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="hh7 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/7no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="hh8 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/8no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			     <div class="hh9 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/9no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			    <div class="hh10 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/10no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="hh11 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/11no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="hh12 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/12no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="hh13 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/13no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="hh14 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/14no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hh15 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/15no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hh16 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/16no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hh17 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/17no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hh18 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/18no.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
			<button id = "story6" class="sixthu">
					<img src="https://tenderminds.live/wp-content/uploads/2021/09/hthumbnail.jpg" style="cursor: pointer;">
				</button>

				<div id="popup5" class="white-popup mfp-with-anim mfp-hide">
				  <div class="cover slide">
				  <table><td><div>
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/hcover.jpg" width="100%" height="auto">
				    </div></td></table>
				</div>
			  
				<div class="hhh1 slide">
				<table><td><div>
				   
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h1.jpg" width="100%" height="auto">
				    
				</div></td></table>
				</div>
			  
				<div class="hhh2 slide">
				    <table><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h2.jpg" width="100%" height="auto">
				    
				    </div></td></table>
				</div>
			  
			  
				<div class="hhh3 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h3.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="hhh4 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h4.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="hhh5 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h5.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="hhh6 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h6.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
				<div class="hhh7 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h7.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			    <div class="hhh8 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h8.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			     <div class="hhh9 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h9.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			  
			  
			    <div class="hhh10 slide"><table><tr><td><div>
			    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h10.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="hhh11 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h11.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="hhh12 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h12.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="hhh13 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h13.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>

				<div class="hhh14 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h14.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hhh15 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h15.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hhh16 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h16.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hhh17 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h17.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hhh18 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h18.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hhh19 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h19.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hhh20 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h20.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
				
				<div class="hhh21 slide"><table><tr><td><div>
				    
				  <img src="https://tenderminds.live/wp-content/uploads/2021/09/h21.jpg" width="100%" height="auto">
				    
				  </div></td></tr></table>
				</div>
			</div>
		</div>
	</div>

<p id="error"></p>

</div>
</section>

</section>

<script type="text/javascript">

function openPopup(){
  $.magnificPopup.open({
    items: {
      src: '#popup',
    }//, 
   // mainClass: 'mfp-newspaper'
  });
  // $("story1").prop("disabled", false);
  // $("story2").prop("disabled", false);
}

function openPopup1(){
  $.magnificPopup.open({
    items: {
      src: '#popup1',
    }//, 
    //mainClass: 'mfp-newspaper'
  });
  // $("story1").prop("disabled", false);
  // $("story2").prop("disabled", false);
}

function openPopup2(){
  $.magnificPopup.open({
    items: {
      src: '#popup2',
    }//, 
    //mainClass: 'mfp-newspaper'
  });
  // $("story1").prop("disabled", false);
  // $("story2").prop("disabled", false);
}

function openPopup3(){
  $.magnificPopup.open({
    items: {
      src: '#popup3',
    }//, 
    //mainClass: 'mfp-newspaper'
  });
  // $("story1").prop("disabled", false);
  // $("story2").prop("disabled", false);
}

function openPopup4(){
  $.magnificPopup.open({
    items: {
      src: '#popup4',
    }//, 
    //mainClass: 'mfp-newspaper'
  });
  // $("story1").prop("disabled", false);
  // $("story2").prop("disabled", false);
}

function openPopup5(){
  $.magnificPopup.open({
    items: {
      src: '#popup5',
    }//, 
    //mainClass: 'mfp-newspaper'
  });
  // $("story1").prop("disabled", false);
  // $("story2").prop("disabled", false);
}

$(".firstu").on("click", function(){
  setTimeout(openPopup, 1000);
  //$(this).prop("disabled", true);
});

$(".secondu").on("click", function(){
  setTimeout(openPopup1, 1000);
  //$(this).prop("disabled", true);
});

$(".thirdu").on("click", function(){
  setTimeout(openPopup2, 1000);
  //$(this).prop("disabled", true);
});

$(".fourthu").on("click", function(){
  setTimeout(openPopup3, 1000);
  //$(this).prop("disabled", true);
});

$(".fifthu").on("click", function(){
  setTimeout(openPopup4, 1000);
  //$(this).prop("disabled", true);
});

$(".sixthu").on("click", function(){
  setTimeout(openPopup5, 1000);
  //$(this).prop("disabled", true);
});
	/*$(function() {
 $('.slide').css({
   'height': (($(window).height()) -40)
  });
});*/

/*$(function(){
  setHeight(); 
});

$(window).resize(function() {
  setHeight(); 
});

function setHeight() {
  var Height = $(window).height();
  $('.slide').css('height', Height);
  
}
*/

  
//function goToByScroll(id){      $('html,body').animate({
//  scrollTop: $("."+id).offset().top +0
//  },400);
//}
</script>

</div>
</div>
</div>
<?php get_footer();