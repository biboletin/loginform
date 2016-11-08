String.prototype.isEmpty = function(){
    if((this === '') ||
        (this === null) ||
        (this === undefined) ||
        (this.length === 0) ||
        (!this.trim())){
        return false;
    }else{
        return true;
    }
};
$(document).ready(function(){
    $('#btn').click(function(){
        var user = $('#user').val();
        var pass = $('#pass').val();

        if(user.trim().isEmpty() && pass.trim().isEmpty()){
            $.ajax({
                method: 'POST',
                url: 'php/login.php',
                data: {
                    username: user,
                    password: pass
                }
            }).fail(function(data){
                $('._results').html('Error: ' + data);
            }).done(function(data){
                window.location.href = 'php/page.php';
            });
        }else{
            console.log('incorrect username or password');
        }
    });
});
