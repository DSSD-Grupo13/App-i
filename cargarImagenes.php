<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Carga imágenes</title>
    <link rel="stylesheet" href="https://phpdropbox-jadevlaplata.rhcloud.com/examples/javascript/styles.css">
    <script src="https://unpkg.com/dropbox/dist/Dropbox-sdk.min,js"/>
    <script src="https://phpdropbox-jadevlaplata.rhcloud.com/examples/javascript/utils.js"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" />
  </head>
  <body>
    <header>
      <h2> REGISTRO DE IMÁGENES DE INCIDENTES</h2>
    </header>
<form class="" onsubmit="return uploadFile()">
  <input type="file" name="imagen" id="file-upload" />
  <input type="hidden" id="access-token" name="access-token" value="YI0Ljfi3WFAAAAAAAAAADUtXqBjRaDLpqgn3pCkVqFG4SZdGfJv3VXQDo5XwA1yt" />
  <button type="submit" name="enviar"> Enviar</button>
</form>

<h2 id"results"></h2>
<script>
var CLIENT_ID = "4kbyni9m0cw1dto";
function getAccessTokenFromUrl(){
  return "YI0Ljfi3WFAAAAAAAAAADUtXqBjRaDLpqgn3pCkVqFG4SZdGfJv3VXQDo5XwA1yt";
}
function isAuthenticated(){
  return !!getAccessTokenFromUrl();
}
function renderItems(items.dbx){
  var filesContainer = document.getElementsById('files');
  $("#files").empty();
  items.foreach(function(item){
    var li = document.createElement('li');
    sl=dbx.sharingListSharedLinks({"path":"/"+item.name}).then(function(response){
      var a=document.createElement("a");
      a.setAttribute("href", respose.url);
      a.appendChild(document.creteTextNode(item.name));
      li.appendChild(a);
    });
    files.container.appendChild(li);});
  }
  function showPageSection(elementId){
    document.getElementsById(elementId).style.display = 'block';
  }
  if (isAuthenticated()){
    showPageSection('authed-section');
    var dbx= new Dropbox({accessToken:"YI0Ljfi3WFAAAAAAAAAADUtXqBjRaDLpqgn3pCkVqFG4SZdGfJv3VXQDo5XwA1yt"});
    dbx.filesListFolder({path: ''}).then(funtion(response){renderItems(response.entries,dbx);})
    .catch (funtion(error){console.error(error);})
  }
  else{
    showPageSection('´re-auth-section');
    var dbx = new Dropbox ({clienId:CLIENT_ID});
    var authUrl = dbx.getAuthenticationUrl ('https://php.phpdropbox-jadevlaplata.thcloud.com/');
    document.getElementsById('authlink').href=authUrl;
  }

  function uploadFile(){
   var ACCES_TOKEN = document.getElementById('acces-token').value;
   var dbx = new Dropbox({accesToken: ACCES_TOKEN });
   var fileInput = document.getElementById('file-upload');
   var file = fileInput.files[0];
   dbx.filesUpload({path: '/' + file.name, contents: file})
   .then(function(response) {
    var results = document.getElementById('results');
    results.appendChild(document.createTextNode('File Uploaded!'));
    console.log(response);

    dbx.filesListFolder({path: ''})
    .then(function(response){
    renderItems(response.entries,dbx);
    })
    .catch(function(error){
    console.error(error);
    });
    })
    .catch(function(error){
    console.error(error);
    });
    return false;

  }

</script>


  </body>
</html>
