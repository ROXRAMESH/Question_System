function customerTab(x) {
    var f = new FormData();
    f.append("page", x);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            document.getElementById("customer_table").innerHTML = text;
        }
    }
    r.open("POST", "showCustomer.php", true);
    r.send(f);
}

function employeeTab(x) {
    var f = new FormData();
    f.append("page", x);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            document.getElementById("employee_table").innerHTML = text;
        }
    }
    r.open("POST", "showEmployees.php", true);
    r.send(f);
}

function clo(x) {
    document.getElementById(x).className = "d-none";
}

function adduser() {
    document.getElementById('pop1').className = "d-none";
}