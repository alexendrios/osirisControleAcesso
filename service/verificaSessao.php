<?php
session_start();
If (!isset($_SESSION['login'])) {
    ?>
    <script type="text/javascript">
        window.location = '../index.php';
    </script>
    <?php
}
