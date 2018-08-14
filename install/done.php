<?php
include "core.php";
head();

$username = $_SESSION['username'];
$password = hash('sha256', $_SESSION['password']);

$config             = include '../config.php';
$config['username'] = $username;
$config['password'] = $password;
file_put_contents('../config.php', '<?php return ' . var_export($config, true) . '; ?>');
?>
<center>
<div class="callout callout-success">
<h5><?php
echo lang_key("success_install");
?></h5>
</div>
    
<div class="callout callout-warning">
<h5><?php
echo lang_key("alert_remove_files");
?></h5>
</div>
    
<a href="../" class="btn-success btn btn-flat"><i class="fa fa-arrow-circle-o-right"></i> <?php
echo lang_key("proceed");
?></a>
</center>
<?php
footer();
?>