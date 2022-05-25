
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
<title>Onfiak DEV 1</title>
</head>
<body>
		
        	<div class="divMasterClass">
                <div class="mrgB txalc">
                    <h1>IP X CIDADE</h1>
                </div>
                
            <div class="opns">
                  <div class="txalc">
                      <b> <span id="region" value=""></span> <span class="tx12" id="nameRegion" value=""></span></b><br />
                      <br />
                      <img src="" style="width:30%" id="flag" />
                  </div>
						                 
            </div>
            
            <form class="formSend" id="formComments_1">
                    <div>
                        Consulte a cidade deste IP:
                    </div>
                    <div><label for="ip">IP:</label>	 <input type="text" name="ip" id="ip" class="ip padL" value=""/></div>
                    
                    <div class="txalc">
                        <input type="button" name="consultar" class="consultar" id="consultar" value="Consultar" onclick="searchData()"/>   <!-- this.value -->          
                    </div>            
             </form>
                
        </div>
        	 
                 
       
</body>
</html>
