<?php
define("UPLOAD_PATH", "./upload");
if (!file_exists(UPLOAD_PATH)) {
    mkdir(UPLOAD_PATH, 0777, true);
}

$is_upload = false;
$msg = null;
if (isset($_POST['submit'])) {
    if (file_exists(UPLOAD_PATH)) {
        $temp_file = $_FILES['upload_file']['tmp_name'];
        $img_path = UPLOAD_PATH . '/upload' . $_FILES['upload_file']['name'];
        $content=base64_decode(file_get_contents($temp_file));//!!!!!
        file_put_contents($temp_file,$content);
        if (move_uploaded_file($temp_file, $img_path)){
            $is_upload = true;
        } else {
            $msg = '上传出错！';
        }
    } else {
        $msg = UPLOAD_PATH . '文件夹不存在,请手工创建！';
    }
}
?>

<div id="upload_panel">
    <ol>
        <li>
            <h3>你能getshell吗？</h3>
            <p></p>
        </li>
        <li>
            <h3>上传区</h3>
            <form enctype="multipart/form-data" method="post" onsubmit="return checkFile()">
                <p>请选择要上传的图片：<p>
                <input class="input_file" type="file" name="upload_file"/>
                <input class="button" type="submit" name="submit" value="上传"/>
				<img src="1.png"alt="这里原本是个蜡笔小新哦~">
            </form>
            <div id="msg">
                 <?php 
                    if($msg != null){
                        echo "哦？".$msg;
                    }
                ?>
            </div>
<!--你想要hint吗可以看看h1nT.php哦-->
            <div id="img">
                <?php
                    if($is_upload){
                        echo '<img src="'.$img_path.'" width="250px" />';
						echo $img_path;
                    }
                ?>
            </div>
        </li>
	</ol>
</div>