// When the user clicks on the button, scroll to the top of the document
$('.returnar-ao-topo').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});