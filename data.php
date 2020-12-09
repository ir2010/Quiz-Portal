<?php ini_set('display_errors','1'); ?>
<!DOCTYPE html>
<html>
<head>
<title> Admin Portal </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="data_styles.css">

</head>

<body onload="populate_form()">

<script type="text/javascript" src="data_js.js"></script>

<div id="formbox">
    <form action="ques_database.php" method="POST" enctype="multipart/form-data">
    <h1 id="qno"></h1>
    <label for="ques">Question</label>
    <input type="text" name="ques" id="ques" required autofocus placeholder="Enter the Question...">

    <label for="opt1">Option A</label>
    <input type="text" name="opt1" required class="opt">

    <label for="opt2">Option B</label>
    <input type="text" name="opt2" required class="opt">

    <label for="opt3">Option C</label>
    <input type="text" name="opt3" class="opt">

    <label for="opt4">Option D</label>
    <input type="text" name="opt4" class="opt">
 
    <label for="ans">Correct Answer</label>
    <select name="ans" id="ans">
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
        <option value="d">D</option>
    </select>

    <label for=marks">Total Marks for this question</label>
    <input type="number" name="marks" min="0" required id="marks">

    <label for=neg_marks">Negative Marks for this question</label>
    <input type="number" name="neg_marks" max="0" id="neg_marks">

    <label for=file">Add File</label>
    <input type="file" name="file" id="file">

    <input type="submit" value="Submit" id="submit">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button class="btn" value="Next" onclick="update_i">Next </button>
  </form>
</div>

</body>




</html>
 