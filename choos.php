<!DOCTYPE html>
<html>
<head>
<title> Admin Portal </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="choose_styles.css">

</head>

<body>

<div>
  <form action="data.php" method="GET">
    <label for="dur">Total duration of the quiz</label>
    <input type="number" name="dur" min="10" max="240" placeholder="(in minutes)...">

    <label for="mcq">Total number of MCQ</label>
    <input type="number" name="mcq" id="mcq" min="0" max="50" >

    <label for="sub">Total number of Subjective questions</label>
    <input type="number" name="sub" min="0" max="25" >

    <input type="submit" value="Next">
  </form>
</div>

</body>
</html>
