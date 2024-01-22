    function calculateTotal() 
    {
        //Sum of quantity
        var total_qty = 0;
        $(".qty").each(function() {

            if ($(this).val() == '') {
                total_qty += 0;
            } else {
                total_qty += parseFloat($(this).val());
            }
        });
        $("#total-qty").text(total_qty);
        $('input[name="total_qty"]').val(total_qty);

        //Sum of discount
        var total_discount = 0;
        $(".discount").each(function() {
            total_discount += parseFloat($(this).text());
        });
        $("#total-discount").text(total_discount.toFixed({{$general_setting->decimal}}));
        $('input[name="total_discount"]').val(total_discount.toFixed({{$general_setting->decimal}}));

        //Sum of tax
        var total_tax = 0;
        $(".tax").each(function() {
            total_tax += parseFloat($(this).text());
        });
        $("#total-tax").text(total_tax.toFixed({{$general_setting->decimal}}));
        $('input[name="total_tax"]').val(total_tax.toFixed({{$general_setting->decimal}}));

        //Sum of subtotal
        var total = 0;
        $(".sub-total").each(function() {
            total += parseFloat($(this).text());
        });
        $("#total").text(total.toFixed({{$general_setting->decimal}}));
        $('input[name="total_price"]').val(total.toFixed({{$general_setting->decimal}}));

        calculateGrandTotal();
    }
