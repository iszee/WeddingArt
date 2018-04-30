<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Wedding Art | About</title>
<style type="text/css">
	.sidebar-box {
			max-height: 120px;
			position: relative;
			padding: 20px;
			overflow: hidden;
		}

	.sidebar-box .read-more {
			position: absolute;
			bottom: 0; left: 0;
			width: 100%;
			text-align: center;
			margin: 0;
			padding: 30px 0 30px 0;

			/* "transparent" only works here because == rgba(0,0,0,0) */
			background-image: linear-gradient(to bottom, transparent, black);
				background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, transparent),color-stop(1, white));
		}
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery.min.js"></script>
</head>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></script>
	<script>
		// DOM Ready
		$(function() {

			var $el, $ps, $up, totalHeight;

			$(".sidebar-box .button").click(function() {

				// IE 7 doesn't even get this far. I didn't feel like dicking with it.

				totalHeight = 0

				$el = $(this);
				$p  = $el.parent();
				$up = $p.parent();
				$ps = $up.find("p:not('.read-more')");

				// measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
				$ps.each(function() {
					totalHeight += $(this).outerHeight();
					// FAIL totalHeight += $(this).css("margin-bottom");
				});

				$up
					.css({
						// Set height to prevent instant jumpdown when max height is removed
						"height": $up.height(),
						"max-height": 9999
					})
					.animate({
						"height": totalHeight
					});

				// fade out read-more
				$p.fadeOut();

				// prevent jump-down
				return false;

			});

		});
	</script>
<body>



	<div class="about-top">
		<div class="wrap">
			<div class="about-box">
			 <div class="cont1 span_2_of_a about_desc">
				       <h2>About Us</h2>
		    			   <p><span></span></p>
				           <p>Before two hearts unite in celebration, a lot goes into preparations. Before the love is declared in public, there are many defining moments of choosing and picking. We at Siritha Wedding Planner will create the dream wedding you have always wished for, without a single detail missing.</p>
				            <p>It’s not easy turning your dream wedding into a reality. With today’s hectic lifestyle, many couples and their families do not have time for the detailed planning and work a beautiful wedding of their dream.</p>
					        <p>We at Siritha Wedding Planner, as the pioneers in Sri Lanka wedding planning work together with you at any stage of the planning process to ensure that your wedding is planned to a perfect, totally enjoyable, stress free and memorable one. After all, it is your wedding. We are there to help you – and to make your day perfect.We at Siritha Wedding Planner, as the pioneers in Sri Lanka wedding planning work together with you at any stage of the planning process to ensure that your wedding is planned to a perfect, totally enjoyable, stress free and memorable one. After all, it is your wedding. We are there to help you – and to make your day perfect.</p>
					        <p>Our counseling alone would provide you the crème de la crème of the industry specialists within your stipulated options and budget. We will give you the freedom and peace of mind to simply enjoy your magnificent day in complete bliss.</p>
					        <div class="image group">
							   <div class="grid images_3_of_1">
								<img src="images/pic.jpg" alt="">
								</div>

									<div class="grid span_2_of_1">
										<h4>Welcome To BRIGHTON </h4>

									          <div class="sidebar-box">
									          	<p>Our Wedding Sri Lanka is the most innovative and the leading Wedding Planner especially for Local and Destination Weddings in Sri Lanka</p>
											<p>Traditionally, planning a wedding has always been a long process which involves a lot of time, money, effort, stress and high risks. Our Wedding Sri Lanka provides a key role in making sure that you enjoy your wedding day as you have dreamed of, and we will make sure that all things will go smoothly according to the plan.</p>
									        <p>Our Wedding Sri Lanka is the dream of Lucky Arsacularatne that became a reality in 2007. Lucky’s vision was to establish the first one stop shop for weddings in Sri Lanka that embodied the highest standards of quality and service. Subsequently, Our Wedding Sri Lanka’s team of Wedding Planners have been incorporating the elements of artistic flair, superb organizational skills and budget management control to create the wedding visions of their clientele.</p>
    										<p>Lucky Arsacularatne was an Overhead Controller at Brandix Group. He has worked in the BPO Industry and Forex markets and was a Quantum Programmer. He was an Event Coordinator of CHOGM (Commonwealth Heads of Government Meeting) 2013, handling the Opening Ceremony, Business Forum, Exhibition and Tour Operator Familiarizing Programs (FAM Tours). Furthermore he was an Event Consultant for the launch of Infotel Exhibition 2015.</p>
								         	  <p class="read-more"><a href="#" class="button">Read More</a></p>


								         </div>
							   		</div>
			  				 </div>
				      </div>
				<div class="lsidebar1 span_1_of_a about_desc">
				      <h2></h2>
				     	<ul class="about-list">
                            <li>
                            	<div class="sidebar-box">
                                <h3>Our Company</h3>
                                <p>In the field of Wedding and Event Management in Sri Lanka, Magical Moments has carved its place as a professional service provider with an inimitable focus on customization, creativity & originality. Our forte in Wedding & Event planning lies in knitting together delicate ideas and weaving them into a perfectly executed event. Be it an event for 50 or 500 guests, your ideas will become our inspiration and that is what will result in a truly momentous celebration. Our wide range of networked partnerships mean that end of the day, our clients enjoy the best benefits- and most savings.
