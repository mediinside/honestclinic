<?php
include_once("../../../_init.php");
include_once($GP -> CLS."/class.hastag.php");	
$C_hastag 	= new hastag;
error_reporting(E_ALL);
ini_set("display_errors", 1);

switch($_POST['mode']){

	case 'TC_AUTO_CH':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		$args = "";		
		$args['tmp_id'] = $tmp_id;
		$args['max_desc'] = $max_desc;
		$rst = $C_Content->TC_AUTO_CHAGE($args);
		
		echo "true";
		exit();
	break;
	
	/*
	case 'TC_AUTO_CH':
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
			
			$args = "";		
			$args['cl_id'] = $cl_id;
			$args['ch_id'] = $ch_id;
			$rst = $C_Content->TC_AUTO_CHAGE($args);
			
			echo "true";
			exit();
		break;
	*/

	case 'HAS_DESC':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		$args = "";		
		$args['type'] = $type;
		$args['tc_idx'] = $tc_idx;
		$args['tc_desc'] = $desc;
		$rst = $C_Content->TC_DESC_CHAGE($args);
		
		echo "true";
		exit();
	break;
	
	case 'HAS_MODI':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		include_once($GP->CLS."class.fileup.php");
		
		
		//메인페이지 이미지 업로드
		$file_orName			= "tc_file_code";
		$is_fileName			= $_FILES[$file_orName]['name'];
		$insertFileCheck	= false;
		if ($is_fileName) {
			$args_f = "";
			$args_f['forder'] 					= $GP -> UP_CONTENT;
			$args_f['files'] 						= $_FILES[$file_orName];
			$args_f['max_file_size'] 		= 1024 * 8000;// 500kb 이하
			$args_f['able_file'] 				= array();

			$C_Fileup = new Fileup($args_f);
			$updata		= $C_Fileup -> fileUpload();

			if ($updata['error']) 
				$insertFileCheck = true;
			$image_main = $updata['new_file_name'];	//변경된 파일명
		}else{
			$image_main = $before_image_main;
		}
		
		if($insertFileCheck) {
			$C_Func->put_msg_and_modalclose($updata['error']);
		}

		//썸네일페이지 이미지 업로드
		$file_orName			= "tc_file_code2";
		$is_fileName			= $_FILES[$file_orName]['name'];
		$insertFileCheck	= false;
		if ($is_fileName) {
			$args_f = "";
			$args_f['forder'] 					= $GP -> UP_CONTENT;
			$args_f['files'] 						= $_FILES[$file_orName];
			$args_f['max_file_size'] 		= 1024 * 8000;// 500kb 이하
			$args_f['able_file'] 				= array();

			$C_Fileup = new Fileup($args_f);
			$updata		= $C_Fileup -> fileUpload();

			if ($updata['error']) 
				$insertFileCheck = true;
			$image_main2 = $updata['new_file_name'];	//변경된 파일명
		}else{
			$image_main2 = $before_image_main;
		}
		
		if($insertFileCheck) {
			$C_Func->put_msg_and_modalclose($updata['error']);
		}

		$args = "";
		$args['tc_idx'] 						= $tc_idx;
		$args['tc_user'] 						= $tc_user;
		$args['tc_cate'] 						= $tc_cate;
		$args['tc_cate_sub'] 						= $tc_cate_sub;
		$args['tc_size'] 						= $tc_size;
		$args['tc_s_size'] 						= $tc_s_size;
		$args['tc_noti'] 						= $tc_noti;
		$args['tc_file_code'] 					= $image_main;		
		$args['tc_file_code2'] 					= $image_main2;		
		$args['tc_main_view'] 					= $tc_main_view;
		$args['tc_view'] 						= $tc_view;
		$args['tc_login'] 						= $tc_login;
		$args['tc_vd_view'] 					= $tc_vd_view;
		$args['tc_hashtag'] 					= $tc_hashtag;
		$args['tc_title'] 					= addslashes($tc_title);
		$args['tc_summary'] 					= addslashes($tc_summary);
		$args['tc_content'] 			= $C_Func->enc_contents($tc_content);

		$rst = $C_hastag -> HAS_Info_Modify($args);

		$C_Func->put_msg_and_modalclose("수정 되었습니다");		
		exit();
	break;
	
	case "HAS_IMGDEL" :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		$args = "";
		$args['tc_idx'] = $tc_idx;
		$rst = $C_Content -> HAS_ImgUpdate($args);

		@unlink($GP -> UP_CONTENT . $tc_file_code);

		echo "true";
		exit();
	break;

	case "HAS_IMGDEL2" :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		$args = "";
		$args['tc_idx'] = $tc_idx;
		$rst = $C_Content -> HAS_ImgUpdate2($args);

		@unlink($GP -> UP_CONTENT . $tc_file_code);

		echo "true";
		exit();
	break;
	
	case 'HAS_DEL' :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		$args = "";
		$args['tc_idx'] 	= $tc_idx;
		$result = $C_Content ->HAS_Info($args);
		
		if($result) {			
			$tc_file_code = $result['tc_file_code'];
			$tc_editor_img = $result['tc_editor_img'];
			
			if($tc_file_code != '') {			
				@unlink($GP -> UP_CONTENT.$tc_file_code);
			}
			
			if($tc_editor_img != '') {
				$tmp_arr = explode(',', $tc_editor_img);				
				for($i=0; $i<count($tmp_arr); $i++) {
					@unlink($GP -> UP_CONTENT.$tmp_arr[$i]);
				}
			}			
			$rst = $C_Content -> HAS_Info_Del($args);
		}
		
		echo "true";
		exit();
	
	break;
	
	
	case 'HAS_REG':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		include_once($GP->CLS."class.fileup.php");

		
		
		//메인페이지 이미지 업로드
		$file_orName			= "tc_file_code";
		$is_fileName			= $_FILES[$file_orName]['name'];
		$insertFileCheck	= false;
		if ($is_fileName) {
			$args_f = "";
			$args_f['forder'] 					= $GP -> UP_CONTENT;
			$args_f['files'] 						= $_FILES[$file_orName];
			$args_f['max_file_size'] 		= 1024 * 5000;// 500kb 이하
			$args_f['able_file'] 				= array("jpg","gif","png","bmp");

			$C_Fileup = new Fileup($args_f);
			$updata		= $C_Fileup -> fileUpload();

			if ($updata['error']) $insertFileCheck = true;
			$image_main = $updata['new_file_name'];	//변경된 파일명
		}
		
		
		$file_save_path = $GP -> UP_CONTENT;
		//에디터
		if($img_full_name != "") {
			$Arr_img = explode(',', $img_full_name);	
			$img_name = "";
			for	($i=0; $i<count($Arr_img); $i++) {		
				if(ereg($C_Func->escape_ereg($Arr_img[$i]), $C_Func->escape_ereg($tc_content))) {		
					$img_name .= trim($Arr_img[$i]) . ",";		
				}else{
					@unlink($file_save_path . $Arr_img[$i]);
				}
			}
			$img_name = rtrim($img_name , ",");
			
			$args['tc_editor_img'] = $img_name;
		}

		

		//썸네일 이미지 업로드
		$file_orName			= "tc_file_code2";
		$is_fileName			= $_FILES[$file_orName]['name'];
		$insertFileCheck	= false;
		if ($is_fileName) {
			$args_f = "";
			$args_f['forder'] 					= $GP -> UP_CONTENT;
			$args_f['files'] 						= $_FILES[$file_orName];
			$args_f['max_file_size'] 		= 1024 * 5000;// 500kb 이하
			$args_f['able_file'] 				= array("jpg","gif","png","bmp");

			$C_Fileup = new Fileup($args_f);
			$updata		= $C_Fileup -> fileUpload();

			if ($updata['error']) $insertFileCheck = true;
			$image_main2 = $updata['new_file_name'];	//변경된 파일명
		}
		
		
		$file_save_path = $GP -> UP_CONTENT;
		//에디터
		if($img_full_name != "") {
			$Arr_img = explode(',', $img_full_name);	
			$img_name = "";
			for	($i=0; $i<count($Arr_img); $i++) {		
				if(ereg($C_Func->escape_ereg($Arr_img[$i]), $C_Func->escape_ereg($tc_content))) {		
					$img_name .= trim($Arr_img[$i]) . ",";		
				}else{
					@unlink($file_save_path . $Arr_img[$i]);
				}
			}
			$img_name = rtrim($img_name , ",");
			
			$args['tc_editor_img'] = $img_name;
		}

		
		$args = "";
		$args['tc_cate'] 						= $tc_cate;
		$args['tc_cate_sub'] 					= $tc_cate_sub;
		$args['tc_user'] 						= $tc_user;
		$args['tc_size'] 						= $tc_size;
		$args['tc_s_size'] 						= $tc_s_size;
		$args['tc_noti'] 						= $tc_noti;
		$args['tc_login'] 						= $tc_login;
		$args['tc_file_code'] 					= $image_main;		
		$args['tc_file_code2'] 					= $image_main2;		
		$args['tc_main_view'] 					= $tc_main_view;
		$args['tc_view'] 						= $tc_view;
		$args['tc_vd_view'] 					= $tc_vd_view;
		$args['tc_hashtag'] 					= $tc_hashtag;
		$args['tc_title'] 						= addslashes($tc_title);
		$args['tc_summary'] 					= addslashes($tc_summary);
		$args['tc_content'] 					= $C_Func->enc_contents($tc_content);

		$rst = $C_Content -> HAS_Reg($args);

		if($rst) {
			$C_Func->put_msg_and_modalclose("등록 되었습니다");
		}else{
			$C_Func->put_msg_and_modalclose("등록에 실패하였습니다");
		}
		exit();
	break;

	case 'HAS_MODI':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		include_once($GP->CLS."class.fileup.php");
		
		
		//메인페이지 이미지 업로드
		$file_orName			= "tc_file_code";
		$is_fileName			= $_FILES[$file_orName]['name'];
		$insertFileCheck	= false;
		if ($is_fileName) {
			$args_f = "";
			$args_f['forder'] 					= $GP -> UP_CONTENT;
			$args_f['files'] 						= $_FILES[$file_orName];
			$args_f['max_file_size'] 		= 1024 * 8000;// 500kb 이하
			$args_f['able_file'] 				= array();

			$C_Fileup = new Fileup($args_f);
			$updata		= $C_Fileup -> fileUpload();

			if ($updata['error']) 
				$insertFileCheck = true;
			$image_main = $updata['new_file_name'];	//변경된 파일명
		}else{
			$image_main = $before_image_main;
		}
		
		if($insertFileCheck) {
			$C_Func->put_msg_and_modalclose($updata['error']);
		}

		//썸네일페이지 이미지 업로드
		$file_orName			= "tc_file_code2";
		$is_fileName			= $_FILES[$file_orName]['name'];
		$insertFileCheck	= false;
		if ($is_fileName) {
			$args_f = "";
			$args_f['forder'] 					= $GP -> UP_CONTENT;
			$args_f['files'] 						= $_FILES[$file_orName];
			$args_f['max_file_size'] 		= 1024 * 8000;// 500kb 이하
			$args_f['able_file'] 				= array();

			$C_Fileup = new Fileup($args_f);
			$updata		= $C_Fileup -> fileUpload();

			if ($updata['error']) 
				$insertFileCheck = true;
			$image_main2 = $updata['new_file_name'];	//변경된 파일명
		}else{
			$image_main2 = $before_image_main;
		}
		
		if($insertFileCheck) {
			$C_Func->put_msg_and_modalclose($updata['error']);
		}

		$args = "";
		$args['tc_idx'] 						= $tc_idx;
		$args['tc_hashtag'] 					= $tc_hashtag;	

		$rst = $C_hastag -> Has_Info_Modify($args);

		$C_Func->put_msg_and_modalclose("수정 되었습니다");		
		exit();
	break;
	
	
}
?>