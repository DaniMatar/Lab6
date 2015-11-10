$(document).ready(function(){
   $('#searchExpr').keyup(function () {
     var t = this;
     $("#TxtHint").load("newFilmSearcher.php?searchExpr=" + t.value);

       $('#feedback').hover(function () {
               $("#EmpHint").load("newFilmSearcher.php?searchExpr="+ "~" + t.value);
           });

   });





 });




