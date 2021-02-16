<?php


?>
<html>
    <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Courses</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,900|Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/course.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c3d6a706aa.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<style>
  <body>
    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%; /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%; /* IE10 */
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%; /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    select[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }
      .col-25 {
        margin-bottom: 20px;
      }
    }
    </style>
    </head>
    <body>


    <div class="row"  style="padding:100px 300px;">
      <div class="col-50">
        <div class="container" >
            <form  action="processasfacultyreg.php" method="post" style="padding: 25px;">

            <div class="row" >
              <div class="col-25">
                <h3 style="text-align: center;margin:20px 10px;font-family: lato;">Checkout Form</h3>


                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="fname" name="name" placeholder="John M. Doe">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="john@example.com">
                <label for="role"><i class="fa fa-envelope"></i> Designation</label>
                <input type="text" id="fname" name="designation" placeholder="Asst professor">
                <label for="fname"><i class="fa fa-envelope"></i> Image (Photo)</label>
                <input type="file" id="fname" name="image" placeholder="upload your image">
                <label for="wlink"><i class="fa fa-envelope"></i> Work Link (Optional)</label>
                <input type="text" id="fname" name="worklink" placeholder="Enter Work Link">
                <label for="fname"><i class="fa fa-user"></i> Skills</label>
                <input type="text" id="fname" name="skill" placeholder="Enter your skills">
                <label for="fname"><i class="fa fa-user"></i> Department / Program</label>
                <select type="text" id="sub" name="program">
                    <option value="Computer Science Engineering">Computer Science Engineering</option>
                    <option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
                    <option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    </select>
                <label for="fname"><i class="fa fa-user"></i> Qualification</label>
                <select type="text" id="sub" name="qualification">
                    <option value="UG">UG</option>
                    <option value="PG">PG</option>
                    <option value="PhD">PhD</option>
                    </select>
                <label for="fname"><i class="fa fa-user"></i> Specialisation</label>
                <input type="text" id="fname" name="specialisation" placeholder="Enter your specialisation">
                <label for="fname"><i class="fa fa-user"></i> Total Experience in Teaching</label>
                <input type="text" id="fname" name="teaching" placeholder="Enter years of experience">
                <label for="fname"><i class="fa fa-user"></i> Total Experience in Industry</label>
                <input type="text" id="fname" name="industry" placeholder="Enter years of experience">
                <label for="fname"><i class="fa fa-user"></i> Total Experience in Research</label>
                <input type="text" id="fname" name="research" placeholder="Enter years of experience">
                <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
                <label for="subject"><i class="fa fa-user"></i> Subject</label>
                <select type="text" id="sub" name="subject">
                    <option value="CSE/Linear Algebra & Complex Analysis">CSE/Linear Algebra & Complex Analysis</option>