Our philosophy is simple. Intricate planning - personalized touch - perfect execution - professional service. To experience it first hand,do give us a call.</p>
                            	<p class="read-more"><a href="#" class="button">Read More</a></p>
                            </li>
                            <li>
                            	<div class="sidebar-box">
                                <h3>Our Team</h3>
                                <p>Lucky Arsacularatne was an Overhead Controller at Brandix Group. He has worked in the BPO Industry and Forex markets and was a Quantum Programmer. He was an Event Coordinator of CHOGM (Commonwealth Heads of Government Meeting) 2013, handling the Opening Ceremony, Business Forum, Exhibition and Tour Operator Familiarizing Programs (FAM Tours). Furthermore he was an Event Consultant for the launch of Infotel Exhibition 2015.</p>
                            	<p>With a deep desire and passion for Wedding & Event planning since her young age, “Charm” has over the years taken that passion to another level and now enjoys more complex and larger scale event planning.With over a decade of experience in the Apparel Industry, the expertise she brings to the table far surpass client expectations. Heading the Marketing arm for several international, US & European brands of one of Sri Lanka’s largest apparel exporters, she has left behind a flourishing career to pursue this lifelong dream & passion of Wedding & Event planning.</p>
                            	<p>With a flare for fashion , a high sense of quality & service standard along with expertise in Food & Beverage, the team at Magical Moments is well set to handle any event be it a large scale jamboree or a petite birthday gala. With apt negotiation skills to ensure you get the best deal, paired with the ability to handle any crisis situation or tight deadline; this Team holds diverse strengths & capabilities.Meet us and you will see for yourself the passion, enthusiasm, creativity and originality that have amazed many.</p>
                            	<p class="read-more"><a href="#" class="button">Read More</a></p>
                            </li>
                            <li>
                            	<div class="sidebar-box">
                                <h3>Our Pledge</h3>
                                <p>Each event undertaken gets impeccable attention to detail & meticulous planning unique to the chosen theme, while the Team also has a natural ability to transform simple ideas into distinctive and authentic events. With a Professional work ethic and a high degree of integrity, you will find the Team at Magical Moments to be sincere and forthright.</p>
                           		<p>Your special day will becomes ours. And your thoughts & dreams lay the foundation for crafting those truly Magical Moments.Experience a fresh & innovative approach to event planning blended with careful consideration for each client's needs;as we at Magical Moments take Wedding and Event planning to a whole new dimension in Sri Lanka.</p>
                           		<p class="read-more"><a href="#" class="button">Read More</a></p>
                           	</li>
                        </ul>
						</div>
					   <div class="clear"></div>
		   		</div>
		</div>
	</div>
