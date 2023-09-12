import './bootstrap';
import 'bootstrap3'

$('.delete').click(function (e) {
    e.preventDefault()
    if (confirm('Are you sure?')) {
        $(e.target).closest('form').submit()
    }
});
$(document).ready(function () {
    $(document).on("click", "#addProductButton", function () {
        console.log("Button clicked");
        let selectedOption = $("#productSelect option:selected");
        console.log("Selected option:", selectedOption);
        let productId = selectedOption.val();
        let productName = selectedOption.text();
        let productPrice = selectedOption.data("price");

        if (typeof productPrice !== 'undefined') {
            $("#productTable").removeClass('hidden');
            $("#productTable tbody").append("<input name='product[" + productId + "][product_id]' type='hidden' value='" + productId + "'>");
            $("#productTable tbody").append(
                "<tr>" +
                "<td class='product-name'>" + productName + "</td>" +
                "<td class='price'>" + productPrice + "</td>" +
                "<td><input name='product[" + productId + "][quantity]' type='number' min='1' class='form-control quantity' value='1'></td>" +
                "<td><button type='button' class='btn btn-danger remove-row'>x</button></td>" +
                "</tr>");
            selectedOption.remove();
            calc();
        }
    });

    $("table").on("click", ".remove-row", function () {
        let row = $(this).closest("tr");
        let productName = row.find('.product-name').text();
        let productId = row.prev('input[type="hidden"]').val();
        row.remove();
        $("#productSelect").append(
            $("<option>", {
                value: productId,
                text: productName,
            })
        );
        calc();
    });

    $(document).on("input", ".quantity", function () {
        calc();
    });
    $(document).on("input", "#discount", function () {
        calc();
    });

    function calc() {
        let totalPrice = 0
        let tableRows = $("#productTable tbody tr");
        if (tableRows.length === 0) {
            $("#total").val(0);
        } else {
            tableRows.each(function () {
                let row = $(this);
                let productPrice = parseFloat(row.find(".price").text());
                let quantity = parseFloat(row.find(".quantity").val());
                let rowPrice = productPrice * quantity;
                totalPrice += rowPrice;
                let discount = parseFloat($("#discount").val());
                let discountedTotal = totalPrice - (totalPrice * (discount / 100));
                $("#total").val(discountedTotal.toFixed(2));
            });
        }
    }
});
