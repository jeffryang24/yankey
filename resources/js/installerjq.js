/*
 * 
 */
$(document).ready(function(e){
    // initialization
    $('#btnNext-1').attr("disabled",true);
    $('#btnNext-2').attr("disabled",true);
    $('#btnNext-3').attr("disabled",true);
    $('#btnSubmit').attr("disabled",true);
    
    var fname,lname,username,email = 0;
    var pass1, pass2, pin = 0;
    var dbuser, dbname = 0;
    var dbpass = 1;     // db pass can be blank like mysql
    var minspend, maxspend = 0;
    
    // regex
    var firstlastname_gex = /^[A-Za-z]{3,25}$/;
    var username_gex = /^[A-Za-z0-9\-_]{5,10}$/;
    var dbuser_gex = /^[A-Za-z0-9\-_]{4,10}$/;
    var email_gex = /^[A-Za-z0-9_\-\+\.]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-\.]+$/;
    var pass_gex = /^[A-Za-z0-9_\-\.\!\@\#\$]{6,15}$/;
    
    // Mask PIN for only six digits
    $('#txtPIN').mask('000000');
        
    // Mask Max Spend Field
    $('#txtMaxSpend,#txtMinSpend').mask('000,000,000,000,000.00',{reverse: true});
 
    // button show pin toggle action
    $('#btnShowToggle').on("click",function(e){
        if($(this).attr('data-toggle') == 0){
            $('#txtPIN').attr("type","text");
            $(this).html("Hide PIN");
            $(this).attr('data-toggle',1);
        }else{
            $('#txtPIN').attr("type","password");
            $(this).html("Show PIN")
            $(this).attr('data-toggle',0);
        }
    });
    
    /* First Page Validation */
    $('#txtFirstName,#txtLastName,#txtUsername,#txtEmail').on("keyup",function(e){
       if(firstlastname_gex.test($('#txtFirstName').val())) fname = 1; else fname = 0;
       if(firstlastname_gex.test($('#txtLastName').val())) lname = 1; else lname = 0;
       if(username_gex.test($('#txtUsername').val())) username = 1; else username = 0;
       if(email_gex.test($('#txtEmail').val())) email = 1; else email = 0;
       checkValidPage(1);
       console.log(fname + "|" + lname + "|" + username + "|" + email);
    });
    
    /* Second Page Validation */
    $('#txtPass1,#txtPass2,#txtPIN').on("keyup",function(e){
        var pass_1 = $('#txtPass1').val();
        var pass_2 = $('#txtPass2').val();
        var unique = $('#txtPIN').val();
        
        // Fix password validation bug, April 2, 2015
        if(pass_1.length < 6){
            pass1 = 0;
            if(pass_2.length < 6){
                pass2 = 0;
            }
        }else{
            if(pass_1.length != pass_2.length){
                pass1 = pass2 = 0;
            }else{
                if(pass_gex.test(pass_1)){
                    if(pass_1 != pass_2){
                        pass1 = 0;
                    }else{
                        pass1 = 1;
                    }
                }else{
                    pass1 = 0;
                }
                if(pass_gex.test(pass_2)){
                    if(pass_2 != pass_1){
                        pass2 = 0;
                    }else{
                        pass2 = 1;
                    }
                }else{
                    pass2 = 0;
                }
            }
        }
        
        //PIN Validation
        if(unique.length < 6) pin = 0; else pin = 1;
        checkValidPage(2);
        console.log(pass1 + "\\" + pass2 + "\\" + pin);
    });
    
    /* Third Page Validation */
    $('#txtDbUser,#txtDbPass,#txtDbName').on("keyup",function(e){
        var db_user = $('#txtDbUser').val();
        var db_name = $('#txtDbName').val();
        
        if(dbuser_gex.test(db_user)) dbuser = 1; else dbuser = 0;
        if(db_name.length == 0 || db_name == null) dbname = 0; else dbname = 1;
        checkValidPage(3);
        console.log(dbuser + "-" + dbpass + "-" + dbname);
    });
    
    /* Last Page Validation */
    $('#txtMinSpend,#txtMaxSpend').on("keyup",function(e){
       var min_spend = $('#txtMinSpend').val();
       var max_spend = $('#txtMaxSpend').val();
       
       if(min_spend == null || min_spend.length == 0) minspend = 0; else minspend = 1;
       if(max_spend == null || max_spend.length == 0) maxspend = 0; else maxspend = 1;
       checkValidPage(4);
       console.log(minspend + "{}" + maxspend);
    });
    
    /* Next Button Validation */
    // page 1
    function checkValidPage(page){
        if(page == 1){
            if(fname && lname && username && email){
                $('#btnNext-'+page).removeAttr("disabled");
            }else{
                $('#btnNext-'+page).attr("disabled",true);
            }
        }else if(page == 2){
            if(pass1 && pass2 && pin){
                $('#btnNext-'+page).removeAttr("disabled");
            }else{
                $('#btnNext-'+page).attr("disabled",true);
            }
        }else if(page == 3){
            if(dbuser && dbname && dbpass){
                $('#btnNext-'+page).removeAttr("disabled");
            }else{
                $('#btnNext-'+page).attr("disabled",true);
            }
        }else if(page == 4){
            if(minspend && maxspend){
                $('#btnSubmit').removeAttr("disabled");
            }else{
                $('#btnSubmit').attr("disabled",true);
            }
        }
    }
    
    
    /** Submit Button Action **/
    $('#btnSubmit').on("click",function(e){
       $('#modal').fadeIn(300);
       // do ajax thing here
    });
});