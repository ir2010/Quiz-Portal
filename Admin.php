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
  /*background-repeat: no-repeat;*/
  /*height: 100%;*/
}

h1 
{
  text-align:center; 
  color: #fcffff; 
  font-size: 2.5 em;
}

.btn
{
  text-align: center;
  background-color: #0484f1;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 200px;
}

.btn:hover{
           background-color: grey;
		       border-color: grey;
		      }

a{
  text-decoration: none;
}

a:link 
{
  color: #ffffff;
}
a:visited 
{
  color: #ffffff;
}
</style>



<body>
<h1>Hello User!</h1>
<ul style="text-align: center; margin: auto;" type="none">
<li> <div class="btn"> <a href="choos.html" target="__blank">+ &nbsp;  Add Question </div>
<li> <div class="btn"> + &nbsp;  Delete/Edit Question </div>
<li> <div class="btn"> + &nbsp;  See Stats </div>
</ul>
</body>