<!DOCTYPE html>
<html>
<head>
    <title>Order Management</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Order Management</h1>
    
   
    <button id="showTotalBilling">Show Total Billing</button>
    <p id="totalBilling"></p>
    
 
    <form id="addToOrderForm">
        <label for="product_id">Product ID:</label>
        <input type="number" id="product_id" name="product_id" required>
        
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Add to Order</button>
    </form>
    
    <div id="orderMessage"></div>
    
    <script>
        $(document).ready(function() {
           
            $('#showTotalBilling').click(function() {
                $.ajax({
                    url: '/api/order/total-billing',
                    method: 'GET',
                    success: function(response) {
                        $('#totalBilling').text('Total Billing: $' + response.total_billing);
                    },
                    error: function() {
                        $('#totalBilling').text('Error fetching total billing.');
                    }
                });
            });

    
            $('#addToOrderForm').submit(function(event) {
                event.preventDefault(); 

                $.ajax({
                    url: '/api/order/add',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#orderMessage').text(response.message + ' Total Billing: $' + response.total_billing);
                    },
                    error: function() {
                        $('#orderMessage').text('Error adding product to order.');
                    }
                });
            });
        });
    </script>
</body>
</html>
