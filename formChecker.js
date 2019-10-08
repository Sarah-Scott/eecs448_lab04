function checkInput()
{

  var pw = document.getElementById("password").value;
  if (!checkAmounts() || !checkUsername() || pw.length < 1 || !checkShipping())
    event.preventDefault()

}

function checkAmounts()
{
  var sweatshirtQuantity = document.getElementById("sweatshirt").value;
  var braceletQuantity = document.getElementById("bracelet").value;
  var tightsQuantity = document.getElementById("tights").value;

  if(sweatshirtQuantity.length > 0 && braceletQuantity.length > 0 && tightsQuantity.length > 0)
      if(Number(sweatshirtQuantity) >= 0 && Number(braceletQuantity) >= 0 && Number(tightsQuantity) >= 0)
        return true;

 return false;
}

function checkUsername()
{
  var re = /\S+@\S+\.com+/;
  var email = document.getElementById("username").value;
  console.log(email);
  console.log("email");
  return re.test(email);
}

function checkShipping()
{
  var radios = document.getElementsByName("1");
  for (var i = 0; i < radios.length; i++)
    if(radios[i].checked)
      return true;

  return false;
}


// function clearInput()
// {
//   let in = document.getElementsByTagName("input");
//   for(let i=0; i<in.length; i++)
//   {
//     if(in[i].value != "submit")
//       in[i].value = "";
//     if(in[i].type == "radio")
//       in[i].checked = false;
//   }
// }
