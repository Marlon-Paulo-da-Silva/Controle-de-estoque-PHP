$(document).ready(function(){
    alert("testando");
   $("#register_form").on("submit", function(){
       var status = false;
       var name = $("#username");
       var email = $("#email");
       var pass1 = $("#password1");
       var pass2 = $("#password2");
       var type = $("#usertype");
       //marlon.pauloo@gmail.com
       var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-])*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{0.4})$/);
        if(name.val() == "" || name.val().lenght < 6){
            name.addClass("border-ranger");
            $("#u_error").html("<span class='text-danger'>Por favor, insira seu nome e precisa ser maior que 6 caracteres</span>");
            status = false;
        } else {
            name.removeClass("border-ranger");
            $("#u_error").html("");
            status = true;
        }
       
   })
})