$(function() {
	// Simple Tab - (http://net.tutsplus.com/tutorials/html-css-techniques/how-to-create-a-slick-tabbed-content-area/)
		
	function showTabContent(elem, classActive, classContent, classTabwpr){
		$("."+classTabwpr+ " ."+classActive).removeClass(classActive);
		elem.addClass(classActive);
		var content_show = elem.attr("data-id");
		$("."+classTabwpr+ " ."+content_show).addClass(classActive);
		return false;
	}
	function initTabs(classLink, classActive, classContent){
		$("."+classLink+":first-of-type").addClass(classActive);
		$("."+classContent +":first-of-type" ).addClass(classActive);
		return false;
	}
	
	// Setting Tabs
	
	// Workshop Page
	initTabs("tab_link","tab_active","tab_content");
	$(".tab_link").click(function() {
		showTabContent($(this),"tab_active","tab_content", "tabs_wpr");
	});
})