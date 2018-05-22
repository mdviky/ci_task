<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>

</head>
<body>

<div id="container">
	

	<div id="body">
        <table id="users" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>                          
                    <th>Name</th>
                    <th>Department</th>
                    <th>Joined data</th>
                    <th>Gender</th>
                    <th>Emp code</th>

                </tr>
            </thead>
            <tbody>
            </tbody>

        </table>
<a href="<?=base_url('welcome/signout')?>">Sign out</a>
	</div>

	
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

<script>

$(document).ready(function() {
    $('#users').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "ajax": {
            "url": "<?php echo site_url('welcome/ajaxdata')?>",
            "type": "POST"
        },
    });

});

</script>


</body>
</html>