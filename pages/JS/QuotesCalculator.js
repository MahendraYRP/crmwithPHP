
var i = 1;

const addEmployeeBtn = document.getElementById("add-employee-btn");
const employeeFormsContainer = document.getElementById("employee-forms-container");
var count = 0;
addEmployeeBtn.addEventListener("click", (e) => {
  e.preventDefault();
  count++;
  console.log(i);
  const newForm = document.createElement("div");
  newForm.classList.add("employee-form");
  console.log("val", employeeFormsContainer.querySelectorAll("form").length);
  if (count < 3) {
    newForm.innerHTML = `
    <div class="employee-form">
    <form class="p-2">

    <div id="removebtn" class="" onclick="remove(${employeeFormsContainer.querySelectorAll("form").length})">
    <i class="fa-solid fa-xmark"></i>
   </div>

  <div class="mb-3">
    <label for="employee-name" class="form-label">Employee name:</label>
    <input type="text" class="form-control" id="employee-name${i}" name="employee-name">
  </div>
  
  <div class="mb-3">
    <label for="gross-salary" class="form-label">Gross Salary:</label>
    <input type="number" class="form-control grossSalary${i}" id="gross-salary${i}" name="gross-salary" >
  </div>
  <div class="mb-3">
    <label for="gross-salary" class="form-label">Monthly</label>
    <input type="number" class="form-control Monthly${i}" id="gross-salary" name="gross-salary">
  </div>
  <div class="mb-3 form-check checkboxfill">
    <label class="form-check-label checkboxfillLable" for="daily-salary-checkbox">Daily salary?</label>
    <input type="checkbox" class="form-check-input" id="daily-salary-checkbox${i}" 
    name="daily-salary-checkbox" onchange="showDaysInput(${i})">
    
  </div>
  
  <div id="days-input-container${i}" style="display: none;">
    <div class="mb-3">
      <label for="days-worked" class="form-label">Number of days worked:</label>
      <input type="number" class="form-control" id="days-worked${i}" name="days-worked">
    </div>
  </div>

  <button type="button" id="calculateButton" onclick="myCalculate(${i++})" class="btn btn-primary">calculate</button>
  </form> 
  <div>

    `;
  }

  employeeFormsContainer.appendChild(newForm);


});

function showDaysInput(val = 0) {

  var checkbox = document.getElementById("daily-salary-checkbox");
  var daysInput = document.getElementById("days-input-container");
  if (val != 0) {
    var daysInput = document.getElementById(`days-input-container${val}`);
    var checkbox = document.getElementById(`daily-salary-checkbox${val}`);
  }
  if (checkbox.checked) {
    daysInput.style.display = "block";
  } else {
    daysInput.style.display = "none";
  }

}



function myName(i) {
  console.log(i);
  var Monthlyamount = document.getElementsByClassName(`Monthly${i}`)[0].value;
  var grossSalary = document.getElementsByClassName(`grossSalary${i}`)[0].value;

  console.log(Monthlyamount);
  console.log(grossSalary);
}


var removeform = document.getElementById('removebtn');
var clickcount = 0;
function remove(i) {

  const children = employeeFormsContainer.querySelectorAll("form");
  children[i].innerHTML = "";
  count--;
}


function myCalculate(i) {
  var monthly = document.getElementsByClassName(`Monthly${i}`)[0].value;
  var grossSalary = document.getElementsByClassName(`grossSalary${i}`)[0].value;

  const employeeName = document.getElementById('employee-name').value;
  // const grossSalary = document.getElementById('gross-salary').value;
  // const monthly = document.querySelector('.Monthly');
  const daysWorked = document.getElementById('days-worked').value;
  //Calculate totle anount
  const subAmount = document.getElementById("subAmount");
  const percentage = document.getElementById("percentage");
  const percentageinput = document.getElementById("percentageinput");
  const totalAmount = document.getElementById("totalAmount");



  var monthlySalary = grossSalary / 12;
  var numberOfDays = monthlySalary / 30;
  var subMonthlyPay = numberOfDays * daysWorked;

  monthly.value = Math.round(monthlySalary);
  subAmount.value = Math.round(subMonthlyPay);

  console.log("monthlySalary", monthlySalary);
  console.log("numberOfDays", numberOfDays);
  console.log("subdailyPay", subMonthlyPay);


  percentage.addEventListener('click', (e) => {
    e.preventDefault()
    var subAmountPercentage = subMonthlyPay * (percentageinput.value / 100);
    document.getElementById("totalamountone").value = Math.round(subAmountPercentage + subMonthlyPay);
    ;
  })


}




// ---------------------------------------------------------------------------------------------

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
var formattedDate = yyyy + '-' + mm + '-' + dd;
// Set the min and value attributes of the input
document.getElementById('edate').setAttribute('min', formattedDate);
document.getElementById('edate').setAttribute('value', formattedDate);

document.getElementById('idate').setAttribute('max', formattedDate);
document.getElementById('idate').setAttribute('min', formattedDate);
document.getElementById('idate').setAttribute('value', formattedDate);



// -------------------------------------------------------------------------------------

const myListTwo = document.getElementById('myList2');
const itemTableFills = document.getElementById('itemTableFills');
var j = 2;

document.getElementById('addBlankLine').addEventListener('click', () => {

  var tr = document.createElement('tr');


  tr.classList.add('myList2');

  tr.innerHTML = `
  <tr id="myList2">
  <td>${j}</td>
  <td><textarea class="textarea" name="message"></textarea></td>
  <td><input type="text" name="input1"></td>
  <td><input type="text" id="inputbox${j}" onkeydown="callFuncation()" name="input2"></td>
  <td>
    <input type="text" onclick="updateTax()" id="option${j}">
  </td>
<td><input type="text" id="totalamount${j++}" class="totalamount" name="totalamount"></td>
</tr>

`;
  itemTableFills.appendChild(tr);
})



document.getElementById('deleteLastElement').addEventListener('click', () => {

  if (j > 2) {
    j--;
    const myListTwo = document.getElementsByClassName('myList2');
    const lastElement = myListTwo[myListTwo.length - 1];
    console.log(myListTwo.length);
    lastElement.remove();
  }


});


// -------------------------------------------------------------------------------------------------------



const inputElement = document.getElementById('option');
const inputbox = document.getElementById('inputbox');
var selectElement = document.getElementById("tid");
const totalamount = document.getElementById('totalamount');

var priceData = "";
var selectedValue = "";


selectElement.addEventListener('change', () => {
  selectedValue = selectElement.value;
  console.log("TAX", selectedValue);
})



function callFuncation() {
  priceData = inputbox.value;
}

function updateTax() {
  callFuncation()
  let taxnum = Number(selectedValue);
  let taxAmount = taxnum * priceData / 100;
  inputElement.value = Number(taxAmount);

  afterTax = Number(taxAmount) + Number(priceData);
  totalamount.value = afterTax

}






// write a code form is dynamic increase fills and dynamic 
// decrease fills get html value and calculate the value , the below code example


// ---------------------------------------------------------------------------