<option value="CSE/Discrete Computational Structures">CSE/Discrete Computational Structures</option>
<option value="CSE/Switching Theory and Logic Design">CSE/Switching Theory and Logic Design</option>
<option value="CSE/Data Structures">CSE/Data Structures</option>
<option value="CSE/Electronics Devices & Circuits">CSE/Electronics Devices & Circuits</option>
<option value="CSE/Life Skills">CSE/Life Skills</option>
<option value="CSE/Data Structures Lab">CSE/Data Structures Lab</option>
<option value="CSE/Electronics Circuits Lab">CSE/Electronics Circuits Lab</option>
<option value="CSE/Probability Distributions,Transforms and Numerical Methods">CSE/Probability Distributions,Transforms and Numerical Methods</option>
<option value="CSE/Computer Organization and Architecture">CSE/Computer Organization and Architecture</option>
<option value="CSE/Operating Systems">CSE/Operating Systems</option>
<option value="CSE/Object Oriented Design and Programming">CSE/Object Oriented Design and Programming</option>
<option value="CSE/Principles of Database Design">CSE/Principles of Database Design</option>
<option value="CSE/Business Economics">CSE/Business Economics</option>
<option value="CSE/Free and Open Source Software Lab">CSE/Free and Open Source Software Lab</option>
<option value="CSE/Digital Systems Lab">CSE/Digital Systems Lab</option>
<option value="CSE/Theory of Computation">CSE/Theory of Computation</option>
<option value="CSE/System Software">CSE/System Software</option>
<option value="CSE/Microprocessors and Microcontrollers">CSE/Microprocessors and Microcontrollers</option>
<option value="CSE/Data Communication">CSE/Data Communication</option>
<option value="CSE/Graph Theory and Combinatorics">CSE/Graph Theory and Combinatorics</option>
<option value="CSE/Soft Computing">CSE/Soft Computing</option>
<option value="CSE/Design Project">CSE/Design Project</option>
<option value="CSE/System Software Lab">CSE/System Software Lab</option>
<option value="CSE/Application Software Development Lab">CSE/Application Software Development Lab</option>
<option value="CSE/Design and Analysis of Algorithms">CSE/Design and Analysis of Algorithms</option>
<option value="CSE/Compiler Design">CSE/Compiler Design</option>
<option value="CSE/Computer Networks">CSE/Computer Networks</option>
<option value="CSE/Software Engineering and Project Management">CSE/Software Engineering and Project Management</option>
<option value="CSE/Principles of Management">CSE/Principles of Management</option>
<option value="CSE/Web Technologies">CSE/Web Technologies</option>
<option value="CSE/Microprocessor Lab">CSE/Microprocessor Lab</option>
<option value="CSE/Comprehensive Exam">CSE/Comprehensive Exam</option>
<option value="CSE/Computer Graphics">CSE/Computer Graphics</option>
<option value="CSE/Programming Paradigms">CSE/Programming Paradigms</option>
<option value="CSE/Computer System Architecture">CSE/Computer System Architecture</option>
<option value="CSE/Distributed Computing">CSE/Distributed Computing</option>
<option value="CSE/Cryptography and Network Security">CSE/Cryptography and Network Security</option>
<option value="CSE/Machine Learning">CSE/Machine Learning</option>
<option value="CSE/Seminar & Project Preliminary">CSE/Seminar & Project Preliminary</option>
<option value="CSE/Compiler Design Lab">CSE/Compiler Design Lab</option>
<option value="CSE/Data Mining and Ware Housing">CSE/Data Mining and Ware Housing</option>
<option value="CSE/Embedded Systems">CSE/Embedded Systems</option>
<option value="CSE/Principles of Information Security">CSE/Principles of Information Security</option>
<option value="CSE/Disaster Management">CSE/Disaster Management</option>
<option value="CSE/Project">CSE/Project</option>
<option value="ECE/Linear Algebra & Complex Analysis">ECE/Linear Algebra & Complex Analysis</option>
<option value="ECE/Network Thoery">ECE/Network Thoery</option>
<option value="ECE/Solid State Devices">ECE/Solid State Devices</option>
<option value="ECE/Electronic Circuits">ECE/Electronic Circuits</option>
<option value="ECE/Logic Circuit Design">ECE/Logic Circuit Design</option>
<option value="ECE/Business Economics">ECE/Business Economics</option>
<option value="ECE/Electronic Devices & Circuits Lab">ECE/Electronic Devices & Circuits Lab</option>
<option value="ECE/Electronic Design Automation Lab">ECE/Electronic Design Automation Lab</option>
<option value="ECE/Probability Distributions, Transforms and Numerical">ECE/Probability Distributions, Transforms and Numerical</option>
<option value="ECE/Signals & Systems">ECE/Signals & Systems</option>
<option value="ECE/Analog Integrated Circuits">ECE/Analog Integrated Circuits</option>
<option value="ECE/Computer Organisation">ECE/Computer Organisation</option>
<option value="ECE/Analog Communication Engineering">ECE/Analog Communication Engineering</option>
<option value="ECE/Life Skills">ECE/Life Skills</option>
<option value="ECE/Analog Integrated Circuits Lab">ECE/Analog Integrated Circuits Lab</option>
<option value="ECE/Logic Circuit Design Lab">ECE/Logic Circuit Design Lab</option>
<option value="ECE/Digital Signal Processing">ECE/Digital Signal Processing</option>
<option value="ECE/Applied Electromagnetic Theory">ECE/Applied Electromagnetic Theory</option>
<option value="ECE/Microprocessors & Microcontrollers">ECE/Microprocessors & Microcontrollers</option>
<option value="ECE/Power Electronics & Instrumentation">ECE/Power Electronics & Instrumentation</option>
<option value="ECE/Principles Of Management">ECE/Principles Of Management</option>
<option value="ECE/Elective 1:Biomedical Engineering">ECE/Elective 1:Biomedical Engineering</option>
<option value="ECE/Design Project">ECE/Design Project</option>
<option value="ECE/Digital Signal Processing Lab">ECE/Digital Signal Processing Lab</option>
<option value="ECE/Power Electronics And & Instrumentation Lab">ECE/Power Electronics And & Instrumentation Lab</option>
<option value="ECE/Digital Communication">ECE/Digital Communication</option>
<option value="ECE/VLSI">ECE/VLSI</option>
<option value="ECE/Antenna & Wave Propagation">ECE/Antenna & Wave Propagation</option>
<option value="ECE/Embedded Systems">ECE/Embedded Systems</option>
<option value="ECE/Object Oriented Programming">ECE/Object Oriented Programming</option>
<option value="ECE/Elective 2: Robotics">ECE/Elective 2: Robotics</option>
<option value="ECE/Communication Engineering Lab (Analog & Digital)">ECE/Communication Engineering Lab (Analog & Digital)</option>
<option value="ECE/Comprehensive Exam">ECE/Comprehensive Exam</option>
<option value="ECE/Microcontroller Lab">ECE/Microcontroller Lab</option>
<option value="ECE/Information Theory & Coding">ECE/Information Theory & Coding</option>
<option value="ECE/Microwave & Radar Engg">ECE/Microwave & Radar Engg</option>
<option value="ECE/Optical Communication">ECE/Optical Communication</option>
<option value="ECE/Computer Communication">ECE/Computer Communication</option>
<option value="ECE/Control Systems">ECE/Control Systems</option>
<option value="ECE/Elective 3 : MEMS">ECE/Elective 3 : MEMS</option>
<option value="ECE/Seminar & Project Preliminary">ECE/Seminar & Project Preliminary</option>
<option value="ECE/Communication Systems Lab (Optical & Microwave)">ECE/Communication Systems Lab (Optical & Microwave)</option>
<option value="ECE/Nano Electronic">ECE/Nano Electronic</option>
<option value="ECE/Advanced Communication Systems">ECE/Advanced Communication Systems</option>
<option value="ECE/Elective 4: Secure Communication">ECE/Elective 4: Secure Communication</option>
<option value="ECE/Elective 5: Energy Construction & Management">ECE/Elective 5: Energy Construction & Management</option>
<option value="ECE/Project">ECE/Project</option>
<option value="EEE/Linear Algebra & Complex Analysis">EEE/Linear Algebra & Complex Analysis</option>
<option value="EEE/Circuits And Networks">EEE/Circuits And Networks</option>
<option value="EEE/Analog Electronics Circuits">EEE/Analog Electronics Circuits</option>
<option value="EEE/DC Machines And Transformers">EEE/DC Machines And Transformers</option>
<option value="EEE/Computer Programming">EEE/Computer Programming</option>
<option value="EEE/Business Economics">EEE/Business Economics</option>
<option value="EEE/Programming Lab">EEE/Programming Lab</option>
<option value="EEE/Electronic Circuit Lab">EEE/Electronic Circuit Lab</option>
<option value="EEE/Probability Distributions, Transforms and Numerical Methods">EEE/Probability Distributions, Transforms and Numerical Methods</option>
<option value="EEE/Synchrous And Induction Machines">EEE/Synchrous And Induction Machines</option>
<option value="EEE/Digital Electronics And Logic Design">EEE/Digital Electronics And Logic Design</option>
<option value="EEE/Material Ssience">EEE/Material Ssience</option>
<option value="EEE/Measurement And Instrumentation">EEE/Measurement And Instrumentation</option>
<option value="EEE/Electrical Machine Lab">EEE/Electrical Machine Lab</option>
<option value="EEE/Life Skills">EEE/Life Skills</option>
<option value="EEE/Circuits And Measurements Lab">EEE/Circuits And Measurements Lab</option>
<option value="EEE/Power Generation, Transmission And Protection">EEE/Power Generation, Transmission And Protection</option>
<option value="EEE/Linear Control System">EEE/Linear Control System</option>
<option value="EEE/Object Oriented Programming">EEE/Object Oriented Programming</option>
<option value="EEE/Power Electronics">EEE/Power Electronics</option>
<option value="EEE/Signals And Systems">EEE/Signals And Systems</option>
<option value="EEE/Microprocessor And Embedded Systems">EEE/Microprocessor And Embedded Systems</option>
<option value="EEE/Digital Circuits And Embedded Systems Lab">EEE/Digital Circuits And Embedded Systems Lab</option>
<option value="EEE/Design Project">EEE/Design Project</option>
<option value="EEE/Electrical Machines Lab II">EEE/Electrical Machines Lab II</option>
<option value="EEE/Electromagnetics">EEE/Electromagnetics</option>
<option value="EEE/Advanced Control Theory">EEE/Advanced Control Theory</option>
<option value="EEE/Power System Analysis">EEE/Power System Analysis</option>
<option value="EEE/Electric Drives">EEE/Electric Drives</option>
<option value="EEE/Principles Of Management">EEE/Principles Of Management</option>
<option value="EEE/Soft Computing">EEE/Soft Computing</option>
<option value="EEE/Systems And Control Lab">EEE/Systems And Control Lab</option>
<option value="EEE/Power Electronics And Drives Lab">EEE/Power Electronics And Drives Lab</option>
<option value="EEE/Comprehensive Examination">EEE/Comprehensive Examination</option>
<option value="EEE/Electronic Communication">EEE/Electronic Communication</option>
<option value="EEE/Distributed Generation And Smart Grids">EEE/Distributed Generation And Smart Grids</option>
<option value="EEE/Electrical System Design">EEE/Electrical System Design</option>
<option value="EEE/Digital Signal Processing">EEE/Digital Signal Processing</option>
<option value="EEE/Electrical Machine Design">EEE/Electrical Machine Design</option>
<option value="EEE/Modern Operating Systems">EEE/Modern Operating Systems</option>
<option value="EEE/Power System Lab">EEE/Power System Lab</option>
<option value="EEE/Seminar And Project Preliminary">EEE/Seminar And Project Preliminary</option>
<option value="EEE/Special Electric Machines">EEE/Special Electric Machines</option>
<option value="EEE/Industrial Instrumentation & Automation">EEE/Industrial Instrumentation & Automation</option>
<option value="EEE/Energy Management And Auditing">EEE/Energy Management And Auditing</option>
<option value="EEE/Applied Earth Systems">EEE/Applied Earth Systems</option>
<option value="EEE/Project">EEE/Project</option>
<option value="ME/Linear Algebra & Complex Analysis">ME/Linear Algebra & Complex Analysis</option>
<option value="ME/Mechanics of Solids">ME/Mechanics of Solids</option>
<option value="ME/Mechanics of Fluids 3">ME/Mechanics of Fluids 3</option>
<option value="ME/Thermodynamics">ME/Thermodynamics</option>
<option value="ME/Metallurgy & Materials Engineering">ME/Metallurgy & Materials Engineering</option>
<option value="ME/Life Skills">ME/Life Skills</option>
<option value="ME/Computer Aided Machine Drawing Lab">ME/Computer Aided Machine Drawing Lab</option>
<option value="ME/Material Testing Lab">ME/Material Testing Lab</option>
<option value="ME/Probability Distributions, Transforms and Numerical Methods">ME/Probability Distributions, Transforms and Numerical Methods</option>
<option value="ME/Advanced Mechanics of Solids">ME/Advanced Mechanics of Solids</option>
<option value="ME/Thermal Engineering">ME/Thermal Engineering</option>
<option value="ME/Fluid Machinery">ME/Fluid Machinery</option>
<option value="ME/Manufacturing Technology">ME/Manufacturing Technology</option>
<option value="ME/Business Economics">ME/Business Economics</option>
<option value="ME/Thermal Engineering Lab">ME/Thermal Engineering Lab</option>
<option value="ME/Fluid Mechanics & Machines Lab">ME/Fluid Mechanics & Machines Lab</option>
<option value="ME/Mechanics of Machinery">ME/Mechanics of Machinery</option>
<option value="ME/Machine Tools and Digital Manufacturing">ME/Machine Tools and Digital Manufacturing</option>
<option value="ME/Computer Programming & Numerical Methods">ME/Computer Programming & Numerical Methods</option>
<option value="ME/Electrical Drives & Control for Automation">ME/Electrical Drives & Control for Automation</option>
<option value="ME/Principles of Management">ME/Principles of Management</option>
<option value="ME/Non-Destructive Testing">ME/Non-Destructive Testing</option>
<option value="ME/Design Project">ME/Design Project</option>
<option value="ME/Electrical and Electronics Lab">ME/Electrical and Electronics Lab</option>
<option value="ME/Manufacturing Technology Lab I">ME/Manufacturing Technology Lab I</option>
<option value="ME/Heat & Mass Transfer">ME/Heat & Mass Transfer</option>
<option value="ME/Dynamics of Machinery">ME/Dynamics of Machinery</option>
<option value="ME/Advanced Manufacturing Technology">ME/Advanced Manufacturing Technology</option>
<option value="ME/Computer Aided Design and Analysis">ME/Computer Aided Design and Analysis</option>
<option value="ME/Metrology and Instrumentation">ME/Metrology and Instrumentation</option>
<option value="ME/Marketing Management">ME/Marketing Management</option>
<option value="ME/Computer Aided Design and Analysis Lab">ME/Computer Aided Design and Analysis Lab</option>
<option value="ME/Comprehensive Exam">ME/Comprehensive Exam</option>
<option value="ME/Manufacturing Technology Lab II">ME/Manufacturing Technology Lab II</option>
<option value="ME/Design of Machine Elements I">ME/Design of Machine Elements I</option>
<option value="ME/Advanced Energy Engineering">ME/Advanced Energy Engineering</option>
<option value="ME/Refrigeration and Air Conditioning">ME/Refrigeration and Air Conditioning</option>
<option value="ME/Mechatronics">ME/Mechatronics</option>
<option value="ME/Compressible Fluid Flow">ME/Compressible Fluid Flow</option>
<option value="ME/Supply Chain and Logistics Management">ME/Supply Chain and Logistics Management</option>
<option value="ME/Seminar & Project Preliminary">ME/Seminar & Project Preliminary</option>
<option value="ME/Mechanical Engineering Lab">ME/Mechanical Engineering Lab</option>
<option value="ME/Design of Machine Elements II">ME/Design of Machine Elements II</option>
<option value="ME/Industrial Engineering">ME/Industrial Engineering</option>
<option value="ME/Material Handling & Facilities Planning (Elective)">ME/Material Handling & Facilities Planning (Elective)</option>
<option value="ME/Propulsion Engineering">ME/Propulsion Engineering</option>
<option value="ME/Elective 5 (Non Departmental)">ME/Elective 5 (Non Departmental)</option>
<option value="ME/Machine Learning">ME/Machine Learning</option>
<option value="ME/Seminar & Project Preliminary">ME/Seminar & Project Preliminary</option>
<option value="ME/Compiler Design Lab">ME/Compiler Design Lab</option>
<option value="CE/Linear Algebra & Complex Analysis">CE/Linear Algebra & Complex Analysis</option>
<option value="CE/MECHANICS OF SOILDS">CE/MECHANICS OF SOILDS</option>
<option value="CE/FLUID MECJANICS I">CE/FLUID MECJANICS I</option>
<option value="CE/ENGINEERING GEOLOGY">CE/ENGINEERING GEOLOGY</option>
<option value="CE/SURVEYING">CE/SURVEYING</option>
<option value="CE/BUSNINESS ECONOMICS">CE/BUSNINESS ECONOMICS</option>
<option value="CE/CIVIL ENGINEEERING DRAFTING LAB">CE/CIVIL ENGINEEERING DRAFTING LAB</option>
<option value="CE/SURVERING LAB">CE/SURVERING LAB</option>
<option value="CE/Probability Distributions, Transforms and Numerical Methods">CE/Probability Distributions, Transforms and Numerical Methods</option>
<option value="CE/STRUCTURAL ANALYSIS I">CE/STRUCTURAL ANALYSIS I</option>
<option value="CE/CONSTRUCTION TECJNOLOGY">CE/CONSTRUCTION TECJNOLOGY</option>
<option value="CE/FLUID MECHANICS II">CE/FLUID MECHANICS II</option>
<option value="CE/GEOTECHNICAL ENGINEERING I">CE/GEOTECHNICAL ENGINEERING I</option>
<option value="CE/LIFE SKILLS">CE/LIFE SKILLS</option>
<option value="CE/MATERIAL TESTING LAB 1">CE/MATERIAL TESTING LAB 1</option>
<option value="CE/FLUID MECHANICS LAB">CE/FLUID MECHANICS LAB</option>
<option value="CE/DESIGN OF CONCRETE STRUCTURES I">CE/DESIGN OF CONCRETE STRUCTURES I</option>
<option value="CE/STRUCTURAL ANALYSIS II">CE/STRUCTURAL ANALYSIS II</option>
<option value="CE/GEOTECHNICAL ENGINEERING II">CE/GEOTECHNICAL ENGINEERING II</option>
<option value="CE/GEOMATICS">CE/GEOMATICS</option>
<option value="CE/WATER RESOURCES ENGINEERING">CE/WATER RESOURCES ENGINEERING</option>
<option value="CE/GEOTECHNICAL INVESTIGATION">CE/GEOTECHNICAL INVESTIGATION</option>
<option value="CE/Design Project">CE/Design Project</option>
<option value="CE/MATERIAL TESTING LAB II">CE/MATERIAL TESTING LAB II</option>
<option value="CE/GEOTECHNICAL ENGINEERING LAB">CE/GEOTECHNICAL ENGINEERING LAB</option>
<option value="CE/DESIGN OF HYDRAULIC STRUCTURES">CE/DESIGN OF HYDRAULIC STRUCTURES</option>
<option value="CE/DESIGN OF CONCRETE STRUCTURES II">CE/DESIGN OF CONCRETE STRUCTURES II</option>
<option value="CE/COMPUTER PROGRAMMING AND COMPUTATIONAL TECHNIQUES">CE/COMPUTER PROGRAMMING AND COMPUTATIONAL TECHNIQUES</option>
<option value="CE/TRANSPORTATION ENGINEERING I">CE/TRANSPORTATION ENGINEERING I</option>
<option value="CE/Principles of Management">CE/Principles of Management</option>
<option value="CE/AIR QUALITY MANAGEMENT">CE/AIR QUALITY MANAGEMENT</option>
<option value="CE/TRANSPORTATION ENGINEERING LAB">CE/TRANSPORTATION ENGINEERING LAB</option>
<option value="CE/Comprehensive Exam">CE/Comprehensive Exam</option>
<option value="CE/COMPUTER AIDED CIVIL ENGINEERING LAB">CE/COMPUTER AIDED CIVIL ENGINEERING LAB</option>
<option value="CE/DESIGN OF STEEL STRUCTURES">CE/DESIGN OF STEEL STRUCTURES</option>
<option value="CE/STRUCTURAL ANALYSIS III">CE/STRUCTURAL ANALYSIS III</option>
<option value="CE/ENVIRONMENTAL ENGINEERING I">CE/ENVIRONMENTAL ENGINEERING I</option>
<option value="CE/TRANSPORTATION ENGINEERING II">CE/TRANSPORTATION ENGINEERING II</option>
<option value="CE/QUANTITY SURVEYING AND VALUATION">CE/QUANTITY SURVEYING AND VALUATION</option>
<option value="CE/HIGHWAY PAVEMENT DESIGN">CE/HIGHWAY PAVEMENT DESIGN</option>
<option value="CE/Seminar & Project Preliminary">CE/Seminar & Project Preliminary</option>
<option value="CE/ENVIRONEMTAL ENGINEERING LAB">CE/ENVIRONEMTAL ENGINEERING LAB</option>
<option value="CE/ENVIROMENTAL ENGINEERING II">CE/ENVIROMENTAL ENGINEERING II</option>
<option value="CE/CIVIL ENGINEERING PROJECT MANAGAMENT">CE/CIVIL ENGINEERING PROJECT MANAGAMENT</option>
<option value="CE/MUNCIPAL SOILD WASTE MANAGEMENT">CE/MUNCIPAL SOILD WASTE MANAGEMENT</option>
<option value="CE/ENERGY CONSERVATION AND MANAGEMENT">CE/ENERGY CONSERVATION AND MANAGEMENT</option>
<option value="CE/Project">CE/Project</option>
<option value="CE/Machine Learning">CE/Machine Learning</option>
<option value="CE/Seminar & Project Preliminary">CE/Seminar & Project Preliminary</option>
<option value="CE/Compiler Design Lab">CE/Compiler Design Lab</option>
<option value="I/II/Calculus">I/II/Calculus</option>
<option value="I/II/Engineering Physics">I/II/Engineering Physics</option>
<option value="I/II/Engineering Mechanics">I/II/Engineering Mechanics</option>
<option value="I/II/Introduction to Computing and Problem Solving">I/II/Introduction to Computing and Problem Solving</option>
<option value="I/II/Introduction to Sustainable Engineering">I/II/Introduction to Sustainable Engineering</option>
<option value="I/II/Basics of Electronics Engineering">I/II/Basics of Electronics Engineering</option>
<option value="I/II/Engineering Physics Lab">I/II/Engineering Physics Lab</option>
<option value="I/II/Electronics Engineering Workshop">I/II/Electronics Engineering Workshop</option>
<option value="I/II/Computer Science Workshop">I/II/Computer Science Workshop</option>
<option value="I/II/Differential Equations">I/II/Differential Equations</option>
<option value="I/II/Engineering Chemistry">I/II/Engineering Chemistry</option>
<option value="I/II/Engineering Graphics">I/II/Engineering Graphics</option>
<option value="I/II/Basics of Electrical Engineering">I/II/Basics of Electrical Engineering</option>
<option value="I/II/Design and Engineering">I/II/Design and Engineering</option>
<option value="I/II/Computer Programming">I/II/Computer Programming</option>
<option value="I/II/Electrical Engineering Lab">I/II/Electrical Engineering Lab</option>
<option value="I/II/Engineering Chemistry Lab">I/II/Engineering Chemistry Lab</option>
<option value="I/II/Computer Programming Lab">I/II/Computer Programming Lab</option>
                </select>
                <label for="amount"><i class="fa fa-user"></i> Price (Rs)</label>
                <input type="text" value="<?php echo "499.00";?>" name="amount">
                <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
                <input type="text" id="city" name="mobile" placeholder="Mobile Number">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">



            </div>

            <input type="submit"  value="Pay Now" class="btn">
          </form>
        </div>
      </div>

    </div>

    </body>
</html>
