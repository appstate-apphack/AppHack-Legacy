<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Palindrome testing application.">
    <meta name="author" content="Sina Tashakkori">
   <script src="ajaxpagefetcher.js"></script>
   <script src="jquery-1.11.1.js"></script>
    <link href="./palindromes.css" rel="stylesheet">
  </head>
  <div id="cover">
  <body>
    <div class="container" id="bubble">
      <form class="form-signin" role="form">
            <div id="input">
            <input type="word" type="text" class="form-control" id="palindromeform" onchange="checkPalindrome(this)">
            <script>
   var text_input = document.getElementById ('palindromeform');
   text_input.focus();
   text_input.select();
function checkPalindrome(checkstring){
  alert("Value changed."+checkstring.value);
}
/*
$('palindromeform').change(function(){
    $('palindromeform').text($text_input.value);
  }
);
*/
//$('#palindromeform').on('change', function(evt) { console.log(this.val()) })
   /*
text_input.on('change','palindromeform',function(){
    $('palindromeform').text($text_input.value);
  });
  //$('input').text(text_input.value);*/
            </script>
            </div>
            <style type="text/css">
  .input { cursor:none; }
            </style>
            <br>
            <br>
          </form>
    </div>
    </body>
    </div>
</html>
