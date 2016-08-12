<!DOCTYPE html>
<html>
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quality of Working Life (QoWL) Results - Confidential</title>
<meta name="description" content="QoWL improve Quality of Working Life of employees and employers" />
<meta name="keywords" content="QoWL, Quality of working life, staff survey, HSE stress, WRQoL scale,  benchmarks" />

<link rel="stylesheet" href="CSS/qowl_css.css" type="text/css" />
<link rel="stylesheet" href="CSS/QoWLTest.css" />
<link rel="stylesheet" href="CSS/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="CSS/iCheck/pruple.css">

<script type="text/javascript" src="../scripts/qowl_pages.js"></script>
<script type ="text/javascript" src="scripts/qoWLTest.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="scripts/SpryAccordion.js" type="text/javascript"></script>
<!-- Google Analytics Async code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5156845-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link href="CSS/SpryAccordion.css" rel="stylesheet" type="text/css">
</head><body onLoad="displayResults()">

<?php
//Get results from the input POST.
$date = filter_input(INPUT_POST, "date");
$dateOfBirth = filter_input(INPUT_POST, "dateOfBirth");
$gender = filter_input(INPUT_POST, "gender");
$ocupation = filter_input(INPUT_POST, "ocupation");
$country = filter_input(INPUT_POST, "country");
$CAW = filter_input(INPUT_POST, "CAW");
$GWB = filter_input(INPUT_POST, "GWB");
$HWI = filter_input(INPUT_POST, "HWI");
$JCS = filter_input(INPUT_POST, "JCS");
$SAW = filter_input(INPUT_POST, "SAW");
$WCS = filter_input(INPUT_POST, "WCS");
$OVL = filter_input(INPUT_POST, "OVL");
$CAWTotal = filter_input(INPUT_POST, "CAWTotal");
$GWBTotal = filter_input(INPUT_POST, "GWBTotal");
$HWITotal = filter_input(INPUT_POST, "HWITotal");
$JCSTotal = filter_input(INPUT_POST, "JCSTotal");
$SAWTotal = filter_input(INPUT_POST, "SAWTotal");
$WCSTotal = filter_input(INPUT_POST, "WCSTotal");
$OVLTotal = filter_input(INPUT_POST, "OVLTotal");
$Q1Answer = filter_input(INPUT_POST, "Q1Answer");
$Q2Answer = filter_input(INPUT_POST, "Q2Answer");
$Q3Answer = filter_input(INPUT_POST, "Q3Answer");
$Q4Answer = filter_input(INPUT_POST, "Q4Answer");
$Q5Answer = filter_input(INPUT_POST, "Q5Answer");
$Q6Answer = filter_input(INPUT_POST, "Q6Answer");
$Q7Answer = filter_input(INPUT_POST, "Q7Answer");
$Q8Answer = filter_input(INPUT_POST, "Q8Answer");
$Q9Answer = filter_input(INPUT_POST, "Q9Answer");
$Q10Answer = filter_input(INPUT_POST, "Q10Answer");
$Q11Answer = filter_input(INPUT_POST, "Q11Answer");
$Q12Answer = filter_input(INPUT_POST, "Q12Answer");
$Q13Answer = filter_input(INPUT_POST, "Q13Answer");
$Q14Answer = filter_input(INPUT_POST, "Q14Answer");
$Q15Answer = filter_input(INPUT_POST, "Q15Answer");
$Q16Answer = filter_input(INPUT_POST, "Q16Answer");
$Q17Answer = filter_input(INPUT_POST, "Q17Answer");
$Q18Answer = filter_input(INPUT_POST, "Q18Answer");
$Q19Answer = filter_input(INPUT_POST, "Q19Answer");
$Q20Answer = filter_input(INPUT_POST, "Q20Answer");
$Q21Answer = filter_input(INPUT_POST, "Q21Answer");
$Q22Answer = filter_input(INPUT_POST, "Q22Answer");
$Q23Answer = filter_input(INPUT_POST, "Q23Answer");
$Q24Answer = filter_input(INPUT_POST, "Q24Answer");
$Q25Answer = filter_input(INPUT_POST, "Q25Answer");
$Q26Answer = filter_input(INPUT_POST, "Q26Answer");
$Q27Answer = filter_input(INPUT_POST, "Q27Answer");
$Q28Answer = filter_input(INPUT_POST, "Q28Answer");
$Q29Answer = filter_input(INPUT_POST, "Q29Answer");
$Q30Answer = filter_input(INPUT_POST, "Q30Answer");
$Q31Answer = filter_input(INPUT_POST, "Q31Answer");
$Q32Answer = filter_input(INPUT_POST, "Q32Answer");
//If the personal detail fields on page 5 were left blank replace the values with null
if ($dateOfBirth == null)
{
	$dateOfBirth = "null";
}
if ($gender == null)
{
	$gender = "null";
}
if ($ocupation == null)
{
	$ocupation = "null";
}
if ($country == null)
{
	$country = "null";
}
//Create the comma separate results string.
$results = $date . ",";
$results .= $dateOfBirth . ",";
$results .= $gender . ",";
$results .= "\"" . $ocupation . "\",";
$results .= "\"" . $country . "\",";
$results .= $CAW . ",";
$results .= $GWB . ",";
$results .= $HWI . ",";
$results .= $JCS . ",";
$results .= $SAW . ",";
$results .= $WCS . ",";
$results .= $OVL . ",";
$results .= $CAWTotal . ",";
$results .= $GWBTotal . ",";
$results .= $HWITotal . ",";
$results .= $JCSTotal . ",";
$results .= $SAWTotal . ",";
$results .= $WCSTotal . ",";
$results .= $OVLTotal . ",";
$results .= $Q1Answer . ",";
$results .= $Q2Answer . ",";
$results .= $Q3Answer . ",";
$results .= $Q4Answer . ",";
$results .= $Q5Answer . ",";
$results .= $Q6Answer . ",";
$results .= $Q7Answer . ",";
$results .= $Q8Answer . ",";
$results .= $Q9Answer . ",";
$results .= $Q10Answer . ",";
$results .= $Q11Answer . ",";
$results .= $Q12Answer . ",";
$results .= $Q13Answer . ",";
$results .= $Q14Answer . ",";
$results .= $Q15Answer . ",";
$results .= $Q16Answer . ",";
$results .= $Q17Answer . ",";
$results .= $Q18Answer . ",";
$results .= $Q19Answer . ",";
$results .= $Q20Answer . ",";
$results .= $Q21Answer . ",";
$results .= $Q22Answer . ",";
$results .= $Q23Answer . ",";
$results .= $Q24Answer . ",";
$results .= $Q25Answer . ",";
$results .= $Q26Answer . ",";
$results .= $Q27Answer . ",";
$results .= $Q28Answer . ",";
$results .= $Q29Answer . ",";
$results .= $Q30Answer . ",";
$results .= $Q31Answer . ",";
$results .= $Q32Answer . "\n";

