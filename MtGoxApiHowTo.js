<SCRIPT LANGUAGE="JavaScript" type="text/javascript">
function startTimer() {
    var now = new Date();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    setTimeout('refresh()',
    (((30 - (minutes % 30) - ((seconds>0)?1:0)) * 60    ) + (60 - seconds)) * 1000);
}
function refresh() {
    window.location.href = 'index.php';
}
 
function onConnect(){
  $("#ConnectionStatus").text('MtGox Socket.io:  Connected);
}

function onDisconnect(data){
  $("#ConnectionStatus").text('MtGox Socket.io:  Disconnected.);
}

function onError(data){
  $("#ConnectionStatus").text('CMtGox Socket.io:  Error.');
}

function onMessage(data){
  $("#ConnectionStatus").text('MtGox Socket.io:  Message recieved.'+ data);
}
</SCRIPT> 



