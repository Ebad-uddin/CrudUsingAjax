$(document).ready(function(){

let name = $('#name');
let email = $('#email');
let pass = $('#pass');
let btn = $('#btn');
let tab = $('#tab');
let id = $('#id');
let form = $('#form');
// console.log(name, email, pass, btn);

// insert data into database

btn.on('click', function(e){
    e.preventDefault();
    $.ajax({
        url : 'insert.php',
        method : 'POST',
        data : {
            id : id.val(),
            name : name.val(),
            email : email.val(),
            pass : pass.val()
        },
        success : function(data){
            alert(data);
            getdata()
            form.trigger("reset");
            // console.log(data);
        }
    })
})

// data retrieval from database

function getdata(){
    $.ajax({
        url : 'fetch.php',
        method : 'POST',
        success : function(data){
            // console.log(data);
            tab.html(data);
        }
    })
}
getdata()

// Data update

$('tbody').on('click', '.upd', function(){
    let userid = $(this).attr('data-id');
    // console.log(userid)
    $.ajax({
        url : 'update.php',
        method : 'POST',
        data : {
            userid : userid
        },
        success :function(data){
            let record = JSON.parse(data)
            // console.log(record.id);
            id.val(record.id);
            name.val(record.name);
            email.val(record.email);
            pass.val(record.pass);
        }
    })
})


// ajax for deleting the record from DB
$('tbody').on('click', '.del', function(){
    let userid = $(this).attr('data-id');
    // console.log(userid)
    $.ajax({
        url : 'delete.php',
        method : 'POST',
        data : {
            userid : userid
        },
        success : function(data){
            alert(data);
            getdata();
        }
        
    })
})



})