//Write to file
$myfile = fopen("QoWLResults.csv", "a");

fwrite($myfile, $results);
fclose($myfile);
?>

<div id="wrapper"><!-- #BeginLibraryItem "/Library/qowl_MASTHEAD.lbi" -->
<div id="masthead" >

<div id="strapline"> <a href="../qowl_psychology.html">Psychology </a>&#8226;  <a href="../qowl_scales_overview.html">Research</a> &#8226; <a href="../qowl_survey_overview.html">Surveys</a> &#8226;  <a href="../qowl_services_overview.html">Consultancy</a> </div>

<div id="logo"><a href="../index.html" style="border: 0;"><img src="../images/qowl_logo_clone70px.jpg" alt="Quality of Working Life QoWL Logo" width="224" height="70"/></a></div>
<!-- end masthead -->

<div id="navcontainer">
<ul id="navlist" style="margin:0;">
<!--<li id="active"><a href="#" id="current">Item one</a></li>-->
<li>qowl is staff surveys</li> 
<li id="active"><a href="../index.html" title="Home"> Home</a></li>
<li><a href="../qowl_services_overview.html" title="Services Overview">Services</a></li>
<li><a href="../qowl_surveys_overview.html" title="Surveys">Surveys</a></li>
<li><a href="../qowl_scales_overview.html" title="Our Psychometric Scales">Scales</a></li>
<li><a href="../qowl_faq.html" title="Frequently Asked Questions">FAQ</a></li>
<li><a href="../qowl_contact_message.html" title="Contact us">Contact us</a></li>
</ul>
</div> <!--navcontainer-->
</div> <!--masthead-->


