<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8" /> 
        <title>
            <?php
            $this->lang->load('ar', 'arabic');
            echo lang('title');
            ?>
        </title>
        <style>

            body {
                font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
                color:white;
                font-size:12px;
                background:#36474f ;
                font-weight: bold;
            }

            form {
                background:#273238 ;
                width:300px;
                margin:30px auto;
                border-radius:0.4em;
                border:1px solid #191919;
                overflow:hidden;
                position:relative;
                box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
                top: 30px;
            }


            form:before {
                content:"";
                display:block;
                position:absolute;
                width:8px;
                height:5px;
                border-radius:50%;
                left:34%;
                top:-7px;
                box-shadow: 0 0 6px 4px #fff;
            }

            .inset {
                padding:20px; 
                border-top:1px solid #19191a;
            }

            form h1 {
                font-size:18px;
                text-shadow:0 1px 0 black;
                text-align:center;
                padding:15px 0;
                border-bottom:1px solid rgba(0,0,0,1);
                position:relative;
            }

     

            label {
                color:#fff;
                display:block;
                padding-bottom:9px;
            }

            input[type=email],
            input[type=password] {
                width:100%;
                padding:8px 5px;
                background-color: #36474f;
                border:1px solid #36474f;
                box-shadow: 0 1px 0 rgba(255,255,255,0.1);
                margin-bottom:20px;
                color: #fff;
            }
          


            .p-container {
                padding:0 20px 20px 20px; 
            }

            .p-container:after {
                clear:both;
                display:table;
                content:"";
            }


            input[type=submit] {
                padding:5px 20px;
                border:1px solid rgba(0,0,0,0.4);                
                background:#36474f ;
                color:white;
                float:right;
                font-weight:bold;
                cursor:pointer;
            }

            input[type=submit]:hover {
                background-color: #273238;
                color: #fff;
            }

            input[type=email]:hover,
            input[type=password]:hover,
            label:hover ~ input[type=text],
            label:hover ~ input[type=password] {
                background:#fff;
                border-color: #ffcc00;
                font-weight: bold;
                color: #36474f;
            }

        </style>

    </head>
    <body>

        <form method="post" action="tryLogin" >
            <h1><?php echo lang('title'); ?></h1>
            <div class="inset">
                <p>
                    <label for="email"><?php echo lang('email'); ?></label>
                    <input type="email" name="email" id="email" required="">
                </p>
                <p>
                    <label for="password"><?php echo lang('password'); ?></label>
                    <input type="password" name="password" id="password" required="">
                </p>

            </div>
            <p class="p-container">
                <input type="submit" name="go" id="go" value="<?php echo lang('Login'); ?>">
            </p>
        </form>

    </body>
</html>
