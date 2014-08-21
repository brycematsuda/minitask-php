$(document).ready(function(){
  $("ul.nav.nav-tabs li#home").addClass("active");

  /* Switch active class on switch */
  $("ul.nav.nav-tabs li#create").click(function(){
    $("div.list-group").load("create.php");
    $("ul.nav.nav-tabs li#create").addClass("active");
    $("ul.nav.nav-tabs li#home").removeClass("active");
  });

  $("ul.nav.nav-tabs li#home").click(function(){
    $( "body" ).load( "index.php" );
    $("ul.nav.nav-tabs li#home").addClass("active");
    $("ul.nav.nav-tabs li#create").removeClass("active");
  });

  /* Sort tasks */
  $("ul#sort.dropdown-menu li").click(function() {
    var option = $(this).attr("sort");
    var request = $.ajax({ // Setup ajax request
        url: "index.php",
        type: "GET",
        data: { "sort": option },
        cache: false,
        dataType: "html",
        success: function(html) {
          var newDoc = document.open("text/html", "replace");
          newDoc.write(html);
          newDoc.close();
        }
      });

      // else something went wrong, display error.
      request.fail(function(jqXHR, textStatus) {
        alert( "Request failed: " + textStatus );
      });
    });
});