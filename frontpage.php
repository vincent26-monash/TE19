<?php
/*
Template Name: Home Page
 */

get_header();?>

<style type="text/css">

.btn {
  display: inline-block;
  padding: 10px 20px;
  border: 2px solid #00898E;
  border-radius: 10px;
  transition: background .3s;
}
.btn:hover {
  background: #00898E;
}
.popup {
  position: absolute;
  padding: 10px;
  max-width: 80%;
  height:70%;
  border-radius: 10px;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #27263c;
  color:white;
  visibility: hidden;
  opacity: 0;
  /* "delay" the visibility transition */
  -webkit-transition: opacity .5s, visibility 0s linear .5s;
  transition: opacity .5s, visibility 0s linear .5s;
  z-index: 1;
}
.popup:target {
  visibility: visible;
  opacity: 1;
  /* cancel visibility transition delay */
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
.popup-close {
  position: absolute;
  padding: 10px;
  max-width: 500px;
  border-radius: 10px;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: rgba(255,255,255,.9);
}
.popup .close {
  position: absolute;
  right: 5px;
  top: 5px;
  padding: 5px;
  color: white;
  transition: color .3s;
  font-size: 2em;
  line-height: .6em;
  font-weight: bold;
}
.popup .close:hover {
  color: #00E5EE;
}

.close-popup {
  background: rgba(0,0,0,.7);
  cursor: default;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  visibility: hidden;
  /* "delay" the visibility transition */
  -webkit-transition: opacity .5s, visibility 0s linear .5s;
  transition: opacity .5s, visibility 0s linear .5s;
}
.popup:target + .close-popup{  
  opacity: 1;
  visibility: visible;
  /* cancel visibility transition delay */
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
</style>

<section>
	<div class="container pad0all">
		<img src="https://tenderminds.live/wp-content/uploads/2021/08/home-blue2.jpg" class="h600px" alt="Homepage banner" width="100%">
		<!--<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6" style="height: 700px; background: black;">
				<p style="color:white; font-weight:700" class="aven-book">SECTION 1</p>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6" style="background: red;">
				<p style="color:white; font-weight:700" class="aven-book">SECTION 2</p>
			</div>
		</div>-->
		<!--<p class="centertext fs30mobile">Welcome to TenderMinds!</p>-->
		<!--<div class="centertext" style="padding: 3%; color: white; background: rgba(39, 38, 60, 0.8);">
		    <p style="text-align: center;">How are you feeling today?</p>
		    <p style="text-align: center;"><a href="#IamHappy" style="display:inline-grid; text-align:center;"><img src = "https://tenderminds.live/wp-content/uploads/2021/09/FeelingHappy-modified.png" style="width:80px; height:auto; border-radius: 50%; margin: 10px;" class="glowgreen"><span class="chila" style="text-shadow: none; color:white; font-size:15px">Happy</span></a><a href="#IamSad" style="display:inline-grid; text-align:center;"><img src = "https://tenderminds.live/wp-content/uploads/2021/09/FeelingSad-modified.png" style="width:80px; height:auto; border-radius: 50%; margin: 10px;" class="glowyellow"><span class="chila" style="text-shadow: none; color:white; font-size:15px">Sad</span></a><a href="#IneedHelp" style="display:inline-grid; text-align:center;"><img src="https://tenderminds.live/wp-content/uploads/2021/09/NeedHelp-modified.png" style="width:80px; height:auto; border-radius: 50%; margin: 10px;" class="glowred"><span class="chila" style="text-shadow: none; color:white; font-size:15px">Need Help!</span></a></p>
	    </div>-->
	    <div class="centertext" style="padding: 3%; color: white; background: rgba(39, 38, 60, 0.8);">
		<p style="text-align: center;" class="m10title padtophow4">How are you feeling today?</p>
		<p style="text-align: center; padding-top:2%">
			<a href="#IamHappy" class="btn" style="display:inline-grid; text-align:center;">
				<img src = "https://tenderminds.live/wp-content/uploads/2021/09/FeelingHappy-modified.png" style="width:80px; height:auto; border-radius: 50%; margin: 10px;" class="glowgreen"><span class="chila" style="text-shadow: none; color:white; font-size:15px">Happy</span>
			</a>
			<a href="#IamSad" class="btn" style="display:inline-grid; text-align:center;">
				<img src = "https://tenderminds.live/wp-content/uploads/2021/09/FeelingSad-modified.png" style="width:80px; height:auto; border-radius: 50%; margin: 10px;" class="glowyellow"><span class="chila" style="text-shadow: none; color:white; font-size:15px">Sad</span>
			</a>
			<a href="#INeedHelp" class="btn m5phow" style="display:inline-grid; text-align:center;">
				<img src="https://tenderminds.live/wp-content/uploads/2021/09/NeedHelp-modified.png" style="width:80px; height:auto; border-radius: 50%; margin: 10px;" class="glowred"><span class="chila" style="text-shadow: none; color:white; font-size:15px">Need Help!</span>
			</a>
		</p>
	</div>
	<div id="IamHappy" class="popup autoheight" style="width:100%">
		  <a href="#" class="close">&times;</a>
		  <p class="pforvideos" style="color:#fe6601 !important"><u>If you are feeling "HAPPY"!</u></p>
          <p class="chila fs12mobile tacenter">You are taking care of yourself and you are doing well. </p>
          <p class="chila fs12mobile tacenter">Please continue with that and share your happiness with  family and friends.
          </p>
	</div>
	<a href="#" class="close-popup"></a>
	<div id="IamSad" class="popup autoheight" style="width:100%">
		  <a href="#" class="close">&times;</a>
		  <p class="pforvideos" style="color:#fe6601 !important"><u>If you are feeling "SAD"!</u></p>
          <p class="chila fs12mobile tacenter">Sorry to hear you are sad.  We have stories, games, and videos here. </p>
          <p class="chila fs12mobile tacenter"><span style="font-family: 'Ultra', serif !important; color:#21c0f7">Read Stories:</span> <a href="https://tenderminds.live/stories" target="_blank">https://tenderminds.live/stories</a></p>
          <p class="chila fs12mobile tacenter"><span style="font-family: 'Ultra', serif !important; color:#21c0f7">Play Games:</span> <a href="https://tenderminds.live/games-for-kids" target="_blank">https://tenderminds.live/games-for-kids</a></p>
          <p class="chila fs12mobile tacenter"><span style="font-family: 'Ultra', serif !important; color:#21c0f7">Read Stories:</span> <a href="https://tenderminds.live/videos-for-kids" target="_blank">https://tenderminds.live/videos-for-kids</a></p>
          <p class="chila fs12mobile tacenter">They are your buddies to kick off the devil.
          </p>
	</div>
	<a href="#" class="close-popup"></a>
	<div id="INeedHelp" class="popup autoheight" style="width:100%">
		  <a href="#" class="close">&times;</a>
		  <p class="pforvideos" style="color:#fe6601 !important"><u>If you need "HELP"!</u></p>
        	    <p class="chila fs14mobile tacenter">
        	        <ul class="chila fs14mobile tacenter plt0phelp">
        	            <li class="chila fs12mobile tacenter"><span style="font-family: 'Ultra', serif !important; color:#21c0f7">GO OUTSIDE &
                            ENJOY NATURE - </span>Spending time outdoors is a great way to fresh yourself. 
                            Get reconnected with the wild, have fun with your family. Don't forget to maintain social distancing (6 feet) with people! You can go bike riding,  jogging, skateboarding and walking your dog. </li>
                        <li class="chila fs12mobile tacenter"><span style="font-family: 'Ultra', serif !important; color:#21c0f7">COMPUTER FUN - </span>You are not disconnected at home. Computer brings a new world to us within a second. You can learn a new language, listen to music and watch your favorite movies.
                            Is your popcorn ready?
                            Lets do it!</li>
                        <li class="chila fs12mobile tacenter"><span style="font-family: 'Ultra', serif !important; color:#21c0f7">VIDEO CHAT WITH
                        FRIENDS AND FAMILY - </span>Missing your friends and other family members? Don't worry, you can talk to them over mobile phone and  computer.  Simply call them using Facetime, WhatsApp or other video chat app, then you can see each other's face!
                        </li>
                        <li class="chila fs12mobile tacenter"><span style="font-family: 'Ultra', serif !important; color:#21c0f7">ENJOY INDOOR TIME 
                        & GET CREATIVE! - </span>It is not boring at home. You can read your favorite books, continue with your painting, challenge yourself with quiz and play with your guitar.  Do invite your family to play video games and chess with you if they are available. Lets take the monopoly tournament off the shelf!
                        </li>
                        </ul>
                    </p>
                    <p class="chila fs12mobile tacenter">They are your buddies to kick off the devil.
                    </p>
	</div>
	<a href="#" class="close-popup"></a>
	</div>
</section>

<!--<section class="homevideospad bggradient">
	<div class="container">
		<p class="pforvideos wow fadeInLeft"><u>About Us!</u></p>
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		    <div class="col-12 col-sm-12 col-md-10 col-lg-10">
		        <p class="chila fs14mobile wow fadeInDown fs20pxmainblock">The Covid Pandemic is having an ever-lasting effect on us as all round the world. The constant lockdowns and ever increasing Covid-safe rules have literally brought the whole world to their knees with constantly asking them to be indoors and avoid social gatherings. The kids have been constantly missing their curriculum and an interaction with their core buddies is now a dream they want to live. Parents on the other hand are constantly finding it difficult to keep their kids engaged with schools shut temporarily and restrictions on outdoor activities.  </p>
		        <p class="chila fs14mobile wow fadeInDown fs20pxmainblock">
		            To address this issue and come up with a solution, we the “Mindscape Invaders” have come up with “Tender Minds”, a website catering to kids belonging to age groups “5 to 10”, to keep the little ones engaged with a variety of games and music and interactive platforms for the kids to engage with their buddies. Apart from the kids, we give the parents an option to regularly monitor their kid’s mental health as it can get troublesome at times for the kids to handle these lockdowns. A “Parent’s Page” to understand their kid’s progress in terms of his usage and his daily well-being as well.  
		        </p>
		        <p class="chila fs14mobile wow fadeInDown fs20pxmainblock">
		            Hence, we bring to you an all-round website from learning to gaming to engaging to monitoring to consulting facilities to SOS functions.  
		        </p>
		        <p class="chila fs14mobile wow fadeInDown fs20pxmainblock" style="text-align:center">
		            Hence, we bring to you an all-round website from learning to gaming to engaging to monitoring to consulting facilities to SOS functions.  
		        </p>
		    </div>
		<div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		</div>
	</div>
</section>-->

<section class="homevideospad">
	<div class="container">
		<p class="pforvideos wow fadeInLeft"><u>What is Mental Health?</u></p>
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		    <div class="col-12 col-sm-12 col-md-10 col-lg-10">
		        <p class="chila fs14mobile wow fadeInDown fs20pxmainblock">Mental health is the overall wellness of how you think, regulate your feelings and behave. A mental illness, or mental health disorder, is defined as patterns or changes in thinking, feeling or behaving that cause distress or disrupt a person's ability to function.</p>
		        <p class="chila fs14mobile wow fadeInDown tacenter">Watch the video to know more.</p>
		        <div class="tacenter" style="width:100%">
		        <div class="arrow-container fordownbutora">
                    <div class="arrow-downn"></div>
                </div>
                </div>
		    </div>
		<div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-2 col-lg-2"></div>
			<div class="col-12 col-sm-12 col-md-8 col-lg-8">
			    
				<iframe class="h190pxmobile" width="100%" height="370" src="https://www.youtube.com/embed/nCrjevx3-Js" title="Mental Health" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-12 col-sm-12 col-md-2 col-lg-2"></div>
		</div>
	</div>
</section>
<section class="homevideospad bggradient">
	<div class="container">
		<p class="pforvideos wow fadeInLeft"><u>How can we be Healthy?</u></p>
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		    <div class="col-12 col-sm-12 col-md-10 col-lg-10">
		        <p class="chila fs14mobile wow fadeInDown fs20pxmainblock">Nutritious and healthy foods are the major contributors to the healthy physical and mental fitness of a child which improves focus and learning power. Good sleep and exercise also improve kid's overall health and well-being.</p>
		        <p class="chila fs14mobile wow fadeInDown tacenter">Watch the video to know more.</p>
		        <div class="tacenter" style="width:100%">
		        <div class="arrow-container fordownbutora">
                    <div class="arrow-downn"></div>
                </div>
                </div>
		    </div>
		<div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-2 col-lg-2"></div>
			<div class="col-12 col-sm-12 col-md-8 col-lg-8">
				<iframe class="h190pxmobile" width="100%" height="370" src="https://www.youtube.com/embed/dhpCdqOtuj0" title="Mental Health" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-12 col-sm-12 col-md-2 col-lg-2"></div>
		</div>
	</div>
</section>
<section class="homevideospad textcmob">
	<div class="container">
		<p class="pforvideos wow fadeInLeft"><u>Know more about Mental Health!</u></p>
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
		        <p class=""> <img src="https://tenderminds.live/wp-content/uploads/2021/08/New-Project1.png" alt="Question" width="80%" height="auto"> </p>
		    </div>
		    <div class="col-12 col-sm-12 col-md-5 col-lg-5 pdt9p">
		        <h4 class="archfont fweight700 wow fadeInRight fs25pointshead transinherit" style="padding-bottom:4%">
				    <u>6 main signs of Mental Illness!</u>
				</h4>
		        <ul>
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Easily getting annoyed or nervous.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Often appearing angry.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Putting blame on others.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Refusing to follow instructions.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Arguing and throwing temper tantrums.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Having difficulty in handling frustration.</li>
				    </ul>    
				
		    </div>
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		</div>
	</div>
</section>

<section class="homevideospad dhideformobile textcmob">
	<div class="container">
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		    <div class="col-12 col-sm-12 col-md-5 col-lg-5 pdt9p">
		        <h4 class="archfont fweight700 wow fadeInLeft fs25pointshead transinherit" style="padding-bottom:4%">
				    <u>6 tips to improve Mental Health!</u>
				</h4>
		        
				        <ul>
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Talk to elders about your feelings.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Keep active and exercise regularly.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Eat well.</li> 
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Sleep well.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Ask for help.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Keep doing something you are good at.
				        </li>
				        </ul>
				
		    </div>
		    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
		        <p class=""> <img class="flright" src="https://tenderminds.live/wp-content/uploads/2021/08/question2.png" alt="Question" width="80%" height="auto"> </p>
		    </div>
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		</div>
	</div>
</section>
<section class="homevideospad hideclientsdesktop textcmob">
	<div class="container">
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
		        <p class=""> <img class="flright" src="https://tenderminds.live/wp-content/uploads/2021/08/question2.png" alt="Question" width="80%" height="auto"> </p>
		    </div>
		    <div class="col-12 col-sm-12 col-md-5 col-lg-5 pdt9p">
		        <h4 class="archfont fweight700 wow fadeInLeft fs25pointshead transinherit" style="padding-bottom:4%">
				    <u>6 tips to improve Mental Health!</u>
				</h4>
		        
				        
				        <ul>
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Talk to elders about your feelings.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Keep active and exercise regularly.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Eat well.</li> 
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Sleep well.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Ask for help.</li>
				        
				        
				        <li class="chila fs14mobile wow fadeInDown fs20pxmainblock">Keep doing something you are good at.</li>
				        </ul>
				        
				
		    </div>
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		</div>
	</div>
</section>

<section class="homevideospad bggradient">
	<div class="container">
		<p class="pforvideos wow fadeInLeft"><u>Are you?</u></p>
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
		        <div class="backhomeorange">
		            <p class="padforsvgs ptsvgsec15 wow pulse">
		                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 389.7" fill="#000" style="width: 180px; height: 130px; background-color: rgba(0, 0, 0, 0); "><path d="M218.1 179.3c-.8-.9-1.6-1.7-2.6-2.5 0 0-4.1-3.9-16.3-7.4-12.9-3.7-16.3-3-16.3-3-.7 0-1.4.1-2.1.2 7.7 11 23.9 16.7 37.3 12.7z" fill="#f9b390"></path><path d="M98.8 357.8c-.9 1-1 2.6-.2 3.7l3.3 5.8c1.2 2 .8 4.6-.9 6.2-2 1.8-5.1 1.6-6.9-.4-.2-.3-.4-.5-.6-.8l-3.4-5.9c-3.4-6-2.8-11.3 4.7-17.2 10.8-8.5 25.2-15.4 25.2-15.4l-3.8 12.4c.1 0-14.2 7-17.4 11.6z" fill="#7a94a0"></path><ellipse transform="rotate(-36.621 99.846 375.31)" cx="99.9" cy="375.3" rx="9.2" ry="9.6" fill="#5a6070"></ellipse><ellipse transform="rotate(-36.611 101.693 373.184)" cx="101.7" cy="373.2" rx="6.8" ry="8.4" fill="#353e4c"></ellipse><path d="M127.5 339.7c2.4-1.2 3.4-4.2 2.1-6.6l-20-39c-1.2-2.4-4.2-3.4-6.6-2.1-2.4 1.2-3.4 4.2-2.1 6.6l20 39c1.3 2.4 4.2 3.4 6.6 2.1z" fill="#94b1bf"></path><path d="M113.4 338.8c-6.2 3.2-8.6 10.8-5.5 16.9l3.1 6c1.2 2.4 4.2 3.4 6.6 2.1 2.4-1.2 3.4-4.2 2.1-6.6l-3.1-6c-.7-1.4-.2-3 1.2-3.7l27.4-14c.4-3.9 1-7.8 1.5-11.8l-33.3 17.1z" fill="#94b1bf"></path><path d="M120.6 291.3l-28.3 14.5c-3.5 1.8-7.8.4-9.6-3.1l-3.6-7.1c-1.8-3.5-.4-7.8 3.1-9.6l29.6-15.1c2.8-1.4 6.2-.3 7.7 2.5l4.3 8.4c1.7 3.3.3 7.6-3.2 9.5z" fill="#7a94a0"></path><path d="M79.2 300.5l56.8-29.1c-2.6-5.4-5.6-10.5-9-15.4-6.4-9.3-36.2-72.7-36.2-72.7-3.9-7.6-9.2-14.4-24-10.8s-46.5 18.4-57.2 24.1c-7.9 4.2-13.1 12.8-6.8 23.8L43.6 289c6.6 13 22.6 18.1 35.6 11.5z" fill="#cc3e66"></path><path d="M162.3 257.9l-85.7 43.9-8.3-16.3 73.9-37.8c6.5-3.3 14.5-.7 17.9 5.8l2.2 4.4z" fill="#cc3e66"></path><path d="M54.3 286.8c1.3 2.6 4.4 3.6 7 2.3l12.4-6.4c4.9-2.5 11-.6 13.5 4.4l.3.6c1.9 3.7.4 8.2-3.3 10.1l-15.7 8c-9.7 5-21.6 1.1-26.6-8.6 0 0-37.8-73.8-40.8-79.8-5.4-10.7 9.2-17 14.4-6.5l38.8 75.9z" fill="#ff5c74"></path><ellipse transform="rotate(-31.362 116.683 361.537)" cx="116.7" cy="361.5" rx="9.2" ry="9.6" fill="#5a6070"></ellipse><ellipse transform="rotate(-31.461 117.999 357.734)" cx="118" cy="357.8" rx="6.8" ry="8.4" fill="#353e4c"></ellipse><path d="M286.5 246.1c1.9-2.4 0-3.5-.9-3.6 1.4-.4 2.4-1.7 2.4-3.1-.4-2.9-3.7-2.4-5.2-1.8-1.1.4-3.4.9-3.8.4 2.5-.5 4.7-2.2 5.6-4.6.4-.9.5-1.8.3-2.7-.2-.9-1-1.6-1.9-1.8-1.4-.1-2.4 1.1-3.5 2-.3.2-.6.5-.9.6-1.6 1-4.3.6-6.1.2-2.1-.4-6.9-3.6-3.4-5.7 1.3-.6 2.6-1 3.9-1.3 1.3-.4 2.6-1.4 2.7-2.8 0-1-.5-1.9-1.4-2.5-.8-.5-1.8-.8-2.8-.9-4.2-.3-8.3 1.2-11.3 4.1-1.1 1.3-2 2.6-2.7 4.1-10.4 1.1-21.1-6.7-24.4-10.6-2-2.4-3.5-5.3-4.3-8.3-6.2 2.9-12 6.4-18.1 9.5 4.8 10.8 18.1 26.3 42.7 26.3 2.7 0 5.4.7 7.7 2.1 10.4 6.3 23.2 3.1 25.4.4zm-100.147-75.901l4.73-17.988 25.435 6.688-4.73 17.988z" fill="#f9b390"></path><path d="M216.8 177.5c-1.4-1.1-2.9-2-4.4-2.8 0 0-.4 6.4-12.6 3.6-9.3-2.1-12.4-11.6-12.4-11.6-1.5-.3-3.1-.5-4.6-.4-5.4.3-20.4 4-29.4 29.2-9.3 25-8.7 47-9 62.1 1.9 2.2 5.7 5.9 5.3 8.2 15 8.3 31.4 8.6 51.3 10.9 1.2-5.6-4.1-44.4 11.7-63.1 1.7 2.9 4.1 5.2 6.4 8 5.3-5.8 4.5-12.6 10-18.2-2.6-9.1-5.8-20.4-12.3-25.9z" fill="#7bb71c"></path><path d="M196.4 192.5s-7-5.8-7.9-9c-.6-2.1 6.8 5.7 8.2 6.5s-.3 2.5-.3 2.5zm-13.9 18.7c-4.2-3.2-8.1-6.8-11.8-10.6-1.8-1.9.3 2.6 4.4 7.1s5.9 5.5 5.9 5.5l1.5-2z" fill="#599914"></path><path d="M230.1 91.6c-.6 26.7-18.6 48-40.2 47.5s-40.4-26.3-39.8-53 20.5-47.9 42.1-47.4 38.5 26.1 37.9 52.9z" fill="#641b01"></path><path d="M182.1 119.9c1.8 9.9-5.8 18.1-14.8 20s-17.7-3.4-19.5-13.3 4-19.4 12.9-21.2 19.5 4.7 21.4 14.5z" fill="#f9b390"></path><path d="M188.2 162.8c4 4.2 15.1 9.9 24.6 9.7l3.6-13.7-25.5-6.6-2.7 10.6z" fill="#ed8d6b"></path><path d="M256 54.2c-8.9-11.8-22.6-19.6-37.1-20h-.8v-.6s.2.3-3.5.4l-7.1-.2v.6h-.8c-14.5.7-30 8.6-38.6 20.6s-9.7 27-8.9 41.4c.6 10.9 2.7 23.1 3.3 33.9 6.3 24.8 36.6 38.4 57 38.3s39.6-6.4 43.4-39.2c.5-10.9 1.3-23.1 1.7-34 .6-14.3.2-29.3-8.6-41.2z" fill="#f9b390"></path><path d="M170.4 109.6c-.5-11 .4-28 9.5-31.8 4-1.6 15.8.1 19.9.4 12.4 1.3 24.9 1.3 37.2.2 6.9-.5 13.1-2.5 16.3-2.1 2.7.4 5.5 1.7 8 5.8 2.6 4.2 3.1 16.5 3.1 16.5s3.2-27.2 3.6-32.9c.5-6.4 1.1-13.6-1.1-17.4-2.4-4.1-7.8-3.4-11.2-.2 4.5-4.1 4.2-11.6-.6-15.8-6.1-5.3-14.9.7-20.8 4.2.9-11.2-12.1-4.7-19-3.7-7.2 1-10.9.9-18 2.1-10.3 1.8-20.5 5.6-28.3 12.5-5.5 5-9.4 11.6-11 18.9-2 9.4-2 19.8-1.4 29.4.4 3.5 1.5 6.8 3.3 9.8 0 0 2.4 3.1 3.1 15.4.2 2.8 3 5.3 5.8 3.6 3.7-2.3 1.8-11.5 1.6-14.9z" fill="#641b01"></path><path d="M238.5 385.2l-14.1-12.5s4.6-28.6-2.1-58.5c-2.9-12.8-15.7-39.5-21.2-46.2 0 0-25.7 6.5-56.9-10.3 0 0 2.2 18.7.1 60.8-1.3 26.4-12.5 61.9-12.5 61.9-1.5 4.2.1 6.2 25.8 9 11.7 1.2 15.4-.8 15.4-1.7 0-.5-.3-1-.7-1.2l-10.4-12s6.8-9.3 10.7-41.2c1.7-13.7 2.5-26.2-.4-46.9l6.6 1.2c3.7 5.4 9.3 16.7 12.8 29.1 7.5 26.5 3.6 62.6 3.6 62.6-1.4 4.2-1.1 6.3 24.7 8.7 11.7 1.1 19.2-.7 19.3-1.5 0-.6-.3-1.1-.7-1.3z" fill="#30363d"></path><ellipse transform="rotate(-1.117 200.731 117.286) scale(.99999)" cx="200.7" cy="117.3" rx="6.2" ry="7.4" fill="#3f0707"></ellipse><ellipse transform="rotate(-1.117 246.57 117.286) scale(.99999)" cx="246.6" cy="117.3" rx="6.2" ry="7.4" fill="#3f0707"></ellipse><path d="M194 105.5c3.3 1.3 6.8 2.2 10.3 2.7 4 .6 7.1.2 7.9-2 1.1-2.8.4-5.7-6.6-7.2-2.9-.7-5.8-1.1-8.8-1.4-2.9-.2-6.2.3-6 4.2.3 2.2 1.1 2.7 3.2 3.7zm59.4.2c-2.9 1.3-6 2.2-9.2 2.6-3.6.5-6.3.1-7.1-2.1-1-2.9-.3-5.7 5.9-7.2 2.6-.6 5.2-1.1 7.8-1.3 2.5-.1 5.6.3 5.3 4.3-.1 2.2-.8 2.7-2.7 3.7z" fill="#641b01"></path><path d="M235.6 139.1c3.7 5 1.5 9.5-4 12.1-6-.1-11.9.7-17.9-.3-2-.2-4-.9-5.7-2.1-2.9-4.2-1.9-7.4 1.6-9.7 5.4-2 10 1.4 15.5 1 3.5-.3 7-.7 10.5-1z" fill="#b1263c"></path><path d="M235.6 139.1c-.2 2.2-2.1 3.8-4.2 3.7-7 .4-14 .4-20.9 0-1.1-.2-2.1-.8-2.8-1.8.2-1.2 2.4-3.1 4.5-3.2 5.9-.2 11.8-.6 17.6-1.4 2.4-.4 5.2.7 5.8 2.7zm-27.6 9.7c5.9.1 11.8.2 17.7.2 2.3 0 4.6-.3 5.8 2.2-5.8 3.6-19 3.2-23.5-2.4z" fill="#fdfbfa"></path><path d="M161.4 119c-.4-1.5-1.9-2.4-3.4-2-.3.1-.6.2-.8.4-2.5 1.9-3.4 5.2-2.2 8.1 1.4 3.4 5 6.4 7.9 5.9 0 0-3.7-2.8-3.3-5.6.3-1.7 1.2-3.2 2.5-4.2l-.7-2.6zm55.2 107.5c7.7-.4 15.3-2.3 22.2-5.6-2-1.4-3.9-3-5.5-4.8-2-2.4-3.5-5.3-4.3-8.3-6.2 2.9-12 6.4-18.1 9.5 1.5 3.3 3.4 6.4 5.7 9.2z" fill="#ed8d6b"></path><path d="M173 203.2c2.9 3 6 5.7 9.4 8.2l14.8-18.3s-7.6-7.2-8.7-9.1-15.5 19.2-15.5 19.2z" fill="#7bb71c"></path><path d="M275.6 203.5c.8-3.4-1.8-3.7-2.7-3.4 1.4-1.5 1.6-3.5 1-4.5-1.9-2.9-5.1-.6-6.4.8-.9 1-3.1 2.6-3.7 2.3 2.4-1.8 3.7-4.7 3.5-7.6 0-1.1-.4-2.1-1.1-3-.7-.8-1.8-1.2-2.9-.9-1.5.5-1.9 2.4-2.6 3.8-.2.4-.4.8-.6 1.1-1.2 1.8-3 3.1-5.1 3.6-2.4.6-10.2-.6-7.5-4.5.9-1.3 2.3-2.2 3.5-3.3s2-2.8 1.5-4.3c-.5-1.1-1.5-1.8-2.7-1.9-1.1-.1-2.3.1-3.4.5-4.5 1.7-8.1 5.4-9.7 9.9-.5 1.8-.7 3.7-.8 5.6-10.3 6.4-25.3 3.6-30.7 1.1-3.3-1.5-6.2-3.7-8.6-6.5-5 6.1-9.3 12.7-14.1 18.9 11 9.4 36 19.1 63.6 3.1 15.5 4.5 28.5-6.6 29.5-10.8z" fill="#f9b390"></path><path d="M266.8 194.4c-1.1 1.8-2.5 3.4-4.2 4.6-1.8 1.1-3.7 2.1-5.6 3-.7.4-.8 1.6.1 1.7 4.3.4 10-3.6 11.2-7.9-2.4 1.2-1.1-2.1-1.5-1.4zm6.7 4.7c-1.3 1.9-2.8 3.7-4.5 5.3-1.7 1.3-3.5 2.5-5.4 3.5-.5.3-.8 1.3.3 1.4 4.5.3 10.1-4.2 10.8-8.1.4-1.5-1.1-.8-1.2-2.1zm9.7 36.5c-1 .8-2.2 1.4-3.4 1.8-1.1.4-2.4.5-3.5 1-.3.2-.4.5-.2.8 0 .1.1.1.2.2 1.9 1 6.3.1 7.7-2.1-.7 0-1.3-.6-.8-1.7zm1.9 6.3c-1.7.6-2.6.8-3.8 1.2s-2.5.3-3.6.8c-.2.1-.3.4-.1.6 0 .1.1.1.1.1 1.3 1.1 7 0 8.4-1.9.4-.4-.4-1-1-.8zM269 229.1c-.3 0-.6.2-.4.5 1.2 1.1 2 2.7 2.2 4.3.2 1.6-.6 2.8-.9 4.3 0 .6.4 1 1 1 .2 0 .3 0 .5-.1 3.3-2.9 1.6-9.2-2.4-10z" fill="#ed8d6b"></path><path d="M219 88.9c-.3-1.2-1.1-.6-1.3-.1-.6 2.8-.9 5.7-.9 8.6-.2 3.6-.1 7.3.1 10.9.2 2 2.1 2.1 2.5-.3.9-5.2 1.1-13.2-.4-19.1zm6.8 3.8c-.1-.2-.3-.4-.6-.3-.1 0-.2.1-.3.3-.9 2.3-1.7 10.3-1.3 14.5.3 3.5 2.6 2.9 2.7.3.3-4.7.3-13.4-.5-14.8zm6.2 0c-.2-.3-.4-.3-.7 0-1 1.6-1.5 11.3-1.1 15.4.3 3.2 2.6 2.9 2.8 0 .2-4 .2-13.7-1-15.4z" fill="#f47973"></path><path d="M278.1 73.8L294.7 49c.3-.5.9-.8 1.5-.7l19.8 1.4c.3 0 .6-.1.8-.3l21.7-19.9c.4-.3.9-.3 1.2.1.2.3.3.6.1.9l-17.4 29.4c-.4.6-1 .9-1.7.8L301 57.6c-.3-.1-.6 0-.8.2l-20.7 17.3c-.5.2-1.1 0-1.3-.5-.2-.2-.2-.5-.1-.8zm-143.8 4.3l-29.1-30.3c-.5-.5-1.4-.6-1.9 0l-.1.1-9.6 11c-.3.3-.8.4-1.1.2l-35.3-22c-.5-.3-1.1-.2-1.4.3-.3.4-.2.9.1 1.3l36.2 33c.5.5 1.4.4 1.9-.1l9.9-10.3c.3-.3.8-.4 1.1-.1l28 18.5c.4.4 1.1.4 1.4-.1.3-.5.3-1.1-.1-1.5zm13.3-27.6l-4.8-28c-.1-.6-.7-1.1-1.3-1.1l-13.8-.5c-.4 0-.7-.3-.8-.6L120.7.6c-.1-.4-.5-.6-.9-.5-.3.1-.5.4-.5.7l1.7 27c0 .7.7 1.3 1.4 1.3l13.3-.3c.4 0 .7.2.9.5l9.6 21.5c.1.4.5.5.9.4.4-.1.6-.4.5-.7z" fill="#ffcb4a"></path><path d="M465.9 281.3c-2.4 5-22.6 37.2-61.1 90.9-.5.9-.3 2.1.6 2.6 2.2 1.5 3.2.6 4-.1 11.2-10.9 35.9-44.4 65.8-86.2l-9.3-7.2z" fill="#94b1bf"></path><path d="M476.8 231.1c-2.2 5.1-20.7 38.3-56.5 93.8-.5.9-.2 2.1.8 2.6 2.3 1.4 3.3.5 4-.3 10.7-11.4 33.7-46.2 61.4-89.4l-9.7-6.7z" fill="#7a94a0"></path><path d="M323 180.2c-7.3 17.1-34.5 81.5-45 111.8-.4 1.1.1 2.3 1.2 2.8 2.7 1.2 3.8-.4 4.3-1.6 5.4-12 32.9-72.8 51.2-106.8l-11.7-6.2z" fill="#94b1bf"></path><path d="M374 167.6c-8.2 14.6-38.6 69.5-50.9 95.7-.5.9-.1 2.1.8 2.6 2.3 1.4 3.4 0 4-1 6-10.2 36.3-61.9 55.9-90.6l-9.8-6.7z" fill="#7a94a0"></path><path d="M386.2 147.5c-35.7 12.9-62 25.7-62 25.7l73.8 58.7 82.3 52.6s9.5-29.3 15.8-56l-109.9-81z" fill="#94b1bf"></path><path d="M324.2 173.3s-2.2 3.8-2.2 6.3c0 0 106.8 81.9 153.5 109.6 0 0 4.3-3.7 4.8-4.7 0 0-85.4-56-156.1-111.2z" fill="#b9ced6"></path><path d="M447.9 136.2c10.6-16.4 35.2-44.5 50.9-56.9 1-.8 2.5-.7 3.3.3 7 8.2 38 42.4 45.1 54.4 0 0-53.5 60.3-58.4 63.4 0 0-26.7-29.2-41.1-56.4-.8-1.5-.8-3.3.2-4.8z" fill="#2e313d"></path><path d="M487.1 184.9c-8.3-10.3-22.3-28-32-46 9.3-14 29.7-37.6 44.6-50.7 9.9 9.2 25.9 28.9 34.5 42.3.5.9.5 2-.2 2.7-17.3 20.4-35.2 41.4-44.7 51.7-.5.6-1.4.7-2 .2-.1 0-.2-.1-.2-.2z" fill="#353e4c"></path><path d="M488.8 197.4c-.4.4 1.9.9 4.2 1.2 1.3.2 2.6-.2 3.5-1.1 6.3-6.5 36.2-35.6 53.2-60.1.6-1 .6-2.1 0-3.1-4-8.5-31.9-44.9-43.7-54.7-.2-.2-.4-.3-.7-.4 0 0-2.6-1.4-4.9-.5 0 0 31.7 33.7 42.2 52.4 1 1.8 1.6 3.7.4 5.4-5.4 7.7-28.9 35.4-54.2 60.9z" fill="#5a6070"></path><path d="M499.2 88.8c1.2-1.1-2-.8-4.2.9s-31.5 31.9-41.3 47.1c-.4.6-.4 1.3-.2 1.9 1.5 3.9 9.7 19.4 32.9 46 0 0 3.6 1.8 1.5-.4s-22.8-27-32.2-45.4c-.3-.5-.2-1.2.2-1.7 3.9-5 25.4-32.8 43.3-48.4z" fill="#5a6070"></path><path d="M462.8 162.6c-3.3 4.4-7.3 8.7-7.3 8.7s9.3 16 10 15.4 9.1-8.5 9.1-8.5l-11.8-15.6z" fill="#2e313d"></path><path d="M461.3 175c-6-6.5-12.3-9.9-16.2-6-3.3 3.3-.6 13.1 8.3 22.6 7.3 7.8 14.1 9.3 14.7 1.9.9-9.3-4.3-15.8-6.8-18.5z" fill="#2e313d"></path><path d="M444.4 177.1c1.2 4.2 4.2 9.4 9 14.6 7 7.5 13.5 9.2 14.6 2.7-1.9-9.6-13.5-19.1-23.6-17.3z" fill="#353e4c"></path><path d="M457.1 190.2c.5 1.2 1.4 2.3 2.4 3.1.5.5 1.1.8 1.9.9.6-.1 1.1-.5 1.4-1 .2-.6.3-1.2.2-1.8-.2-1.3-.8-2.5-1.7-3.4-2.2-2.2-5.3-1-4.2 2.2z" fill="#5a6070"></path><g><path d="M393.1 147.2c5.8.1 19.2 1.5 26.8 5.6.8.4 1.4 1.1 1.6 2 1.2 4.3 4.9 20.1 9.4 57.5-14.2-.5-28.1-3.9-40.9-10 0 0 0-37.2 1-53.3 0-1 1-1.9 2.1-1.8z" fill="#2e313d"></path><path d="M430.8 212.4c-.4 1.4-.9 2.7-1.5 4-.4.9-1.4 1.5-2.4 1.3-5.5-.9-27.9-6-37.3-11.5-.7-.4-1.2-1.2-1.2-2-.1-6.9.7-23.9 2.2-50.3 0 0 0 38.6.2 45.9 0 .7.4 1.4 1.1 1.7 6 2.9 30.3 10.3 38.9 10.9z" fill="#5a6070"></path><path d="M416.9 194.2l-.2-3.5c0-.4-.3-.8-.8-.9l-5-1.1c-.5-.1-1.1.2-1.2.8v.2c0 1.1 0 2.2.1 3.3 0 .4.3.8.8.9l5.2 1.3c.5.1 1.1-.2 1.2-.8-.1 0-.1-.1-.1-.2zm5.7-14.2c-.1-.9-.3-1.8-.4-2.7-.1-.4-.4-.7-.8-.8l-3.5-.7c-.5-.1-1.1.3-1.1.9v.1l.2 2.7c0 .4.4.8.8.9l3.8.7c.5.1 1.1-.3 1.1-.9-.1 0-.1-.1-.1-.2zm-13.5 1.9c0 1.1 0 2.1.1 3.2 0 .4.3.8.8.9l4.9 1.1c.5.1 1.1-.3 1.2-.8v-.2l-.2-3.3c0-.4-.3-.8-.8-.9l-4.7-1c-.5-.1-1.1.3-1.2.8-.1.1-.1.2-.1.2zm14.7 5.9c-.2-1.2-.3-2.4-.5-3.8-.1-.4-.4-.7-.8-.8-1.3-.2-2.6-.5-4-.7-.5-.1-1.1.3-1.1.8v.2c.1 1.2.2 2.3.3 3.5 0 .4.3.8.8.9l4.4 1c.5.1 1.1-.3 1.1-.9-.2 0-.2-.1-.2-.2zm-6.9-20.6l2.9.6c.4.1.9-.2 1-.6v-.4l-.3-1.6c-.1-.3-.3-.6-.6-.7l-2.8-.6c-.5-.1-.9.2-1 .7v.2l.1 1.7c0 .3.3.6.7.7zm.5 6.4l3.5.6c.4.1.9-.2 1-.6v-.4l-.4-2.6c-.1-.3-.3-.6-.7-.7l-3.3-.6c-.5-.1-.9.2-1 .7v.2l.2 2.7c.1.3.4.6.7.7zm-8.4-4.9c0 .9 0 1.8.1 2.8 0 .4.3.7.7.8l4.6.9c.5.1.9-.2 1-.7v-.2l-.2-2.7c0-.4-.3-.7-.7-.8l-4.5-.9c-.4-.1-.9.2-1 .6v.2zm6-3l-.1-1.7c0-.4-.3-.7-.7-.8l-4.4-.9c-.5-.1-.9.2-1 .7v.2l.1 1.8c0 .4.3.7.7.8l4.4.8c.5.1.9-.2 1-.7v-.2zm-5.2 13.2l4.6.9c.5.1 1.1-.3 1.1-.8v-.2l-.2-2.7c0-.4-.4-.8-.8-.9l-4.5-.9c-.5-.1-1.1.3-1.1.8v.2c0 .9 0 1.9.1 2.8.1.4.4.7.8.8zm-10.5-23.8c-1.6-.3-3.1-.7-4.6-1-.3-.1-.6.1-.6.4v.1c0 .8-.1 1.7-.1 2.6 0 .3.2.5.5.6l4.7.9c.3.1.6-.2.7-.5v-2.6c-.2-.3-.3-.5-.6-.5zm-.2 10.4c-1.5-.3-2.9-.7-4.3-1-.4-.1-.9.2-1 .6v3.5c0 .4.3.8.7.8 1.4.2 2.9.5 4.4.7.5.1.9-.2 1-.7v-3.2c-.1-.3-.4-.7-.8-.7zm17.2-3.4l3.1.7c.3.1.6-.1.7-.4v-.2l-.3-2c0-.2-.2-.4-.4-.5l-2.9-.7c-.3-.1-.6.1-.7.4v.2l.2 2c-.2.2 0 .4.3.5zM399.1 186l-4-1c-.5-.1-1.1.2-1.2.7v.3c0 1.1 0 2.2.1 3.2 0 .5.3.8.8 1l4 .9c.5.1 1.1-.2 1.2-.7V187c-.1-.5-.5-.9-.9-1zm-.4-14.2l-4.1-.9c-.5-.1-1.1.3-1.2.8v3.2c0 .5.3.9.8 1l4.1.8c.5.1 1.1-.3 1.1-.8v-3.2c.1-.4-.3-.8-.7-.9zm.1 6.6l-4.1-1c-.5-.1-1.1.2-1.2.8v3.8c0 .5.4.9.8.9 1.3.2 2.7.5 4.1.7.5.1 1.1-.3 1.1-.8v-3.4c0-.5-.3-.9-.7-1zm1-15.4v-2.2c0-.4-.3-.7-.7-.8l-4.2-1c-.4-.1-.9.2-1 .6v2.4c0 .4.3.8.7.8l4.3.8c.4.2.8-.1.9-.6zm-.6 30.5l-3.9-1.2c-.5-.2-1.1.1-1.2.7v.3c0 1.6.1 3.2.3 4.8.1.6 1.8 1.4 4.2 2.3.5.2 1.1-.1 1.3-.6 0-.1.1-.2.1-.3v-5c-.1-.5-.4-.9-.8-1zm24.7-2l-4.6-1c-.5-.1-1.1.2-1.2.8v.3c.1 1.3.2 2.5.3 3.7 0 .4.3.8.7.9l4.8 1.3c.5.1 1.1-.2 1.2-.7v-.4c-.1-1.2-.3-2.6-.5-4.1.1-.4-.3-.8-.7-.8zm-7.4 6.7l-5.4-1.4c-.5-.1-1.1.2-1.2.7v.3c0 2 .1 3.9.1 5.4 0 .4.3.8.7 1 1.9.5 3.9 1 5.7 1.4.5.1 1.1-.2 1.2-.7v-.3c-.1-1.6-.2-3.4-.4-5.5.1-.4-.2-.8-.7-.9zm-8.8-2.4c-1.7-.5-3.4-.9-5.1-1.4-.5-.2-1.1.1-1.2.7v5.5c0 .4.3.8.7 1 1.6.5 3.4 1.1 5.3 1.6.5.1 1.1-.2 1.2-.7v-.3c0-1.6-.1-3.4-.1-5.4-.1-.5-.4-.9-.8-1zm11.1 4.3c.1 2 .2 3.8.3 5.4 0 .4.4.8.8.9 2 .4 3.8.8 5 1 .5.1 1.1-.3 1.1-.8v-.2c0-.9-.1-2.5-.3-5.1 0-.4-.3-.8-.8-.9l-5-1.3c-.5-.1-1.1.2-1.2.8.1 0 0 .1.1.2zm-17.5-46.2c1.9.3 3.7.7 5.6 1.1.3.1.6-.1.7-.4V153.4c0-.3-.2-.5-.4-.5-1.9-.4-3.8-.9-5.6-1.2-.3-.1-.6.1-.6.4v1.3c-.2.2 0 .4.3.5zm14.5 3.1l2.7.6c.3.1.6-.1.7-.4v-.2l-.2-1c0-.2-.2-.4-.4-.5l-2.6-.6c-.3-.1-.6.1-.7.4v.2l.1 1.1c0 .2.2.4.4.4zm-16-4v-1.3c0-.3-.2-.5-.5-.5-1.8-.3-3.3-.6-4.4-.7-.3 0-.6.2-.6.5 0 .4-.1.8-.1 1.3 0 .3.2.6.5.6 1.5.2 2.9.4 4.4.6.3.1.6-.1.7-.5zm1.1 3.1v2.5c0 .3.2.5.5.5l5.5 1.1c.3.1.6-.1.7-.4v-2.4c0-.3-.2-.5-.4-.5l-5.6-1.3c-.3-.1-.6.1-.7.4v.1zm6.8 8.3v-1.9c0-.4-.3-.7-.7-.8l-5-1.1c-.4-.1-.9.2-1 .6v2.3c0 .4.3.7.7.8l5 .9c.5.1.9-.2 1-.7v-.1zm.9-6.6c0 .7 0 1.5.1 2.2 0 .3.2.5.5.5l4.8 1c.3.1.6-.1.7-.4v-.2c0-.7-.1-1.4-.1-2.1 0-.2-.2-.4-.4-.5l-4.8-1.1c-.3-.1-.6.1-.7.4-.1.1-.1.2-.1.2zm.4-2.4c1.6.4 3.2.7 4.8 1.1.3.1.6-.1.7-.4v-.2l-.1-1.1c0-.2-.2-.5-.4-.5l-4.8-1.1c-.3-.1-.6.1-.7.4v1.2c0 .4.2.6.5.6zm-1.2 15.4c0-.9 0-1.9-.1-2.8 0-.4-.3-.7-.7-.8l-5-1.1c-.4-.1-.9.2-1 .6v3.1c0 .4.3.7.7.8l5 .9c.4.1.9-.2 1-.6.1.1.1 0 .1-.1zm0 13.5l-.1-3.2c0-.4-.3-.8-.8-.9l-4.9-1.1c-.5-.1-1.1.3-1.2.8v3.4c0 .4.3.8.8.9 1.6.3 3.3.7 5 1 .5.1 1.1-.3 1.1-.8.1 0 .1 0 .1-.1zm-.2-7c0-.9 0-1.9-.1-2.8 0-.5-.3-.8-.8-.9l-4.8-1c-.5-.1-1.1.3-1.1.8v3.1c0 .5.3.8.8.9l4.9.9c.5.1 1.1-.2 1.2-.8-.1 0 0-.1-.1-.2zm.7 14.8c0-1 0-2.1-.1-3.2 0-.5-.3-.9-.8-1l-5-1.1c-.5-.1-1.1.2-1.2.8v3.3c0 .5.3.9.8 1l5 1.2c.5.2 1.1-.1 1.3-.6v-.4z" fill="#353e4c"></path><path d="M424.7 205.3c-.9-.3-1.8-.5-2.7-.5-.6 0-2-.3-2.5.2-.9.9 1.8 1.6 2.2 1.8.9.2 3.2.9 3.8-.1.2-.3.2-.7-.1-1-.2-.2-.4-.3-.6-.3l-.1-.1zm-7.9-1.4c-.2-.1-.4-.2-.5-.3-.9-.4-1.9-.6-2.9-.8-.9-.2-1.9-.1-2.7.3l-.2.2c-.1.4.8.9 1.1 1.1.6.4 1.2.6 1.9.8.9.2 3.6 1.1 3.8-.5 0-.3-.2-.6-.5-.8zM408 201c-.9-.6-2.3-.6-3.3-.7-.7-.1-2.1-.4-2.7.1-1 .9 1.9 1.8 2.4 1.9 1 .5 2.1.7 3.2.7.2 0 .4-.1.6-.2.8-.4.3-1.4-.2-1.8zm-8.5-2.3c-.4-.4-.9-.6-1.4-.7-1.1-.3-2.2-.5-3.3-.5-.3 0-.5.2-.5.5 0 .1 0 .2.1.3 1 1.5 3 1.9 4.7 1.9.8 0 .9-.9.4-1.5zm-.8-9.6l-.4-.1c-1.1-.3-2.3-.5-3.5-.5-.4 0-.7.4-.7.8 0 .2.1.5.3.6.6.4 1.3.7 2 .9.9.3 1.9.4 2.9.1.2-.1.4-.3.4-.5s0-.4-.1-.5c-.2-.5-.5-.7-.9-.8zm8.7 2.3c-.8-.5-1.7-.8-2.6-.8-.8-.2-1.6-.2-2.4.1-.2.1-.3.4-.2.7.5.6 1.2 1 2 1.1 1 .3 2.6 1.2 3.5.3.1-.1.2-.2.2-.4 0-.1 0-.3-.1-.4-.1-.1-.2-.4-.4-.6zm8.8 2c-.8-.5-1.8-.7-2.7-.8-.6-.1-2.1-.3-2.6.3-.2.3-.1.7.2.9.6.3 1.3.6 2 .7.8.4 1.7.6 2.6.6.7-.1 1.6-.4 1-1.3-.1-.1-.3-.3-.5-.4zm7.8 2.1c-1-.5-3.3-.9-4.4-.3-.2 0-.3.2-.2.3 0 .1.1.1.1.2 1.2 1.1 2.8 1.6 4.4 1.6.3 0 .6-.2.8-.4.2-.3.1-.6-.1-.9-.1-.2-.3-.4-.6-.5zm-25.6-13.6c-.7-.3-1.6-.3-2.3 0-.3.2-.4.6-.2.9l.2.2c.7.5 1.6.7 2.4.6.9-.2 1.2-1 .4-1.5-.2-.1-.4-.2-.5-.2zm8.8 1.9c-.9-.5-1.9-.5-2.8 0-.2.1-.3.4-.2.6 0 .1.1.1.2.2.9.6 2 .9 3.1.7.3 0 .6-.2.6-.6-.1-.2-.2-.4-.4-.5-.2-.2-.4-.3-.5-.4zm8.1 1.8c-.6-.3-1.3-.4-2-.3-.2 0-.5.1-.7.2-.2.2-.3.4-.2.6l.3.3c.8.5 1.7.7 2.7.5.9-.2.5-1 0-1.3h-.1zm8 1.8c-.6-.3-2.9-.9-2.8.4 0 .8 2.1 1.4 2.8 1.2.4-.1.7-.4.7-.9 0-.3-.2-.5-.5-.6l-.2-.1zm-24.5-12.2c-.4-.3-1-.3-1.4 0-.3.1-.5.5-.5.8.2.7 1 1 1.6.8.5-.1.8-.6.6-1.1 0-.2-.1-.4-.3-.5zm7.8 1.8c-.6-.5-1.4-.4-2 .1-.2.3-.2.7.1.9l.1.1c.4.3.8.4 1.3.4.5-.1.9-.5.8-1-.2-.2-.2-.4-.3-.5zm8.2 1.3c-.4-.2-1.7-.5-1.7.4.1.7.7 1.1 1.3 1h.2c.4-.1.6-.6.5-1-.1-.2-.2-.3-.3-.4zm6.5 1c-.3-.1-.5-.1-.8-.1-.5 0-1.1.5-.6 1.1.6.8 1.7 1 2.5.5.2-.1.3-.3.3-.5 0-.1-.1-.2-.2-.3-.3-.4-.7-.6-1.2-.7zm-14.7-9.5c-.5-.1-1.1 0-1.6.2-.4.1-.6.5-.5.9.1.2.2.3.3.4.5.4 1.1.5 1.7.3.9-.2 1.1-1.6.1-1.8zm7.9 1.5c-.5-.2-1.1-.1-1.5.3-.1.1-.2.3-.1.5.2.6.8 1 1.4 1 .9 0 1-1.5.2-1.8z" fill="#5a6070"></path></g><path d="M425.7 280.5c-13.4 6.9-28.6 19-28.6 19s21.2 51.7 57 42l29.3-29s-30.6 6-57.7-32zm57.3-62.6c-7.5 8.1-18.7 24.6-18.7 24.6s28 3.7 53.2 29.6l24.6-31.5c.1 0-28.5-29.3-59.1-22.7zm-125.5-119c7.8 10.6 23 22.5 23 22.5s41.4-8.5 47.6-53c0 0-30.8-4.7-44.8-9.6.1 0-7.4 34.2-25.8 40.1z" fill="#e9f1f4"></path><path d="M444.5 118.1c-16.4-2.8-37.3 3.4-48.5 14.5-.3.3-.3.7-.1 1.1.2.3.7.4 1.1.2l2.4-1.4c6.5-3.7 12.7-7.2 20.1-9.3 8.3-2.3 16.2-2.3 24.7-2.2.8 0 1.4-.6 1.4-1.4 0-.8-.5-1.4-1.1-1.5zm-99.6 166.3c-.6-.7-1.7-.7-2.4-.1-18.3 16.5-31.3 39.6-36.7 65.2-.1.6.3 1.2.8 1.3h.2c.5 0 .9-.3 1-.8 5.7-23.8 18.1-45.1 36.9-63.3.8-.6.8-1.6.2-2.3zm50.6-19.4c-.5-.8-1.4-1-2.2-.6-39.3 23.9-69.1 69.9-75.9 117.4-.1.7.3 1.3 1 1.5h.2c.7 0 1.3-.5 1.4-1.1 5-24.5 13.9-46.6 26.5-65.7 11.5-17.6 27-33.2 48.6-49.1.8-.6 1-1.6.4-2.4z" opacity=".3" fill="#94b1bf"></path><path d="M485 327.6c-.5-.6-1.4-.6-2 0-1.1 1.1-2.2 2.2-3.3 3.4-6 6-12.1 12.3-16.4 19.3-.3.4-.2 1 .2 1.3.2.2.5.3.7.3.3 0 .5-.1.7-.3 2.7-2.4 5.2-5 7.5-7.8.9-1 1.8-2.1 2.7-3.1l3-3.3c2.3-2.6 4.6-5.1 7-7.7.5-.6.5-1.6-.1-2.1z" opacity=".3" fill="#fff"></path><path d="M264.4 256c-19.8 2.8-35.6-3.5-50.2-16.7-.1-.1-.4-.1-.5 0-.1.1-.1.3 0 .4 10.4 15.8 33.5 23.1 51.4 18.7 1.5-.4.8-2.6-.7-2.4zm-15.6 14.6c-11.2.9-20.7-3.8-28.3-11.8-.1-.1-.3-.1-.4 0-.1.1-.1.2-.1.3 6.1 9.6 17.5 14.3 28.7 13.7 1.4-.1 1.5-2.3.1-2.2z" opacity=".3" fill="#94b1bf"></path></svg>
		            </p>
		            <p class="chila fweight700 fs25pointshead padbelowsvg pbsvgsec10 white">Having Emotional Outburst?</p>
		        </div>
		    </div>
		    <div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
		        <div class="backhomeorange">
		            <p class="padforsvgs ptsvgsec15 wow pulse">
		                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 40" fill="rgba(45, 149, 236, 1)" style="width: 180px; height: 130px; background-color: rgba(0, 0, 0, 0); "><path d="M21,27h0s-1,4-5,4-5-4-5-4S0,29,0,40H32c0-11-11-13-11-13" style="fill:#4fc3f7"></path><path d="M16,33c-5,0-5-6-5-6V21H21v6S21,33,16,33Z" style="fill:#915831"></path><path d="M27,15a2,2,0,1,1-2-2,2,2,0,0,1,2,2" style="fill:#915831"></path><path d="M9,15a2,2,0,1,1-2-2,2,2,0,0,1,2,2" style="fill:#915831"></path><path d="M25,9C25,1.4,7,4,7,9v7a9,9,0,0,0,18,0Z" style="fill:#a86637"></path><path d="M16,0C9.9,0,6,4.9,6,11v2.3L8,15V10L20,6l4,4v5l2-1.7V11c0-4-1-8-6-9L19,0Z" style="fill:#331907"></path><path d="M19,15a1,1,0,1,0,1-1,.9.9,0,0,0-1,.8V15" style="fill:#080502"></path><path d="M11,15a1,1,0,1,0,1-1,.9.9,0,0,0-1,.8V15" style="fill:#080502"></path><path d="M16,33a6.9,6.9,0,0,0,7-5.4,6.6,6.6,0,0,0-2-.6s-1,4-5,4-5-4-5-4a6.6,6.6,0,0,0-2,.6A6.9,6.9,0,0,0,16,33Z" style="fill:#01579b"></path></svg> 
		            </p>
		            <p class="chila fweight700 fs25pointshead padbelowsvg pbsvgsec10 white">Feeling Depressed or Unhappy?</p>
		        </div>  
		    </div>
	    	<div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
	    	    <div class="backhomeorange">
	    	        <p class="padforsvgs ptsvgsec15 wow pulse">
	    	            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="5 5 37 38" xml:space="preserve" fill="rgba(45, 149, 236, 1)" style="width: 180px; height: 130px; background-color: rgba(0, 0, 0, 0);">
                            <g>
                            	<path fill="#EF840F" d="M37,20c0,1.105-0.895,2-2,2s-2-0.895-2-2s0.895-2,2-2S37,18.895,37,20"></path>
                            	<path fill="#EF840F" d="M35,14c0-7.635-18-4.971-18,0v7c0,4.971,4.029,9,9,9s9-4.029,9-9V14z"></path>
                            </g>
                            <g>
                            	<path fill="#D17315" d="M26,30c-1.851,0-3.57-0.56-5-1.518V30c0,0,0,6,5,6s5-6,5-6v-1.518C29.569,29.44,27.851,30,26,30z"></path>
                            	<path fill="#D17315" d="M31.996,23.221c-0.147-0.176-0.316-0.32-0.499-0.434c0.249-0.27,0.57-0.722,0.631-1.296
                            		c0.052-0.487-0.094-0.956-0.419-1.353c-0.204-0.25-0.452-0.436-0.727-0.551c0.056-0.15,0.096-0.312,0.113-0.484
                            		c0.049-0.488-0.098-0.956-0.423-1.353c-0.439-0.534-1.124-0.762-1.735-0.649c-0.063-0.262-0.188-0.512-0.373-0.737
                            		c-0.401-0.49-0.939-0.446-1.527-0.446c-0.831,0-1.226,0.836-1.311,0.914l-5.641,4.688l-0.572-2.137
                            		c-0.01-0.277-0.087-0.92-0.575-1.437c-0.26-0.274-0.73-0.606-1.548-0.624c-0.141,0-0.266,0.02-0.391,0.04V21c0,4.971,4.029,9,9,9
                            		c0.341,0,0.677-0.023,1.008-0.06l4.599-3.771c0.129-0.105,0.776-0.679,0.854-1.541C32.507,24.123,32.347,23.637,31.996,23.221"></path>
                            </g>
                            <path fill="#424242" d="M26,5c-6.075,0-10,4.925-10,11v2.284L17,21v-2l13-5l4,4v2l2-1.741V16c0-4.025-1.038-8.016-6-9l-1-2H26z"></path>
                            <path fill="#4FC3F7" d="M31,30L31,30c0,0-1,4-5,4s-5-4-5-4s-11,1.986-11,13h32C42,32.025,31,30,31,30"></path>
                            <path fill="#01579B" d="M26,36c5,0,6.745-3.93,6.951-5.428C31.794,30.148,31,30,31,30s-1,4-5,4s-5-4-5-4s-0.794,0.146-1.952,0.566
                            	C19.252,32.061,21,36,26,36"></path>
                            <g>
                            	<path fill="#FFBC6C" d="M30.971,24.398c0,0,0.918-0.756,0.262-1.531c-0.675-0.801-1.576,0-1.576,0s-2.529,2.05-2.9,2.371
                            		c-0.352,0.303-0.773-0.148-0.404-0.47c0.468-0.403,4.241-3.497,4.241-3.497s0.949-0.759,0.343-1.498
                            		c-0.632-0.771-1.561,0.088-1.561,0.088s-2.811,2.273-3.299,2.695c-0.35,0.301-0.764-0.162-0.404-0.47
                            		c0.468-0.404,3.896-3.19,3.896-3.19s0.941-0.769,0.332-1.511c-0.627-0.765-1.543,0.106-1.543,0.106s-3.917,3.205-4.366,3.592
                            		c-0.359,0.313-0.717-0.198-0.404-0.467c0.47-0.404,3.84-3.154,3.84-3.154s0.957-0.744,0.364-1.465
                            		c-0.716-0.874-1.668-0.02-1.668-0.02l-7.109,5.859l-0.498-3.375c0,0,0.038-1.116-1.092-1.141c-1.132-0.021-1.151,1.1-1.151,1.1
                            		l-0.334,8.097c0,0,3.576,3.548,4.935,4.351c1.359,0.804,4.155-1.598,4.155-1.598L30.971,24.398z"></path>
                            	<path fill="#FFBC6C" d="M10,43h1l10.079-12.322l-4.081-4.976c0,0-8.873,6.485-9.998,7.298s-2,2.438-2,5C5,40.182,10,43,10,43"></path>
                            </g>
                            </svg>
	    	        </p>
		            <p class="chila fweight700 fs25pointshead padbelowsvg pbsvgsec10 white">Feeling Anxious or Worried?</p>
		        </div>
		    </div>
		</div>
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
		        <div class="backhomeorange">
		            <p class="padforsvgs ptsvgsec15 wow pulse">
		                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="180px" height="130px" viewBox="6 3.0195 36 40.9805" xml:space="preserve" fill="rgba(45, 149, 236, 1)" style="width: 180px; height: 130px; background-color: rgba(0, 0, 0, 0);"> 

                            <g> 
                            
                            <rect x="10" y="36" fill="#C5CAE9" width="4" height="8"></rect> 
                            
                            <rect x="34" y="36" fill="#C5CAE9" width="4" height="8"></rect> 
                            
                            </g> 
                            
                            <path fill="#F44336" d="M42,39H6v-4c0-1.656,1.343-3,3-3h30c1.656,0,3,1.344,3,3V39z"></path> 
                            
                            <path fill="#37474F" d="M32.96,31.105C32.77,29.913,31.746,29,30.5,29c-0.635,0-12.441,0-13,0c-1.381,0-2.5,1.119-2.5,2.5 
                            
                            c0,0.242,0.045,0.472,0.109,0.693c0.006,0.02,0.006,0.039,0.012,0.059l2.963,10.322c0.26,0.867,1.054,1.427,1.915,1.427 
                            
                            c0.19,0,0.384-0.028,0.576-0.085c1.058-0.317,1.658-1.433,1.341-2.49L20,33l4.014-1L28,33l-1.916,8.426 
                            
                            c-0.316,1.058,0.283,2.173,1.342,2.49c0.191,0.058,0.385,0.085,0.575,0.085c0.86,0,1.655-0.56,1.915-1.427l3.028-10.555 
                            
                            c0.001-0.006,0.004-0.012,0.005-0.018v-0.001C33.057,31.646,33.047,31.355,32.96,31.105z"></path> 
                            
                            <path fill="#8BC34A" d="M32.991,27.896c-0.005-0.054-0.006-0.109-0.017-0.161c-0.012-0.054-0.032-0.105-0.049-0.158 
                            
                            c-0.015-0.042-0.024-0.087-0.042-0.128c-0.003-0.007-0.004-0.016-0.007-0.022L31.979,22c-0.484-3.875-3.889-7-8-7 
                            
                            c-4.106,0-7.578,3.203-8,7l-0.871,5c-0.015,0.034-0.014,0.084-0.014,0.132c-0.074,0.178-0.116,0.372-0.116,0.576 
                            
                            c0,0.646,0.41,1.191,0.982,1.403c0.001,0,0.002,0.003,0.002,0.004c0.171,0.387,6.541,2.308,6.541,2.308 
                            
                            c0.157,0.053,0.317,0.077,0.474,0.077c0.383,0,0.738-0.161,1.014-0.418c0.275,0.257,0.631,0.418,1.014,0.418 
                            
                            c0.157,0,0.316-0.024,0.475-0.077l6.5-1.964c0.004-0.002,0.008-0.004,0.012-0.006c0.09-0.031,0.174-0.069,0.255-0.115 
                            
                            c0.009-0.006,0.019-0.01,0.027-0.015c0.08-0.048,0.154-0.104,0.224-0.165c0.008-0.007,0.016-0.012,0.023-0.02 
                            
                            c0.07-0.064,0.134-0.136,0.19-0.213c0.004-0.006,0.009-0.01,0.013-0.016c0.176-0.245,0.281-0.544,0.281-0.869 
                            
                            c0-0.002,0-0.002,0-0.004C33.006,27.99,32.996,27.943,32.991,27.896z"></path> 
                            
                            <path fill="#558B2F" d="M27.979,20l-0.799,5.498l-3.188,1.148l-3.188-1.148L19.979,20l-1.5,6.785l4.974,1.792 
                            
                            c0.212,0.07,0.396,0.187,0.549,0.331c0.15-0.141,0.321-0.262,0.529-0.331l4.975-1.792L27.979,20z"></path> 
                            
                            <path fill="#F1F8E9" d="M25.98,15.258C25.914,15.792,25.586,17,23.96,17c-1.623,0-1.903-1.204-1.949-1.74 
                            
                            c-0.671,0.172-1.31,0.423-1.9,0.752c0.124,0.561,0.384,1.229,0.937,1.816C21.549,18.363,22.463,19,23.96,19 
                            
                            c1.479,0,2.397-0.622,2.908-1.144c0.587-0.6,0.866-1.29,1.005-1.854C27.284,15.676,26.648,15.428,25.98,15.258z"></path> 
                            
                            <path fill="#FF9800" d="M26,12h-4v3c0,0-0.124,2,1.959,2S26,15,26,15V12z"></path> 
                            
                            <path fill="#FFB74D" d="M24,14.905c-2.758,0-5-2.243-5-5c0-2.757,2.242-5,5-5s5,2.243,5,5C29,12.662,26.758,14.905,24,14.905"></path> 
                            
                            <path fill="#424242" d="M23.788,3.02c-2.438,0.219-4.781,1.93-4.781,5.574v1.426l1,1v-3l6.31-2.201l1.69,2.201v3l1-1V8.817 
                            
                            c0-2.414-0.135-4.206-3-4.798l-0.485-1L23.788,3.02L23.788,3.02z"></path> 
                            
                            </svg>
		            </p>
		            <p class="chila fweight700 fs25pointshead padbelowsvg pbsvgsec10 white">Feeling </br>Worthless?</p>
		        </div>
		    </div>
		    <div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
		        <div class="backhomeorange">
		            <p class="padforsvgs ptsvgsec15 wow pulse">
		                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="rgba(45, 149, 236, 1)" style="width: 180px; height: 130px; background-color: rgba(0, 0, 0, 0); "><rect width="48" height="48" style="fill:none"></rect><path d="M14,27a4,4,0,1,1-4-4,4,4,0,0,1,4,4" style="fill:#fcc29a"></path><path d="M42,27a4,4,0,1,1-4-4,4,4,0,0,1,4,4" style="fill:#fcc29a"></path><path d="M9,20c0-12.7,30-8.3,30,0V30A15,15,0,0,1,9,30Z" style="fill:#ffdfbd"></path><path d="M40.9,19.3c-.5-5.9-2.8-11.4-10.1-12.8L29.1,3H24C14.8,3,7,10.5,7,21v3.4L10,28V22l21-7,7,6v7l3-3.6V21a9.7,9.7,0,0,0-.1-1.7" style="fill:#edac00"></path><polygon points="33 38.9 30.7 43.4 14.3 36.1 16.6 31.6 33 38.9" style="fill:#e64a19"></polygon><polygon points="31.7 31.7 33.9 36.2 17.2 43.3 15 38.7 31.7 31.7" style="fill:#ff5722"></polygon><path d="M33,28a2,2,0,1,1-2-2,2,2,0,0,1,2,2" style="fill:#7c4209"></path><path d="M19,28a2,2,0,1,1-2-2,2,2,0,0,1,2,2" style="fill:#7c4209"></path></svg> 
		            </p>
		            <p class="chila fweight700 fs25pointshead padbelowsvg pbsvgsec10 white">Quiet </br>or Withdrawn?</p>
		        </div>  
		    </div>
	    	<div class="col-12 col-sm-12 col-md-4 col-lg-4 tacenter">
	    	    <div class="backhomeorange">
	    	        <p class="padforsvgs ptsvgsec15 wow pulse">
	    	            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="4 3.357 39 41.643" xml:space="preserve" fill="rgba(45, 149, 236, 1)" style="width: 180px; height: 130px; background-color: rgba(0, 0, 0, 0);">
<path fill="#4FC3F7" d="M28,32L28,32c0,0-1,4-5,4s-5-4-5-4S7,33.986,7,45h32C39,34.025,28,32,28,32"></path>
<path fill="#FF9800" d="M23,38c-5,0-5-6-5-6v-6h10v6C28,32,28,38,23,38z"></path>
<g>
    <path fill="#FFA726" d="M34,20c0,1.105-0.895,2-2,2s-2-0.895-2-2s0.895-2,2-2S34,18.895,34,20"></path>
    <path fill="#FFA726" d="M16,20c0,1.105-0.895,2-2,2s-2-0.895-2-2s0.895-2,2-2S16,18.895,16,20"></path>
</g>
<path fill="#FFB74D" d="M32,14c0-7.635-18-4.971-18,0v7c0,4.971,4.029,9,9,9c4.971,0,9-4.029,9-9V14z"></path>
<path fill="#424242" d="M23,5c-6.075,0-10,4.925-10,11v2.284L15,20v-5l12-4l4,4v5l2-1.741V16c0-4.025-1.038-8.015-6-9l-1-2H23z"></path>
<g>
    <path fill="#FFFFFF" d="M18,20c0,1.104,0.896,2,2,2s2-0.896,2-2s-0.896-2-2-2S18,18.896,18,20"></path>
    <path fill="#FFFFFF" d="M24,20c0,1.104,0.896,2,2,2s2-0.896,2-2s-0.896-2-2-2S24,18.896,24,20"></path>
</g>
<g>
    <path fill="#784719" d="M25,21c0,0.552,0.448,1,1,1s1-0.448,1-1s-0.448-1-1-1S25,20.448,25,21"></path>
    <path fill="#784719" d="M19,19c0,0.552,0.448,1,1,1s1-0.448,1-1s-0.448-1-1-1S19,18.448,19,19"></path>
</g>
<path fill="#01579B" d="M23,38c5,0,6.745-3.93,6.951-5.428C28.794,32.148,28,32,28,32s-1,4-5,4s-5-4-5-4s-0.794,0.146-1.952,0.566
    C16.252,34.061,18,38,23,38z"></path>
<g>
    <polygon fill="#FFC107" points="36.422,11.961 35.673,10.444 34,10.201 35.211,9.022 34.925,7.357 36.422,8.143 37.918,7.357
        37.632,9.022 38.843,10.201 37.17,10.444     "></polygon>
    <polygon fill="#FFC107" points="6.421,19.961 5.673,18.444 4,18.201 5.21,17.022 4.925,15.357 6.421,16.143 7.918,15.357
        7.632,17.022 8.843,18.201 7.169,18.444     "></polygon>
    <polygon fill="#FFC107" points="39.342,21.357 38.212,19.067 35.685,18.697 37.514,16.918 37.082,14.402 39.342,15.592
        41.604,14.402 41.171,16.918 43,18.697 40.473,19.067     "></polygon>
    <polygon fill="#FFC107" points="17.044,12 14.331,10.431 11.5,11.776 12.155,8.711 10,6.435 13.117,6.109 14.617,3.357
        15.889,6.222 18.97,6.797 16.639,8.893     "></polygon>
</g>
</svg>
	    	        </p>
		            <p class="chila fweight700 fs25pointshead padbelowsvg pbsvgsec10 white">Experiencing </br>Sleep Problems?</p>
		        </div>
		    </div>
		</div>
	</div>
	<!--<div class="container" id="IamHappy">
	    <div class="row">
	        <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
	        <div class="col-12 col-sm-12 col-md-10 col-lg-10" style="background: #fe6601;
padding-bottom: 2%;
margin-top: 4%;
color: white;">
	            <p class="pforvideos wow fadeInLeft" style="color:white !important"><u>If you are feeling "HAPPY"!</u></p>
        	    <p class="chila fs14mobile wow fadeInDown tacenter">You are taking care of yourself and you are doing well. </p>
                <p class="chila fs14mobile wow fadeInDown tacenter">Please continue with that and share your happiness with  family and friends.
                </p>
	        </div>
	        <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
        </div>
	</div>-->
	<!--<div class="container" id="IamSad">
	    <div class="row">
	        <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
	        <div class="col-12 col-sm-12 col-md-10 col-lg-10" style="background: #21c0f7;
padding-bottom: 2%;
margin-top: 4%;
">
                <p class="pforvideos wow fadeInLeft"><u>If you are feeling "SAD"!</u></p>
            	<p class="chila fs14mobile wow fadeInDown tacenter">Sorry to hear you are sad.  We have stories, games, and videos here.</p>
                <p class="chila fs14mobile wow fadeInDown tacenter">They are your buddies to kick off the devil.
                </p>
            </div>
	        <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
        </div>
	</div>-->
	<!--<div class="container" id="IneedHelp">
	    <div class="row">
	        <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
	        <div class="col-12 col-sm-12 col-md-10 col-lg-10" style="background: #fe6601;
padding-bottom: 2%;
margin-top: 4%;
color: white;">
        	    <p class="pforvideos wow fadeInLeft" style="color:white !important"><u>If you need "HELP"!</u></p>
        	    <p class="chila fs14mobile wow fadeInDown tacenter">
        	        <ul class="chila fs14mobile wow fadeInDown tacenter">
        	            <li class="chila fs14mobile wow fadeInDown tacenter"><span style="font-family: 'Ultra', serif !important;">GO OUTSIDE &
                            ENJOY NATURE - </span>Spending time outdoors is a great way to fresh yourself. 
                            Get reconnected with the wild, have fun with your family. Don't forget to maintain social distancing (6 feet) with people! You can go bike riding,  jogging, skateboarding and walking your dog. </li>
                        <li class="chila fs14mobile wow fadeInDown tacenter"><span style="font-family: 'Ultra', serif !important;">COMPUTER FUN - </span>You are not disconnected at home. Computer brings a new world to us within a second. You can learn a new language, listen to music and watch your favorite movies.
                            Is your popcorn ready?
                            Lets do it!</li>
                        <li class="chila fs14mobile wow fadeInDown tacenter"><span style="font-family: 'Ultra', serif !important;">VIDEO CHAT WITH
                        FRIENDS AND FAMILY - </span>Missing your friends and other family members? Don't worry, you can talk to them over mobile phone and  computer.  Simply call them using Facetime, WhatsApp or other video chat app, then you can see each other's face!
                        </li>
                        <li class="chila fs14mobile wow fadeInDown tacenter"><span style="font-family: 'Ultra', serif !important;">ENJOY INDOOR TIME 
                        & GET CREATIVE! - </span>It is not boring at home. You can read your favorite books, continue with your painting, challenge yourself with quiz and play with your guitar.  Do invite your family to play video games and chess with you if they are available. Lets take the monopoly tournament off the shelf!
                        </li>
                        </ul>
                    </p>
                    <p class="chila fs14mobile wow fadeInDown tacenter">They are your buddies to kick off the devil.
                    </p>
                    </div>
	        <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
        </div>
	</div>-->
</section>

<section class="homevideospad">
	<div class="container">
		<p class="pforvideos wow fadeInLeft"><u>YOU are "NOT ALONE"!</u></p>
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
		    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
		        <p class="chila fs14mobile wow pulse fs20pxmainblock">
		            <img id="loading" src="http://tenderminds.live/wp-content/uploads/2021/09/holdinghandskids.png" style="width:100%; height:auto;">
		        </p>
		        <p class="centertextrotating tacenter chila" style="font-size:16px"><span style="font-size:20px !important ; font-weight:700 !important; font-family: 'Ultra', serif !important; color:#fe6601 !important">1</span> in <span style="font-size:20px !important; font-weight:700 !important; font-family: 'Ultra', serif !important; color:#fe6601 !important">6</span> people at your age are experiencing the same feeling as yours.</p>
		    </div>
		<div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
		</div>
	</div>
</section>
   
<section class="homevideospad bggradient">
	<div class="container">
		<p class="pforvideos wow fadeInLeft"><u>WE are all here for YOU! Dont Forget that!</u></p>
		<div class="row">
		    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		    <div class="col-12 col-sm-12 col-md-10 col-lg-10">
		        <p class="chila fs14mobile wow fadeInDown fs20pxmainblock tacenter">Talk to parents, family members or teachers about your feeling, we can surely help you with that.</p>
		        <p class="chila fs14mobile wow fadeInDown fs20pxmainblock tacenter">You should <span style="font-size:20px !important ; font-weight:700 !important; font-family: 'Ultra', serif !important; color:#fe6601 !important">NOT</span> feel ashamed about experiencing mental health.</p>
		        <p class="chila fs14mobile wow fadeInDown fs20pxmainblock tacenter">We will be very happy if you can speak out.</p>
		    </div>
		<div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
		</div>
	</div>
</section>
   
</div>
</div>
</div>
<?php get_footer();