<!-- start of freefind search box html -->
<div id="Layer1" style=" position:relative;  width: 140px; top: -1.15em; right:0px; z-index:8; margin:0; padding:0; float:right; ">
  		<form style="padding:0; margin: 0;" action="http://search.freefind.com/find.html" method="get" accept-charset="utf-8" target="_self">
        		<input type="hidden" name="si" value="80569234">
		<input type="hidden" name="pid" value="r">
		<input type="hidden" name="n" value="0">
		<input type="hidden" name="_charset_" value="">
		<input type="hidden" name="bcd" value="&#247;">
         <input size="10" style="background-color: #c0b0c6; font-size:75%; padding:0; margin:0;  " id="query" name="query" />  
	     <input type="submit" value="Search" style="font-weight: bold; color:#6c1e88; font-size:60%;padding:0; margin:0; height:18px;  " />  
		</form>
</div>
<!-- end search -->
<!-- #EndLibraryItem --><div id="gencontent">



 <div id="pageName">
 <!--[if lt IE 7 ]> <p style="line-height:5px; margin-top: -20px; font-size:5px;">&nbsp;</p> <![endif]--> <!-- fixes padding problem in ie 6-->
   <h1>Your QoWL Profile</h1> </div>

 <div class="readable_long_text">
   <p>Quality of Working Life (QoWL) is that part of your overall quality of life that is concerned with work. It's more than just job satisfaction or happiness at work, but the widest context in which an employee could evaluate the influence of work on their life.</p>
   <p>Below  you can find your overall QoWL score and scores for each of the six sub-categories. Underneath the overall results graph you can find comments based on your scores. Click on each heading to view comments for each sub-category. Click the Print Report button at the end of the page to print out your QoWL Profile.</p>
       <div id="Accordion1" class="Accordion" tabindex="0">
       <div class="AccordionPanel">
     <div class="AccordionPanelTab">
       <h2><img src="images/AmberLight.png" id="OVLImageLeft" class="resultsImageLeft" alt="Amber Light">Overall Results<img src="images/AmberLight.png" id="OVLImageRight" class="resultsImageRight" alt="Amber Light"></h2><h6>Click for more details</h6></div>
     <div class="AccordionPanelContent">
      <p> The graph below displays the numeric results of your QoWL profile. All scores are out of ten. 1-3 is a low score, 4-6 is an average score and 7-10 is a high score.</p>
      <svg class="chart1"></svg>
      <div id="OverallContent">
      <p>Your overall quality of working life score is close to the average for the majority of people in our benchmark sample. The result for this factor, which takes an average of all the other WRQoL factors, should provide you with a good indication of how you feel generally about your work.</p>
<p>Although your overall quality of working life score is within the average range, you will need to look in detail at the other QoWL factors that are contributing to your overall QoWL score to see which of the QoWL sub factors it will be most useful to review to make your quality of work life even better.</p>
<p>The detailed information that follows in this report will help decide which areas of your working life might need to be addressed, and which only need to be monitored for now.</p>
<p>By reading the full report, you will get a clearer idea of what makes you feel good and bad at work. If you carefully consider the advice given you will then be able to decide what steps you might want to take to make your quality of working life even better.</p>
	</div>
      </div>
   </div>
         
         <div class="AccordionPanel">
           <div class="AccordionPanelTab">
             <h2><img src="images/AmberLight.png" id="CAWImageLeft" class="resultsImageLeft" alt="Amber Light">Control at Work (CAW) <img src="images/AmberLight.png" id="CAWImageRight" class="resultsImageRight" alt="Amber Light"></h2><h6>Click for more details</h6>
           </div>
           <div class="AccordionPanelContent" id="CAWContent">
             <h2>This is to do with how far you feel that you are involved in decisions that affect you at work</h2>
<p>Your Control at Work score is similar to the average from our benchmark sample, indicating that you probably feel that you have a reasonable amount of control over what you do at work and that you can influence key aspects of your work environment.</p>
<p>Control at Work (CAW) assesses how far you feel that you have an appropriate level of control within your work environment. Your perception of control will be influenced by various aspects of work, including the opportunity to contribute to the process of decision making about things that affect you. Perception of personal control can strongly affect both an individual’s health and their stress levels.</p>
               
               <p>Having a good sense of control you have at work has been shown to have a strong influence on both job satisfaction and general well-being.</p>
               <p>Your sense of control will tend to vary over time – you may feel at times that your sense of control is greatly under threat, and so a little reflection on how you might achieve some further control (or accept that it may not be so important) may be worthwhile. There may be some areas in which you seek more control, and others where you are less concerned.</p>
               <p>As with other aspects of your overall quality of life, it pays to monitor and actively manage your sense of control at work so you can take action when needed to head off problems. </p>
           </div>
         </div>
