/*
 * 
 */
$(document).ready(function(e){
    // initialization
    $('#btnNext-1').attr("disabled",true);
    $('#btnNext-2').attr("disabled",true);
    $('#btnNext-3').attr("disabled",true);
    
    var fname,lname,username,email = 0;
    // regex
    var firstlastname_gex = /^[A-Za-z]{3,25}$/;
    var username_gex = /^[A-Za-z0-9\-_]{5,10}$/;
    var email_gex = /^[A-Za-z0-9_\-\+\.]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-\.]+$/;
    
    // Mask PIN for only six digits
    $('#txtPIN1').mask('000000');
        
    // Mask Max Spend Field
    $('#txtMaxSpend,#txtMinSpend').mask('000,000,000,000,000.00',{reverse: true});
 
    // button show pin toggle action
    $('#btnShowToggle').on("click",function(e){
        if($(this).attr('data-toggle') == 0){
            $('#txtPIN1').attr("type","text");
            $(this).html("Hide PIN");
            $(this).attr('data-toggle',1);
        }else{
            $('#txtPIN1').attr("type","password");
            $(this).html("Show PIN")
            $(this).attr('data-toggle',0);
        }
    });
    
    /* First Page Validation */
    // firstname
    $('#txtFirstName,#txtLastName,#txtUsername,#txtEmail').on("keyup",function(e){
       if(firstlastname_gex.test($('#txtFirstName').val())) fname = 1; else fname = 0;
       if(firstlastname_gex.test($('#txtLastName').val())) lname = 1; else lname = 0;
       if(username_gex.test($('#txtUsername').val())) username = 1; else username = 0;
       if(email_gex.test($('#txtEmail').val())) email = 1; else email = 0;
       checkValidPage1();
       console.log(fname + "|" + lname + "|" + username + "|" + email);
    });
    
    
    /* Next Button Validation */
    // page 1
    function checkValidPage1(){
        if(fname && lname && username && email){
            $('#btnNext-1').removeAttr("disabled");
        }else{
            $('#btnNext-1').attr("disabled",true);
        }
    }
});