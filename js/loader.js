AOS.init({
      offset:30,
      duration:1000,
    }); 

var nameInterval;

var freeVar = 10;
var finalCount=100;
  (function(){
        document.getElementById('loadercontainer').style.display="block";   
        document.getElementById('page-top').style.overflowY="hidden";

         var counter = 0;
      var c = 0;
      var i = setInterval(loadingScreen, 200);

        function loadingScreen(){
            counter++;
            c++;
              $("#counter span").html(c);

            if(counter<freeVar){
              $(".status h2 span").html('Processing..');
            }
              $("#counterline").css("width", c + "%");
             

            if(counter==freeVar){
              clearInterval(i);
              i= setInterval(loadingScreen, 20);
              // $(".status h2 span").attr('data-aos','fade-up');
               $(".status h2 span").html('Almost done..');
            }

            if(counter==70){
              var changes = $(".loadercontainer");
              changes.css("border-bottom-right-radius","50px")
              changes.css("border-bottom-left-radius","50px")

            }
            if(counter==90){

               $(".loadercontainer").attr('data-aos','fade-down');
            }

            if(counter == finalCount) {
                clearInterval(i);
                
                document.getElementById('page-top').style.overflowY="auto";
               
               setTimeout(()=>{
                document.getElementById('loadercontainer').style.display="none";
               },400)
              nameInterval = setInterval(autotype, 100);
            }
             document.getElementById('loadercontainer').style.backdropFilter="blur("+(100-c)+"px)";
            
          }

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
