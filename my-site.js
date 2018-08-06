/**
 * This file contains your custom JavaScript code
 * whenever you edit this make sure you update the version number that loads this code
 */
console.log(" my site js is loaded 1.4 ");
// Note WordPress load jQuery as jQuery and not $
jQuery(document).ready(function ($) {
    

    /**
     * Below is an example of a dynamic element.
     * To test this add this html to a page:
     * <button id="pedagogic" class="btn btn-success"  >Explain Padagogic Tool</button>
     *  
     */
    $("#pedagogic").click(function () {
        $.get("http://quotes.rest/qod.json?category=inspire", function(data){
            $("#rawQuote").append(JSON.stringify(data));
            console.log(data);
            $("#formatQuote").html('<h3>' + data.contents.quotes[0].quote + '</h3>' + '<i>' + data.contents.quotes[0].author + '</i>');
        }, 'json')
        // $("#rawQuote").html("<b>Will do</b>");
        
      //  alert(' Pedagogy: is the discipline that deals with the theory and practice of teaching and how these influence student learning. ');   
    });

    $("#pedagogic").text('saver');

});