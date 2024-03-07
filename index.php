<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Fabric.js Demo</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <style>
  button {
    background-color: #ffffff;
    border-radius: 4px;
    border: 1px solid #dcdcdc;
    font-weight: bold;
    padding: 5px 20px;
    cursor: pointer;
  }

  button:hover {
    background-color: #f6f6f6;
  }
  </style>
</head>

<body>
  <button id="draw" style="background-color:red; padding:20px 50px"></button>
  <button id="remove">Clear</button>
  <button id="tosvg">Save</button>
  <br><br>
  <div>
    <canvas id="canvas" width="500" height="333"></canvas>
  </div>
  <br>
  <form action="./json.php" method="post" accept-charset="utf-8" id="submitForm">
    <input type="hidden" value="" id="saveImage" name="saveImage">
    <input type="hidden" value="" id="" name="submitBtn">
  </form>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fabric@5.2.4/dist/fabric.min.js"></script>
  <script src="./index.js"></script>
</body>

</html>