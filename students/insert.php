
<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Tab</title>

    <script src="js/users.js"></script>

    <?php
        include('../dbcon.php');
    ?>
    <?php
        include('../class/User.php');
        $user = new User();
        // $errorMessage =  $user->login();
    ?>

</head>
<body>
    
    <center>
    <?php
        // if(isset($_POST['Submit'])) {
        // if($_SERVER["REQUEST_METHOD"] == "POST") {
            $regno =  mysqli_real_escape_string($conn, $_REQUEST['staffid']);
            $firstname =  $_REQUEST['firstname'];
            $lastname =  $_REQUEST['lastname'];
            $school = $_REQUEST['designation'];
            $course = mysqli_real_escape_string($conn, $_REQUEST['course']);
            $unit1 = $_REQUEST['unit1'];
            $unit2 = $_REQUEST['unit2'];
            $unit3 = $_REQUEST['unit3'];
            $unit4 = $_REQUEST['unit4'];
            $unit5 = $_REQUEST['unit5'];
            $unit6 = $_REQUEST['unit6'];
            $unit7 = $_REQUEST['unit7'];
            $unit8 = $_REQUEST['unit8'];

            // $sql = "INSERT INTO students_table (regNumber, name, school, course, unit1, unit2, unit3, unit4, unit5, unit6, unit7, unit8) SELECT staff_id, first_name, designation, course, unit1, unit2, unit3, unit4, unit5, unit6, unit7, unit8 FROM `user` WHERE type='student";
    
            $sql = "INSERT INTO `user` (staff_id, first_name, last_name, designation, course, unit1, unit2, unit3, unit4, unit5, unit6, unit7, unit8)  VALUES ('$regno', '$firstname', '$lastname', '$school', '$course', '$unit1', '$unit2', '$unit3', '$unit4', '$unit5', '$unit6', '$unit7', '$unit8')";
            $sql1 = "INSERT INTO kca.students_table (regNumber, firstName, lastName, school, course, unit1, unit2, unit3, unit4, unit5, unit6, unit7, unit8) SELECT staff_id, first_name, last_name, designation, course, unit1, unit2, unit3, unit4, unit5, unit6, unit7, unit8 FROM `user` WHERE type='student' AND NOT EXISTS (SELECT * FROM kca.students_table WHERE `user`.staff_id = students_table.regNumber)";
            $sql2 = "INSERT INTO kca.fundamentals_of_computing_cbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Fundamentals of Computing' AND NOT EXISTS (SELECT * FROM kca.fundamentals_of_computing_cbit WHERE students_table.regNumber = fundamentals_of_computing_cbit.regNumber)";
            $sql3 = "INSERT INTO kca.custom_relations_cbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Customer Relations' AND NOT EXISTS (SELECT regNumber FROM kca.custom_relations_cbit WHERE students_table.regNumber = custom_relations_cbit.regNumber)";
            $sql4 = "INSERT INTO kca.business_information_management_cbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Business Information Management' AND NOT EXISTS (SELECT regNumber FROM kca.business_information_management_cbit WHERE students_table.regNumber = business_information_management_cbit.regNumber)";
            $sql5 = "INSERT INTO kca.internet_and_the_web_cbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Internet and the Web' AND NOT EXISTS (SELECT regNumber FROM kca.internet_and_the_web_cbit WHERE students_table.regNumber = internet_and_the_web_cbit.regNumber)";
            $sql6 = "INSERT INTO kca.business_and_enterprise_management_cbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Business and Enterprise Management' AND NOT EXISTS (SELECT regNumber FROM kca.business_and_enterprise_management_cbit WHERE students_table.regNumber = business_and_enterprise_management_cbit.regNumber)";

            $sql7 = "INSERT INTO kca.communication_skills_cbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Communication Skills (cbit)' AND NOT EXISTS (SELECT regNumber FROM kca.communication_skills_cbit_2 WHERE students_table.regNumber = communication_skills_cbit_2.regNumber)";
            $sql8 = "INSERT INTO kca.business_math_cbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Business Mathematics' AND NOT EXISTS (SELECT regNumber FROM kca.business_math_cbit_2 WHERE students_table.regNumber = business_math_cbit_2.regNumber)";
            $sql9 = "INSERT INTO kca.fundamentals_of_accounting_cbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Fundamentals Of Accounting' AND NOT EXISTS (SELECT regNumber FROM kca.fundamentals_of_accounting_cbit_2 WHERE students_table.regNumber = fundamentals_of_accounting_cbit_2.regNumber)";
            $sql10 = "INSERT INTO kca.computer_application_software_cbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Computer Applications Software' AND NOT EXISTS (SELECT regNumber FROM kca.computer_application_software_cbit_2 WHERE students_table.regNumber = computer_application_software_cbit_2.regNumber)";
            $sql11 = "INSERT INTO kca.computer_organization_and_architecture_cbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Computer Organization & architecture' AND NOT EXISTS (SELECT regNumber FROM kca.computer_organization_and_architecture_cbit_2 WHERE students_table.regNumber = computer_organization_and_architecture_cbit_2.regNumber)";

            $sql12 = "INSERT INTO kca.customer_relations_cit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Customer Relations' AND NOT EXISTS (SELECT regNumber FROM kca.customer_relations_cit WHERE students_table.regNumber = customer_relations_cit.regNumber)";
            $sql13 = "INSERT INTO kca.computer_and_society_cit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Computers and Society' AND NOT EXISTS (SELECT regNumber FROM kca.computer_and_society_cit WHERE students_table.regNumber = computer_and_society_cit.regNumber)";
            $sql14 = "INSERT INTO kca.foundation_physics_cit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Foundation Physics and Electricity for IT' AND NOT EXISTS (SELECT regNumber FROM kca.foundation_physics_cit WHERE students_table.regNumber = foundation_physics_cit.regNumber)";
            $sql15 = "INSERT INTO kca.internet_and_the_web_cit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Internet and the Web' AND NOT EXISTS (SELECT regNumber FROM kca.internet_and_the_web_cit WHERE students_table.regNumber = internet_and_the_web_cit.regNumber)";
            $sql16 = "INSERT INTO kca.introduction_information_system_cit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Introduction Information Systems' AND NOT EXISTS (SELECT regNumber FROM kca.introduction_information_system_cit WHERE students_table.regNumber = introduction_information_system_cit.regNumber)";

            $sql17 = "INSERT INTO kca.computer_organization_and_architecture_cit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Computer organization and architecture' AND NOT EXISTS (SELECT regNumber FROM kca.computer_organization_and_architecture_cit_2 WHERE students_table.regNumber = computer_organization_and_architecture_cit_2.regNumber)";
            $sql18 = "INSERT INTO kca.communication_skills_cit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Communication Skills (cit)' AND NOT EXISTS (SELECT regNumber FROM kca.communication_skills_cit_2 WHERE students_table.regNumber = communication_skills_cit_2.regNumber)";
            $sql19 = "INSERT INTO kca.math_for_science_cit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Mathematics for Sciences' AND NOT EXISTS (SELECT regNumber FROM kca.math_for_science_cit_2 WHERE students_table.regNumber = math_for_science_cit_2.regNumber)";
            $sql20 = "INSERT INTO kca.computer_application_software_cit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Computer Applications Software (cit)' AND NOT EXISTS (SELECT regNumber FROM kca.computer_application_software_cit_2 WHERE students_table.regNumber = computer_application_software_cit_2.regNumber)";
            $sql21 = "INSERT INTO kca.operating_system_cit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Operating systems' AND NOT EXISTS (SELECT regNumber FROM kca.operating_system_cit_2 WHERE students_table.regNumber = operating_system_cit_2.regNumber)";

            $sql22 = "INSERT INTO kca.communication_skills_dbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Communication Skills (dbit)' AND NOT EXISTS (SELECT regNumber FROM kca.communication_skills_dbit WHERE students_table.regNumber = communication_skills_dbit.regNumber)";
            $sql23 = "INSERT INTO kca.business_math_dbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Business Mathematics' AND NOT EXISTS (SELECT regNumber FROM kca.business_math_dbit WHERE students_table.regNumber = business_math_dbit.regNumber)";
            $sql24 = "INSERT INTO kca.fundamentals_of_accounting_dbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Fundamentals Of Accounting' AND NOT EXISTS (SELECT regNumber FROM kca.fundamentals_of_accounting_dbit WHERE students_table.regNumber = fundamentals_of_accounting_dbit.regNumber)";
            $sql25 = "INSERT INTO kca.computer_application_software_dbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Computer Applications Software' AND NOT EXISTS (SELECT regNumber FROM kca.computer_application_software_dbit WHERE students_table.regNumber = computer_application_software_dbit.regNumber)";
            $sql26 = "INSERT INTO kca.computer_organization_and_architecture_dbit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Computer Organization & architecture' AND NOT EXISTS (SELECT regNumber FROM kca.computer_organization_and_architecture_dbit WHERE students_table.regNumber = computer_organization_and_architecture_dbit.regNumber)";

            $sql27 = "INSERT INTO kca.health_awareness_dbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Health Awareness and Life Skills' AND NOT EXISTS (SELECT regNumber FROM kca.health_awareness_dbit_2 WHERE students_table.regNumber = health_awareness_dbit_2.regNumber)";
            $sql28 = "INSERT INTO kca.information_literacy_dbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Information Literacy' AND NOT EXISTS (SELECT regNumber FROM kca.information_literacy_dbit_2 WHERE students_table.regNumber = information_literacy_dbit_2.regNumber)";
            $sql29 = "INSERT INTO kca.database_management_system_dbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Database Management Systems' AND NOT EXISTS (SELECT regNumber FROM kca.database_management_system_dbit_2 WHERE students_table.regNumber = database_management_system_dbit_2.regNumber)";
            $sql30 = "INSERT INTO kca.principles_of_management_dbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Principles Of Management' AND NOT EXISTS (SELECT regNumber FROM kca.principles_of_management_dbit_2 WHERE students_table.regNumber = principles_of_management_dbit_2.regNumber)";
            $sql31 = "INSERT INTO kca.system_analysis_and_design_dbit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Systems Analysis And Design' AND NOT EXISTS (SELECT regNumber FROM kca.system_analysis_and_design_dbit_2 WHERE students_table.regNumber = system_analysis_and_design_dbit_2.regNumber)";

            $sql32 = "INSERT INTO kca.business_management_dbit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Business Management' AND NOT EXISTS (SELECT regNumber FROM kca.business_management_dbit_3 WHERE students_table.regNumber = business_management_dbit_3.regNumber)";
            $sql33 = "INSERT INTO kca.computer_programming_concept_dbit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Computer Programming Concepts' AND NOT EXISTS (SELECT regNumber FROM kca.computer_programming_concept_dbit_3 WHERE students_table.regNumber = computer_programming_concept_dbit_3.regNumber)";
            $sql34 = "INSERT INTO kca.internet_application_dbit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Internet Application Programming' AND NOT EXISTS (SELECT regNumber FROM kca.internet_application_dbit_3 WHERE students_table.regNumber = internet_application_dbit_3.regNumber)";
            $sql35 = "INSERT INTO kca.entrepreneurship_skills_dbit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Entrepreneurship Skills' AND NOT EXISTS (SELECT regNumber FROM kca.entrepreneurship_skills_dbit_3 WHERE students_table.regNumber = entrepreneurship_skills_dbit_3.regNumber)";
            $sql36 = "INSERT INTO kca.computer_operating_system_dbit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Computer Operating Systems' AND NOT EXISTS (SELECT regNumber FROM kca.computer_operating_system_dbit_3 WHERE students_table.regNumber = computer_operating_system_dbit_3.regNumber)";

            $sql37 = "INSERT INTO kca.business_application_software_dbit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Business Application Software' AND NOT EXISTS (SELECT regNumber FROM kca.business_application_software_dbit_4 WHERE students_table.regNumber = business_application_software_dbit_4.regNumber)";
            $sql38 = "INSERT INTO kca.application_programming_dbit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Application Programming' AND NOT EXISTS (SELECT regNumber FROM kca.application_programming_dbit_4 WHERE students_table.regNumber = application_programming_dbit_4.regNumber)";
            $sql39 = "INSERT INTO kca.object_oriented_sad_dbit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Object Oriented Analysis And Design' AND NOT EXISTS (SELECT regNumber FROM kca.object_oriented_sad_dbit_4 WHERE students_table.regNumber = object_oriented_sad_dbit_4.regNumber)";
            $sql40 = "INSERT INTO kca.data_structures_dbit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Data Structures And Algorithm' AND NOT EXISTS (SELECT regNumber FROM kca.data_structures_dbit_4 WHERE students_table.regNumber = data_structures_dbit_4.regNumber)";
            $sql41 = "INSERT INTO kca.principles_of_marketing_dbit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Principles Of Marketing' AND NOT EXISTS (SELECT regNumber FROM kca.principles_of_marketing_dbit_4 WHERE students_table.regNumber = principles_of_marketing_dbit_4.regNumber)";

            $sql42 = "INSERT INTO kca.general_economics_dbit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='General Economics' AND NOT EXISTS (SELECT regNumber FROM kca.general_economics_dbit_5 WHERE students_table.regNumber = general_economics_dbit_5.regNumber)";
            $sql43 = "INSERT INTO kca.business_information_strategy_dbit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Business Information Strategy' AND NOT EXISTS (SELECT regNumber FROM kca.business_information_strategy_dbit_5 WHERE students_table.regNumber = business_information_strategy_dbit_5.regNumber)";
            $sql44 = "INSERT INTO kca.cost_accounting_dbit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Cost Accounting' AND NOT EXISTS (SELECT regNumber FROM kca.cost_accounting_dbit_5 WHERE students_table.regNumber = cost_accounting_dbit_5.regNumber)";
            $sql45 = "INSERT INTO kca.project_dbit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Project' AND NOT EXISTS (SELECT regNumber FROM kca.project_dbit_5 WHERE students_table.regNumber = project_dbit_5.regNumber)";
            $sql46 = "INSERT INTO kca.human_resource_management_dbit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Human Resource Management' AND NOT EXISTS (SELECT regNumber FROM kca.human_resource_management_dbit_5 WHERE students_table.regNumber = human_resource_management_dbit_5.regNumber)";

            $sql47 = "INSERT INTO kca.computer_organization_and_architecture_dit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Computer organization and architecture' AND NOT EXISTS (SELECT regNumber FROM kca.computer_organization_and_architecture_dit WHERE students_table.regNumber = computer_organization_and_architecture_dit.regNumber)";
            $sql48 = "INSERT INTO kca.communication_skills_dit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Communication Skills (dit)' AND NOT EXISTS (SELECT regNumber FROM kca.communication_skills_dit WHERE students_table.regNumber = communication_skills_dit.regNumber)";
            $sql49 = "INSERT INTO kca.math_for_science_dit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Mathematics for Sciences' AND NOT EXISTS (SELECT regNumber FROM kca.math_for_science_dit WHERE students_table.regNumber = math_for_science_dit.regNumber)";
            $sql50 = "INSERT INTO kca.computer_application_software_dit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Computer Applications Software' AND NOT EXISTS (SELECT regNumber FROM kca.computer_application_software_dit WHERE students_table.regNumber = computer_application_software_dit.regNumber)";
            $sql51 = "INSERT INTO kca.operating_system_dit (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Operating systems' AND NOT EXISTS (SELECT regNumber FROM kca.operating_system_dit WHERE students_table.regNumber = operating_system_dit.regNumber)";

            $sql52 = "INSERT INTO kca.health_awareness_dit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Health Awareness Life Skills' AND NOT EXISTS (SELECT regNumber FROM kca.health_awareness_dit_2 WHERE students_table.regNumber = health_awareness_dit_2.regNumber)";
            $sql53 = "INSERT INTO kca.system_analysis_design_dit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Systems Analysis and Design' AND NOT EXISTS (SELECT regNumber FROM kca.system_analysis_design_dit_2 WHERE students_table.regNumber = system_analysis_design_dit_2.regNumber)";
            $sql54 = "INSERT INTO kca.information_literacy_dit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Information Literacy' AND NOT EXISTS (SELECT regNumber FROM kca.information_literacy_dit_2 WHERE students_table.regNumber = information_literacy_dit_2.regNumber)";
            $sql55 = "INSERT INTO kca.principles_of_database_design_dit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Principles of database design' AND NOT EXISTS (SELECT regNumber FROM kca.principles_of_database_design_dit_2 WHERE students_table.regNumber = principles_of_database_design_dit_2.regNumber)";
            $sql56 = "INSERT INTO kca.web_design_development_dit_2 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Web design and development' AND NOT EXISTS (SELECT regNumber FROM kca.web_design_development_dit_2 WHERE students_table.regNumber = web_design_development_dit_2.regNumber)";

            $sql57 = "INSERT INTO kca.financial_management_dit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Financial Management for IT' AND NOT EXISTS (SELECT regNumber FROM kca.financial_management_dit_3 WHERE students_table.regNumber = financial_management_dit_3.regNumber)";
            $sql58 = "INSERT INTO kca.programming_methodology_dit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Programming methodology' AND NOT EXISTS (SELECT regNumber FROM kca.programming_methodology_dit_3 WHERE students_table.regNumber = programming_methodology_dit_3.regNumber)";
            $sql59 = "INSERT INTO kca.entrepreneurship_dit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Entrepreneurship' AND NOT EXISTS (SELECT regNumber FROM kca.entrepreneurship_dit_3 WHERE students_table.regNumber = entrepreneurship_dit_3.regNumber)";
            $sql60 = "INSERT INTO kca.computer_networks_dit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Fundamentals of computer networks' AND NOT EXISTS (SELECT regNumber FROM kca.computer_networks_dit_3 WHERE students_table.regNumber = computer_networks_dit_3.regNumber)";
            $sql61 = "INSERT INTO kca.data_structures_dit_3 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Data structures and algorithm' AND NOT EXISTS (SELECT regNumber FROM kca.data_structures_dit_3 WHERE students_table.regNumber = data_structures_dit_3.regNumber)";

            $sql62 = "INSERT INTO kca.human_computer_interaction_dit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Human Computer interaction' AND NOT EXISTS (SELECT regNumber FROM kca.human_computer_interaction_dit_4 WHERE students_table.regNumber = human_computer_interaction_dit_4.regNumber)";
            $sql63 = "INSERT INTO kca.network_design_dit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='Network design & setup' AND NOT EXISTS (SELECT regNumber FROM kca.network_design_dit_4 WHERE students_table.regNumber = network_design_dit_4.regNumber)";
            $sql64 = "INSERT INTO kca.structured_cabling_dit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Structured Cabling' AND NOT EXISTS (SELECT regNumber FROM kca.structured_cabling_dit_4 WHERE students_table.regNumber = structured_cabling_dit_4.regNumber)";
            $sql65 = "INSERT INTO kca.java_programming_dit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Java Programming' AND NOT EXISTS (SELECT regNumber FROM kca.java_programming_dit_4 WHERE students_table.regNumber = java_programming_dit_4.regNumber)";
            $sql66 = "INSERT INTO kca.application_programming_dit_4 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Application programming' AND NOT EXISTS (SELECT regNumber FROM kca.application_programming_dit_4 WHERE students_table.regNumber = application_programming_dit_4.regNumber)";

            $sql67 = "INSERT INTO kca.organisational_management_dit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit1='Fundamentals of Organisational Management' AND NOT EXISTS (SELECT regNumber FROM kca.organisational_management_dit_5 WHERE students_table.regNumber = organisational_management_dit_5.regNumber)";
            $sql68 = "INSERT INTO kca.e_commerce_dit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit2='E-Commerce' AND NOT EXISTS (SELECT regNumber FROM kca.e_commerce_dit_5 WHERE students_table.regNumber = e_commerce_dit_5.regNumber)";
            $sql69 = "INSERT INTO kca.project_dit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit3='Project' AND NOT EXISTS (SELECT regNumber FROM kca.project_dit_5 WHERE students_table.regNumber = project_dit_5.regNumber)";
            $sql70 = "INSERT INTO kca.computer_support_maintenance_dit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit4='Principles of Computer Support & Maintenance' AND NOT EXISTS (SELECT regNumber FROM kca.computer_support_maintenance_dit_5 WHERE students_table.regNumber = computer_support_maintenance_dit_5.regNumber)";
            $sql71 = "INSERT INTO kca.photography_video_editing_dit_5 (regNumber, firstName, lastName) SELECT regNumber, firstName, lastName FROM students_table WHERE unit5='Desktop Photography & Video Editing' AND NOT EXISTS (SELECT regNumber FROM kca.photography_video_editing_dit_5 WHERE students_table.regNumber = photography_video_editing_dit_5.regNumber)";

            if(mysqli_query($conn, $sql)){
                if(mysqli_query($conn, $sql1)){
                    if(mysqli_query($conn, $sql2)) {
                        if(mysqli_query($conn, $sql3)) {
                            if(mysqli_query($conn, $sql4)) {
                                if(mysqli_query($conn, $sql5)) {
                                    if(mysqli_query($conn, $sql6)) {
                                        if(mysqli_query($conn, $sql7)){
                                            if(mysqli_query($conn, $sql8)) {
                                                if(mysqli_query($conn, $sql9)) {
                                                    if(mysqli_query($conn, $sql10)) {
                                                        if(mysqli_query($conn, $sql11)) {
                                                            if(mysqli_query($conn, $sql12)){
                                                                if(mysqli_query($conn, $sql13)) {
                                                                    if(mysqli_query($conn, $sql14)) {
                                                                        if(mysqli_query($conn, $sql15)) {
                                                                            if(mysqli_query($conn, $sql16)) {
                                                                                if(mysqli_query($conn, $sql17)){
                                                                                    if(mysqli_query($conn, $sql18)) {
                                                                                        if(mysqli_query($conn, $sql19)) {
                                                                                            if(mysqli_query($conn, $sql20)) {
                                                                                                if(mysqli_query($conn, $sql21)) {
                                                                                                    if(mysqli_query($conn, $sql22)){
                                                                                                        if(mysqli_query($conn, $sql23)) {
                                                                                                            if(mysqli_query($conn, $sql24)) {
                                                                                                                if(mysqli_query($conn, $sql25)) {
                                                                                                                    if(mysqli_query($conn, $sql26)) {
                                                                                                                        if(mysqli_query($conn, $sql27)){
                                                                                                                            if(mysqli_query($conn, $sql28)) {
                                                                                                                                if(mysqli_query($conn, $sql29)) {
                                                                                                                                    if(mysqli_query($conn, $sql30)) {
                                                                                                                                        if(mysqli_query($conn, $sql31)) {
                                                                                                                                            if(mysqli_query($conn, $sql32)){
                                                                                                                                                if(mysqli_query($conn, $sql33)) {
                                                                                                                                                    if(mysqli_query($conn, $sql34)) {
                                                                                                                                                        if(mysqli_query($conn, $sql35)) {
                                                                                                                                                            if(mysqli_query($conn, $sql36)) {
                                                                                                                                                                if(mysqli_query($conn, $sql37)){
                                                                                                                                                                    if(mysqli_query($conn, $sql38)) {
                                                                                                                                                                        if(mysqli_query($conn, $sql39)) {
                                                                                                                                                                            if(mysqli_query($conn, $sql40)) {
                                                                                                                                                                                if(mysqli_query($conn, $sql41)) {
                                                                                                                                                                                    if(mysqli_query($conn, $sql42)){
                                                                                                                                                                                        if(mysqli_query($conn, $sql43)) {
                                                                                                                                                                                            if(mysqli_query($conn, $sql44)) {
                                                                                                                                                                                                if(mysqli_query($conn, $sql45)) {
                                                                                                                                                                                                    if(mysqli_query($conn, $sql46)) {
                                                                                                                                                                                                        if(mysqli_query($conn, $sql47)) {
                                                                                                                                                                                                            if(mysqli_query($conn, $sql48)){
                                                                                                                                                                                                                if(mysqli_query($conn, $sql49)) {
                                                                                                                                                                                                                    if(mysqli_query($conn, $sql50)) {
                                                                                                                                                                                                                        if(mysqli_query($conn, $sql51)) {
                                                                                                                                                                                                                            if(mysqli_query($conn, $sql52)) {
                                                                                                                                                                                                                                if(mysqli_query($conn, $sql53)){
                                                                                                                                                                                                                                    if(mysqli_query($conn, $sql54)) {
                                                                                                                                                                                                                                        if(mysqli_query($conn, $sql55)) {
                                                                                                                                                                                                                                            if(mysqli_query($conn, $sql56)) {
                                                                                                                                                                                                                                                if(mysqli_query($conn, $sql57)) {
                                                                                                                                                                                                                                                    if(mysqli_query($conn, $sql58)){
                                                                                                                                                                                                                                                        if(mysqli_query($conn, $sql59)) {
                                                                                                                                                                                                                                                            if(mysqli_query($conn, $sql60)) {
                                                                                                                                                                                                                                                                if(mysqli_query($conn, $sql61)) {
                                                                                                                                                                                                                                                                    if(mysqli_query($conn, $sql62)) {
                                                                                                                                                                                                                                                                        if(mysqli_query($conn, $sql63)){
                                                                                                                                                                                                                                                                            if(mysqli_query($conn, $sql64)) {
                                                                                                                                                                                                                                                                                if(mysqli_query($conn, $sql65)) {
                                                                                                                                                                                                                                                                                    if(mysqli_query($conn, $sql66)) {
                                                                                                                                                                                                                                                                                        if(mysqli_query($conn, $sql67)) {
                                                                                                                                                                                                                                                                                            if(mysqli_query($conn, $sql68)){
                                                                                                                                                                                                                                                                                                if(mysqli_query($conn, $sql69)) {
                                                                                                                                                                                                                                                                                                    if(mysqli_query($conn, $sql70)) {
                                                                                                                                                                                                                                                                                                        if(mysqli_query($conn, $sql71)) {
                                                                                                                                                                                                                                                                                                            echo "<h3>Thank you for registering for your units.</h3>";
                                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                            echo nl2br("$regno\n $firstname\n $lastname\n $school\n $course\n '1. '$unit1\n '2. '$unit2\n '3. '$unit3\n '4. '$unit4\n '5. '$unit5\n '6. '$unit6\n '7. '$unit7\n '8. '$unit8\n\n");

                                                                                                                                                                                                                                                                                                            echo "If you have any problems kindly get intouch with your respective lecturer";
                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                }
                                                                                                                                                                                                                            }
                                                                                                                                                                                                                        }
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                }
                                                                                                                                                                                                            }
                                                                                                                                                                                                        }  
                                                                                                                                                                                                    }
                                                                                                                                                                                                }
                                                                                                                                                                                            }
                                                                                                                                                                                        }
                                                                                                                                                                                    }
                                                                                                                                                                                }
                                                                                                                                                                            }
                                                                                                                                                                        }
                                                                                                                                                                    }
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                        }
                                                                                                                                                    }
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } 
            // else if(mysqli_query($conn, $sql7)){
            //     if(mysqli_query($conn, $sql8)) {
            //         if(mysqli_query($conn, $sql9)) {
            //             if(mysqli_query($conn, $sql10)) {
            //                 if(mysqli_query($conn, $sql11)) {
            //                     echo "<h3>Thank you for registering for your units.</h3>";
                            
            //                     echo nl2br("$regno\n $name\n $school\n $course\n '1. '$unit1\n '2. '$unit2\n '3. '$unit3\n '4. '$unit4\n '5. '$unit5\n '6. '$unit6\n '7. '$unit7\n '8. '$unit8\n\n");

            //                     echo "If you have any problems kindly get intouch with your respective lecturer";
                                
            //                 }
            //             }
            //         }
            //     }
            // } 
            // else if(mysqli_query($conn, $sql12)){
            //     if(mysqli_query($conn, $sql13)) {
            //         if(mysqli_query($conn, $sql14)) {
            //             if(mysqli_query($conn, $sql15)) {
            //                 if(mysqli_query($conn, $sql16)) {
            //                     echo "<h3>Thank you for registering for your units.</h3>";
                            
            //                     echo nl2br("$regno\n $name\n $school\n $course\n '1. '$unit1\n '2. '$unit2\n '3. '$unit3\n '4. '$unit4\n '5. '$unit5\n '6. '$unit6\n '7. '$unit7\n '8. '$unit8\n\n");

            //                     echo "If you have any problems kindly get intouch with your respective lecturer";
                                
            //                 }
            //             }
            //         }
            //     }
            // } 
            // else if(mysqli_query($conn, $sql7)){
            //     if(mysqli_query($conn, $sql18)) {
            //         if(mysqli_query($conn, $sql19)) {
            //             if(mysqli_query($conn, $sql20)) {
            //                 if(mysqli_query($conn, $sql21)) {
            //                     echo "<h3>Thank you for registering for your units.</h3>";
                            
            //                     echo nl2br("$regno\n $name\n $school\n $course\n '1. '$unit1\n '2. '$unit2\n '3. '$unit3\n '4. '$unit4\n '5. '$unit5\n '6. '$unit6\n '7. '$unit7\n '8. '$unit8\n\n");

            //                     echo "If you have any problems kindly get intouch with your respective lecturer";
                                
            //                 }
            //             }
            //         }
            //     }
            // } 
            // else if(mysqli_query($conn, $sql22)){
            //     if(mysqli_query($conn, $sql23)) {
            //         if(mysqli_query($conn, $sql24)) {
            //             if(mysqli_query($conn, $sql25)) {
            //                 if(mysqli_query($conn, $sql26)) {
            //                     echo "<h3>Thank you for registering for your units.</h3>";
                            
            //                     echo nl2br("$regno\n $name\n $school\n $course\n '1. '$unit1\n '2. '$unit2\n '3. '$unit3\n '4. '$unit4\n '5. '$unit5\n '6. '$unit6\n '7. '$unit7\n '8. '$unit8\n\n");

            //                     echo "If you have any problems kindly get intouch with your respective lecturer";
                                
            //                 }
            //             }
            //         }
            //     }
            // } else if(mysqli_query($conn, $sq27)){
            //     if(mysqli_query($conn, $sq28)) {
            //         if(mysqli_query($conn, $sq29)) {
            //             if(mysqli_query($conn, $sql30)) {
            //                 if(mysqli_query($conn, $sql31)) {
            //                     echo "<h3>Thank you for registering for your units.</h3>";
                            
            //                     echo nl2br("$regno\n $name\n $school\n $course\n '1. '$unit1\n '2. '$unit2\n '3. '$unit3\n '4. '$unit4\n '5. '$unit5\n '6. '$unit6\n '7. '$unit7\n '8. '$unit8\n\n");

            //                     echo "If you have any problems kindly get intouch with your respective lecturer";
                                
            //                 }
            //             }
            //         }
            //     }
            // } else if(mysqli_query($conn, $sql32)){
            //     if(mysqli_query($conn, $sql33)) {
            //         if(mysqli_query($conn, $sql34)) {
            //             if(mysqli_query($conn, $sql35)) {
            //                 if(mysqli_query($conn, $sql36)) {
            //                     echo "<h3>Thank you for registering for your units.</h3>";
                            
            //                     echo nl2br("$regno\n $name\n $school\n $course\n '1. '$unit1\n '2. '$unit2\n '3. '$unit3\n '4. '$unit4\n '5. '$unit5\n '6. '$unit6\n '7. '$unit7\n '8. '$unit8\n\n");

            //                     echo "If you have any problems kindly get intouch with your respective lecturer";
                                
            //                 }
            //             }
            //         }
            //     }
            // } else if(mysqli_query($conn, $sq37)){
            //     if(mysqli_query($conn, $sq38)) {
            //         if(mysqli_query($conn, $sq39)) {
            //             if(mysqli_query($conn, $sql40)) {
            //                 if(mysqli_query($conn, $sql41)) {
            //                     echo "<h3>Thank you for registering for your units.</h3>";
                            
            //                     echo nl2br("$regno\n $name\n $school\n $course\n '1. '$unit1\n '2. '$unit2\n '3. '$unit3\n '4. '$unit4\n '5. '$unit5\n '6. '$unit6\n '7. '$unit7\n '8. '$unit8\n\n");

            //                     echo "If you have any problems kindly get intouch with your respective lecturer";
                                
            //                 }
            //             }
            //         }
            //     }
            // } else if(mysqli_query($conn, $sql42)){
            //     if(mysqli_query($conn, $sql43)) {
            //         if(mysqli_query($conn, $sql44)) {
            //             if(mysqli_query($conn, $sql45)) {
            //                 if(mysqli_query($conn, $sql46)) {
            //                     echo "<h3>Thank you for registering for your units.</h3>";
                            
            //                     echo nl2br("$regno\n $name\n $school\n $course\n '1. '$unit1\n '2. '$unit2\n '3. '$unit3\n '4. '$unit4\n '5. '$unit5\n '6. '$unit6\n '7. '$unit7\n '8. '$unit8\n\n");

            //                     echo "If you have any problems kindly get intouch with your respective lecturer";
                                
            //                 }
            //             }
            //         }
            //     }
            // } 
            else {
                // echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
            }
            mysqli_close($conn);
        // }
    ?>
    </center>    

</body>
</html>