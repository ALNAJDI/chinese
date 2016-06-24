<!doctype html>
<?php ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>
            
            <?php $this->lang->load('ar', 'arabic');
                         echo lang('title');
            ?>
            
        </title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


        <style>
            html, body {
                font-family: 'Roboto', 'Helvetica', sans-serif;
            }

            .avatar {
                width: 60px;
                height: 60px;
                border-radius: 30px;
            }
            /*pictue and email*/
            .box-info {
                box-sizing: border-box;
                display: -webkit-flex;
                -webkit-flex-direction: column;
                -webkit-justify-content: flex-end;
                padding:16px;
                 height: 151px;
                width: 32vh;
                background-color: #273238;
                color: #ffffff;
                
            }
  
  
            .left-menu {
                box-sizing: border-box;
                display: -webkit-flex;
                -webkit-flex-direction: column;
                -webkit-justify-content: flex-end;
                padding: 16px;
                height: 100vh;
                width: 32vh;
                background-color: #36474f;
                color: #ffffff;
                display: block;
            }

            td,th {
                padding: 0px 70px ;
                text-align: center;
            }
    


        </style>
    </head>
    <body>

        <div class=" contener "  >
            
            <header style=" height: 50px; width: 100%;   background-color: #36474f; position: absolute; padding-left:  32vh ; float: left">
             </header>
            <div >
           <div class="box-info">
            <img src="https://pbs.twimg.com/profile_images/698246709302992897/ur5w9W5_.jpg" class="avatar" alt=""/>
            abo-rbab@hotmail.com
        </div>
        <?php
function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}
$method='';
//$url="http://localhost/Rest/items";
$url="api.openweathermap.org/data/2.5/weather?id=2172797&APIkey=ab48d9540685a75c86beea94eab05041";
$resulte=CallAPI($method, $url);
//echo $resulte;// as json
$data=json_decode( $resulte,true); //as array
?>
               
        <div class="left-menu"></div>
         </div>
 
        </div>
        



</body>
</html>
