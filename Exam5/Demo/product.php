<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript">
      $(document).ready(function(){
            $("#ProdName").blur(function()
            {
                        var errorProdQty = true;
                        function validProdQty(){
                            ProdQty = parseInt($('#ProdQty').val());
                            ProdQtyOld = parseInt($('#ProdQtyOld').val());
                            if (ProdQtyOld >= ProdQty) {
                                errorProdQty = true;
                            } else {
                                errorProdQty = false;
                            }
                        }
                        $("#btn").click(function(){
                            validProdQty();
                            if (errorProdQty) {
                                return true;
                            } else {
                                return false;
                            }
                        })
                        $.ajax({
                            type: "POST",
                            url: "getproductname.php",
                            dataType: "JSON",
                            data: {ProdName:$("#ProdName").val()},
                            success:function(res){
                                if (res) {
                                    $("#errorProductName").html("&#x2611;");
                                    $("#ProdRate").val(res.ProdRate);
                                    $("#ProdQtyOld").val(res.ProdQty);
                                    $("#ProdID").val(res.ProdID);
                                    $("#ProdRate").val(res.ProdRate);
                                    $("#btn").attr("disabled", false);
                                } else {
                                    $("#errorProductName").html("product not aval !");
                                    $("#ProdRate").val("");
                                    $("#ProdQtyOld").val("");
                                    $("#ProdID").val("");
                                    $("#ProdRate").val("");
                                    $("#btn").attr("disabled", true);
                                }
                            }
             })

        })

})
</script>

<form method="get" action="save.php">
    Product Name : <input type="text" name="ProdName" id="ProdName" /> <span id="errorProductName"></span>
    <br />
    Product rate : <input type="text" name="ProdRate" readonly id="ProdRate" />
    <br />
    Product Qty: <input type="text" name="ProdQty" id="ProdQty" />
    <input type="text" style="display: none;" name="ProdQtyOld" id="ProdQtyOld" /> 
    <input type="text" style="display: none;" name="ProdID" id="ProdID" />
    <input type="text" style="display: none;" name="ProdRate" id="ProdRate" />
    <br />
    <input type="submit" value="save" id="btn" disabled />
</form>