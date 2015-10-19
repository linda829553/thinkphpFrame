<?php
/**
 * Note:for octet-stream upload
 * 这个是流式上传PHP文件
 * Please be amended accordingly based on the actual situation
 */
$post_input = 'php://input';
$save_path = dirname( __FILE__ );
$postdata = file_get_contents( $post_input );

if ( isset( $postdata ) && strlen( $postdata ) > 0 ) {
	$filename = uniqid() . '.jpg';
	$file_path = $save_path . '/' . $filename;
	$handle = fopen( $file_path, 'w+' );
	fwrite( $handle, $postdata );
	fclose( $handle );
	if ( is_file( $file_path ) ) {
		$save_db_path = "xiuxiu/" . $filename;
		echo addslashes($save_db_path);
		// echo $filename;
		exit ();
	}else {
		die ( 'Image upload error!' );
	}
}else {
	die ( 'Image data not detected!' );
}

?>