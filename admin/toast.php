<!-- Toastify JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<style>
.toastify {
    font-family: 'Inter', sans-serif !important;
    font-size: 14px !important;
    font-weight: 500 !important;
    padding: 12px 20px !important;
    border-radius: 8px !important;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
    backdrop-filter: blur(8px) !important;
    -webkit-backdrop-filter: blur(8px) !important;
}
</style>
<?php if(isset($_SESSION['success_msg'])): ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        Toastify({
            text: "<?php echo addslashes(htmlspecialchars($_SESSION['success_msg'])); ?>",
            duration: 3000,
            close: true,
            gravity: "top", 
            position: "right",
            style: {
                background: "rgba(220, 252, 231, 0.95)",
                color: "#15803d",
                border: "1px solid #bbf7d0"
            }
        }).showToast();
    });
</script>
<?php unset($_SESSION['success_msg']); ?>
<?php endif; ?>

<?php if(isset($_SESSION['error_msg'])): ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        Toastify({
            text: "<?php echo addslashes(htmlspecialchars($_SESSION['error_msg'])); ?>",
            duration: 4000,
            close: true,
            gravity: "top", 
            position: "right",
            style: {
                background: "rgba(254, 226, 226, 0.95)",
                color: "#dc2626",
                border: "1px solid #fecaca"
            }
        }).showToast();
    });
</script>
<?php unset($_SESSION['error_msg']); ?>
<?php endif; ?>