<div class="AccordionPanel">
          <div class="AccordionPanelTab">
       <h2><img src="images/AmberLight.png" id="GWBImageLeft" width="43" height="42" class="resultsImageLeft" alt="Amber Light">General Well-Being (GWB)
         <img src="images/AmberLight.png" id="GWBImageRight" width="43" height="42" class="resultsImageRight" alt="Amber Light"> </h2><h6>Click for more details</h6>
     </div>
     <div class="AccordionPanelContent" id="GWBContent">
<h2>How much you agree that you feel generally content with life as a whole</h2>
       
<p>Your score is within the average range of scores attained by people in our benchmark sample for the GWB factor. This means you probably feel fine most of the time.</p>
       
<p>General Well-being (GWB) assesses the extent to which you feel good and reflects your psychological well-being. Your general well-being is 	influenced by your work, what happens outside of work and even your personality. Your general well-being both influences, and is influenced by your work.</p>
       
<p>Because your sense of General Well-Being underpins most of the other aspects of your working life, it might be worthwhile in the future to strive for above average scores – feeling good helps you deal with other aspects at work which are less than satisfactory. The better you feel physically and psychologically, the more resilient you will be if faced with challenges in the future.</p>

<p>For example, you can think about what you might want to do to maintain your sense of well-being – how much time is devoted to looking after your own well-being? To make things even better, perhaps you could look at your stress or time management. Do you try to consistently take breaks, take time to relax, avoid rushing and doing just one thing at a time? People tend to know the theory quite well but can often not get around to putting those ideas into action.</p>
     </div>
 </div>
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">
        <h2><img src="images/AmberLight.png" id="HWIImageLeft" width="43" height="42" class="resultsImageLeft" alt="Amber Light">Home-Work Interface (HWI)<img src="images/AmberLight.png" id="HWIImageRight" width="43" height="42" class="resultsImageRight" alt="Amber Light"></h2><h6>Click for more details</h6>
     </div>
     <div class="AccordionPanelContent" id="HWIContent"><h2>How far you think the organisation understands and supports you with pressures outside of work</h2>
     
<p>Your score is similar to the average scores attained by the majority of people in our benchmark sample, indicating that you are reasonably satisfied with your Home-Work Interface, although you may still have some concerns.</p>
     
<p>Home-Work Interface (HWI) is about having a measure of control over when, where and how you work. It is achieved when you feel your work and home life are mutually beneficial to each other. Your Home-Work Interface is particularly enhanced when you believe that any problems you have outside of work that affect your employment will be understood by people and processes at work.</p>

<p>It might be useful to consider what threatens your sense of balance at times, and decide whether it would be helpful to take some action to review the ways your home-life and work-life interact. The home-work interface can be affected by a wide range of factors such as childcare shift patterns, travel to and from work and hobbies.</p>

<p>Some attention to the basics tends to be worthwhile – for example, pacing your work to avoid feeling too tired at the end of the day, maintaining hobbies and interests outside work, and switching off from work when you are at home – you probably have other ideas that are relevant, so take stock of your situation and check whether there are actions you could usefully take to protect your sense of balance.</p>
</div>
 </div>
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">
       <h2><img src="images/AmberLight.png" id="JCSImageLeft" width="43" height="42" class="resultsImageLeft" alt="Amber Light">Job and Career Satisfaction (JCS)<img src="images/AmberLight.png" id="JCSImageRight" width="43" height="42" class="resultsImageRight" alt="Amber Light"></h2><h6>Click for more details</h6>
     </div>
     <div class="AccordionPanelContent" id="JCSContent"><h2>This is to do with the extent to which you are content with your job and prospects at work</h2>
 
<p>Your JCS score is in the average score range attained by the majority of people in our benchmark sample.</p>

<p>The Job and Career Satisfaction (JCS) factor relates to whether you feel the workplace provides you with the best things at work - the things that make you feel good, such as a sense of achievement and fulfilment of your potential. The score of the Job and Career Satisfaction factor is often closely linked with the assessment of the overall quality of working life.</p>

<p>Job satisfaction has a substantial impact on your judgement of your overall quality of working life, and consequently the general quality of your life as a whole. Although you have achieved an average JCS score, you might still want to consider the degree to which your job is giving you what you want from work and identify those aspects of your job that sometimes make you feel unfulfilled, de-motivated or frustrated.</p>

