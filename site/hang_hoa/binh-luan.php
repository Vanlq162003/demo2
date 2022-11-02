<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/comments.php';

if (exist_params("noi_dung")) {
  $kh = $_SESSION['user']['id'];
  $content = $_POST['noi_dung'];
  $date_comment = date_format(date_create(), 'Y-m-d');
  binh_luan_insert($content, $id, $kh, $date_comment);
}
// list bình lua

$comment_list1 = binh_luan_select_by_customer($id);




foreach ($comment_list1 as $bl) { extract($bl); ?>
  <ul>
    <li class="">
      <p> <i><b>

            <?=$name_person_comment;
       
            ?>

          </b></i>
      </p>

      <div class="d-flex justify-content-between w-75">
        <p><?= $content ?></p>
        <p><?= $date_comment?></p>
      </div>
    </li>
  </ul>

<?php }
if (!isset($_SESSION['user'])) {
  echo '<h3 class="m-5">Đăng nhập để bình luận về sản phẩm này</h3>';
} else {
?>
  <form class="d-flex w-90" action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
    <input class="form-control" name="noi_dung" /><button class="btn btn-success">Gửi</button>
  </form>
<?php } ?>

