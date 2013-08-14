$(function () { //the dom-ready function
	
	// Gallery
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
	
    var infoPictures = $('#amenitypictures img'); //variable assigned to the anchors of the lis inside the ul of the tabs class.

    infoPictures.bind("click", function () { //click event assigned to the tabAnchors.

        var that = $(this); //variable assigned to "this" to minimize factories.

        $('#amenityinfo').hide(); //The content divs (class of tab) are all told to hide.
        
        $('#amenityinforacing').show(); /*The content div with the same name as the anchor href that has been clicked is shown, so that the corresponding content is displayed.*/
     
        return false; //Event default cancelled using return false.
    });
});