<p>A key aspect of the JCS factor is whether you feel appreciated by your manager and whether your manager helps you develop in the way you feel you should. If you are clear what you want from your job, then you can take steps to ensure that your needs and wants are considered. That way you should be able to maintain and improve your Job and Career Satisfaction.</p></div>
   </div>
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">
       <h2><img src="images/AmberLight.png" id="SAWImageLeft" width="43" height="42" class="resultsImageLeft" alt="Amber Light">Stress at Work (SAW)
         <img src="images/AmberLight.png" id="SAWImageRight" width="43" height="42" class="resultsImageRight" alt="Amber Light"></h2><h6>Click for more details</h6>
     </div>
     <div class="AccordionPanelContent" id="SAWContent"><h2>The extent to which you see work pressures and demands as acceptable and not excessive or stressful</h2>
     
<p>Your SAW score is similar to the average attained by the majority of people in our benchmark sample, indicating that work pressures and demands are generally manageable for you.</p>
     
<p>The UK Health & Safety Executive defines stress as “the adverse reaction people have to excessive pressure or other types of demand placed on them”. Work pressures and demands can be a positive of aspect of our work experience, providing challenge and stimulation, but when people see them as excessive and beyond their ability to cope, they are likely to feel overloaded and stressed. The Stress at Work (SAW) factor provides an indication of the pressures and demands people feel are placed on them and whether these demands are excessive or not.</p>

<p>The Stress at Work factor taps into the extent to which you feel you have too many demands at work. Your ability to cope with stress will depend on how well you look after your physical, mental and spiritual needs, your general resilience to stress, and your stress management skills.</p>
<p>If you are feeling overly stressed at work, although friends and family may offer you support, your manager has a legal responsibility to ensure your job does not make more demands of you than you can deal with. Human Resources and Union representatives may also be of help.</p></div>
   </div>
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">
       <h2> <img src="images/AmberLight.png" id="WCSImageLeft" width="43" height="42" class="resultsImageLeft" alt="Amber Light">Working Conditions (WCS)
       <img src="images/AmberLight.png" id="WCSImageRight" width="43" height="42" class="resultsImageRight" alt="Amber Light"></h2><h6>Click for more details</h6>
       </div>
     <div class="AccordionPanelContent" id="WCSContent">
       <h2>This is the extent to which you are satisfied with the conditions in which you work</h2>
       
       <p>Your score is in the average range of scores attained by the people in our benchmark sample. This suggests your working conditions are likely to be generally acceptable, and any specific problems are probably manageable most of the time.</p>
       
<p>The WCS factor shows the extent to which you are satisfied with the resources, working conditions and security necessary to do your job effectively. This includes aspects of the work environment such as noise and temperature, shift patterns and working hours, pay, tools and equipment, safety and security. Although people appreciate good working conditions, often making them much better than required does not substantially improve overall quality of life. However, if people feel they do not have the basic resources required to do their job properly, they can report lower quality of working life.</p>

<p>Although people might often put up with poor working conditions, they can still make a large negative impact on overall quality of life.</p>
<p>Adequate working conditions are often covered by governmental policies and regulations and it may be worthwhile finding out more about this in your area.</p>
     </div>
   </div>
      </div> 
      <p> You have now completed the Quality of Working Life assessment. You can click the Print Report button below to print this report or to save it as a PDF. Be aware that once you navigate away from this page these results will no longer be available. Please feel free to take this assessment again whenever you feel it would be helpful. Thank you for completing this assessment.</p>
      
      <form method="post" action="Feedback.php">
      <h2>Please provide us with your feedback!</h2>
      <p>Thank you for completing this survey. We would appreciate any comments you wish to make about your experience of taking the survey, especially if you experienced any difficulties. Please provide your feeback by filling out the feedback form:</p>
      <a href="https://docs.google.com/forms/d/1_3dmBgLmceM6lWRBXovCTzRTRe2ePeKhfjnV8hJF1Ws/viewform?usp=send_form">Feedback form.</a>
      <a href="https://docs.google.com/forms/d/1_3dmBgLmceM6lWRBXovCTzRTRe2ePeKhfjnV8hJF1Ws/viewform?usp=send_form"> 
      <div class="QoWLTestButtons">
      <a href="#" class="printButton" title="Print" onClick="window.print()"><span class="displace">Print</span></a>
 	  <a href="#" class="finishButton" title="End Test" onClick="confirmReturnToMenu(2)"><span class="displace">End Test</span></a>
    </div>
    </div>
    <div id="OverlayWarning">
  <div>
   <p id="DlgContentWarning">Content Goes Here</p>
   <input id="btnOk"
       type="button"
       value="OK"
       onclick="DlgWarningHide('OK2')" />
   <input id="btnCancel"
       type="button"
       value="Cancel"
       onclick="DlgWarningHide('Cancel')" />
  </div>
  </div>
  <div class="print">
  <div class="printPage">
  <div class="printheader"><img class="QoWLTestImgLeft" src="../images/qowl_logo_clone70px.jpg" alt="Quality of Working Life QoWL Logo" width="224" height="70"/></a><h1>Your QoWL Profile</h1></div>
 <p>Quality of Working Life (QoWL) is that part of your overall quality of life that is concerned with work. It's more than just job satisfaction or happiness at work, but the widest context in which an employee could evaluate the influence of work on their life.</p>
   <p>Below  you can find your QoWL scores and comments based on these for each of the QoWL sub-categories.</p>
   <h3>Privacy</h3>

