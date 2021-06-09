$(document).ready(function(){

$("#tekstslika1").click(function(){
$("#tekstvelikaslika").text("Slika 1"); 
$("#velikaslika").attr("src", "Slika1.jpg"); 
});

$("#slika1").click(function(){
$("#tekstvelikaslika").text("Slika 1"); 
$("#velikaslika").attr("src", "Slika1.jpg"); 
});

$("#slika2").click(function(){
$("#tekstvelikaslika").text("Slika 2"); 
$("#velikaslika").attr("src", "Slika2.jpg"); 
});

$("#slika3").click(function(){
$("#tekstvelikaslika").text("Slika 3"); 
$("#velikaslika").attr("src", "Slika3.jpg"); 
});

$("#slika4").click(function(){
$("#tekstvelikaslika").text("Slika 4"); 
$("#velikaslika").attr("src", "Slika4.jpg"); 
});

$("#slika5").click(function(){
$("#tekstvelikaslika").text("Slika 5"); 
$("#velikaslika").attr("src", "Slika5.jpg"); 
});

$("#slika6").click(function(){
$("#tekstvelikaslika").text("Slika 6"); 
$("#velikaslika").attr("src", "Slika6.jpg"); 
});

$("#slika7").click(function(){
$("#tekstvelikaslika").text("Slika 7"); 
$("#velikaslika").attr("src", "Slika7.jpg"); 
});

$("#slika8").click(function(){
$("#tekstvelikaslika").text("Slika 8"); 
$("#velikaslika").attr("src", "Slika8.jpg"); 
});

$("#slika9").click(function(){
$("#tekstvelikaslika").text("Slika 9"); 
$("#velikaslika").attr("src", "Slika9.jpg"); 
});

$("#slika10").click(function(){
$("#tekstvelikaslika").text("Slika 10"); 
$("#velikaslika").attr("src", "Slika10.jpg"); 
});

});

$(document).ready(function(){
  $("a.topnava").click(function(){
    $.ajax({url: "uputstvo.txt", error: function(xhr){
      alert("Dogodila se greska: " + xhr.status + " " + xhr.statusText);
    }});
  });
});