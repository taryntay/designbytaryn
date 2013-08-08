$(function () { //the dom-ready function

    var infoPictures = $('#amenitypictures img'); //variable assigned to the anchors of the lis inside the ul of the tabs class.

    infoPictures.bind("click", function () { //click event assigned to the tabAnchors.

        var that = $(this); //variable assigned to "this" to minimize factories.

        $('#amenityinfo').hide(); //The content divs (class of tab) are all told to hide.
        
        $('#amenityinforacing').show(); /*The content div with the same name as the anchor href that has been clicked is shown, so that the corresponding content is displayed.*/
     
        return false; //Event default cancelled using return false.
    });
});