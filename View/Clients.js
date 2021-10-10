var clients=[];
var myIndex;
var jsonData;

  
function cities(){
    var cities = $("#client-city");
    $.ajax({
      type: 'post',
      url:'../Controllers/ClientsController.php',
      async: true,
      data: {Data:'CargarCities'},
      success: function (response){
          var obj1 = JSON.parse(response);
          
          const resultados=obj1.city;
          $(resultados).each(function(keyCities, vCities){ 
            $("#client-city").append('<option value='+vCities.id+'>'+vCities.name+'</option>');		 
          });  
      }
  });
}

cities();

function addClient(){
  
  var newClient={
    id:document.getElementById("client-id").value,
    name:document.getElementById("client-name").value,
    code:document.getElementById("client-code").value,
    picture:document.getElementById("client-picture").value,
    city:document.getElementById("client-city").value,
  }
//console.log(newClient)
  $.ajax({
      type: 'post',
      url:'../Controllers/ClientsController.php',
      async: true,
      data: {Data:newClient},
      success: function (result){
      }
  })
 // clients.push(newClient)
  displayClients()
}

  function displayClients(){
    $.ajax({
      type: 'post',
      url:'../Controllers/ClientsController.php',
      async: true,
      data: {Data:'ListClient'},
    
      success: function (response){
          const objClient = JSON.parse(response);
          const resultados=objClient.Client;

          
          $(resultados).each(function(keyCities, vClients){ 
            clients.push(vClients);
            
            var myTr=document.createElement("tr")

            var mytdId=document.createElement("td")
            mytdId.innerHTML=vClients.id;
            myTr.appendChild(mytdId);

            var mytd=document.createElement("td")
            mytd.innerHTML=vClients.name;
            myTr.appendChild(mytd);

            var mytdCode=document.createElement("td")
            mytdCode.innerHTML=vClients.code;
            myTr.appendChild(mytdCode);

            var mytdPicture=document.createElement("td")
            mytdPicture.innerHTML=vClients.picture;
            myTr.appendChild(mytdPicture);
  
            var mytdcityName=document.createElement("td")
            mytdcityName.innerHTML=vClients.cityName;
            myTr.appendChild(mytdcityName);
            
            var actionTd=document.createElement("td")
            var editBtn=document.createElement("button")
            editBtn.innerHTML="Edit"
            editBtn.setAttribute("class" , "btn btn-sm btn-primary")
            editBtn.setAttribute("onclick" , "editClient("+vClients.id+")")

            var deletebtn=document.createElement("button")
            deletebtn.innerHTML="Delete"
            deletebtn.setAttribute("class" , "btn btn-sm btn-danger")
            deletebtn.setAttribute("onclick" , "deleteClient("+vClients.id+")")

            actionTd.appendChild(editBtn)
            actionTd.appendChild(deletebtn)
            myTr.appendChild(actionTd)
            document.getElementById("form-list-client-body").appendChild(myTr)
          });
          
      }
      
    });
      document.getElementById("client-id").value="";
      document.getElementById("client-name").value="";
      document.getElementById("client-code").value="";
      document.getElementById("client-picture").value="";
      document.getElementById("client-city").value="";
  }

  displayClients();

  //Editing Client
  function editClient(i){
  $.ajax({
      type: 'post',
      url:'../Controllers/ClientsController.php',
      async: true,
      data: {Data: 'obtenerClient', id: i},
      success: function (response){
          const objClient = JSON.parse(response);

          myIndex=i;
          var updatebtn=document.createElement("button")
          updatebtn.innerHTML="Update";
          updatebtn.setAttribute("class", "btn btn-sm btn-success")
          updatebtn.setAttribute("onclick","updClient()")
          document.getElementById("saveupdate").innerHTML=""
          document.getElementById("saveupdate").appendChild(updatebtn);
          document.getElementById("client-id").value=objClient.Client.id;
          document.getElementById("client-name").value=objClient.Client.name
          document.getElementById("client-code").value=objClient.Client.code;
          document.getElementById("client-picture").value=objClient.Client.picture;
          document.getElementById("client-city").value=objClient.Client.city;
       
      }
  })
}

//Updating Client
function updClient(){
  var updatedClient={
    id:document.getElementById("client-id").value,
    name:document.getElementById("client-name").value,
    code:document.getElementById("client-code").value,
    picture:document.getElementById("client-picture").value,
    city:document.getElementById("client-city").value,
  }
  
  $.ajax({
    type: 'post',
    url:'../Controllers/ClientsController.php',
    async: true,
    data: {Data:'updatedClient',info: updatedClient },
    success: function (response){
        var obj1 = JSON.parse(response);
       displayClients();     
    }
});

  }


  function deleteClient(i){
  $.ajax({
      type: 'post',
      url:'../Controllers/ClientsController.php',
      async: true,
      data: {Data: 'eliminarClient', id: i},
      success: function (response){ 
        displayClients();
      }
    })
  }
