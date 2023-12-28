<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Rosedale In Southern California, U.S.A.
 + - Company			 : Tinke Software, Free and Open Source Software
 + - Company Address		 : Rosedale In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS@Protonmail.com, TinkeSoftware@Protonmail.com
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +    () --- () () () () -- ()
 +  ()  () () () () -- () ()()()
 +  ------
 + Plug-In Application Module
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => System => Plug-Ins => Camera => Default => Live =>
 +				 : => Profile => Processor
 + - This File, Version		 : 0.7.1
 + - This File, Programming Code : Pure Pre-Hyper-Text-Post-Processor
 + - Programming Code Model	 : Procedural, Functional, Object Oriented :: Pre-Order Algebraic
 + -				 :					   :: Pre-Order Logical
 + - Compatibility		 : Pre-Hyper-Text-Post-Processor 	   :: Version Numbers: 5, 7, 8
 + -				 : Zend Engine				   :: Version Numbers: 3, 4
 + - Official Release Date	 : Wednesday, November 1st of 2023
 + ----------------------------------------------------------------------------------------------------------
 + -------------------------------------------------------------------------------	 - Nyx -
 + --[][]--[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[][][]------------   []++++||=======>
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |'-._/\_.-'|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |    []    |
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |___-[]-___|
 + -[]-----[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[]----------------    |__((**))__|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    \   -[]-   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------/-\-     \   []   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]---VERSION--|4|-	\  []  /
 + --[][]--[][][]--[]--[]--[][][]---[][][]--[]--[]--[][][]--[][][]------------\-/-	 '.[].'
 + -------------------------------------------------------------------------------
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Build Number: 0.8 - Final
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Edit Number : 4,325
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Plug-In :: Camera :: Video :: Live :: Processor
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + [ @ ] Plug-In :: Camera :: Video :: Live :: Processor :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Plug-In :: Camera :: Video :: Live :: Processor :: Variables :: Date
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_STANDARD		= date("l-F-j-Y-g-i-s-A");

/*
 ============================================================================================================
 + Plug-In :: Camera :: Video :: Live :: Processor :: Variables :: Cookies
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_USERNAME			= $_COOKIE['kernel_member_username'];
$_GLOBAL_COOKIE_MEMBER_PASSWORD			= $_COOKIE['kernel_member_password'];

/*
 ============================================================================================================
 + Plug-In :: Camera :: Video :: Live :: Processor :: Constantly Extract Video Feed
 ============================================================================================================
*/

var_dump($_FILES);

/*
 ============================================================================================================
 + Plug-In :: Camera :: Video :: Live :: Processor :: Move Finished Video File To Backup Directory
 ============================================================================================================
*/

move_uploaded_file($_FILES['blobFile']['tmp_name'], "../../../../../../Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/Files/Video/Live/Backup/$_GLOBAL_LOCAL_SERVER_DATE_STANDARD.mp4");

/*
 ============================================================================================================
 + Plug-In :: Camera :: Video :: Live :: Processor :: Copy Finished Video File From Backup Directory To Live Directory
 ============================================================================================================
*/

copy("../../../../../../Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/Files/Video/Live/Backup/$_GLOBAL_LOCAL_SERVER_DATE_STANDARD.mp4","../../../../../../Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/Files/Video/Live/$_GLOBAL_LOCAL_SERVER_DATE_STANDARD.mp4");
?>