
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
    <input type="text" class="form-control" id="employee-name${i}" name="employee-name" value="${i}">
  </div>
  
  <div class="mb-3">
    <label for="gross-salary" class="form-label">Gross Salary:</label>
    <input type="number" class="form-control" id="gross-salary${i}" name="gross-salary" >
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

  <button type="button" id="calculateButton" onclick="myName(${i++})" class="btn btn-primary">calculate</button>
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
 var Monthlyamount =  document.getElementsByClassName(`Monthly${i}`)[0].value;
 console.log(Monthlyamount);
}


var removeform = document.getElementById('removebtn');
var clickcount = 0;
function remove(i) {

  const children = employeeFormsContainer.querySelectorAll("form");
  children[i].innerHTML = "";
  count--;
}


function myCalculate() {
  // e.preventDefault();
  // console.log(e);
  
  const employeeName = document.getElementById('employee-name').value;
  const grossSalary = document.getElementById('gross-salary').value;
  const monthly = document.querySelector('.Monthly');
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
    var subAmountPercentage = subMonthlyPay + (percentageinput.value / 100);
    totalAmount.value = Math.round(subAmountPercentage);
  })


}

