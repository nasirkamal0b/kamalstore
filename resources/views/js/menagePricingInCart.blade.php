<script>
document.addEventListener("DOMContentLoaded", function () {
    function updateCartTotals() {
        let subtotal = 0;
        document.querySelectorAll(".product-subtotal .subtotal-amount").forEach(subtotalElement => {
            subtotal += parseFloat(subtotalElement.textContent.replace("$", "")) || 0;
        });
        let shippingCost = 30.00;
        let total = subtotal + shippingCost;
        document.querySelector(".cart-totals ul li:nth-child(1) span").textContent = `$${subtotal.toFixed(1)}`;
        document.querySelector(".cart-totals ul li:nth-child(3) span").textContent = `$${total.toFixed(1)}`;
    }

    function updateSubtotal(input) {
        let row = input.closest("tr");
        let unitPrice = parseFloat(row.querySelector(".unit-amount").textContent.replace("$", ""));
        let quantity = parseInt(input.value);
        let productId = input.dataset.id;

        if (isNaN(quantity) || quantity < 1) {
            quantity = 1;
            input.value = 1;
        }

        let subtotal = (unitPrice * quantity).toFixed(1);
        row.querySelector(".subtotal-amount").textContent = `$${subtotal}`;
        updateCartTotals();

        fetch("{{ route('cart.update') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ id: productId, quantity: quantity })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("Cart updated successfully!");
            }
        });
    }

    document.querySelectorAll(".product-quantity").forEach(quantityContainer => {
        let input = quantityContainer.querySelector("input");
        let minusBtn = quantityContainer.querySelector(".minus-btn");
        let plusBtn = quantityContainer.querySelector(".plus-btn");

        minusBtn.addEventListener("click", () => {
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
                updateSubtotal(input);
            }
        });

        plusBtn.addEventListener("click", () => {
            input.value = parseInt(input.value) + 1;
            updateSubtotal(input);
        });

        input.addEventListener("input", () => updateSubtotal(input));
        updateSubtotal(input);
    });

    document.querySelectorAll(".remove").forEach(removeBtn => {
        removeBtn.addEventListener("click", function (event) {
            event.preventDefault();
            let row = this.closest("tr");
            let productId = this.dataset.id;
            removeFromCart(productId, row);
        });
    });

    function removeFromCart(id) {
        if (!confirm("Are you sure you want to remove this item?")) return;

        fetch(`/cart/remove/${id}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.querySelector(`.remove[data-id='${id}']`).closest("tr").remove();
                updateCartTotals();
            }
        })
        .catch(error => console.error("Error:", error));
    }

    document.querySelector(".update-cart-btn")?.addEventListener("click", function (event) {
        event.preventDefault();
        document.querySelectorAll(".product-quantity input").forEach(input => updateSubtotal(input));
    });

    updateCartTotals();
});

</script>
