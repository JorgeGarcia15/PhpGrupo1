<!doctype html>
<head>
  <link rel="stylesheet" type="text/css" href="css/quizymemorygame.css" />
  
  <style>
    body{
      font-family:Helvetica, Arial, Verdana;
      text-align: center;
    }
    
    #tutorial-memorygame{
      margin:auto;
      width:780px;
    }
    
    .text-style1{
      font-size:14pt;
      color:#56605f;
      font-weight:normal;
      text-shadow: 1px 1px 1px #fff;
      margin:0;
      line-height:24pt;
    }
    
    .reset-button{
      margin: 0 0 1.5em 0;
    }
    
  </style>

</head>
<body>
  
  <h1>QuizY jQuery memory plugin</h1>
  
  <div id="main" role="main">
    
    <div id="tutorial-memorygame" class="quizy-memorygame">
      <ul>
          <li class="match1">
            <img src="img/flag-Bulgaria.png">
          </li>
          <li class="match2">
            <img src="img/flag-Cuba.png">
          </li>
          <li class="match3">
            <img src="img/flag-Sweden.png">
          </li>
          <li class="match4">
            <img src="img/flag-NewZealand.png">
          </li>
          <li class="match5">
            <img src="img/flag-Uruguay.png">
          </li>
          <li class="match6">
            <img src="img/flag-Tunisia.png">
          </li>
          <li class="match1">
            <br><br><br><p class="text-style1">Bulgaria</p>
          </li>
          <li class="match2">
            <br><br><br><p class="text-style1">Cuba</p>
          </li>
          <li class="match3">
            <br><br><br><p class="text-style1">Sweden</p>
          </li>
          <li class="match4">
            <br><br><br><p class="text-style1">New<br>Zealand</p>
          </li>
          <li class="match5">
            <br><br><br><p class="text-style1">Uruguay</p>
          </li>
          <li class="match6">
            <br><br><br><p class="text-style1">Tunisia</p>
          </li>
      </ul>
    </div>
    
    
    <div class="reset-button">
      <a id="restart" href="">Reset game</a>
    </div>
    
    <div>Flag icons for this demo - by <a href="http://www.gosquared.com/liquidicity/archives/1493" target="_blank">James Gill</a></div>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../js/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="../js/jquery-ui-1.8.17.custom.min.js"></script>
  
  <script src="../js/jquery.flip.min.js"></script>
  <script src="../js/jquery.quizymemorygame.js"></script>
  
  <script>
    var quizyParams = {itemWidth: 156, itemHeight: 156, itemsMargin:40, colCount:4, animType:'flip' , flipAnim:'tb', animSpeed:250, resultIcons:true, randomised:true }; 
    $('#tutorial-memorygame').quizyMemoryGame(quizyParams);
    $('#restart').click(function(){
      $('#tutorial-memorygame').quizyMemoryGame('restart');
      return false;
    });
  </script>

</body>
</html>