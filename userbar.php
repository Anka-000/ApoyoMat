<?php
session_start();
?>

<?php if(isset($_SESSION['nombre'])): ?>
<div class="user-card">
    <img src="recursos/user.png" class="user-img">
    <span class="user-name">
        <?php echo htmlspecialchars($_SESSION['nombre']); ?>
    </span>
</div>
<?php endif; ?>
