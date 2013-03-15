/***********************************************************************************
*	(c) Ger Versluis 2000 version 5.411 24 December 2001 (updated Jan 31st, 2003 by Dynamic Drive for Opera7)
*	For info write to menus@burmees.nl		          *
*	You may remove all comments for faster loading	          *		
***********************************************************************************/

	var NoOffFirstLineMenus=6;			// Number of first level items
	var LowBgColor='#006699';			// Background color when mouse is not over
	var LowSubBgColor='#006699';			// Background color when mouse is not over on subs
	var HighBgColor='#EBEBEB';			// Background color when mouse is over
	var HighSubBgColor='#EBEBEB';			// Background color when mouse is over on subs
	var FontLowColor='#FFFFFF';			// Font color when mouse is not over
	var FontSubLowColor='#FFFFFF';			// Font color subs when mouse is not over
	var FontHighColor='#000000';			// Font color when mouse is over
	var FontSubHighColor='#000000';			// Font color subs when mouse is over
	var BorderColor='#EBEBEB';			// Border color
	var BorderSubColor='#EBEBEB';			// Border color for subs
	var BorderWidth=0;				// Border width
	var BorderBtwnElmnts=1;			// Border between elements 1 or 0
	var FontFamily="trebuchet ms"	// Font family menu items
	var FontSize=12;				// Font size menu items
	var FontBold=1;				// Bold menu items 1 or 0
	var FontItalic=0;				// Italic menu items 1 or 0
	var MenuTextCentered='left';			// Item text position 'left', 'center' or 'right'
	var MenuCentered='center';			// Menu horizontal position 'left', 'center' or 'right'
	var MenuVerticalCentered='top';		// Menu vertical position 'top', 'middle','bottom' or static
	var ChildOverlap=0;				// horizontal overlap child/ parent
	var ChildVerticalOverlap=0;			// vertical overlap child/ parent
	var StartTop=115;				// Menu offset x coordinate
	var StartLeft=-5;				// Menu offset y coordinate
	var VerCorrect=0;				// Multiple frames y correction
	var HorCorrect=0;				// Multiple frames x correction
	var LeftPaddng=15;				// Left padding
	var TopPaddng=5;				// Top padding
	var FirstLineHorizontal=1;			// SET TO 1 FOR HORIZONTAL MENU, 0 FOR VERTICAL
	var MenuFramesVertical=1;			// Frames in cols or rows 1 or 0
	var DissapearDelay=400;			// delay before menu folds in
	var TakeOverBgColor=1;			// Menu frame takes over background color subitem frame
	var FirstLineFrame='navig';			// Frame where first level appears
	var SecLineFrame='space';			// Frame where sub levels appear
	var DocTargetFrame='space';			// Frame where target documents appear
	var TargetLoc='';				// span id for relative positioning
	var HideTop=0;				// Hide first level when loading new document 1 or 0
	var MenuWrap=0;				// enables/ disables menu wrap 1 or 0
	var RightToLeft=0;				// enables/ disables right to left unfold 1 or 0
	var UnfoldsOnClick=0;			// Level 1 unfolds onclick/ onmouseover
	var WebMasterCheck=0;			// menu tree checking on or off 1 or 0
	var ShowArrow=0;				// Uses arrow gifs when 1
	var KeepHilite=1;				// Keep selected path highligthed
	var Arrws=['projimages/tri.gif',5,10,'projimages/tridown.gif',10,5,'projimages/trileft.gif',5,10];	// Arrow source, width and height

function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}


// Menu tree
//	MenuX=new Array(Text to show, Link, background image (optional), number of sub elements, height, width);
//	For rollover images set "Text to show" to:  "rollover:Image1.jpg:Image2.jpg"

// Menu1=new Array("<img src='projimages/home.png' height='20' width='20'></img>","index.html","projimages/gradient.png",0,20,138);
Menu1=new Array("Home","index.php"," ",0,30,150);

Menu2=new Array("Stock",""," ",3,30,150);
	Menu2_1=new Array("Add Stock","inventory.php","",0,30,150);
	Menu2_2=new Array("Datewise Report","dwinvreport.php","",0,30,150);
	Menu2_3=new Array("Itemwise Report","iwinvreport.php","",0,30,150);


Menu3=new Array("About Us","about.html"," ",0,30,120);

Menu4=new Array("Portfolio","portfolio.html"," ",0,30,120);

Menu5=new Array("Divisions","uc.html"," ",4,30,120);
	
	Menu5_1=new Array("Engineering Division","uc.html","",0,30,150);
	Menu5_2=new Array("Services Division","uc.html","",0,30,150);
	Menu5_3=new Array("Software Division","uc.html","",0,30,150);
	Menu5_4=new Array("Hardware Division","uc.html","",0,30,150);

Menu6=new Array("Products & Services",""," ",2,30,140);

	Menu6_1=new Array("Products","products.html","",9,30,150);
		Menu6_1_1=new Array("Trading System","uc.html","",0,30,200);
		Menu6_1_2=new Array("ERP Solution","uc.html","",0,30,200);
		Menu6_1_3=new Array("Hospital Management","uc.html","",0,30,200);
		Menu6_1_4=new Array("Time Tracking System","uc.html","",0,30,200);
		Menu6_1_5=new Array("Trouble Ticket System","uc.html","",0,30,200);
		Menu6_1_6=new Array("Inventory & Accounts","uc.html","",0,30,200);
		Menu6_1_7=new Array("e-Education Solution","uc.html","",0,30,200);
		Menu6_1_8=new Array("Lawyer\'s Case Management","uc.html","",0,30,200);
		Menu6_1_9=new Array("Point of Sale Solution","uc.html","",0,30,200);

	Menu6_2=new Array("Services","services.html","",11,30,150);

		Menu6_2_1=new Array("Enterprise Resource Planning","uc.html","",0,30,200);
		Menu6_2_2=new Array("Software Development","uc.html","",0,30,200);
		Menu6_2_3=new Array("Web/E-Commerce Solutions","uc.html","",0,30,200);
		Menu6_2_4=new Array("Search Engine Optimization","uc.html","",0,30,200);
		Menu6_2_5=new Array("Graphics Designing","uc.html","",0,30,200);
		Menu6_2_6=new Array("Mobile Apps Development","uc.html","",0,30,200);
		Menu6_2_7=new Array("IT Consulting","uc.html","",0,30,200);
		Menu6_2_8=new Array("Network Management","uc.html","",0,30,200);
		Menu6_2_9=new Array("Servers Management","uc.html","",0,30,200);
		Menu6_2_10=new Array("Solution Engineering","uc.html","",0,30,200);
		Menu6_2_11=new Array("Software Purchases","uc.html","",0,30,200);

