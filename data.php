<?php ini_set('display_errors','1'); ?>
<!DOCTYPE html>
<html>
<head>
<title> Admin Portal </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body 
{
  overflow-x: hidden;
  background-image: url("bg.jpg");
  background-position: center;
  /*width:100%;*/
  background-size: cover;
  position: relative;
  /*background-repeat: no-repeat;*/
  /*height: 100%;*/
}


input[type=text],input[type=file],input[type=number],select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit],.btn {
  background-color: #0484f1;
  color: white;
  width: 6em;
  height: 3em;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  position: relative;
  left: 45%;
  cursor: pointer;
}

input[type=submit]:hover,.btn:hover {
    background-color: grey;
		       border-color: grey;
}

#formbox {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  /*position: absolute;
  top:5%;
  -ms-transform: translateY(+50%);
  transform: translateY(+50%);*/
  margin-left: auto;
  margin-top: auto;
}

</style>
</head>

<body onload="populate_form()">



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

<script>
    var i;
    var no_of_mcq = "<?php echo $_GET['mcq'] ?>";

function populate_form()
{
    for(i=1;i<=no_of_mcq;i++)
    {      
      document.getElementById("qno").innerHTML = "Question "+i;
      //create_form();

    }
}

function create_form()
{
        form= document.getElementById("formbox");
        form.style.display="block";
}

function update_i()
{
    i++;
}

/*function validate()
{
var ques = document.getElementById("ques");

var constraint_ques = new RegExp("(?)");
    console.log(constraint_ques);

if (constraint_ques.test(ques.value)) {
    ques.setCustomValidity("");
  }
  else {
    ques.setCustomValidity("Must be a valid question!");
  }
}

window.onload = function () {
    document.getElementById("ques").oninput = validate;

}*/


</script>


</html>
 