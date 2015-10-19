<?php if (!defined('THINK_PATH')) exit();?>      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo ($data["name"]); ?></h4>
      </div>
      <div class="modal-body">
          <h5><small><?php echo (date("Y-m-d H:m:s",$data["post_time"])); ?>&nbsp;&nbsp;<?php echo ($data["post_man"]); ?></small></h5>
        <p><?php echo (htmlspecialchars_decode($data["content"])); ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>