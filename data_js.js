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

