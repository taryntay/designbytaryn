$(function () { //the dom-ready function
	
	// Gallery Slider
    if(jQuery("#gallery").length){
        
        // Declare variables
        var totalImages = jQuery("#gallery > li").length, 
            imageWidth = jQuery("#gallery > li:first").outerWidth(true),
            totalWidth = imageWidth * totalImages,
            visibleImages = Math.round(jQuery("#gallery-wrap").width() / imageWidth),
            visibleWidth = visibleImages * imageWidth,
            stopPosition = (visibleWidth - totalWidth);
            
        jQuery("#gallery").width(totalWidth);
        
        jQuery("#gallery-prev").click(function(){
            if(jQuery("#gallery").position().left < 0 && !jQuery("#gallery").is(":animated")){
                jQuery("#gallery").animate({left : "+=" + imageWidth + "px"});
            }
            return false;
        });
        
        jQuery("#gallery-next").click(function(){
            if(jQuery("#gallery").position().left > stopPosition && !jQuery("#gallery").is(":animated")){
                jQuery("#gallery").animate({left : "-=" + imageWidth + "px"});
            }
            return false;
        });
    }
    
	//Info page
    var racingPicture = $('#racingphoto'); 

    racingPicture.bind("click", function () { 

        var that = $(this); 

    	$('#amenityinfocamping').hide(); 
        $('#amenityinfotrails').hide(); 
        $('#amenityinfomudding').hide(); 
        $('#amenityinforacing').show(); 
     
        return false; 
    });
    
        var campingPicture = $('#campingphoto');

    campingPicture.bind("click", function () { 

        var that = $(this); 

        $('#amenityinforacing').hide();
        $('#amenityinfotrails').hide();
        $('#amenityinfomudding').hide();
        $('#amenityinfocamping').show(); 
        
        return false;
    });
    
        var muddingPicture = $('#muddingphoto'); 

    muddingPicture.bind("click", function () {

        var that = $(this); 

        $('#amenityinforacing').hide();
        $('#amenityinfotrails').hide(); 
        $('#amenityinfocamping').hide(); 
        $('#amenityinfomudding').show();      
        
        return false; 
    });
    
        var trailsPicture = $('#trailsphoto'); 

    trailsPicture.bind("click", function () { 

        var that = $(this); 

        $('#amenityinforacing').hide();
        $('#amenityinfocamping').hide(); 
        $('#amenityinfomudding').hide(); 
        $('#amenityinfotrails').show(); 
        
        return false; 
    });
    
    //Rules Page
    var generalRules = $('#general'); 

    generalRules.bind("click", function () { 

        var that = $(this); 

    	$('#changingracing').hide(); 
        $('#changingracingclass').hide(); 
        $('#changingmudbog').hide(); 
        $('#changingminors').hide(); 
        $('#changinggeneral').show(); 
     
        return false; 
    });
    
        var racingRules = $('#racing');

    racingRules.bind("click", function () { 

        var that = $(this); 

    	$('#changinggeneral').hide(); 
        $('#changingracingclass').hide(); 
        $('#changingmudbog').hide(); 
        $('#changingminors').hide(); 
        $('#changingracing').show(); 
        
        return false;
    });
    
        var mudbogRules = $('#mudbog'); 

    mudbogRules.bind("click", function () {

        var that = $(this); 

    	$('#changingracing').hide(); 
        $('#changingracingclass').hide(); 
        $('#changinggeneral').hide(); 
        $('#changingminors').hide(); 
        $('#changingmudbog').show();    
        
        return false; 
    });
    
        var racingclassRules = $('#racingclass'); 

    racingclassRules.bind("click", function () { 

        var that = $(this); 

    	$('#changingracing').hide(); 
        $('#changinggeneral').hide(); 
        $('#changingmudbog').hide(); 
        $('#changingminors').hide(); 
        $('#changingracingclass').show(); 
        
        return false; 
    });
    
        var minorRules = $('#minors'); 

    minorRules.bind("click", function () { 

        var that = $(this); 

    	$('#changingracing').hide(); 
        $('#changinggeneral').hide(); 
        $('#changingmudbog').hide(); 
        $('#changingracingclass').hide(); 
        $('#changingminors').show(); 
        
        return false; 
    });

});