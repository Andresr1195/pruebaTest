
getInfoBtc(1)
setInterval(getInfoBtc, 10000)

var amountLast=new Array()

function getInfoBtc(flag){
    $.get(`https://api.coindesk.com/v1/bpi/currentprice.json`, function (data) {

        $('.showAmount').html(``)
        var info=JSON.parse(data)
        var currency=info.bpi.USD.code
        var amount=info.bpi.USD.rate_float
        
        amountLast.push(amount)

        if(amount > amountLast[0]){
            $('.tarjetas').css("background-color", "green")
        }else if(amount < amountLast[0]){
            $('.tarjetas').css("background-color", "rgb(226, 65, 65)")
        }else{
            $('.tarjetas').css("background-color", "gray")
        }


        $('.showAmount').html(`${currency} ${amount}`)

        if(flag!=1){
            amountLast.shift()

            $.ajax({
                type: "POST",
                url: "api/updatePrice",
                data: {amount:amount},
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
        
    })
}