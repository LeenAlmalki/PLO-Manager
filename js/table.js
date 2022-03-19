//PLO manager
window.onload=function()
{
  var add = document.getElementById("add")
  add.addEventListener('click', function(){
    var table = document.getElementById("myTable_PLO");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML =  document.getElementById("PLO_num").value;
    cell2.innerHTML = document.getElementById("PLO_Text").value.replace(/\n/g, "<br />");
    cell3.innerHTML =  document.getElementById("PLO_Category").value.replace(/\n/g, "<br />");
  });

//Clo manager
  var add = document.getElementById("add")
  add.addEventListener('click', function(){
    var table = document.getElementById("myTable_CLO");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell1.innerHTML =  document.getElementById("Clo_num").value;
    cell2.innerHTML = document.getElementById("Clo_Text").value.replace(/\n/g, "<br />");
    cell3.innerHTML =  document.getElementById("CLO_Category").value.replace(/\n/g, "<br />");
    cell4.innerHTML =  document.getElementById("ClotoPlo").value.replace(/\n/g, "<br />");
  });

//manage course
  var add = document.getElementById("add")
  add.addEventListener('click', function(){
    var table = document.getElementById("myTable_Course");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML =  document.getElementById("Course_code").value;
    cell2.innerHTML = document.getElementById("Course_title").value.replace(/\n/g, "<br />");
    cell3.innerHTML =  document.getElementById("Course_level").value.replace(/\n/g, "<br />");
  });

//manage Faculty
  var add = document.getElementById("add")
  add.addEventListener('click', function(){
    var table = document.getElementById("myTable_Faculty");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell1.innerHTML =  document.getElementById("Faculty_Name").value;
    cell2.innerHTML = document.getElementById("Faculty_ID").value.replace(/\n/g, "<br />");
    cell3.innerHTML =  document.getElementById("Specialization").value.replace(/\n/g, "<br />");
    cell4.innerHTML =  document.getElementById("Phone_Number").value.replace(/\n/g, "<br />");
  });

//Semester Offerings
  var add = document.getElementById("add")
  add.addEventListener('click', function(){
    var table = document.getElementById("myTable_Offerings");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell1.innerHTML =  document.getElementById("SemesterOffers").value;
    cell2.innerHTML = document.getElementById("YearOffers").value.replace(/\n/g, "<br />");
    cell3.innerHTML =  document.getElementById("Course").value.replace(/\n/g, "<br />");
    cell4.innerHTML =  document.getElementById("Faculty").value.replace(/\n/g, "<br />");
  });
}
