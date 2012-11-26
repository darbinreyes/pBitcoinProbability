<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="rbitcoin Home Page" content="rbitcoin Content" />
		<title>rbitcoin</title>
	</head>

	<body>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    	<script src="MtGoxApiHowTo.js"></script>
        <script src="https://socketio.mtgox.com/socket.io/socket.io.js"></script>
        <div>
        <p id="ConnectionStatus"> xxx </p>
        <p id="ConnectionStatus2"> xxx2 </p>
        </div>
        <script>
        $(document).ready(function(){
            //document.write('Hello World!');
              //$("#ConnectionStatus").text("Hello world!");
              var conn = io.connect('https://socketio.mtgox.com/mtgox');
              conn.on('connect',    function(data){
                $("#ConnectionStatus").text("MtGox Socket.io:  Connected");
              });
              //conn.on('disconnect', onDisconnect(data));
              //conn.on('error',      onError(data));
              conn.on('message',    function(data){

            if(data.op =="private" && data.private == "ticker"){
                $("#ConnectionStatus").text("MtGox Socket.io:  On Message, Operation Type , value ->"+"\""+data.ticker.avg.value+"\"");
            }
              });
          });

        </script>

	    <h1> Bitcoin Probability </h1>

		<p> An mathematical investigation of the random phenomena called 'Stock Price' using the Bitcoin as a real-world test market. </p>
	</body>

</html>
