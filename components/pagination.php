  <ul class="pagination">
    <li class="previous">
        <?php if ($page > 1) : ?>
            <a href="?page=<?php echo ($page - 1); ?>" rel="prev"></a>
        <?php else :?>
            <span rel="prev" class="off">&nbsp;</span>
        <?php endif; ?>
    </li>


      <?php for ($i=1; $i <= $total_page ; $i++) : ?>
          <li>

              <?php if (isset($_GET['page'])) : ?>
              <a <?php if($i == $_GET['page']){echo "class='now_page'";} ?> href="?page=<?php echo $i ?>"><?php echo $i; ?></a>

              <?php elseif (!isset($_GET['page']))  :?>
              <a <?php if($i == 1){echo "class='now_page'";} ?> href="?page=<?php echo $i ?>"><?php echo $i; ?></a>

              <?php endif; ?>

          </li>
      <?php endfor; ?>


      <li class="next">
          <?php if ($page < $total_page) : ?>
              <a href="?page=<?php echo ($page + 1); ?>" rel="next"></a>
          <?php else : ?>
              <span rel="next" class="off">&nbsp;</span>
          <?php endif; ?>
      </li>
  </ul>






