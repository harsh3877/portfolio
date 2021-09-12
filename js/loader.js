AOS.init({
      offset:30,
      duration:1000,
    }); 

var nameInterval;
          (function(){
                document.getElementById('loadercontainer').style.display="block";   
                document.getElementById('page-top').style.overflowY="hidden";
                 var counter = 0;
              var c = 0;
              var i = setInterval(function(){
                  $(".counter h2 span").html(c);
                  $("#counterline").css("width", c + "%");
                 
                counter++;
                c++;
                  
                if(counter == 101) {
                    clearInterval(i);
                    document.getElementById('page-top').style.overflowY="auto";
                   
                    document.getElementById('loadercontainer').style.display="none";
                  nameInterval = setInterval(autotype, 100);
                }
                 document.getElementById('loadercontainer').style.backdropFilter="blur("+(100-c)+"px)";
                
              }, 25);
          }());

          $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });


const name = [
"H", 
"HA", 
"HAR",
"HARS",
"HARSH",
"HARSH",
"HARSH",
"HARSH",
"HARSH S",
"HARSH SH",
"HARSH SHA",
"HARSH SHAR",
"HARSH SHARM",
"HARSH SHARMA",
];

var c=0;

// var nameInterval = setInterval(autotype, 200);

function autotype(){
  document.getElementById('myname').innerHTML = name[c] ;
  c=c+1;
  if(name.length==c){
    clearInterval(nameInterval);
    setTimeout(function(){
      document.getElementById('blinking-cursor').style.display='none';
    },1000);
  }
}
