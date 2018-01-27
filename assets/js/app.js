$(document).ready(function() {
    board();

    clock();
    
    weather();
    
    flashinfo();
    $(function(){$("ul#flashinfoshow").liScroll({travelocity: 0.08});});

    schedule();
    
    partners();


    refresh();
  });

/* INIT BLOCKS */

function board() {
  $.ajax({
    async : false,
    type: "GET",
    url: "./blocks/board.php",
    success: function(html){
      $("#BOARD").html(html);
    }
  });
}

function clock() {
  $.ajax({
    async : false,
    type: "GET",
    url: "./blocks/clock.php",
    success: function(html){
      $("#CLOCK").html(html);
    }
  });
}

  function clock_show() {
    dows  = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    mois  = ["janv", "f&eacute;v", "mars", "avril", "mai", "juin", "juillet", "ao&ucirc;t", "sept", "oct", "nov", "d&eacute;c"];
  
    now          = new Date;
    heure        = now.getHours();
    min          = now.getMinutes();
    sec          = now.getSeconds();
    jour_semaine = dows[now.getDay()];
    jour         = now.getDate();
    mois         = mois[now.getMonth()];
    annee        = now.getFullYear();
  
    if (sec < 10){sec0 = "0";}else{sec0 = "";}
    if (min < 10){min0 = "0";}else{min0 = "";}
    if (heure < 10){heure0 = "0";}else{heure0 = "";}
  
    clock_hours   = "<span class=\"hours\">" + heure + ":" + min0 + min + "</span>";
    clock_date    = "<span class=\"date\">" + jour_semaine + " " + jour + " " + mois + " " + annee + "</span>";
    clock_content = clock_hours + "<br />" + clock_date;
  
    $("#CLOCK_SHOW").html(clock_content);
  
    clock_timeout = setTimeout("clock_show()", 1000);
  }

  function weather() {
    $.ajax({
      async : false,
      type: "GET",
      url: "./blocks/weather.php",
      success: function(html){
        $("#WEATHER").html(html);
        /* console.log('The << WEATHER >> service to check if an update was needed'); */
      }
    });

    weather_timeout = setTimeout("weather()", 600000);
  }

  function flashinfo() {
    $.ajax({
      async : false,
      type: "GET",
      url: "./blocks/flashinfo.php",
      success: function(html){
        $("#FLASHINFO").html(html);
      }
    });
  }

  function partners() {
    $.ajax({
      async : false,
      type: "GET",
      url: "./blocks/partners.php",
      success: function(html){
        $("#PARTNERS").html(html);
      }
    });
  }

  function schedule() {
    $.ajax({
      async : false,
      type: "GET",
      url: "./blocks/schedule.php",
      success: function(html){
        $("#SCHEDULE").html(html);
      }
    });
  }

/* INIT SERVICE */

function refresh() {
  $.ajax({
    async : false,
    type: "GET",
    url: "./refresh.php",
    success: function(bool){
      if (bool == "true") {
        document.getElementById('main-container').remove();
        $.ajax({
          async : false,
          type: "GET",
          url: "./mainrefresh.php",
          success: function(html){
            $("html").html(html);
            setTimeout(function() { document.location.href="/index.php" }, 3000);
          }
        });
      }
    }
  });

  refresh_timeout = setTimeout("refresh()", 1000);
}


jQuery.fn.liScroll = function(settings) {
  settings = jQuery.extend({
  travelocity: 0.07
  }, settings);		
  return this.each(function(){
      var $strip = jQuery(this);
      $strip.addClass("newsticker")
      var stripWidth = 1;
      $strip.find("li").each(function(i){
        stripWidth += jQuery(this, i).outerWidth(true);
      });
      var $mask = $strip.wrap("<div class='mask'></div>");
      var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
      var containerWidth = $strip.parent().parent().width();
      $strip.width(stripWidth);			
      var totalTravel = stripWidth+containerWidth;
      var defTiming = totalTravel/settings.travelocity;
      function scrollnews(spazio, tempo){
        $strip.animate({left: '-='+ spazio}, tempo, "linear", function(){$strip.css("left", containerWidth); scrollnews(totalTravel, defTiming);});
      }
      scrollnews(totalTravel, defTiming);				
      $strip.hover(function(){
        //jQuery(this).stop();
      },
      function(){
        var offset = jQuery(this).offset();
        var residualSpace = offset.left + stripWidth;
        var residualTime = residualSpace/settings.travelocity;
        scrollnews(residualSpace, residualTime);
      });			
  });	
};