<p>Your data will be kept confidential and no information will be released that might identify any individual. None of the data stored will be personally identifiable. For more details see our Privacy Policy.</p>
  	<h2 id="OVLScore"></h2><h2><img src="images/AmberLight.png" id="OVLPrintImageLeft" class="resultsImageLeft" alt="Amber Light"> Overall Score<img src="images/AmberLight.png" id="OVLPrintImageRight" class="resultsImageRight" alt="Amber Light"></h2>
  	<p>The graph below displays the numeric results of your QoWL profile. All scores are out of ten. 1-3 is a low score, 4-6 is an average score and 7-10 is a high 	score.</p>
   <svg class="chart2"></svg>
   <div id="printOverallContent">
<p>Your overall quality of working life score is close to the average for the majority of people in our benchmark sample. The result for this factor, which takes an average of all the other WRQoL factors, should provide you with a good indication of how you feel generally about your work.</p>

<p>Although your overall quality of working life score is within the average range, it should still be helpful to look in detail at the other QoWL factors that are contributing to your overall QoWL score to see if one or more of the QoWL sub factors are below average and so warrant attention.</p>

<p>The detailed information that follows in this report will help decide which areas of your working life might need to be addressed, and which only need to be monitored for now.</p>

<p>By reading the full report, you will get a clearer idea of what makes you feel good and bad at work; then you can decide if there are any changes you could make which would make your QoWL even better.</p>   
    </div>
    
  </div>
  <div class="printPage">
  <div class="printheader"><img class="QoWLTestImgLeft" src="../images/qowl_logo_clone70px.jpg" alt="Quality of Working Life QoWL Logo" width="224" height="70"/></a><h1>Your QoWL Profile</h1></div>
  <h2><img src="images/AmberLight.png" id="CAWPrintImageLeft" class="resultsImageLeft" alt="Amber Light">Control at Work (CAW)<img src="images/AmberLight.png" id="CAWPrintImageRight" class="resultsImageRight" alt="Amber Light"></h2>
  <div id="CAWPrint"><h3>This is to do with how far you feel that you are involved in decisions that affect you at work</h3>
<p>Your Control at Work score is similar to the average from our benchmark sample, indicating that you probably feel that you have a reasonable amount of control over what you do at work and that you can influence key aspects of your work environment.</p>
<p>Control at Work (CAW) assesses how far you feel that you have an appropriate level of control within your work environment. Your perception of control will be influenced by various aspects of work, including the opportunity to contribute to the process of decision making about things that affect you. Perception of personal control can strongly affect both an individual’s health and their stress levels.</p>
               
               <p>Having a good sense of control you have at work has been shown to have a strong influence on both job satisfaction and general well-being.</p>
               <p>Your sense of control will tend to vary over time – you may feel at times that your sense of control is greatly under threat, and so a little reflection on how you might achieve some further control (or accept that it may not be so important) may be worthwhile. There may be some areas in which you seek more control, and others where you are less concerned.</p>
               <p>As with other aspects of your overall quality of life, it pays to monitor and actively manage your sense of control at work so you can take action when needed to head off problems. </p></div>
               <br>
<br>
<br>
<br>
<br>
  <h2><img src="images/AmberLight.png" id="GWBPrintImageLeft" class="resultsImageLeft" alt="Amber Light">General Well-Being (GWB)<img src="images/AmberLight.png" id="GWBPrintImageRight" class="resultsImageRight" alt="Amber Light"></h2>
  <div id="GWBPrint"><h3>How much you agree that you feel generally content with life as a whole</h3>
       
