<?php 
	include('../class/User.php');
	$user = new User();
	$user->loginStatus();
	include('include/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
    <style>
        <?php include './css/styles.css'; ?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e9f820d04b.js" crossorigin="anonymous"></script>

	<title>SOT Dashboard</title>


</head>
<body>

	<div class="container contact">	
		<?php include('menu.php');?>
		<div class="table-responsive" style="top: 0;">
		</div>
	</div>

    <div class="html">
        <!-- <div class="header" draggable="false">
            <div class="logo">
                KCAU
            </div>
        </div> -->
    
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="./dashboard_sot.php">DASHBOARD</a>
            <div class="dropdown" >
                <button class="dropdown-btn" onclick="myFunctionCert()">SOT
                    <i class="fa fa-caret-down"></i>
                </button>
                
                <div class="dropdown-container" id="cert">
                    <div class="btn" style="text-align: left;" >Certificate</div>
                    <div class="dropdown">
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-2">CBIT</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-3">CIT</button>
                    </div>
                    <div class="btn"  style="text-align: left;" >Diploma</div>
                    <div class="dropdown">
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-4">DIT</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-5">DBIT</button>
                    </div>
                    <div class="btn" style="text-align: left;" >Degree</div>
                    <div class="dropdown">
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-6">BISF</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-7">BSD</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-8">BGAT</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-9">BAC</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-10">BBIT</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-11">BIT</button>
                    </div>
                    <div class="btn"  style="text-align: left;" >Masters</div>
                    <div class="dropdown">
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-12">MISM</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-13">MDA</button>
                    </div>
                </div>
            </div>
            <div class="dropdown" >
                <button class="dropdown-btn" onclick="myFunctionDip()">SOB
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container" id="dip">
                <div class="btn" style="text-align: left;" >Certificate</div>
                    <div class="dropdown">
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-14">CBM</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-15">CPL</button>
                    </div>
                    <div class="btn"  style="text-align: left;" >Diploma</div>
                    <div class="dropdown">
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-16">DPL</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-17">DBM</button>
                    </div>
                    <div class="btn" style="text-align: left;" >Degree</div>
                    <div class="dropdown">
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-18">BSES</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-19">BCOM</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-20">BPM</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-21">BPL</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-22">BSAS</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-23">BIBM</button>
                    </div>
                    <div class="btn"  style="text-align: left;" >Masters</div>
                    <div class="dropdown">
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-24">MBACM</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-25">MSCOM</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-26">MBA</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-27">MSDF</button>
                    </div>
                    <div class="btn"  style="text-align: left;" >PhD</div>
                    <div class="dropdown">
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-28">DPFP</button>
                        <button class="dropdown-btn" id="btn" data-popup-open="popup-29">DPBM</button>
                    </div>
                </div>
            </div>
            <div class="dropdown" >
                <button class="dropdown-btn" onclick="myFunctionBach()">SOE
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container" id="bach">
                    <a href="" class="btn" data-popup-open="popup-6" style="text-align: left;" >BISF</a>
                    <a href="" class="btn" data-popup-open="popup-7" style="text-align: left;" >BSD</a>
                    <a href="" class="btn" data-popup-open="popup-8" style="text-align: left;" >BGAT</a>
                    <a href="" class="btn" data-popup-open="popup-9" style="text-align: left;" >BAC</a>
                    <a href="" class="btn" data-popup-open="popup-10" style="text-align: left;" >BBIT</a>
                    <a href="" class="btn" data-popup-open="popup-11" style="text-align: left;" >BIT</a>
                </div>
            </div>
            <a href="./aboutus.html">FEEDBACK</a>
        </div>
    
        <!-- Popup Menu -->

        <!-- CBIT -->
    
        <div class="popup" data-popup="popup-2">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput" class="myInput" onkeyup="search_unit()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Certificate In Business Information Technology</h2>
    
                <center>
                    <div class="buttons" id="button">
                        <button>
                            <a href="../attendance/foc_cbit/viewStudents.php">Fundamentals of Computing</a>
                        </button>
                        <button>
                            <a href="../attendance/cr_cbit/viewStudents.php">Customer Relations</a>
                        </button>
                        <button>
                            <a href="../attendance/iw_cbit/viewStudents.php">Internet and the Web</a>
                        </button>
                        <button>
                            <a href="../attendance/bim_cbit/viewStudents.php">Business Information Management</a>
                        </button>
                        <button>
                            <a href="../attendance/bem_cbit/viewStudents.php">Business and Enterprise Management</a>
                        </button>
                        <button>
                            <a href="../attendance/cs_cbit/viewStudents.php">Communication Skills</a>
                        </button>
                        <button>
                            <a href="../attendance/bm_cbit/viewStudents.php">Business Mathematics</a>
                        </button>
                        <button>
                            <a href="../attendance/fa_cbit/viewStudents.php">Fundamentals Of Accounting</a>
                        </button>
                        <button>
                            <a href="../attendance/cas_cbit/viewStudents.php">Computer Applications Software</a>
                        </button>
                        <button>
                            <a href="../attendance/coa_cbit/viewStudents.php">Computer Organization & architecture</a>
                        </button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-2" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-2" href="#">x</a>
            </div>
        </div>

        <!-- CIT -->

        <div class="popup" data-popup="popup-3" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput2" class="myInput" onkeyup="search_unit_2()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Certificate In Information Technology</h2>
    
                <center>
                    <div class="buttons" id="button2">
                        <button>
                            <a href="../attendance/cr_cit/viewStudents.php">Customer Relations</a>
                        </button>
                        <button>
                            <a href="../attendance/cas_cit/viewStudents.php">Computers and Society</a>
                        </button>
                        <button>
                            <a href="../attendance/iw_cit/viewStudents.php">Internet and the Web</a>
                        </button>
                        <button>
                            <a href="../attendance/fpe_cit/viewStudents.php">Foundation Physics and Electricity for IT</a>
                        </button>
                        <button>
                            <a href="../attendance/iis_cit/viewStudents.php">Introduction Information Systems</a>
                        </button>
                        <button>
                            <a href="../attendance/coa_cit/viewStudents.php">Computer organization and architecture</a>
                        </button>
                        <button>
                            <a href="../attendance/cs_cit/viewStudents.php">Communication Skills</a>
                        </button>
                        <button>
                            <a href="../attendance/ms_cit/viewStudents.php">Mathematics for Sciences</a>
                        </button>
                        <button>
                            <a href="../attendance/cass_cit/viewStudents.php">Computer Applications Software</a>
                        </button>
                        <button>
                            <a href="../attendance/os_cit/viewStudents.php">Operating systems</a>
                        </button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-3" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-3" href="#">x</a>
            </div>
        </div>

        <!-- DIT -->

        <div class="popup" data-popup="popup-4" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput3" class="myInput" onkeyup="search_unit_3()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Diploma in Information Technology</h2>
    
                <center>
                    <div class="buttons" id="button3">
                        <button>
                            <a href="../attendance/coa_dit/viewStudents.php">Computer organization and architecture</a>
                        </button>
                        <button>
                            <a href="../attendance/cs_dit/viewStudents.php">Communication Skills</a>
                        </button>
                        <button>
                            <a href="../attendance/ms_dit/viewStudents.php">Mathematics for Sciences</a>
                        </button>
                        <button>
                            <a href="../attendance/cas_dit/viewStudents.php">Computer Applications Software</a>
                        </button>
                        <button>
                            <a href="../attendance/os_dit/viewStudents.php">Operating systems</a>
                        </button>
                        <button>
                            <a href="../attendance/hals_dit/viewStudents.php">Health Awareness Life Skills</a>
                        </button>
                        <button>
                            <a href="../attendance/sad_dit/viewStudents.php">Systems Analysis and Design</a>
                        </button>
                        <button>
                            <a href="../attendance/il_dit/viewStudents.php">Information Literacy</a>
                        </button>
                        <button>
                            <a href="../attendance/pdd_dit/viewStudents.php">Principles of database design</a>
                        </button>
                        <button>
                            <a href="../attendance/wdd_dit/viewStudents.php">Web design and development</a>
                        </button>
                        <button>
                            <a href="../attendance/dsa_dit/viewStudents.php">Data structures and algorithm</a>
                        </button>
                        <button>
                            <a href="../attendance/fcn_dit/viewStudents.php">Fundamentals of computer networks</a>
                        </button>
                        <button>
                            <a href="../attendance/ent_dit/viewStudents.php">Entrepreneurship</a>
                        </button>
                        <button>
                            <a href="../attendance/pm_dit/viewStudents.php">Programming methodology</a>
                        </button>
                        <button>
                            <a href="../attendance/fm_dit/viewStudents.php">Financial Management for IT</a>
                        </button>
                        <button>
                            <a href="../attendance/hci_dit/viewStudents.php">Human Computer interaction</a>
                        </button>
                        <button>
                            <a href="../attendance/nds_dit/viewStudents.php">Network design & setup</a>
                        </button>
                        <button>
                            <a href="../attendance/sc_dit/viewStudents.php">Structured Cabling</a>
                        </button>
                        <button>
                            <a href="../attendance/jp_dit/viewStudents.php">Java Programming</a>
                        </button>
                        <button>
                            <a href="../attendance/ap_dit/viewStudents.php">Application programming</a>
                        </button>
                        <button>
                            <a href="../attendance/ecom_dit/viewStudents.php">E-Commerce</a>
                        </button>
                        <button>
                            <a href="../attendance/fom_dit/viewStudents.php">Fundamentals of Organisational Management</a>
                        </button>
                        <button>
                            <a href="../attendance/p_dit/viewStudents.php">Project</a>
                        </button>
                        <button>
                            <a href="../attendance/pcsm_dit/viewStudents.php">Principles of Computer Support & Maintenance</a>
                        </button>
                        <button>
                            <a href="../attendance/dpve_dit/viewStudents.php">Desktop Photography & Video Editing</a>
                        </button>
                        <!-- <button>
                            <a href="../attendance/a_dit/viewStudents.php">Attachment</a>
                        </button> -->
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-4" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-4" href="#">x</a>
            </div>
        </div>

        <!-- DBIT -->

        <div class="popup" data-popup="popup-5" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput4" class="myInput" onkeyup="search_unit_4()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Diploma in Business Information Technology</h2>
    
                <center>
                    <div class="buttons" id="button4">
                        <button>
                            <a href="../attendance/cs_dbit/viewStudents.php">Communication Skills</a>
                        </button>
                        <button>
                            <a href="../attendance/bm_dbit/viewStudents.php">Business Mathematics</a>
                        </button>
                        <button>
                            <a href="../attendance/fa_dbit/viewStudents.php">Fundamentals Of Accounting</a>
                        </button>
                        <button>
                            <a href="../attendance/cas_dbit/viewStudents.php">Computer Applications Software</a>
                        </button>
                        <button>
                            <a href="../attendance/coa_dbit/viewStudents.php">Computer Organization & architecture</a>
                        </button>
                        <button>
                            <a href="../attendance/hals_dbit/viewStudents.php">Health Awareness Life Skills</a>
                        </button>
                        <button>
                            <a href="../attendance/il_dbit/viewStudents.php">Information Literacy</a>
                        </button>
                        <button>
                            <a href="../attendance/dms_dbit/viewStudents.php">Database Management Systems</a>
                        </button>
                        <button>
                            <a href="../attendance/pm_dbit/viewStudents.php">Principles Of Management</a>
                        </button>
                        <button>
                            <a href="../attendance/sad_dbit/viewStudents.php">Systems Analysis And Design</a>
                        </button>
                        <button>
                            <a href="../attendance/bma_dbit/viewStudents.php">Business Management</a>
                        </button>
                        <button>
                            <a href="../attendance/cpc_dbit/viewStudents.php">Computer Programming Concepts</a>
                        </button>
                        <button>
                            <a href="../attendance/iap_dbit/viewStudents.php">Internet Application Programming</a>
                        </button>
                        <button>
                            <a href="../attendance/es_dbit/viewStudents.php">Entrepreneurship Skills</a>
                        </button>
                        <button>
                            <a href="../attendance/cos_dbit/viewStudents.php">Computer Operating Systems</a>
                        </button>
                        <button>
                            <a href="../attendance/bas_dbit/viewStudents.php">Business Application Software</a>
                        </button>
                        <button>
                            <a href="../attendance/ap_dbit/viewStudents.php">Application Programming</a>
                        </button>
                        <button>
                            <a href="../attendance/ooad_dbit/viewStudents.php">Object Oriented Analysis And Design</a>
                        </button>
                        <button>
                            <a href="../attendance/dsa_dbit/viewStudents.php">Data Structures And Algorithm</a>
                        </button>
                        <button>
                            <a href="../attendance/pmk_dbit/viewStudents.php">Principles Of Marketing</a>
                        </button>
                        <button>
                            <a href="../attendance/ge_dbit/viewStudents.php">General Economics</a>
                        </button>
                        <button>
                            <a href="../attendance/bis_dbit/viewStudents.php">Business Information Strategy</a>
                        </button>
                        <button>
                            <a href="../attendance/ca_dbit/viewStudents.php">Cost Accounting</a>
                        </button>
                        <button>
                            <a href="../attendance/p_dbit/viewStudents.php">Project</a>
                        </button>
                        <button>
                            <a href="../attendance/hrm_dbit/viewStudents.php">Human Resource Management</a>
                        </button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-5" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-5" href="#">x</a>
            </div>
        </div>

        <!-- BISF -->

        <div class="popup" data-popup="popup-6" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput5" class="myInput" onkeyup="search_unit_5()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Bachelor of Science in Information Security and Forensics</h2>
    
                <center>
                    <div class="buttons" id="button5">
                        <button>Computer Organization & Architecture</button>
                        <button>Operating Systems</button>
                        <button>Computing Mathematics</button>
                        <button>Business Communication Skills</button>
                        <button>Installation and Customization</button>
                        <button>HIV/AIDS and Information Literacy</button>
                        <button>Internet Technologies and the Web</button>
                        <button>Computer Applications</button>
                        <button>Discrete Mathematics</button>
                        <button>Probability & Statistics</button>
                        <button>Introduction to Programming</button>
                        <button>Web Design and Development</button>
                        <button>System Analysis & Design</button>
                        <button>Networking Essentials</button>
                        <button>Principles of Databases</button>
                        <button>Semiconductors and Electronic Devices</button>
                        <button>Database Design & Development</button>
                        <button>Object Oriented Analysis And Design</button>
                        <button>Human Computer Interaction</button>
                        <button>Cloud Computing</button>
                        <button>Research Skills and Design</button>
                        <button>Entrepreneurship</button>
                        <button>Software Engineering Principles</button>
                        <button>Network Systems Design & Management</button>
                        <button>Object Oriented Programming</button>
                        <button>Data Structures & Algorithms</button>
                        <button>Telecommunications</button>
                        <button>Legal, Ethical & Professional Issues in IT</button>
                        <button>E-Commerce</button>
                        <button>Principles of Artificial Intelligence</button>
                        <button>Principles of Information System Security</button>
                        <button>Anonymity on the Internet</button>
                        <button>Java Programming</button>
                        <button>ICT Project Management</button>
                        <button>Mobile Programming</button>
                        <button>Computer Forensics</button>
                        <button>Criminal Law</button>
                        <button>Financial Management for IT</button>
                        <button>Network Systems Administration</button>
                        <button>Security and Forensics Project</button>
                        <button>Professional Writing</button>
                        <button>Criminology and Cyber Criminology</button>
                        <button>Sociology</button>
                        <button>Principles of Marketing</button>
                        <button>Forensic Psychology</button>
                        <button>Wireless Networks</button>
                        <button>Geographic Information Systems</button>
                        <button>Simulation and Modeling</button>
                        <button>Data Mining and Warehousing</button>
                        <button>Network Operating Systems</button>
                        <button>Cyber Security</button>
                        <button>Advanced Digital Forensics</button>
                        <button>Python Programming</button>
                        <button>Human Aspects to IS Security & Forensics</button>
                        <button>Final Year Project</button>
                        <button>Cryptography</button>
                        <button>Infrastructure for Security & Intelligence</button>
                        <button>Machine Learning</button>
                        <button>Ethical Hacking</button>
                        <button>Penetration and Vulnerability Testing</button>
                        <button>Wireless and Mobile Forensics</button>
                        <button>Information System Audit</button>
                        <button>Final Year Project</button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-6" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-6" href="#">x</a>
            </div>
        </div>

        <!-- BSD -->

        <div class="popup" data-popup="popup-7" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput6" class="myInput" onkeyup="search_unit_6()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Bachelor of Science in Software Development</h2>
    
                <center>
                    <div class="buttons" id="button6">
                        <button>HIV/AIDS and Information Literacy</button>
                        <button>Business Communication Skills</button>
                        <button>Computing Mathematics</button>
                        <button>Computer Organization and Architecture</button>
                        <button>Computer Applications</button>
                        <button>Operating Systems</button>
                        <button>Installation and Customization</button>
                        <button>Internet Technologies and the Web</button>
                        <button>System Analysis & Design</button>
                        <button>Discrete Mathematics</button>
                        <button>Probability & Statistics</button>
                        <button>Fundamentals of Web Design</button>
                        <button>Principles of Databases</button>
                        <button>Networking Essentials</button>
                        <button>Introduction to Programming</button>
                        <button>Computational Thinking Theory</button>
                        <button>Human Computer Interaction</button>
                        <button>Research Skills and Design</button>
                        <button>Entrepreneurship</button>
                        <button>Management Information Systems</button>
                        <button>Application Programming</button>
                        <button>Database design and development</button>
                        <button>Object Oriented Analysis & Design</button>
                        <button>Assembly Language Programming</button>
                        <button>Data Structures & Algorithm</button>
                        <button>Object Oriented programming</button>
                        <button>Software Engineering Principles</button>
                        <button>Professional Issues in IT</button>
                        <button>E-Commerce</button>
                        <button>Simulation & Modelling</button>
                        <button>Java Programming</button>
                        <button>System Development Methodology</button>
                        <button>Network Science Theory</button>
                        <button>Python Programming</button>
                        <button>Mobile Programming</button>
                        <button>Financial Management for IT</button>
                        <button>Software Computing Project</button>
                        <button>Principles of IS Security</button>
                        <button>Principles of Artificial Intelligence</button>
                        <button>Cloud Application Development</button>
                        <button>Network Programming</button>
                        <button>ICT Project Management</button>
                        <button>Expert Systems</button>
                        <button>Advanced java programming</button>
                        <button>Linear Programming</button>
                        <button>Principles of Marketing</button>
                        <button>Mobile Gaming Programming</button>
                        <button>Distributed Systems</button>
                        <button>Principles of Data Science</button>
                        <button>Artificial Intelligence programming</button>
                        <button>Information System Audit</button>
                        <button>Advances in Web Development</button>
                        <button>Multimedia Programming</button>
                        <button>Final Year Project</button>
                        <button>Software Testing tools and Techniques</button>
                        <button>Advanced Databases</button>
                        <button>Final Year Project II</button>
                        <button>Advanced Application Programming</button>
                        <button>Programming for Data Science</button>
                        <button>Machine Learning</button>
                        <button>Embedded Systems</button>
                        <button>Advanced Software Engineering</button>
                        <button>Geographical Information Systems</button>
                        <BUtton>Ambient Intelligence</BUtton>
                        <BUtton>Industrial Attachment</BUtton>
                    </div>
                </center>

                <p class="bisf"<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e9f820d04b.js" crossorigin="anonymous"></script>></p>
                
                <p><a data-popup-close="popup-7" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-7" href="#">x</a>
            </div>
        </div>

        <!-- BGAT -->

        <div class="popup" data-popup="popup-8" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput7" class="myInput" onkeyup="search_unit_7()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Bachelor of Science in Gaming and Animation Technology</h2>
    
                <center>
                    <div class="buttons" id="button7">
                        <button>Computer Organization & Application</button>
                        <button>Operating Systems</button>
                        <button>Computing Mathematics</button>
                        <button>Business Communication Skills</button>
                        <button>Installation and Customization</button>
                        <button>HIV/AIDS and Information Literacy</button>
                        <button>Internet Technologies and the Web</button>
                        <button>Discrete Mathematics</button>
                        <button>Probability & Statistics</button>
                        <button>Introduction to Programming</button>
                        <button>Fundamentals of Web Design</button>
                        <button>System Analysis & Design</button>
                        <button>Networking Essentials</button>
                        <button>Database Design & Development</button>
                        <button>Object Oriented Analysis And Design</button>
                        <button>Human Computer Interaction</button>
                        <button>Semiconductors and Electronic Devices</button>
                        <button>Application Programming</button>
                        <button>Research Skills and Design</button>
                        <button>Entrepreneurship</button>
                        <button>Management Information System</button>
                        <button>Object Oriented Programming</button>
                        <button>Data Structures & Algorithms</button>
                        <button>Software Engineering Principles</button>
                        <button>Professional Issues in IT</button>
                        <button>E-Commerce</button>
                        <button>Simulation & Modelling</button>
                        <button>Business Process Modelling</button>
                        <button>Java Programming</button>
                        <button>ICT Project Management</button>
                        <button>Mobile Programming</button>
                        <button>Strategic Marketing & Management</button>
                        <button>Applied Computing Project</button>
                        <button>Financial Management for IT</button>
                        <button>Professional Writing</button>
                        <button>Drawing & Painting</button>
                        <button>Photography & Videography</button>
                        <button>Computer gaming Design</button>
                        <button>Computer Graphics imagery</button>
                        <button>2D Animation and Cartooning</button>
                        <button>Game Interface Design</button>
                        <button>Interactive Animation precepts</button>
                        <button>Computer Gaming Engine Architecture</button>
                        <button>Advances in Web Development</button>
                        <button>Multimedia Programming</button>
                        <button>Interactive Animation</button>
                        <button>Network Programming</button>
                        <button>Game Development & Scene Building</button>
                        <button>Final Year Project</button>
                        <button>Virtual Reality modelling</button>
                        <button>Artificial Intelligence for games</button>
                        <button>Multimedia Front End Development</button>
                        <button>Virtual Reality Interaction Scripting</button>
                        <button>Simulation Animation Visual Assembly</button>
                        <button>Animation & Visualization Production Planning</button>
                        <button>Final Year Project</button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-8" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-8" href="#">x</a>
            </div>
        </div>

        <!-- BAC -->

        <div class="popup" data-popup="popup-9" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput8" class="myInput" onkeyup="search_unit_8()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Bachelor of Science in Applied Computing</h2>
    
                <center>
                    <div class="buttons" id="button8">
                        <button>Computer Organization & Application</button>
                        <button>Operating Systems</button>
                        <button>Computing Mathematics</button>
                        <button>Business Communication Skills</button>
                        <button>Installation and Customization</button>
                        <button>HIV/AIDS and Information Literacy</button>
                        <button>Internet Technologies and the Web</button>
                        <button>Discrete Mathematics</button>
                        <button>Probability & Statistics</button>
                        <button>Introduction to Programming</button>
                        <button>Fundamentals of Web Design</button>
                        <button>System Analysis & Design</button>
                        <button>Networking Essentials</button>
                        <button>Principles of Databases</button>
                        <button>Database Design & Development</button>
                        <button>Object Oriented Analysis And Design</button>
                        <button>Human Computer Interaction</button>
                        <button>Application Programming</button>
                        <button>Research Skills and Design</button>
                        <button>Entrepreneurship</button>
                        <button>Management Information System</button>
                        <button>Object Oriented Programming</button>
                        <button>Data Structures & Algorithms</button>
                        <button>Software Engineering Principles</button>
                        <button>Professional Issues in IT</button>
                        <button>E-Commerce</button>
                        <button>Simulation & Modelling</button>
                        <button>Business Process Nodelling</button>
                        <button>Java Programming</button>
                        <button>ICT Project Management</button>
                        <button>Mobile Programming</button>
                        <button>Strategic Marketing & Management</button>
                        <button>Applied Computing Project</button>
                        <button>Financial Management for IT</button>
                        <button>Professional Writing</button>
                        <button>Advanced Software Engineering</button>
                        <button>.Net Programming</button>
                        <button>Network Programming</button>
                        <button>Wireless Networks Technologies</button>
                        <button>Expert Systems</button>
                        <button>Information Security</button>
                        <button>Organisational Management</button>
                        <button>Artificial Intelligence</button>
                        <button>Telecommunications</button>
                        <button>Information System Security and Cryptography</button>
                        <button>Strategic Management in Information Systems</button>
                        <button>Wireless Networks Technologies</button>
                        <button>Knowledge Management</button>
                        <button>Simulation and Modelling</button>
                        <button>Data Warehousing and Data mining</button>
                        <button>Distributed Databases</button>
                        <button>Distributed Multimedia Systems</button>
                        <button>Expert Systems</button>
                        <button>Mobile Programming</button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-9" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-9" href="#">x</a>
            </div>
        </div>

        <!-- BBIT -->

        <div class="popup" data-popup="popup-10" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput" class="myInput9" onkeyup="search_unit_9()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Bachelor of Business Information Technology</h2>
    
                <center>
                    <div class="buttons" id="button9">
                        <button>Communication Skills</button>
                        <button>HIV/AIDS/ ICT Literacy</button>
                        <button>Foundations of Mathematics</button>
                        <button>Introduction to Accounting</button>
                        <button>Computer Organization, Application and Architecture</button>
                        <button>Introduction to Microeconomics</button>
                        <button>Business Management</button>
                        <button>Operating System</button>
                        <button>Principles of Management</button>
                        <button>Computer Networks & Management</button>
                        <button>Programming Methodology</button>
                        <button>Introduction to Macroeconomics</button>
                        <button>System Analysis & Design</button>
                        <button>Human Resource Management</button>
                        <button>Semiconductors and Electronic Devices</button>
                        <button>Data Structures and Algorithms</button>
                        <button>Database Management Systems</button>
                        <button>Cost Accounting</button>
                        <button>Entrepreneurship Skills</button>
                        <button>Object - Oriented Analysis and Design</button>
                        <button>Application programming</button>
                        <button>Internet Applications Programming</button>
                        <button>Foundation of Artificial Intelligence</button>
                        <button>Introduction to Accounting II</button>
                        <button>Knowledge Management</button>
                        <button>Probability and Statistics</button>
                        <button>Object-Oriented Programming</button>
                        <button>IT Project Management</button>
                        <button>Business Finance</button>
                        <button>Accounting Information Systems</button>
                        <button>Principles of Marketing</button>
                        <button>Human Computer Interaction</button>
                        <button>System Development Methodology</button>
                        <button>Operations Research</button>
                        <button>Business Law</button>
                        <button>Business Process Reengineering</button>
                        <button>Business & IT Ethics</button>
                        <button>E-Commerce</button>
                        <button>Management Information Systems</button>
                        <button>Java Programming</button>
                        <button>Data Mining and Management</button>
                        <button>Network Security</button>
                        <button>Multimedia Systems Application</button>
                        <button>Technology & Innovation Management</button>
                        <button>Decision Support Systems</button>
                        <button>Final Year Project</button>
                        <button>Advanced Database Systems</button>
                        <button>Distributed Systems</button>
                        <button>Supply Chain Management</button>
                        <button>Mobile Programming</button>
                        <button>IS Management and Auditing</button>
                        <button>Evaluation of Business Investments</button>
                        <button>Simulation and Modeling</button>
                        <button>Enterprise Resource Planning</button>
                        <button>Research Methodology</button>
                        <button>Statistical Decision Making</button>
                        <button>Final year Project</button>
                        <button>Industrial Attachment</button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-10" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-10" href="#">x</a>
            </div>
        </div>

        <!-- BIT -->

        <div class="popup" data-popup="popup-11" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput10" class="myInput" onkeyup="search_unit_10()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">Bachelor of Science in Information Technology</h2>
    
                <center>
                    <div class="buttons" id="button10">
                        <button>Internet Technology</button>
                        <button>Business Communication Skills</button>
                        <button>Operating Systems</button>
                        <button>Computer Organization and Arch</button>
                        <button>Mathematics for Sciences</button>
                        <button>HIV and AIDS and Information Literacy</button>
                        <button>Web Design and Development</button>
                        <button>Fundamentals of Organisational Management</button>
                        <button>Systems Analysis and Design</button>
                        <button>Discrete Mathematics</button>
                        <button>Principles of Database Design</button>
                        <button>Human Computer Interaction</button>
                        <button>Probability & Statistics</button>
                        <button>E-commerce</button>
                        <button>Programming Methodology</button>
                        <button>Computer Networks</button>
                        <button>Financial Management for IT</button>
                        <button>Data Structures and Algorithms</button>
                        <button>Database Design and Development</button>
                        <button>Application Programming</button>
                        <button>Software Engineering Principles</button>
                        <button>Object Oriented Analysis and Design</button>
                        <button>Research Skills and Design</button>
                        <button>Professional Issues in IT</button>
                        <button>Entrepreneurship</button>
                        <button>Java Programming</button>
                        <button>Object Oriented Programming</button>
                        <button>ICT Project Management</button>
                        <button>Programming Project</button>
                        <button>Distributed Systems</button>
                        <button>Computer Graphics</button>
                        <button>Principles of Artificial Intelligence</button>
                        <button>Network Programming</button>
                        <button>Telecommunications</button>
                        <button>Information System Security and Cryptography</button>
                        <button>Network Systems Design and Management</button>
                        <button>Geographical Information System</button>
                        <button>Strategic Management in IS</button>
                        <button>Wireless Networks Technologies</button>
                        <button>Project I</button>
                        <button>Knowledge Management</button>
                        <button>Simulation and Modelling</button>
                        <button>Advanced Web Design and Development</button>
                        <button>End User Computing</button>
                        <button>Industrial Attachment</button>
                        <button>Data Warehousing and Data mining</button>
                        <button>Distributed Databases</button>
                        <button>Distributed Multimedia Systems</button>
                        <button>Project II</button>
                        <button>Expert Systems</button>
                        <button>Mobile Programming</button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-11" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-11" href="#">x</a>
            </div>
        </div>
        <!-- MISM -->

        <div class="popup" data-popup="popup-12" id="popup">
            <div class="popup-inner">
                <center>
                    <input type="text" id="myInput11" class="myInput" onkeyup="search_unit_11()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">MSc Information Systems Management</h2>
    
                <center>
                    <div class="buttons" id="button11">
                        <button>e-Business Architecture and Systems</button>
                        <button>Database Storage and Management</button>
                        <button>Business Process Modelling</button>
                        <button>Object Oriented Technologies</button>
                        <button>The WWW, Database Integration and e-Commerce</button>
                        <button>Wireless Technologies</button>
                        <button>Decision Support Systems</button>
                        <button>Information Systems Security</button>
                        <button>Knowledge Management</button>
                        <button>Advances in Information Systems</button>
                        <button>ICT Policy</button>
                        <button>Strategic Management of IT</button>
                        <button>Advanced Research Methods</button>
                        <button>Data Mining and Data Warehousing</button>
                        <button>Software Project Management</button>
                        <button>Cyber security</button>
                        <button>Innovations Designs Workshops</button>
                        <button>Research Dissertation</button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-12" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-12" href="#">x</a>
            </div>
        </div>

        <!-- MDA -->

        <div class="popup" data-popup="popup-13" id="popup">
            <div class="popup-inner" >
                <center>
                    <input type="text" id="myInput12" class="myInput" onkeyup="search_unit_12()" placeholder="Search for any Unit..." title="Type in a Unit">
                </center>
                <h2 style="text-align: center;">MSc Data Analytics</h2>
    
                <center>
                    <div class="buttons" id="button12">
                        <button>
                            <a href="" style="text-decoration: none; color: black;">e-Business Architecture and Systems</a>
                        </button>
                        <button>Database Storage and Management</button>
                        <button>Business Process Modelling & Web Apps</button>
                        <button>Object Oriented Technologies</button>
                        <button>Database Integration and e-Commerce</button>
                        <button>Machine learning</button>
                        <button>Decision Support Systems</button>
                        <button>Information System Security</button>
                        <button>Logic, Sense Making & Business Intelligence</button>
                        <button>Systems Analysis And Design</button>
                        <button>Human Perception and Information Visualization</button>
                        <button>System Dynamics Modelling</button>
                        <button>Data Mining and Data Warehousing</button>
                        <button>Advanced Research Methods</button>
                        <button>Visual Analytics System Architecture</button>
                        <button>Cyber Security and Forensics</button>
                        <button>Data Analytics and Knowledge Engineering</button>
                        <button>Innovations Design Workshops</button>
                        <button>Research Dissertation</button>
                    </div>
                </center>

                <p class="bisf"></p>
                
                <p><a data-popup-close="popup-13" href="#">Close</a></p>
                
                <a class="popup-close" data-popup-close="popup-13" href="#">x</a>
            </div>
        </div>
    
        <span style="font-size:30px;cursor:pointer; float: left; z-index:1001; margin-left: 0; margin-top: 4px; position: absolute; top: 0; color: #9d9d9d;" onclick="openNav()" >&#9776;</span>
    
        <div class="main" id="main">
            <h2>Welcome To KCA University Students Class Attendance Management System</h2>
    
            <h3>
                For the new system, kindly follow the following guidelines for a successful submission of student's data;
            </h3>
    
            <p>
                1. Open the site using the following url <a href="index.html">Class Attendance Login</a> and use the credentials that were sent to your official email address for a successful login.
            </p>
            <p>
                2. After every 1 hour of inactiveness, the system will log you off and you will have to login again. This is just but a security measurement to ensure no unauthorized access is made.
            </p>
            <p>
                3. After the login, you will be directed to this page. It contains the instructions and on the top left side of the page, you will see the KCA logo. On click, it will display the different schools.
            </p>
            <p>
                4. From that tab, you can select the specific school you are to attend the class. A list of the courses for that particular course will pop up as well. Select the course, then the specific unit you are attending.
            </p>
            <p>
                5. You will be presented by the list of students in that specific class. You will see their details and after that, you will find the area for filling their attendance. You have to fill one of the check box provided.
            </p>
            <p>
                6. If the student did inform you that he/she will be missing you class and it was a genuine reason, then you can record it on the reason area. Else you can just leave it blank.
            </p>
            <p id="data"></p>
        </div>
    </div>

    <script src="./js/script.js"></script>

	<?php include('include/footer.php');?>
    
</body>
</html>
		
	