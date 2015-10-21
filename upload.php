<?php

// restrict to specific file type
// restrict to file size


if(move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/'.$_FILES['photo']['name'])) {
	echo 1;
} else {
	echo 0;
}