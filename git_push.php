<?php

$mag_arr = array('one', 'two', 'three', 'four', 'five', 'six');
foreach ($mag_arr as $mag) {
	copy('./generated/' . $mag . '/_' . $mag . '2variables.scss', 'C:/projects/' . $mag . '2/scss/_' . $mag . '2variables.scss');
}
system("cmd /c C:\Users\Jim\Desktop\batch\subthemes-git-push.bat");
?>