<p>Your score is within the average range of scores attained by people in our benchmark sample for the GWB factor. This means you probably feel fine most of the time.</p>
       
<p>General Well-being (GWB) assesses the extent to which you feel good and reflects your psychological well-being. Your general well-being is influenced by your work, what happens outside of work and even your personality. Your general well-being both influences, and is influenced by your work.</p>
       
<p>Because your sense of General Well-Being underpins most of the other aspects of your working life, it might be worthwhile in the future to strive for above average scores – feeling good helps you deal with other aspects at work which are less than satisfactory. The better you feel physically and psychologically, the more resilient you will be if faced with challenges in the future.</p>

<p>For example, you can think about what you might want to do to maintain your sense of well-being – how much time is devoted to looking after your own well-being? To make things even better, perhaps you could look at your stress or time management. Do you try to consistently take breaks, take time to relax, avoid rushing and doing just one thing at a time? People tend to know the theory quite well but can often not get around to putting those ideas into action.</p></div>
  </div>
  <div class="printPage">
  <div class="printheader"><img class="QoWLTestImgLeft" src="../images/qowl_logo_clone70px.jpg" alt="Quality of Working Life QoWL Logo" width="224" height="70"/></a><h1>Your QoWL Profile</h1></div>
  <h2><img src="images/AmberLight.png" id="HWIPrintImageLeft" class="resultsImageLeft" alt="Amber Light">Home-Work Interface (HWI)<img src="images/AmberLight.png" id="HWIPrintImageRight" class="resultsImageRight" alt="Amber Light"></h2>
  <div id="HWIPrint"><h3>How far you think the organisation understands and supports you with pressures outside of work</h3>
     
<p>Your score is similar to the average scores attained by the majority of people in our benchmark sample, indicating that you are reasonably satisfied with your Home-Work Interface, although you may still have some concerns.</p>
     
<p>Home-Work Interface (HWI) is about having a measure of control over when, where and how you work. It is achieved when you feel your work and home life are mutually beneficial to each other. Your Home-Work Interface is particularly enhanced when you believe that any problems you have outside of work that affect your employment will be understood by people and processes at work.</p>

<p>It might be useful to consider what threatens your sense of balance at times, and decide whether it would be helpful to take some action to review the ways your home-life and work-life interact. The home-work interface can be affected by a wide range of factors such as childcare shift patterns, travel to and from work and hobbies.</p>

<p>Some attention to the basics tends to be worthwhile – for example, pacing your work to avoid feeling too tired at the end of the day, maintaining hobbies and interests outside work, and switching off from work when you are at home – you probably have other ideas that are relevant, so take stock of your situation and check whether there are actions you could usefully take to protect your sense of balance.</p></div>
<br>
<br>
<br>
<br>
<br>
  <h2><img src="images/AmberLight.png" id="JCSPrintImageLeft" class="resultsImageLeft" alt="Amber Light">Job and Career Satisfaction (JCS)<img src="images/AmberLight.png" id="JCSPrintImageRight" class="resultsImageRight" alt="Amber Light"></h2>
  <div id="JCSPrint"><h3>This is to do with the extent to which you are content with your job and prospects at work</h3>
 
<p>Your JCS score is in the average score range attained by the majority of people in our benchmark sample.</p>

<p>The Job and Career Satisfaction (JCS) factor relates to whether you feel the workplace provides you with the best things at work - the things that make you feel good, such as a sense of achievement and fulfilment of your potential. The score of the Job and Career Satisfaction factor is often closely linked with the assessment of the overall quality of working life.</p>

<p>Job satisfaction has a substantial impact on your judgement of your overall quality of working life, and consequently the general quality of your life as a whole. Although you have achieved an average JCS score, you might still want to consider the degree to which your job is giving you what you want from work and identify those aspects of your job that sometimes make you feel unfulfilled, de-motivated or frustrated.</p>

