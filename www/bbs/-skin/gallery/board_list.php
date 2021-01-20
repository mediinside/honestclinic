<h3 class="total">총 <span>1004</span>건의 게시물이 있습니다.</h3>
    <div class="contItems">
        <ul>
            <?php include $GP -> INC_PATH . "/${skin_dir}/board_list_inc.php";	?>
        </ul>
        <div id="btn-box" class="right">
        <?php
            if($_GET['search_key'] && $_GET['search_keyword']) {
                echo "<a href=\"javascript:;\" class=\"btn0\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}'\" title='목록'><span>목록</span></a>";
            }       
            //쓰기권한
            if($check_level >= $db_config_data['jba_write_level']) {
                echo "<a class='btn bg-green' href=\"#\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}&jb_mode=twrite'\" title='글쓰기'><span>글쓰기</span></a>";
            } else {
            //	echo "<a class='btn btn_middle' id='twrite_btn' title='글쓰기'><strong>글쓰기</strong></a>";
            }
        ?>          
        </div>
        <a href="#none" class="more">더보기</a>
    </div>

    
    <script type="text/javascript">
    $(document).ready(function(){
        $('#search_submit').click(function(){
            $('#search_form').submit();
            return false;
        });

        $('#page_row').change(function(){
            var val = $(this).val();
            location.href="?dep1=<?=$_GET['dep1']?>&dep2=<?=$_GET['dep2']?>&search_key=<?=$_GET['search_key']?>&search_keyword=<?=$_GET['search_keyword']?>&page=<?=$_GET['page']?>&page_row=" + val;
        });
        
        $('#twrite_btn').click(function(){	
            alert("로그인 후 이용가능 합니다.");
            location.href ='/member/login.html?reurl=/community/page03.html';
        });
    });
    </script>