<html class="bg-black">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title><?php echo $this->config->item('site_name');?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- bootstrap 3.0.2 -->
<link href="<?php echo base_url();?>assets/login/bootstrap.min.css" rel="stylesheet" type="text/css">
<!-- font Awesome -->
<link href="<?php echo base_url();?>assets/login/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- Theme style -->
<link href="<?php echo base_url();?>assets/login/AdminLTE.css" rel="stylesheet" type="text/css">

</head>

<body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>

			<?php 
			$attributes = array('id' => 'formEntry');
			echo form_open('authentication/process_login', $attributes);
			?>
            <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" id="txtusername" name="txtusername" class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <input type="password" id="txtpassword" name="txtpassword" class="form-control" placeholder="Password">
                    </div>          
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                 </div>
            </form>

        </div>


        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url();?>assets/login/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>assets/login/bootstrap.min.js" type="text/javascript"></script>        

    
</body></html>