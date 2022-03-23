$(document).ready(function(){
    var DOMAIN = "http://localhost/Controle-de-estoque-PHP/";

   $("#register_form").on("submit", function(){
       var status = false;
       var name = $("#username");
       var email = $("#email");
       var pass1 = $("#password1");
       var pass2 = $("#password2");
       var type = $("#usertype");
       
       //marlon.pauloo@gmail.com
       var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
        if(name.val() == "" || name.val().length < 6){
            name.addClass("border-danger");
            $("#u_error").html("<span class='text-danger'>Por favor, insira seu nome e precisa ser maior que 6 caracteres</span>");
            status = false;
        } else {
            name.removeClass("border-danger");
            $("#u_error").html("");
            status = true;
        }

        if(!e_patt.test(email.val())){
            email.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'>Por favor, insira um e-mail válido</span>");
            status = false;
        } else {
            email.removeClass("border-danger");
            $("#e_error").html("");
            status = true;
        }

        if(pass1.val() == "" || pass1.val().length < 9){
            pass1.addClass("border-danger");
            $("#p1_error").html("<span class='text-danger'>Por favor, digite uma senha válida maior que 9 caracteres</span>");
            status = false;
        } else {
            pass1.removeClass("border-danger");
            $("#p1_error").html("");
            status = true;
        }

        if(pass2.val() == "" || pass2.val().length < 9){
            pass2.addClass("border-danger");
            $("#p2_error").html("<span class='text-danger'>Por favor, digite uma senha válida maior que 9 caracteres</span>");
            status = false;
        } else {
            pass2.removeClass("border-danger");
            $("#p2_error").html("");
            status = true;
        }

        if(type.val() == ""){
            type.addClass("border-danger");
            $("#t_error").html("<span class='text-danger'>Por favor, escolha o tipo de cadastro</span>");
            status = false;
        } else {
            type.removeClass("border-danger");
            $("#t_error").html("");
            status = true;
        }
        if(pass1.val() == pass2.val()){
            $.ajax({
                url: DOMAIN+"/includes/process.php",
            })
        } else {
            pass2.addClass("border-danger");
            $("#p2_error").html("<span class='text-danger'>A senha não confere</span>");
            status = true;
        }

       
   })
});