@extends('layouts.default')

@section('content')

<head>
	<meta charset="UTF-8">
	<title>My Resume</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style>


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
	font-family: 'Be Vietnam Pro', sans-serif;
}

body {
  background: #4E4F50;
  font-size: 14px;
  line-height: 22px;
  color: #808080;
}

.bold {
  font-weight: 700;
  font-size: 20px;
  text-transform: uppercase;
}

.semi-bold {
  font-weight: 500;
  font-size: 16px;
}

.resume {
  width: 800px;
  height: auto;
  display: flex;
  margin: 50px auto;
}

.resume .resume_left {
  width: 280px;
  background: #28956cff;
}

.resume .resume_left .resume_profile {
  width: 100%;
  height: 280px;
}

.resume .resume_left .resume_profile img {
  width: 100%;
  height: 100%;
}

.resume .resume_left .resume_content {
  padding: 0 25px;
}

.resume .title {
  margin-bottom: 20px;
}

.resume .resume_left .bold {
  color: #EC9EC0;
}

.resume .resume_left .regular {
  color: #b1eaff;
}

.resume .resume_item {
  padding: 25px 0;
  border-bottom: 2px solid #b1eaff;
}

.resume .resume_left .resume_item:last-child,
.resume .resume_right .resume_item:last-child {
  border-bottom: 0px;
}

.resume .resume_left ul li {
  display: flex;
  margin-bottom: 10px;
  align-items: center;
}

.resume .resume_left ul li:last-child {
  margin-bottom: 0;
}

.resume .resume_left ul li .icon {
  width: 35px;
  height: 35px;
  background: #fff;
  color: #0bb5f4;
  border-radius: 50%;
  margin-right: 15px;
  font-size: 16px;
  position: relative;
}

.resume .icon i,
.resume .resume_right .resume_hobby ul li i {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.resume .resume_left ul li .data {
  color: #b1eaff;
}

.resume .resume_left .resume_skills ul li {
  display: flex;
  margin-bottom: 10px;
  color: #b1eaff;
  justify-content: space-between;
  align-items: center;
}

.resume .resume_left .resume_skills ul li .skill_name {
  width: 25%;
}

.resume .resume_left .resume_skills ul li .skill_progress {
  width: 60%;
  margin: 0 5px;
  height: 5px;
  background:#7694AB;
  position: relative;
}

.resume .resume_left .resume_skills ul li .skill_per {
  width: 15%;
}

.resume .resume_left .resume_skills ul li .skill_progress span {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background: #fff;
}

.resume .resume_left .resume_social .semi-bold {
  color: #EC9EC0;
  margin-bottom: 3px;
}

.resume .resume_right {
  width: 520px;
  background: #fff;
  padding: 25px;
}

.resume .resume_right .bold {
  color: #EC9EC0;
}

.resume .resume_right .resume_work ul,
.resume .resume_right .resume_education ul {
  padding-left: 40px;
  overflow: hidden;
}

.resume .resume_right ul li {
  position: relative;
}

.resume .resume_right ul li .date {
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 15px;
}

.resume .resume_right ul li .info {
  margin-bottom: 20px;
}

.resume .resume_right ul li:last-child .info {
  margin-bottom: 0;
}

.resume .resume_right .resume_work ul li:before,
.resume .resume_right .resume_education ul li:before {
  content: "";
  position: absolute;
  top: 5px;
  left: -25px;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  border: 2px solid #0bb5f4;
}

.resume .resume_right .resume_work ul li:after,
.resume .resume_right .resume_education ul li:after {
  content: "";
  position: absolute;
  top: 14px;
  left: -21px;
  width: 2px;
  height: 115px;
  background: #0bb5f4;
}

.resume .resume_right .resume_hobby ul {
  display: flex;
  justify-content: space-between;
}

.resume .resume_right .resume_hobby ul li {
  width: 80px;
  height: 80px;
  border: 2px solid #323E42;
  border-radius: 50%;
  position: relative;
  color: #323E42;
}

.resume .resume_right .resume_hobby ul li i {
  font-size: 30px;
}

.resume .resume_right .resume_hobby ul li:before {
  content: "";
  position: absolute;
  top: 40px;
  right: -52px;
  width: 50px;
  height: 2px;
}

.resume .resume_right .resume_hobby ul li:last-child:before {
  display: none;
}

</style>
</head>

<body>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">John Loude Larion</p>
           <p class="regular">Student</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
               Palatiw <br /> Pasig City
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               09503018498
							 09452813574
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data">
               loloudelarion@gmail.com
             </div>
           </li>
         </ul>
       </div>
       </div>
     
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">Quote</p>
           <p class="regular">"The most important thing is to try and inspire people so that they can be great in whatever they want to do"</p>
           <p class="regular">-Kobe Bryant</p>
         </div>
         <ul>
         <il>
           </li>
         </ul>
       </div>
       
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p>zekrai07@facebook</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <p>loloude07@twitter</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <p>Loloudelarion@youtube</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <p>Loudelarion@instagram</p>
             </div>
           </li>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">About me</p>
         </div>
        <p> Hi :) I'm Loude, a student from Pamantasan ng Lungsod ng Pasig, Currently in 3rd Year College. I'm Easy To Approach Person.</p>
<p>I Like Easy To Approach People, Same Interest and Hobbies like mine and I Don't Like Gossip and Story Maker People.</p>
<p>My Childhood Dream is to be a Scientist but when i discover the world of computer i want to be a hacker now.</p>
<p>My Dream Place to visit or live are Faroe Islands, Los Angeles, New York and Singapore.</p>
		</div>

    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">CS 202</p>
         </div>
         <p class="bold">Git Bash</p>
        <p> Git Bash is a Windows program that emulates the Git command line. Bourne Again Shell is abbreviated as Bash. A shell is a terminal program that allows you to communicate with your operating system by typing commands.</p>
		</div>

    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">CS 405</p>
         </div>
         <p class="bold">M.V.C. FRAMEWORK</p>
        <p> Model, View, and Controller (MVC) is a three-part architectural pattern. Model: Takes care of data logic. View: It shows the user the information from the model. The data flow into a model object is controlled by the controller, which also refreshes the display whenever the data changes.</p>
		</div>

			<div class="resume_item resume_about">
	<div class="title">
		 <p class="bold">6 Years From Now?</p>
	 </div>
	 <p>I would see my self in the future, Living my best years in the state, having a stable and job on the fast track to becoming a project manager. That's my top career goal.</p>
 </div>

 </div>
</div>
</div>
</body>
</html>

@stop
