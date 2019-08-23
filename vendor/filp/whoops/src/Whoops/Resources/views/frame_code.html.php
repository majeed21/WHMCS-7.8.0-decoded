<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/* Display a code block for all frames in the stack.
 * @todo: This should PROBABLY be done on-demand, lest
 * we get 200 frames to process. */
?>
<div class="frame-code-container <?php 
echo !$has_frames ? 'empty' : '';
?>">
  <?php 
foreach ($frames as $i => $frame) {
    ?>
    <?php 
    $line = $frame->getLine();
    ?>
      <div class="frame-code <?php 
    echo $i == 0 ? 'active' : '';
    ?>" id="frame-code-<?php 
    echo $i;
    ?>">
        <div class="frame-file">
          <?php 
    $filePath = $frame->getFile();
    ?>
          <?php 
    if ($filePath && ($editorHref = $handler->getEditorHref($filePath, (int) $line))) {
        ?>
            Open:
            <a href="<?php 
        echo $editorHref;
        ?>" class="editor-link"<?php 
        echo $handler->getEditorAjax($filePath, (int) $line) ? ' data-ajax' : '';
        ?>>
              <strong><?php 
        echo $tpl->breakOnDelimiter('/', $tpl->escape($filePath ?: '<#unknown>'));
        ?></strong>
            </a>
          <?php 
    } else {
        ?>
            <strong><?php 
        echo $tpl->breakOnDelimiter('/', $tpl->escape($filePath ?: '<#unknown>'));
        ?></strong>
          <?php 
    }
    ?>
        </div>
        <?php 
    // Do nothing if there's no line to work off
    if ($line !== null) {
        // the $line is 1-indexed, we nab -1 where needed to account for this
        $range = $frame->getFileLines($line - 20, 40);
        // getFileLines can return null if there is no source code
        if ($range) {
            $range = array_map(function ($line) {
                return empty($line) ? ' ' : $line;
            }, $range);
            $start = key($range) + 1;
            $code = join("\n", $range);
            ?>
            <pre id="frame-code-linenums-<?php 
            echo $i;
            ?>" class="code-block linenums:<?php 
            echo $start;
            ?>"><?php 
            echo $tpl->escape($code);
            ?></pre>

          <?php 
        }
        ?>
        <?php 
    }
    ?>

        <?php 
    $frameArgs = $tpl->dumpArgs($frame);
    ?>
        <?php 
    if ($frameArgs) {
        ?>
          <div class="frame-file">
              Arguments
          </div>
          <div id="frame-code-args-<?php 
        echo $i;
        ?>" class="code-block frame-args">
              <?php 
        echo $frameArgs;
        ?>
          </div>
        <?php 
    }
    ?>

        <?php 
    // Append comments for this frame
    $comments = $frame->getComments();
    ?>
        <div class="frame-comments <?php 
    echo empty($comments) ? 'empty' : '';
    ?>">
          <?php 
    foreach ($comments as $commentNo => $comment) {
        ?>
            <?php 
        extract($comment);
        ?>
            <div class="frame-comment" id="comment-<?php 
        echo $i . '-' . $commentNo;
        ?>">
              <span class="frame-comment-context"><?php 
        echo $tpl->escape($context);
        ?></span>
              <?php 
        echo $tpl->escapeButPreserveUris($comment);
        ?>
            </div>
          <?php 
    }
    ?>
        </div>

      </div>
  <?php 
}
?>
</div>
<?php 

?>