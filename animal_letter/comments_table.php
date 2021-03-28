<?php
    require_once '..\Dao.php';
    $dao = new Dao();
    $comments = $dao->getComments($_SESSION['comment_table']);
    ?>
    <div id="comments">
        <table id="comments_table">
        <thead id="comments_header">
            <tr>
            <th>Comments</th>
            <?php
                $dao = new Dao();
                $email = isset($_SESSION['email']) ? $_SESSION['email'] : "nouser";
                if ($dao->isAdmin($email)){
                    echo "<th> Delete </th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($comments as $comment) {
                echo
                "<td><strong>" . htmlspecialchars($comment['comment']) . " </strong><br> <i> posted by " . htmlspecialchars($comment['email']) . " on " . "{$comment['date_entered']} " . "</i></td>";  
                $dao = new Dao();
                $email = isset($_SESSION['email']) ? $_SESSION['email'] : "nouser";
                if ($dao->isAdmin($email)){
                    echo  "<td><a href='..\delete_comment.php?id={$comment['comment_id']}'>X</a></td></tr>";
                } else {
                    echo "</tr>";
                } 
            }
        ?>
        </tbody>
        </table>
        
        
        <form method="post" action="..\comment_handler.php" enctype="multipart/form-data">
            <div class="input_box">
                <label for="comment">Comment:</label>
                <input value="<?php echo isset($_SESSION['form_data']['comment']) ? $_SESSION['form_data']['comment'] : ''; ?>" type="text" id="comment" name="comment">
                
            <input type="submit" value="Submit">
            </div>
        </form>
        </table>