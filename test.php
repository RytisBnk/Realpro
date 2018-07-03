<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    #progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
    #bar { background-color: #B4F5B4; width:40%; height:20px; border-radius: 3px; }
    #percent { position:absolute; display:inline-block; top:3px; left:48%; }
    </style>
  </head>
  <body>
    <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div>
    </div>
    <div id="message"></div>
  </body>
</html>
