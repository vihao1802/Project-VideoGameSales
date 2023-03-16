function loadDoc(url, cFunction) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {cFunction(this);}
    xhttp.open("GET", url);
    xhttp.send();
  }

loadDoc("../../model/getCartItems.php", loaded);

function loaded(xhttp){
    document.getElementById("itemsList").innerHTML += xhttp.responseText;
    calmoney();

    
    
}

/* function delete_item(Item_id){
    console.log(Item_id);
} */

function calmoney(){
    if(document.getElementsByClassName("cartpage-empty")!= null){
        const items = document.getElementsByClassName("price");
        let counts = document.getElementsByClassName("count_input");
        var s = 0;
        for(var i=0;i<items.length;i++){
            s += parseInt(items[i].getAttribute('value')) * parseInt(counts[i].value);
        }
        document.getElementById("offcprice").innerText = s.toLocaleString('vn-VN') + " ₫";
        const itemDiscounts = document.getElementsByClassName("discounted");
        var sDiscounted = 0;
        for(var i=0;i<itemDiscounts.length;i++){
            sDiscounted += parseInt(itemDiscounts[i].getAttribute('value')) * parseInt(counts[i].value);
        }
        document.getElementById("discount").innerText = (-(s - sDiscounted)).toLocaleString('vn-VN') + " ₫";
        document.getElementById("subtotal").innerText = sDiscounted.toLocaleString('vn-VN') + " ₫";

    }

}

function changed_quantity(){
    let items = document.getElementsByClassName("count_input");
    var arr = [].slice.call(items);
    if(arr.every(element => element.value != '')){
        calmoney();
    }
    else {
        for(var i=0;i<arr.length;i++){
            if(arr[i].value == ''){
                arr[i].value = 1;
            }
        }
    }
}
