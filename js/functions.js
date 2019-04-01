$(function ()
 {
  var operation = "C"; 
  var selected_index = 0; 
  var tblPersons = localStorage.getItem("tblPersons"); 
  tblPersons = JSON.parse(tblPersons); //Converting to String a Object
  if (tblPersons === null) 
        tblPersons = [];

  function Create() 
  {
      var person = JSON.stringify(
      {
        ID: $("#txtID").val(),
        Name: $("#txtName").val(),
        Phone: $("#txtPhone").val(),
        Email: $("#txtEmail").val()
    }); 
   
    tblPersons.push(person);
    localStorage.setItem("tblPersons", JSON.stringify(tblPersons));
    alert("Successfuly Inserted"); 
    return true;
  }

  function Edit() 
  {
     tblPersons[selected_index] = JSON.stringify(
     {
          ID: $("#txtID").val(),
          Name: $("#txtName").val(),
          Phone: $("#txtPhone").val(),
          Email: $("#txtEmail").val()
    });
    localStorage.setItem("tblPersons", JSON.stringify(tblPersons)); 
    alert("Are You Sure to Update?"); 
    return true;
  }

  function Delete() 
  {
     tblPersons.splice(selected_index, 1); 
    localStorage.setItem("tblPersons", JSON.stringify(tblPersons)); 
    alert("Sure to Delete"); 
  }

  function List() 
  {
    $("#tblList").html("");
    $("#tblList").html(
            "<thead>" +
            "<tr>" +                
            "<th>ID</th>" +
            "<th>Name</th>" +
            "<th>Phone</th>" +
            "<th>Email</th>" +
            "<th>Actions</th>" +
            "</tr>" +
            "</thead>" +
            "<tbody>" +
            "</tbody>"
            ); 
    for (var i in tblPersons) 
    {
        var per = JSON.parse(tblPersons[i]);
        $("#tblList tbody").append("<tr>" +                    
                "<td>" + per.ID + "</td>" +
                "<td>" + per.Name + "</td>" +
                "<td>" + per.Phone + "</td>" +
                "<td>" + per.Email + "</td>" +                    
                "<td><img src='edit.png' alt='Edit" + i + "' class='btnEdit'/>&nbsp &nbsp<img src='delete.png' alt='Delete" + i + "' class='btnDelete'/></td>" +
                "</tr>"
                );
    } 
  }

  $("#frmPerson").bind("submit", function () 
  {
    if (operation === "C")
        return Create();
    else
        return Edit();
  });
  
  List();

  $(".btnEdit").bind("click", function () 
  {
    operation = "E"; //"E" = Edit Mode
    selected_index = parseInt($(this).attr("alt").replace("Edit", ""));
    var per = JSON.parse(tblPersons[selected_index]); //JSON.parse(text[, reviver]) optional reviver function can be provided 
    //to perform a transformation on the resulting object before it is returned.
    $("#txtID").val(per.ID);
    $("#txtName").val(per.Name);
    $("#txtPhone").val(per.Phone);
    $("#txtEmail").val(per.Email);
    $("#txtID").attr("readonly", "readonly");
    $("#txtName").focus();
  });

  $(".btnDelete").bind("click", function () 
  {
    selected_index = parseInt($(this).attr("alt").replace("Delete", "")); 
    Delete(); 
    List(); 
  });
});

