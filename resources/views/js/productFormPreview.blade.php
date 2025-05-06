<script>
    function updatePreview() {
        document.getElementById('previewName').textContent = document.getElementById('productName').value || "Product Name";
        document.getElementById('previewPrice').textContent = "$" + (document.getElementById('productPrice').value || "0.00");
        document.getElementById('previewDescription').textContent = document.getElementById('productDescription').value || "Product description will appear here...";
    }

    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    }
</script>