<p>A key aspect of the JCS factor is whether you feel appreciated by your manager and whether your manager helps you develop in the way you feel you should. If you are clear what you want from your job, then you can take steps to ensure that your needs and wants are considered. That way you should be able to maintain and improve your Job and Career Satisfaction.</p></div>
  </div>
  <div class="printPage" id="lastPage">
 <div class="printheader"><img class="QoWLTestImgLeft" src="../images/qowl_logo_clone70px.jpg" alt="Quality of Working Life QoWL Logo" width="224" height="70"/></a><h1>Your QoWL Profile</h1></div>
  <h2><img src="images/AmberLight.png" id="SAWPrintImageLeft" class="resultsImageLeft" alt="Amber Light">Stress at Work (SAW)<img src="images/AmberLight.png" id="SAWPrintImageRight" class="resultsImageRight" alt="Amber Light"></h2>
  <div id="SAWPrint"><h3>The extent to which you see work pressures and demands as acceptable and not excessive or stressful</h3>
     
<p>Your SAW score is similar to the average attained by the majority of people in our benchmark sample, indicating that work pressures and demands are generally manageable for you.</p>
     
<p>The UK Health & Safety Executive defines stress as “the adverse reaction people have to excessive pressure or other types of demand placed on them”. Work pressures and demands can be a positive of aspect of our work experience, providing challenge and stimulation, but when people see them as excessive and beyond their ability to cope, they are likely to feel overloaded and stressed. The Stress at Work (SAW) factor provides an indication of the pressures and demands people feel are placed on them and whether these demands are excessive or not.</p>

<p>The Stress at Work factor taps into the extent to which you feel you have too many demands at work. Your ability to cope with stress will depend on how well you look after your physical, mental and spiritual needs, your general resilience to stress, and your stress management skills.</p>
<p>If you are feeling overly stressed at work, although friends and family may offer you support, your manager has a legal responsibility to ensure your job does not make more demands of you than you can deal with. Human Resources and Union representatives may also be of help.</p></div>
<br>
<br>
<br>
<br>
  <h2><img src="images/AmberLight.png" id="WCSPrintImageLeft" class="resultsImageLeft" alt="Amber Light">Working Conditions (WCS)<img src="images/AmberLight.png" id="WCSPrintImageRight" class="resultsImageRight" alt="Amber Light"></h2>
  <div id="WCSPrint"><h3>This is the extent to which you are satisfied with the conditions in which you work</h3>
       
       <p>Your score is in the average range of scores attained by the people in our benchmark sample. This suggests your working conditions are likely to be generally acceptable, and any specific problems are probably manageable most of the time.</p>
       
<p>The WCS factor shows the extent to which you are satisfied with the resources, working conditions and security necessary to do your job effectively. This includes aspects of the work environment such as noise and temperature, shift patterns and working hours, pay, tools and equipment, safety and security. Although people appreciate good working conditions, often making them much better than required does not substantially improve overall quality of life. However, if people feel they do not have the basic resources required to do their job properly, they can report lower quality of working life.</p>

<p>Although people might often put up with poor working conditions, they can still make a large negative impact on overall quality of life.</p>
<p>Adequate working conditions are often covered by governmental policies and regulations and it may be worthwhile finding out more about this in your area.</p>

</div>
<br>
<br>
<p> You have now completed the Quality of Working Life assessment. For more information visit the QoWL website at www.qowl.co.uk/. Please feel free to take this assessment again as and when you feel it would be helpful. Thank you for completing this assessment. 
<br>
<!--<p>Name:______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:_____________</p>-->
  </div>
  </div>
<!--end of table for main text area, must come before end of content div-->
</div>
<!--end content -->
<!--end navBar div -->
<!-- FOOTER GOES HERE --><div id="footer"><!-- #BeginLibraryItem "/Library/qowl_FOOTER.lbi" --><!--Start Google Adsense div -->
<div id="Gad">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-5039212585792455";
/* Adsense_footer */
google_ad_slot = "1012954014";
google_ad_width = 728;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<!--End Google Adsense div -->
<div id="footer_area">
<div id="siteInfo">
   
    <div id="footer_logo">
        <a href="../index.html"><img src="../images/qowl_logo_clone_motif_S.png" alt="Small QoWL bob logo" width="21" height="21" border="0" /></a>
    </div><!-- footer_logo-->

  <div id="footer_text_items"><a>About Us</a> | <a>Site Map</a> | <a>Privacy Policy</a> | <a>Contact Us</a> | <a>Bookmark this site</a> |
    &copy;2015 QoWL </div> 
    <!-- footer text items-->
    
</div> <!-- end of siteInfo  -->
</div> <!--END footer_area--><!-- #EndLibraryItem --></div>
</div>
<p>&nbsp;</p>
<!-- qowl -->
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1", { useFixedPanelHeights: false });
</script>
</body>
</html>
